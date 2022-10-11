<?php

namespace App\Controller;

use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

                return $this->redirectToRoute('app_client_detail', ['id' => $client[0]->getId()]);
            }
        }

        return $this->redirectToRoute('app_login');
    }
}
