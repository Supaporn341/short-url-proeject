<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class short extends Model
{
    protected $fillable = ['long_url', 'short_url'];
    protected $guarded = [];
}
