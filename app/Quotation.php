<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Quotation extends Model
{
    //
    protected $fillable = [
        'PlanId', 'PlanName', 'ContTerm', 'BenefitDeath',"CriticalIllness","AccidentialDeath","HospitalBenefit","TotalMonthlyContribution","TotalAnuallyRegularContribution","user_id"    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
