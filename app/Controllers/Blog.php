<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function Comousar()
{
    $this->renderDefaultLayout('Comousar');
}
public function grupos()
{
    $this->renderDefaultLayout('grupos');
}
public function Contacto()
{
    $this->renderDefaultLayout('contacto');
}
public function suscripcion()
{
    $this->renderDefaultLayout('suscripcion');
}

}
