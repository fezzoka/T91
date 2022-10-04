<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disco extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'discos';
    protected $primaryKey = 'iddiscos';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
       ];
    protected $fillable = ['cantor',
'pais','banda','fotourl','genero'];

}
