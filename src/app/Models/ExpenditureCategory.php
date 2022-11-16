<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenditureCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function expenditureRecords()
    {
        return $this->hasMany(ExpenditureRecord::class);
    }

    public function expenditureBudgetBreakdowns()
    {
        return $this->hasMany(ExpenditureBudgetBreakdown::class);
    }
}
