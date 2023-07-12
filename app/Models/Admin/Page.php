<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'body', 'url', 'status',
        'meta_title', 'meta_description', 'meta_keywords'
    ];

    const FILE_PATH = 'admin/images/pages/';

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($item) {
            foreach ($item->images as $image) {
                if (file_exists(self::FILE_PATH.$image['image'])){
                    unlink(self::FILE_PATH.$image['image']);
                }
            }
        });
    }

    public function deleteImages()
    {
        foreach ($this->images as $image) {
            if (file_exists(self::FILE_PATH.$image['image'])) {
                unlink(self::FILE_PATH.$image['image']);
            }
            $image->delete();
        }
    }

    public function images(): HasMany
    {
        return $this->hasMany(PageImage::class, 'page_id');
    }
}
