<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Profile extends Model
{
    use Resizable;

    protected $dates = ['birthday'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
