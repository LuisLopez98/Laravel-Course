<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\AtMost;

class Post extends Model
{
    //posts
    //Category -> categories

    use HasFactory;

    //protected $table = 'posts';

    protected function casts(): array
    {
        return[
            'published_at' => 'datetime',
            'is_active' => 'boolean' ,
            'prueba' => 'interger' ,
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value);

            }, get: function($value)
            {
                    return ucfirst($value);
            }
        );
    }
};
