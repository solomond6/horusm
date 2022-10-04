<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    /**
     * @Route("/triangle/{a}/{b}/{c}", name="app_triangle")
     */
    public function index(float $a, float $b, float $c): Response
    {
    
        return $this->json([
            'type'=> 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => ($b * $c) / 2,
            'circumference' => $a +$b + $c,
        ]);
    }
}
