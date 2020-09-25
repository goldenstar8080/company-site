<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'vimeo',
    ];
}
