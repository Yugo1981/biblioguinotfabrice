<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/administrateur")
 */

class AdministrateurController extends AbstractController
{
    /**
     * @Route("/administrateur", name="administrateur")
     */
    public function index(): Response
    {
        return $this->render('administrateur/index.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    public function admin(): Response
    {
        return $this->render('bibliotheque/menu_admin.html.twig', [
            'controller_name' => 'BibliothequeController',
        ]);
    }

    /**
     * @Route("/system", name="administrateur_system")
     */

    public function system(): Response
    {
        return $this->render('administrateur/system.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/utilisateurs", name="administrateur_utilisateurs")
     */

    public function utilisateur(): Response
    {
        return $this->render('administrateur/utilisateurs.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/contenu", name="administrateur_contenu")
     */

    public function contenu(): Response
    {
        return $this->render('administrateur/contenu.html.twig', [
            'controller_name' => 'Administrateur',
        ]);
    }

    /**
     * @Route("/extenssion", name="administrateur_extenssion")
     */

    public function extenssion(): Response
    {
        return $this->render('administrateur/extenssion.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/logout", name="administrateur_logout")
     */

    public function logOut(): Response
    {
        return $this->render('administrateur/logout.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/alaune", name="administrateur_alaune")
     */

    public function aLaUne(): Response
    {
        return $this->render('administrateur/alaune.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }

    /**
     * @Route("/categorie", name="administrateur_categorie")
     */

    public function categorie(): Response
    {
        return $this->render('administrateur/categorie.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }
}
