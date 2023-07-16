<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'images' => 'json',
    ];
    //realationships
    public function colorIn()
    {
        return $this->belongsTo(Color::class, 'color_id_in');
    }


    public function colorOut()
    {
        return $this->belongsTo(Color::class, 'color_id_out');
    }

}
