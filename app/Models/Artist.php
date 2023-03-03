<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    /**
     *  @access private
     *  @var string
     *  @var string
     *  @var string 
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'img_artista',
    ];

}
