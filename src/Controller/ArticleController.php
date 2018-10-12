<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/12/2018
 * Time: 17:10
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
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
        return new Response(
            sprintf('Future page to show article: %s', $slug));
    }

}