<?php
/**
 * Created by PhpStorm.
 * User: nadej
 * Date: 23.06.2017
 * Time: 20:50
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'name', 'description'
    ];


    public function getFull() {
        return "{$this->id}: {$this->name} {$this->description}";
    }
}