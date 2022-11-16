<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'is_other',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function incomeRecords()
    {
        return $this->hasMany(IncomeRecord::class);
    }
}
