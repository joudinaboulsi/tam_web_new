<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    //

    protected $table = 'visions';

    protected $fillable = [
        'subtitle',
        'title',
        'text',
        'image',
        'alt_image',
        'counter1',
        'p1',
        'counter2',
        'p2',
        'counter3',
        'p3',
        'counter4',
        'p4',
        'counter5',
        'p5',
       
    ];
}
