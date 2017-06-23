<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function a() {
        return $this->id.$this->name.$this->description;
    }
}
