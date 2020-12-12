<?php

class NotaController {

    public function listar() {
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola mundo php mvc");

        require_once 'views/nota/listar.php';
    }

    public function crear() {

    }

    public function borrar() {}
}