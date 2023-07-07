<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    const FILE_PATH = 'admin/images/banners/';

    protected $fillable = ['image', 'title', 'description', 'order'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($item) {
            if(file_exists(self::FILE_PATH . $item->image)) {
                unlink(self::FILE_PATH . $item->image);
            }
        });
    }

    public function deleteFile()
    {
        if (file_exists(self::FILE_PATH . $this->image)) {
            unlink(self::FILE_PATH . $this->image);
        }
    }

    public function scopeOrder($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
