<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Toplu atama yapılabilecek alanlar
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
    ];

    /**
     * Alan tip dönüşümleri
     */
    protected $casts = [
        'due_date' => 'date',
    ];
}
