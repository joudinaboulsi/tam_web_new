<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeTitle extends Model
{
    protected $table = 'home_titles';

    protected $fillable = [
        'title_product',
        'title_project',
        'subtitle_project',
        'title_client',
    ];
}
