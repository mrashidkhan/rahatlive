<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'state',
        'country',
        'venue',
        'show_date',
        'doors_time',
        'show_time',
        'ticket_url',
        'city_image',
        'status',       // upcoming | soldout | cancelled | announced
        'sort_order',
        'is_featured',
    ];

    protected $casts = [
        'show_date'   => 'datetime',
        'doors_time'  => 'datetime',
        'show_time'   => 'datetime',
        'is_featured' => 'boolean',
    ];

    /* ---- Scopes ---- */

    public function scopeUpcoming($query)
    {
        return $query->where('show_date', '>=', now())
                     ->where('status', '!=', 'cancelled')
                     ->orderBy('show_date');
    }

    public function scopeVisible($query)
    {
        return $query->whereIn('status', ['upcoming', 'announced', 'soldout'])
                     ->orderBy('sort_order')
                     ->orderBy('show_date');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->upcoming()->first();
    }

    /* ---- Accessors ---- */

    public function getFullLocationAttribute(): string
    {
        return trim("{$this->city}, {$this->state}");
    }

    public function getFormattedDateAttribute(): string
    {
        return $this->show_date?->format('F j, Y') ?? 'TBA';
    }

    public function getFormattedDayAttribute(): string
    {
        return $this->show_date?->format('d') ?? '';
    }

    public function getFormattedMonthAttribute(): string
    {
        return $this->show_date?->format('M') ?? '';
    }

    public function getFormattedYearAttribute(): string
    {
        return $this->show_date?->format('Y') ?? '';
    }

    public function getCountdownTargetAttribute(): ?string
    {
        return $this->show_date?->toISOString();
    }

    public function getIsSoldOutAttribute(): bool
    {
        return $this->status === 'soldout';
    }

    public function getIsCancelledAttribute(): bool
    {
        return $this->status === 'cancelled';
    }

    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'upcoming'  => 'On Sale',
            'announced' => 'Coming Soon',
            'soldout'   => 'Sold Out',
            'cancelled' => 'Cancelled',
            default     => 'Upcoming',
        };
    }
}
