<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'checklist_id', 'name', 'is_completed', 'completed_at',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'completed_at' => 'datetime',
    ];
}
