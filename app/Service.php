<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    protected $fillable = ['nama','deskripsi'];

    public $timestamps = false;
}  
