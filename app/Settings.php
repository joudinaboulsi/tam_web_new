<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'logo',
        'alt_logo',
        'email1',
        'email2',
        'linkedin',
        'instagram',
        'whatsaplink',
        'address',
        'phone1',
        'phone2',
        'tel_href',
        'map',
        'contact_header',
        'scrollTo',
        'title_header',
        'tel',
    ];
}
