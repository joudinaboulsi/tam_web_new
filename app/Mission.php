<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    //

    protected $table = 'missions';

    protected $fillable = [
        'title_mission',
        'title_vision',
        'btn_text',
        'scrollTo',
        'text',
        'image',
        'title1',
        'p1',
        'title2',
        'p2',
        'title3',
        'p3',
        'title4',
        'p4',
       
    ];
}
