<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table = 'home_sliders';

    protected $fillable = [
        'image_slider',
        'title_main',
        'text_main',
        'text_btn',
        'scrollTo',
        'alt_image',
    ];
}
