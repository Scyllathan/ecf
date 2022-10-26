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
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
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
    public function updateInstallPerm1(int $id, MailerInterface $mailer): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(InstallPerm::class);
        $installPerm = $repository->find($id);
        $change = [];

        if ($installPerm) {
            if (isset($_POST['membersRead'])) {
                if ($installPerm->isMembersRead() === false) {
                    $change = ['permission' => 'membersRead', 'value' => 'true'];
                }
                $installPerm->setMembersRead(true);
            } else {
                if ($installPerm->isMembersRead() === true) {
                    $change = ['permission' => 'membersRead', 'value' => 'false'];
                }
                $installPerm->setMembersRead(false);
            }

            if (isset($_POST['membersWrite'])) {
                if ($installPerm->isMembersWrite() === false) {
                    $change = ['permission' => 'membersWrite', 'value' => 'true'];
                }
                $installPerm->setMembersWrite(true);
            } else {
                if ($installPerm->isMembersWrite() === true) {
                    $change = ['permission' => 'membersWrite', 'value' => 'false'];
                }
                $installPerm->setMembersWrite(false);
            }

            if (isset($_POST['membersAdd'])) {
                if ($installPerm->isMembersAdd() === false) {
                    $change = ['permission' => 'membersAdd', 'value' => 'true'];
                }
                $installPerm->setMembersAdd(true);
            } else {
                if ($installPerm->isMembersAdd() === true) {
                    $change = ['permission' => 'membersAdd', 'value' => 'false'];
                }
                $installPerm->setMembersAdd(false);
            }

            if (isset($_POST['membersProductsAdd'])) {
                if ($installPerm->isMembersProductsAdd() === false) {
                    $change = ['permission' => 'membersProductsAdd', 'value' => 'true'];
                }
                $installPerm->setMembersProductsAdd(true);
            } else {
                if ($installPerm->isMembersProductsAdd() === true) {
                    $change = ['permission' => 'membersProductsAdd', 'value' => 'false'];
                }
                $installPerm->setMembersProductsAdd(false);
            }

            if (isset($_POST['membersPaymentSchedulesRead'])) {
                if ($installPerm->isMembersPaymentSchedulesRead() === false) {
                    $change = ['permission' => 'membersPaymentSchedulesRead', 'value' => 'true'];
                }
                $installPerm->setMembersPaymentSchedulesRead(true);
            } else {
                if ($installPerm->isMembersPaymentSchedulesRead() === true) {
                    $change = ['permission' => 'membersPaymentSchedulesRead', 'value' => 'false'];
                }
                $installPerm->setMembersPaymentSchedulesRead(false);
            }

            $entityManager->persist($installPerm);
            $entityManager->flush();

            $clientId = $installPerm->getClient()->getId();
            $repository = $entityManager->getRepository(Client::class);
            $clients = $repository->findBy(array('id' => $clientId));
            $client = $clients[0];
            $branchId = $installPerm->getBranch()->getId();
            $repository = $entityManager->getRepository(Branch::class);
            $branches = $repository->findBy(array('id' => $branchId));
            $branch = $branches[0];

            $email = (new TemplatedEmail())
                ->from('scyllathan@gmail.com')
                ->to($client->getUser()->getEmail())
                ->subject(sprintf('Modification effectuée sur une de votre structure %s', $branch->getName()))
                ->htmlTemplate('email/modif-install-perm.html.twig')
                ->context([
                    'client' => $client,
                    'branch' => $branch,
                    'change' => $change
                ]);

            $mailer->send($email);

            return $this->render('email/modif-install-perm.html.twig', ['client' => $client, 'branch' => $branch, 'change' => $change]);
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/admin/update-install-perm2/{id}', name: 'app_update_install_perm2')]
    public function updateInstallPerm2(int $id, MailerInterface $mailer): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(InstallPerm::class);
        $installPerm = $repository->find($id);
        $change = [];

        if ($installPerm) {
            if (isset($_POST['membersStatisticRead'])) {
                if ($installPerm->isMembersStatisticRead() === false) {
                    $change = ['permission' => 'membersStatisticRead', 'value' => 'true'];
                }
                $installPerm->setMembersStatisticRead(true);
            } else {
                if ($installPerm->isMembersStatisticRead() === true) {
                    $change = ['permission' => 'membersStatisticRead', 'value' => 'false'];
                }
                $installPerm->setMembersStatisticRead(false);
            }

            if (isset($_POST['membersSubscriptionRead'])) {
                if ($installPerm->isMembersSubscriptionRead() === false) {
                    $change = ['permission' => 'membersSubscriptionRead', 'value' => 'true'];
                }
                $installPerm->setMembersSubscriptionRead(true);
            } else {
                if ($installPerm->isMembersSubscriptionRead() === true) {
                    $change = ['permission' => 'membersSubscriptionRead', 'value' => 'false'];
                }
                $installPerm->setMembersSubscriptionRead(false);
            }

            if (isset($_POST['membersSchedulesRead'])) {
                if ($installPerm->isMembersSchedulesRead() === false) {
                    $change = ['permission' => 'membersSchedulesRead', 'value' => 'true'];
                }
                $installPerm->setMembersSchedulesRead(true);
            } else {
                if ($installPerm->isMembersSchedulesRead() === true) {
                    $change = ['permission' => 'membersSchedulesRead', 'value' => 'false'];
                }
                $installPerm->setMembersSchedulesRead(false);
            }

            if (isset($_POST['membersSchedulesWrite'])) {
                if ($installPerm->isMembersSchedulesWrite() === false) {
                    $change = ['permission' => 'membersSchedulesWrite', 'value' => 'true'];
                }
                $installPerm->setMembersSchedulesWrite(true);
            } else {
                if ($installPerm->isMembersSchedulesRead() === true) {
                    $change = ['permission' => 'membersSchedulesWrite', 'value' => 'false'];
                }
                $installPerm->setMembersSchedulesWrite(false);
            }

            if (isset($_POST['paymentDayRead'])) {
                if ($installPerm->isPaymentDayRead() === false) {
                    $change = ['permission' => 'PaymentDayRead', 'value' => 'true'];
                }
                $installPerm->setPaymentDayRead(true);
            } else {
                if ($installPerm->isPaymentDayRead() === true) {
                    $change = ['permission' => 'PaymentDayRead', 'value' => 'false'];
                }
                $installPerm->setPaymentDayRead(false);
            }

            $entityManager->persist($installPerm);
            $entityManager->flush();

            $clientId = $installPerm->getClient()->getId();
            $repository = $entityManager->getRepository(Client::class);
            $clients = $repository->findBy(array('id' => $clientId));
            $client = $clients[0];
            $branchId = $installPerm->getBranch()->getId();
            $repository = $entityManager->getRepository(Branch::class);
            $branches = $repository->findBy(array('id' => $branchId));
            $branch = $branches[0];

            $email = (new TemplatedEmail())
                ->from('scyllathan@gmail.com')
                ->to($client->getUser()->getEmail(), $branch->getUser()->getEmail())
                ->subject(sprintf('Modification effectuée sur la structure %s - %s', $client->getName(),
                    $branch->getName()))
                ->htmlTemplate('email/modif-install-perm.html.twig')
                ->context([
                    'client' => $client,
                    'branch' => $branch,
                    'change' => $change
                ]);

            $mailer->send($email);

            return $this->render('email/modif-install-perm.html.twig', ['client' => $client, 'branch' => $branch, 'change' => $change]);
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/admin/ajouter-contrat/{id}', name: 'app_new_client_grants')]
    public function addClientGrants(string $id, Request $request, MailerInterface $mailer): Response
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

        $form = $this->createForm(ClientGrantsType::class, $clientGrants, array('attr' => array('target' => '_blank')));
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
            $token = bin2hex(random_bytes(8));

            if ($branch && $branch->getClientGrants() !== null) {
                $this->addFlash('alert', 'Cette structure dépend déjà d\'un contrat');
                return $this->redirectToRoute('app_new_client_grants', [ 'id' => $id ]);
            } else if ($branch && $branch->getclient()->getId() === $client->getId()) {
                $clientGrants->addBranch($branch);
                $clientGrants->setToken($token);
            } else if ($branch && $branch->getclient()->getId() !== $client->getId()) {
                $this->addFlash('alert', 'On ne peut pas ouvrir des droits à une structure qui n\'est pas liée à la franchise');
                return $this->redirectToRoute('app_new_client_grants', [ 'id' => $id ]);
            } else if ($form->get("branchId")->getData() === 0) {
                $branches = $client->getBranches();
                foreach ($branches as $branch) {
                    $clientGrants->addBranch($branch);
                    $clientGrants->setToken($token);
                }
            } else {
                $this->addFlash('alert', 'On ne peut pas ouvrir des droits à une structure qui n\'existe pas');
                return $this->redirectToRoute('app_new_client_grants', [ 'id' => $id ]);
            }

            $entityManager->persist($clientGrants);
            $entityManager->flush();
            $this->addFlash('success', 'Contrat créé');

            $email = (new TemplatedEmail())
                ->from('scyllathan@gmail.com')
                ->to($client->getUser()->getEmail())
                ->subject('Ouverture des droits pour l\'une de vos structures')
                ->htmlTemplate('email/create-install-perm.html.twig')
                ->context([
                    'client' => $client,
                    'clientGrants' =>$clientGrants,
                    'token' => $token
                ]);

            $mailer->send($email);

            return $this->render('email/create-install-perm.html.twig', ['client' => $client, 'clientGrants' =>
                $clientGrants, 'token' => $token]);
        }

        return $this->render('client/new-client-grants.html.twig', [ 'form' => $form->createView(), 'client' => $client ]);
    }

    #[Route('/client/creer-permissions/{token}', name: 'app_create_perms')]
    public function createInstallPerm(string $token): Response
    {
        if ($this->getUser()->getLastConnection() === null) {
            return $this->redirectToRoute('app_change_password');
        }

        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(ClientGrants::class);
        $clientGrants = $repository->findBy(array('token' => $token));
        $clientGrants[0]->setToken(null);
        $entityManager->persist($clientGrants[0]);
        $entityManager->flush();

        if ($clientGrants) {
            $perms = $clientGrants[0]->getPerms();
            $branches = $clientGrants[0]->getBranch();

            if ($branches) {
                foreach ($branches as $branch) {
                    $installPerm = new InstallPerm();
                    $installPerm->setMembersRead($perms['membersRead'])
                        ->setMembersWrite($perms['membersWrite'])
                        ->setMembersAdd($perms['membersAdd'])
                        ->setMembersPaymentSchedulesRead($perms['membersPaymentSchedulesRead'])
                        ->setMembersStatisticRead($perms['membersStatisticRead'])
                        ->setMembersSubscriptionRead($perms['membersSubscriptionRead'])
                        ->setMembersSchedulesRead($perms['membersSchedulesRead'])
                        ->setMembersSchedulesWrite($perms['membersSchedulesWrite'])
                        ->setPaymentDayRead($perms['paymentDayRead'])
                        ->setClient($clientGrants[0]->getClient())
                        ->setBranch($branch);
                    $entityManager->persist($installPerm);
                    $entityManager->flush();

                    $this->addFlash('success', 'Droits ouverts pour le club');
                }
            }
        }

        return $this->redirectToRoute('app_default');
    }
}
