<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = "careers";

    protected $fillable = ['nama','deskripsi','gambar'];

    public $timestamps = false;
}
