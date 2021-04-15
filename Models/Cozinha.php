<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{
    protected $table = 'cozinha';
    protected $fillable = ['tipo', 'hAbertura', 'hFechamento', 'pratoPrincipal'];

    // $fillable define as colunas.


}
