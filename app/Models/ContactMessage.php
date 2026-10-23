<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email_or_phone',
        'type',
        'subject',
        'message',
        'rating',
        'status',
        'admin_notes',
        'ip_address',
    ];

    protected $casts = [
        'rating' => 'integer',
        'created_at' => 'datetime',
    ];

    public function scopeNewMessages($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeContactInquiries($query)
    {
        return $query->where('type', 'contact');
    }

    public function scopeFeedbackSubmissions($query)
    {
        return $query->where('type', 'feedback');
    }
}
