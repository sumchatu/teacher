<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Answer};

class Question extends Model
{
    use HasFactory;

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }
}
