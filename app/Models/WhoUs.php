<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhoUs extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = [];
    protected $translatable = ['upper_text', 'text', 'lower_text', 'link_text'];
}
