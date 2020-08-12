<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // mengunakan cara default insert mengunakan model / eloquent ORM
    protected $table = "questions";

    // mengunakan cara mass assigment: atributenya yang mau di import ke field
    // protected $fillable = ["judul", "isi"];

    // mengunakan cara guarding attributes: atributenya yang mau tidak mau diimport ke field 
    // dan kalau kosong berarti semuanya boleh di import ke field
    protected $guarded = [];
}
