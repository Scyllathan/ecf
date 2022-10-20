<?php

namespace App\Controller;

use App\Entity\Branch;
use App\Entity\Client;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class DefaultController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        if ($this->getUser()) {
            $roles = $this->getUser()->getRoles();

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
}
