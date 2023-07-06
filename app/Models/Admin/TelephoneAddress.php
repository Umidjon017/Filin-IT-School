<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelephoneAddress extends Model
{
    use HasFactory;

    protected $fillable = ['telephone', 'address'];
}
