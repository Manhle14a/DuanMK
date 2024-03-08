<?php
namespace Admin\DuanKm\Controllers\Client;
use Admin\DuanKm\Commons\Controller;
class HomController extends Controller{
    public function index(){
        return $this->renderViewClient('home');
    }
}