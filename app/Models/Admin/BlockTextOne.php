<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockTextOne extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];
}
