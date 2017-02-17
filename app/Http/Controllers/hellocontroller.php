<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller {

    public function index($name, $name2) {
        echo 'custom controller hello ' . $name . ' And Hello to ' . $name2;
    }

}
