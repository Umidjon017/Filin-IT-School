<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderButton extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'status', 'order'];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOrder($query)
    {
        return $query->orderByRaw("CAST(`order` AS UNSIGNED) ASC");
    }
}
