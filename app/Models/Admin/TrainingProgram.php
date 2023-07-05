<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;

    const FILE_PATH = 'admin/images/training-program/';

    protected $fillable = ['icon', 'name', 'status', 'order'];

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
}
