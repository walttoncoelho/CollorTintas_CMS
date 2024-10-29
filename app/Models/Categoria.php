<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; // Adicionando a importação do trait Sluggable

class Categoria extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['nome', 'slug', 'imagem'];

    // Método para gerar o slug automaticamente
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nome'
            ]
        ];
    }
}
