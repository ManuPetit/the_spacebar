<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 05/05/2018
 * Time: 13:18
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
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
        $comments = [
            'Was seemed within of City with proudly was Saturday Saturday.',
            'The the useful says macro a Stallman\'s chart course attention.',
            'Seven a him" hobby but "It he make if system.',
        ];
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}