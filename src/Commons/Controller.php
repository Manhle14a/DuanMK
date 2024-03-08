<?php 
namespace Admin\DuanKm\Commons;

use eftec\bladeone\BladeOne;

Class Controller{
    public function renderViewClient($view, $data=[]){
        $templatePath = __DIR__ . '/../Views/Client';

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }
}