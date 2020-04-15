<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
