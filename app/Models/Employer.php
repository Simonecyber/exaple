<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
        /*
        In this case we use the function hasMany() beacuse the relationship is one to many
        */
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}