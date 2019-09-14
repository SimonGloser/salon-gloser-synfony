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
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('salon/home.html.twig', [
            'title' => 'Friseur K.Gloser'
        ]);
    }

    /**
     * @Route("/salon/{slug}", name="salon")
     */
    public function salon($slug)
    {

        return $this->render('salon/salon.html.twig', [
            'title' => $slug
        ]);
    }

    /**
     * @Route("/{slug}", name="special")
     */
    public function preise($slug)
    {
        return $this->render($slug.'.html.twig',[
            'title' => 'Preise'
        ]);
    }





}