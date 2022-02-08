<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $primaryKey = 'idImagem';
    public $timestamps = false;
    protected $guarded = [];
    use HasFactory;
}
