<?php

namespace App\Http\Branch\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','contact_person','company_id',];
}