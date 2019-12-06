<?php

namespace App\Controller;

use App\Repository\KeywordsRepository;
use App\Repository\QuestionsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/question/{id}", name="question") 
     */
    public function question(QuestionsRepository $repo, $id)
    {
        $data = $repo->find($id);

        if(!$data) {
            throw $this->createNotFoundException('La question n\'existe pas');
        }

        return $this->render('main/content.html.twig', [
            'data' => $data,
        ]);
    }

    /**
     * @Route("/list/{keyword}", name="list")
     */
    public function list(KeywordsRepository $repo, $keyword)
    {
        $key = $repo->findOneBy([
            'title' => $keyword
        ]);

        return $this->render('main/list.html.twig', [
            'keyword' => $keyword,
            'questions' => $key->getQuestions()
        ]);
    }
}
