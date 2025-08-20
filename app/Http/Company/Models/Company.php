<?php

namespace App\Http\Company\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name','company_code','logo','address','contact_person','industry_id',];
}