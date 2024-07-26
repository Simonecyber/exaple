<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
        /*
        La funzione belongsTo() serve per definire una relazione uno a molti o viceversa
        
        */

    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listing_id");
    }


}