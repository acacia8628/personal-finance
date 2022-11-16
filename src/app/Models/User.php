<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function expenditureRecords()
    {
        return $this->hasMany(ExpenditureRecord::class);
    }

    public function incomeRecords()
    {
        return $this->hasMany(IncomeRecord::class);
    }

    public function fixedCosts()
    {
        return $this->hasMany(FixedCost::class);
    }

    public function expenditureCategories()
    {
        return $this->hasMany(ExpenditureCategory::class);
    }

    public function incomeCategories()
    {
        return $this->hasMany(IncomeCategory::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function fixedTermSavings()
    {
        return $this->hasMany(FixedTermSaving::class);
    }

    public function savings()
    {
        return $this->hasMany(Saving::class);
    }

    public function expenditureBudgetBreakdowns()
    {
        return $this->hasMany(ExpenditureBudgetBreakdown::class);
    }
}
