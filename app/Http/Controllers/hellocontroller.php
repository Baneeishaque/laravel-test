<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller {

    public function index($name) {
        echo 'custom controller hello ' . $name;
    }

}
