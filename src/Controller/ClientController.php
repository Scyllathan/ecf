<?php

namespace App\Controller;

use App\Entity\Branch;
use App\Entity\Client;
use App\Entity\ClientGrants;
use App\Entity\InstallPerm;
use App\Form\ClientGrantsType;
use App\Form\ClientType;
use App\Form\InstallPermType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/admin/liste-client', name: 'app_client_list')]
    public function index(): Response
    {
        return $this->render('client/index.html.twig');
    }

    #[Route('/admin/update-client/{id}', name: 'app_update_client')]
    public function updateClient(string $id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $client = $repository->find($id);

        if ($client) {
            if (isset($_POST['active'])) {
                $client->setActive($_POST['active']);
            } else {
                $client->setActive(false);
            }

            $entityManager->persist($client);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/branch/fiche-client/{id}', name: 'app_client')]
    public function clientDetail(string $id, Request $request): Response
    {
        if ($this->getUser()->getLastConnection() === null) {
            return $this->redirectToRoute('app_change_password');
        }

        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $client = $repository->find($id);

        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);

        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $entityManager->persist($client);
            $entityManager->flush();
        }

        $repository = $entityManager->getRepository(Branch::class);
        $branches = $repository->findBy(array('client' => $id));

        return $this->render('client/detail.html.twig', ['client' => $client, 'clientForm' => $clientForm->createView
        (), 'branches' => $branches]);
    }

    #[Route('/admin/plus-d-info/{id}', name: 'app_more_about')]
    public function moreAboutClient(string $id, Request $request): Response
    {
        if ($this->getUser()->getLastConnection() === null) {
            return $this->redirectToRoute('app_change_password');
        }

        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $client = $repository->find($id);

        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);

        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $entityManager->persist($client);
            $entityManager->flush();
        }

        return $this->render('client/more.html.twig', ['client' => $client, 'clientForm' => $clientForm->createView
        ()]);
    }

    #[Route('/admin/update-client-grants/{id}', name: 'app_update_client_grants')]
    public function updateClientGrants(int $id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(ClientGrants::class);
        $clientGrants = $repository->find($id);

        if ($clientGrants) {
            if (isset($_POST['active']))
            {
                $clientGrants->setActive($_POST['active']);
            } else {
                $clientGrants->setActive(false);
            }

            $entityManager->persist($clientGrants);
            $entityManager->flush();

            return $this->redirectToRoute('app_client', ['id' => $clientGrants->getClient()->getId()]);
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/admin/update-install-perm1/{id}', name: 'app_update_install_perm1')]
    public function updateInstallPerm1(int $id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(InstallPerm::class);
        $installPerm = $repository->find($id);

        if ($installPerm) {
            if (isset($_POST['membersRead'])) {
                $installPerm->setMembersRead(true);
            } else {
                $installPerm->setMembersRead(false);
            }

            if (isset($_POST['membersWrite'])) {
                $installPerm->setMembersWrite(true);
            } else {
                $installPerm->setMembersWrite(false);
            }

            if (isset($_POST['membersAdd'])) {
                $installPerm->setMembersAdd(true);
            } else {
                $installPerm->setMembersAdd(false);
            }

            if (isset($_POST['membersProductsAdd'])) {
                $installPerm->setMembersProductsAdd(true);
            } else {
                $installPerm->setMembersProductsAdd(false);
            }

            if (isset($_POST['membersPaymentSchedulesRead'])) {
                $installPerm->setMembersPaymentSchedulesRead(true);
            } else {
                $installPerm->setMembersPaymentSchedulesRead(false);
            }

            $entityManager->persist($installPerm);
            $entityManager->flush();

            return $this->redirectToRoute('app_client', ['id' => $installPerm->getClient()->getId()]);
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/admin/update-install-perm2/{id}', name: 'app_update_install_perm2')]
    public function updateInstallPerm2(int $id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(InstallPerm::class);
        $installPerm = $repository->find($id);

        if ($installPerm) {
            if (isset($_POST['membersStatisticRead'])) {
                $installPerm->setMembersStatisticRead(true);
            } else {
                $installPerm->setMembersStatisticRead(false);
            }

            if (isset($_POST['membersSubscriptionRead'])) {
                $installPerm->setMembersSubscriptionRead(true);
            } else {
                $installPerm->setMembersSubscriptionRead(false);
            }

            if (isset($_POST['membersSchedulesRead'])) {
                $installPerm->setMembersSchedulesRead(true);
            } else {
                $installPerm->setMembersSchedulesRead(false);
            }

            if (isset($_POST['membersSchedulesWrite'])) {
                $installPerm->setMembersSchedulesWrite(true);
            } else {
                $installPerm->setMembersSchedulesWrite(false);
            }

            if (isset($_POST['paymentDayRead'])) {
                $installPerm->setPaymentDayRead(true);
            } else {
                $installPerm->setPaymentDayRead(false);
            }

            $entityManager->persist($installPerm);
            $entityManager->flush();

            return $this->redirectToRoute('app_client', ['id' => $installPerm->getClient()->getId()]);
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/admin/ajouter-contrat/{id}', name: 'app_new_client_grants')]
    public function addClientGrants(string $id, Request $request): Response
    {
        if ($this->getUser()->getLastConnection() === null) {
            return $this->redirectToRoute('app_change_password');
        }

        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $client = $repository->find($id);

        if (!$client) {
            $this->addFlash('alert', 'Cette franchise n\'existe pas');
            return $this->redirectToRoute('app_client_list');
        }

        $clientGrants = new ClientGrants();
        $clientGrants->setClient($client);

        $form = $this->createForm(ClientGrantsType::class, $clientGrants);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $perms = ['membersRead' => $form->get("membersRead")->getData(),
                'membersWrite' => $form->get("membersWrite")->getData(),
                'membersAdd' => $form->get("membersAdd")->getData(),
                'membersPaymentSchedulesRead' => $form->get("membersPaymentSchedulesRead")->getData(),
                'membersStatisticRead' => $form->get("membersStatisticRead")->getData(),
                'membersSubscriptionRead' => $form->get("membersSubscriptionRead")->getData(),
                'membersSchedulesRead' => $form->get("membersSchedulesRead")->getData(),
                'membersSchedulesWrite' => $form->get("membersSchedulesWrite")->getData(),
                'paymentDayRead' => $form->get("paymentDayRead")->getData(),
                ];
            $clientGrants->setPerms($perms);

            $repository = $entityManager->getRepository(Branch::class);
            $branch = $repository->find($form->get("branchId")->getData());
            if ($branch && $branch->getclient()->getId() === $client->getId()) {
                $clientGrants->addBranch($branch);

                $installPerm = new InstallPerm();
                $installPerm->setMembersRead($form->get("membersRead")->getData())
                    ->setMembersWrite($form->get("membersWrite")->getData())
                    ->setMembersAdd($form->get("membersAdd")->getData())
                    ->setMembersPaymentSchedulesRead($form->get("membersPaymentSchedulesRead")->getData())
                    ->setMembersStatisticRead($form->get("membersStatisticRead")->getData())
                    ->setMembersSubscriptionRead($form->get("membersSubscriptionRead")->getData())
                    ->setMembersSchedulesRead($form->get("membersSchedulesRead")->getData())
                    ->setMembersSchedulesWrite($form->get("membersSchedulesWrite")->getData())
                    ->setPaymentDayRead($form->get("paymentDayRead")->getData())
                    ->setClient($client)
                    ->setBranch($branch);
                $entityManager->persist($installPerm);
                $entityManager->flush();
            } else if ($branch && $branch->getclient()->getId() !== $client->getId()) {
                $this->addFlash('alert', 'On ne peut pas ouvrir des droits à une structure qui n\'est pas liée à la franchise');
                return $this->redirectToRoute('app_new_client_grants', [ 'id' => $id ]);
            } else if ($form->get("branchId")->getData() === 0) {
                $branches = $client->getBranches();
                foreach ($branches as $branch) {
                    $clientGrants->addBranch($branch);

                    $installPerm = new InstallPerm();
                    $installPerm->setMembersRead($form->get("membersRead")->getData())
                        ->setMembersWrite($form->get("membersWrite")->getData())
                        ->setMembersAdd($form->get("membersAdd")->getData())
                        ->setMembersPaymentSchedulesRead($form->get("membersPaymentSchedulesRead")->getData())
                        ->setMembersStatisticRead($form->get("membersStatisticRead")->getData())
                        ->setMembersSubscriptionRead($form->get("membersSubscriptionRead")->getData())
                        ->setMembersSchedulesRead($form->get("membersSchedulesRead")->getData())
                        ->setMembersSchedulesWrite($form->get("membersSchedulesWrite")->getData())
                        ->setPaymentDayRead($form->get("paymentDayRead")->getData())
                        ->setClient($client)
                        ->setBranch($branch);
                    $entityManager->persist($installPerm);
                    $entityManager->flush();
                }
            } else {
                $this->addFlash('alert', 'On ne peut pas ouvrir des droits à une structure qui n\'existe pas');
                return $this->redirectToRoute('app_new_client_grants', [ 'id' => $id ]);
            }

            $this->addFlash('success', 'Droits ouverts pour le club');
            $entityManager->persist($clientGrants);
            $entityManager->flush();

            return $this->redirectToRoute('app_client', [ 'id' => $id ]);

        }

        return $this->render('client/new-client-grants.html.twig', [ 'form' => $form->createView(), 'client' => $client ]);
    }
}
