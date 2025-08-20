<?php

namespace App\Http\MaterialCategory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterialCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}