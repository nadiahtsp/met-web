<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilar extends Model
{
    protected $table = "pilars";

    protected $fillable = ['logo','nama','deskripsi'];

    public $timestamps = false;
}
