<?php

namespace App\Http\VendorCategory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name',];
}