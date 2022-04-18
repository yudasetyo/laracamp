<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Camp extends Model
{
    use HasFactory, SoftDeletes;

    /* Mendaftarkan atribut (nama kolom) 
    untuk menambah record baru di database */
    protected $fillable = ['title', 'price'];
}
