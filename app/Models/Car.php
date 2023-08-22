<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function Model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }

    public function CarTypes()
    {
        return $this->belongsTo(CarType::class, 'car_type_id');
    }

    public function Generations()
    {
        return $this->belongsTo(Generation::class, 'generation_id');
    }

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function GetTitleAttribute()
    {
        return $this->Brand->name . ',' . $this->Model->name . ',' . $this->CarTypes->name . ',' . $this->Generations->name ;
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }


    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    
    //check like 
    public function isLikedByUser()
    {
        $user = Auth::user();

        if (!$user) {
            return false; 
        }

        return $this->favorites()->where('user_id', $user->id)->exists();
    }


}
