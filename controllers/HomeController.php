<?php

namespace app\controllers;

class HomeController extends BaseController
{
    public function home()
    {
        $data = [
            'name' => "Moein Afshari"
        ];
        return $this->render('home', $data);
    }
}