<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterButton extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'status', 'order'];
}
