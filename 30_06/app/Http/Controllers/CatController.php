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

    public function myCoolForm()
    {
        return view('form');
    }

    public function story(Request $request)
    {
        $cat  = new Cat();
        $cat->description = 'test description';
        $cat->fill($request->all());
        $cat->save();
        dd($cat);
    }
}
