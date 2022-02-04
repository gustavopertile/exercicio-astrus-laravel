<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'idProduto';
    public $timestamps = false;
    use HasFactory;
}
