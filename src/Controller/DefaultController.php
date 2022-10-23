<?php

namespace App\Controller;

use App\Entity\Branch;
use App\Entity\Client;
use App\Entity\User;
use App\Form\ChangePasswordType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        if ($this->getUser()) {
            $entityManager = $this->doctrine->getManager();
            $repository = $entityManager->getRepository(User::class);
            $user = $repository->find($this->getUser()->getId());

            $roles = $user->getRoles();
            $lastCo = $user->getLastConnection();

            if ($lastCo === null) {
                return $this->redirectToRoute('app_change_password');
            }

            $date = new \DateTime();
            $user->setLastConnection($date);
            $entityManager->persist($user);
            $entityManager->flush();

            if (in_array('ROLE_ADMIN', $roles)) {
                return $this->redirectToRoute('app_client_list');

            } elseif (in_array('ROLE_CLIENT', $roles)) {
                $entityManager = $this->doctrine->getManager();
                $repository = $entityManager->getRepository(Client::class);
                $client = $repository->findBy(array('user' => $this->getUser()->getId()));

                return $this->redirectToRoute('app_client', ['id' => $client[0]->getId()]);
            } else {
                $entityManager = $this->doctrine->getManager();
                $repository = $entityManager->getRepository(Branch::class);
                $branch = $repository->findBy(array('user' => $this->getUser()->getId()));

                return $this->redirectToRoute('app_client', ['id' => $branch[0]->getClient()->getId()]);
            }
        }

        return $this->redirectToRoute('app_login');
    }

    #[Route('/branch/modif-mot-de-passe', name: 'app_change_password')]
    function changePassword(Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(User::class);
        $user = $repository->find($this->getUser()->getId());
        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('plainPassword')->getData() !== null && $form->get('confirmPlainPassword')->getData() !==
                null) {
                if ($form->get('plainPassword')->getData() === $form->get('confirmPlainPassword')->getData()) {
                    $user->setPassword($userPasswordHasher->hashPassword( $user, $form->get('plainPassword')->getData()));
                } else {
                    $this->addFlash('alert', 'Le nouveau mot de passe et sa confirmation doivent être identiques !');
                    return $this->redirectToRoute('app_change_password');
                }
            }

            $date = new \DateTime();
            $user->setLastConnection($date);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Modifications effectuées !');
            return $this->redirectToRoute('app_default');
        }

        return $this->render('default/change-password.html.twig', [ 'form' => $form->createView()]);
    }

    #[Route('/admin/client-list-json')]
    public function clientListJson(): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $clients = $repository->findAll();

        $encoder = new JsonEncoder();
        $defaultContext = [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object, $format, $context) {
                return $object->getId();
            },
        ];
        $normalizer = new ObjectNormalizer(null, null, null, null, null, null, $defaultContext);

        $serializer = new Serializer([$normalizer], [$encoder]);
        $json = $serializer->serialize($clients, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['user',
            'installPerms', 'clientGrants', 'branches', 'dpo', 'technicalContact', 'commercialContact',
            'fullDescription']]);

        return $this->render('client/client-list-json.html.twig', [ 'json' => $json ]);
    }

    #[Route('/admin/branch-list-json/{id}')]
    public function branchListJson(string $id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Branch::class);
        $branches = $repository->findBy(array('client' => $id));

        $encoder = new JsonEncoder();
        $defaultContext = [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object, $format, $context) {
                return $object->getId();
            },
        ];
        $normalizer = new ObjectNormalizer(null, null, null, null, null, null, $defaultContext);

        $serializer = new Serializer([$normalizer], [$encoder]);
        $json = $serializer->serialize($branches, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['user']]);

        return $this->render('branch/branch-list-json.html.twig', [ 'json' => $json ]);
    }
}
