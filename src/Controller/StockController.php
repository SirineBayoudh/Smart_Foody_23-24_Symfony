<?php

namespace App\Controller;

use App\Repository\StockRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockController extends AbstractController
{
    // #[Route('/stock', name: 'app_stock')]
    // public function index(): Response
    // {
    //     return $this->render('stock/index.html.twig', [
    //         'controller_name' => 'StockController',
    //     ]);
    // }
    #[Route('/stock', name: 'stock_get')]
    public function getStock(StockRepository $repo): Response
    {
        $list = $repo->findAll();
        return $this->render('stock/index.html.twig', [
            'stocks' => $list
        ]);
    }
}
