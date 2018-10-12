<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/12/2018
 * Time: 17:10
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('This is my new website.');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        $comments = [

            'I love this',
            'Wow, this is amazing',
            'I like bacon too!Buy some from my site!'

        ];


        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }


}