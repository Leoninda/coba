<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends  Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = ['nim','nama','kelas','jurusan','prodi'];
}