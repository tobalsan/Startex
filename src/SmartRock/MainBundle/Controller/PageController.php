<?php

namespace SmartRock\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class PageController
{
    public function indexAction(Request $request, Application $app)
    {
        return $app['twig']->render('@Page/index.html.twig');
    }
}