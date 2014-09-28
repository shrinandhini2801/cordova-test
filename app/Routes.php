<?php

namespace Transfluent\MobileApp;

class Routes
{
    public function home($app, $twig, $lang, $title, $header)
    {
        $app->get('/', function () use ($twig, $lang, $title, $header) {
            return $twig->render('layout.twig', [
                                                'route' => 'Home',
                                                'languages' => $lang->getLanguages(),
                                                'title' => $title(),
                                                'header' => $header(),
                                          ]);
        });
    }
}