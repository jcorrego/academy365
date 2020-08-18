<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    protected $casts = ['options' => 'array'];
}
