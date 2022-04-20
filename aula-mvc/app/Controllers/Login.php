<?php
namespace App\Controllers;

class Login{
    public function index() {
        $renderLogin = new \Core\ConfigView("Views/login");
        $renderLogin->renderizar();
    }

    public function acessar() {

    }
}