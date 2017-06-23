<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index() {
        $cat = Cat::find(1);

        return view('cat', [
            'cat' => $cat
        ]);
    }

    public function create() {
        $cat = new Cat();
        $cat->name = 'Murzik';
        $cat->description = 'Cool cat';
        if($cat->save()) {
            dd('OK');
        }

        dd('ne ok');
    }
}
