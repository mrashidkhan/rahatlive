<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'city', 'message', 'ip_address', 'is_read',
    ];

    protected $casts = ['is_read' => 'boolean'];

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }
}
