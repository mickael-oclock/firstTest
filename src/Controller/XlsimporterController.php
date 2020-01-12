<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class XlsimporterController extends AbstractController
{
    /**
     * @Route("/xlsimporter", name="xlsimporter")
     */
    public function index()
    {
        return $this->render('xlsimporter/index.html.twig', [
            'controller_name' => 'XlsimporterController',
        ]);
    }
}
