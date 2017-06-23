<?php
Route::get('/cats', 'CatController@index');
Route::get('/cats/create', 'CatController@create');






























Route::get('/posts', 'PostController@index');
Route::get('/newP', 'PostController@createOnVisit');

Route::get('/test', function () {

//    $sobachka = new Animal();
//    $sobachka->voice = 'gav';
//    $sobachka->setState(false);
//
//
//    $koteyka = new Animal();
//    $koteyka->voice = 'Мяу';
//    $koteyka->setState(true);
//    $koteyka::$count++;
//    dd($koteyka->getInfo());


    $cat = new Cat();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();
    $cat->nashkodil();

    dd($cat->getInfo());
    return view('welcome');
});
class Animal {
    const MY_CONST = 1;
    private $isLive = true;
    public $voice;
    public static $count = 2;

    public function getInfo() {
        $str = $this->can() ? $this->voice : 'Cant...';

        return $str;
    }
    private function can() {
        return $this->isLive;
    }
    public function setState($bool) {
        $this->isLive = $bool;
    }
}

class Cat extends Animal {
    private $_hp = 7;
    public $voice = 'Myau..';

    public function hp() {
        return $this->_hp;
    }

    public function nashkodil() {
        if($this->_hp > 1) {
            $this->_hp--;
        } else {
            $this->setState(false);
        }
    }
}