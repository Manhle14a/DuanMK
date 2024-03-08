<?php
namespace Admin\DuanKm\Controller\Client;
use Admin\DuanKm\Commons\Controller;
class HomController extends Controller{

    public function index()
    {

        // $name = "Nguyen Van A";
        // $email = 'a@gmail.com';
        // $password = '1234567';

        // $user = new User();
        // $user->deleteByID(4);
        // $user->insert($name, $email, $password);
        return $this->renderViewClient('home');
    }
}