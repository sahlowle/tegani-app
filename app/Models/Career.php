<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
       'name',
       'description',
       'requirements',
       'benefits',
       'status',
    ];

    protected function casts(): array
    {
        return [
            'requirements' => 'array',
            'benefits' => 'array',
        ];
    }

}
