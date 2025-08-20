<?php

namespace App\Http\Inquiry\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = ['material','quantity','company_id',];
}