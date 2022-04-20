<?php 
namespace App\Controllers;

class Home {

    public function index() {
        $carregaView = new \Core\ConfigView("Views/dashboard/home");
        $carregaView->renderizar();
    }

    public function add() {

    }
}
?>