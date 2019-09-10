<?php
/**
 * Created by PhpStorm.
 * User: simongloser
 * Date: 10.09.19
 * Time: 14:58
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalonController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello Salons');
    }

    /**
     * @Route("/{slug}")
     */
    public function salon($slug)
    {
        return new Response(sprintf(
            'Das ist der Salon in %s', $slug
        ));
    }

}