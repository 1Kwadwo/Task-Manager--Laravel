<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
        
    ];

    // Define relationship: a Task belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
