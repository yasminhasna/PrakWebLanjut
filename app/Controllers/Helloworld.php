<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm)
    {
        //echo $this->name;
        echo $name ."<br>";
        echo $npm ."<br>";
        //echo "Hello Yasmin";
    }

    public function show()
    {
        echo "Yasmin Hasna";
        echo "1817051018";
    }
}