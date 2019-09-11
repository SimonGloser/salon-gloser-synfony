<?php
/**
 * Created by PhpStorm.
 * User: simongloser
 * Date: 10.09.19
 * Time: 14:58
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalonController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('salon/home.html.twig', [
            'title' => 'Friseur K.Gloser'
        ]);
    }

    /**
     * @Route("/{slug}")
     */
    public function salon($slug)
    {
        return $this->render('salon/salon.html.twig', [
            'title' => $slug
        ]);
    }

}