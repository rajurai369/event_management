<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'date', 'location', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}

