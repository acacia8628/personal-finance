<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenditureBudgetBreakdown extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'expenditure_category_id',
        'name',
        'value',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function expenditureCategory()
    {
        return $this->belongsTo(ExpenditureCategory::class);
    }
}
