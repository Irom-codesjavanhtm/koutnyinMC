<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'platform', 'rating', 'body'];

    protected $casts = [
        'rating'   => 'integer',
        'approved' => 'boolean',
    ];

    protected $hidden = ['approved', 'updated_at'];

    public function scopeApproved($query)
    {
        return $query->where('approved', true);
    }
}
