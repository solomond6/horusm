<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    /**
     * @Route("/circle/{radius}", name="app_circle")
     */
    public function index(float $radius): Response
    {
        
        $surface = pi() * pow($radius, 2);      // pow() is used to find the power
        $surface = round($surface, 2);            // round() is used to limit the number of digit after the decimal
        $circumference = 2 * pi() * $radius;
        $circumference = round($circumference, 2);

        return $this->json([
            'type' => 'circle',
            'radius' => $radius,
            'surface' => $surface,
            'circumference' => $circumference,
        ]);
    }
}
