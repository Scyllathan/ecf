<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/admin/liste-client', name: 'app_client_list')]
    public function index(Request $request): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $clients = $repository->findAll();

        foreach ($clients as $client) {
            $form = $this->createForm(ClientType::class, $client, [
                'action' => $this->generateUrl('app_update_client', ['id' => $client->getId()]),]);
            $form->handleRequest($request);
            $client->form = $form->createView();
        }

        return $this->render('client/index.html.twig', [
            'clients' => $clients,
        ]);
    }

    #[Route('/admin/update-client/{id}', name: 'app_update_client')]
    public function updateClient(string $id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $client = $repository->find($id);

        if ($client) {
            if (isset($_POST['client']['active'])) {
                $client->setActive($_POST['client']['active']);
            } else {
                $client->setActive(false);
            }

            $entityManager->persist($client);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_client_list');
    }

    #[Route('/client/{id}', name: 'app_client_detail')]
    public function clientDetail(string $id, Request $request): Response
    {
        $entityManager = $this->doctrine->getManager();
        $repository = $entityManager->getRepository(Client::class);
        $client = $repository->find($id);
        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);

        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            $entityManager->persist($client);
            $entityManager->flush();
        }

        return $this->render('client/detail.html.twig', ['client' => $client, 'clientForm' => $clientForm->createView()]);
    }
}
