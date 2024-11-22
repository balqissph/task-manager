<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;

    protected $hidden = [
        "update_at",
        "created_at",
        "completed_at",
        "updated_at"
    ];
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
