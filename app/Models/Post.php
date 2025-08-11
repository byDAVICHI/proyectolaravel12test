<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [ // Atributos que se pueden asignar masivamente
    //     'title',
    //     'slug',
    //     'categoria',
    //     'content',
    // ];

    protected $guarded = [
        'is_active', // Atributos que no se pueden asignar masivamente
    ]; // Atributos que no se pueden asignar masivamente

    protected $table = 'posts';

    protected $casts = [ // Definición de tipos de datos para los atributos
        'published_at' => 'datetime',
        'is_active' => 'boolean',
        'prueba' => 'integer',
    ];

    protected function casts(): array // Definición de tipos de datos para los atributos
    {
        return [

            'published_at' => 'datetime', // 2020-01-01 00:00:00
            'is_active' => 'boolean', // true, false
            'prueba' => 'integer', // []
        ];
    }

    protected function title(): Attribute // Mutador y Accesor para el título
    {


        return Attribute::make( // Mutador y Accesor
            set: function ($value) { // Sirve para modificar el valor antes de guardarlo en la base de datos
                return strtolower($value); // Capitaliza la primera letra del título
            },
            get: function ($value) { // Sirve para modificar el valor antes de devolverlo
                return ucfirst($value); // Capitaliza la primera letra del título
            }
        );
    }

    public function getRouteKeyName() // Sobrescribe la clave de ruta predeterminada
    {
        return 'title'; // Usa el campo 'title' en lugar del 'id' para las rutas
    }
}
