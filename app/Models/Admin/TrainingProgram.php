<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;

    const FILE_PATH = 'admin/images/training-programs/';

    protected $fillable = ['icon', 'name', 'url', 'status', 'order'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($item) {
            if(file_exists(self::FILE_PATH.$item->icon)) {
                unlink(self::FILE_PATH.$item->icon);
            }
        });
    }

    public function deleteFile()
    {
        if (file_exists(self::FILE_PATH . $this->icon)) {
            unlink(self::FILE_PATH . $this->icon);
        }
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOrder($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
