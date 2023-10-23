<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'subtitle',
        'title',
        'text',
        'image1',
        'alt_image1',
        'icon1',
        'p1',
        'image2',
        'alt_image2',
        'icon2',
        'p2',
        'image3',
        'alt_image3',
        'icon3',
        'p3',
        'image4',
        'alt_image4',
        'icon4',
        'p4',
        'alt_icon1',
        'alt_icon2',
        'alt_icon3',
        'alt_icon4',
        
    ];
}
