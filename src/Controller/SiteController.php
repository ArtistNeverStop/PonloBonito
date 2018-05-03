<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);
        return $this->render('site/pages/index.html.twig', [
            'number' => $number,
        ]);
    }
}