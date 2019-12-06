<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/{_locale}")
 */
class MainController extends AbstractController
{
    public function __construct()
    {
        $cookie = new Cookie('secret_state', '0', strtotime('tomorrow'));
    }

    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/question/1", name="secret_logement")
     */
    public function pageLogement()
    {
        return $this->render('main/Logement.html.twig');
    }

    /**
     * @Route("/question/2", name="secret_aideLogement")
     */
    public function pageAideLogement()
    {
        return $this->render('main/aideLogement.html.twig');
    }

    /**
     * @Route("/question/3", name="secret_velov")
     */
    public function pagevelov()
    {
        return $this->render('main/velov.html.twig');
    }

    /**
     * @Route("/question/4", name="secret_amlRecrutement")
     */
    public function pageAml()
    {
        return $this->render('main/amlRecrutement.html.twig');
    }

    /**
     * @Route("/question/5", name="secret_planningFam")
     */
    public function pagePlanningFam()
    {
        return $this->render('main/planningFam.html.twig');
    }

    /**
     * @Route("/question/6", name="secret_stage")
     */
    public function pageStage()
    {
        return $this->render('main/stage.html.twig');
    }

    /**
     * @Route("/secret", name="secret")
     */
    public function secret()
    {
        return $this->render('main/secret.html.twig', [
            'secret_state' => 0,
        ]);
    }
}
