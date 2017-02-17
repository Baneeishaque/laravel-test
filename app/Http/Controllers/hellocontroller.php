<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller {

    public function index($name, $name2) {
        echo 'custom controller hello ' . $name . ' And Hello to ' . $name2;
    }

    public function add_function(Request $request) {
        return view('calc', ['n1' => $request->n1, 'n2' => $request->n2, 'sum' => ($request->n1 + $request->n2)]);
    }

    public function multiply(Request $request) {
        return view('result', ['action' => 'Product', 'result' => ($request->n1 * $request->n2)]);
    }

    public function multiply_display() {
        return view('multiply');
    }

    public function chat() {
        return view('chat');
    }

    public function calc_function($n1, $n2) {
        return view('calc', ['n1' => $n1, 'n2' => $n2, 'sum' => ($n1 + $n2)]);
    }

}
