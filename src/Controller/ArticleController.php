<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 05/05/2018
 * Time: 13:18
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG !!! My first page already ! Wooo Woo !');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article: %s', $slug));
    }
}