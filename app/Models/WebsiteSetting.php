<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WebsiteSetting extends Model
{
    use HasFactory , HasTranslations;
    protected $guarded = [];
    public $translatable = ['title', 'desc' , 'website_name' , 'website_desc'];

}
