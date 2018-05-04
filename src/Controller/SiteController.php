<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    /**
     * Render and return a Response with the contact page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function contact()
    {
        return $this->render('site/pages/contact.html.twig');
    }

    /**
     * Render and return a Response with the index page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function index()
    {
        return $this->render('site/pages/index.html.twig');
    }

    /**
     * Render and return a Response with the privacy policy page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function privacyPolicy()
    {
        return $this->render('site/pages/privacy-policy.html.twig');
    }

    /**
     * Render and return a Response with the blog page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function blog()
    {
        return $this->render('site/pages/blog.html.twig');
    }

    /**
     * Render and return a Response with the search page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function search()
    {
        return $this->render('site/pages/search.html.twig');
    }

    /**
     * Render and return a Response with the shipping policy page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function shippingPolicy()
    {
        return $this->render('site/pages/shipping-policy.html.twig');
    }

    /**
     * Render and return a Response with the product detail page.
     *
     * @param
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function productDetail()
    {
        return $this->render('site/pages/product-detail.html.twig');
    }
}