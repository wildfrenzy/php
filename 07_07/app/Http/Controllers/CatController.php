<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(Request $request) {

        $cat = Cat::find($request->query('id'));

        return view('cat', [
            'cat' => $cat
        ]);
    }

    public function create() {
        $cat = new Cat();
        $cat->id = 999;
        $cat->name = 'Murzik';
        $cat->description = '';
        if($cat->save()) {
            dd('OK');
        }

        dd('ne ok');
    }

    public function myCoolForm()
    {
        return view('form', [
            'cat' => new Cat()
        ]);
    }

    public function update(Request $request) {
        $id = $request->query('id');
        $cat = Cat::find($id);

        return view('form', [
            'cat' => $cat
        ]);
    }

    public function story(Request $request)
    {
        if(!$cat = Cat::find($request->input('id'))) {
            $cat = new Cat();
        }
        $cat->fill($request->all());
        $cat->save();
        dd($cat);
    }
}
