<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //

 
    protected $table = 'abouts';

    protected $fillable = [
        'id',
        'subtitle',
        'title',
        'text',
        'btn_text',
        'pdf',
        'image1',
        'alt_image1',
        'image2',
        'alt_image2',
       
    ];
}
