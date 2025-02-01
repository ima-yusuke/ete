<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public $testArray = [
       ['id' => 1, 'img' => "pic-01.jpg"],
         ['id' => 2, 'img' => "pic-02.jpg"],
         ['id' => 3, 'img' => "pic-03.jpg"],
         ['id' => 4, 'img' => "pic-04.jpg"],
         ['id' => 5, 'img' => "pic-05.jpg"]
    ];

    public function Show(){
        $testArray = $this->testArray;
        return view('main',compact('testArray'));
    }
}
