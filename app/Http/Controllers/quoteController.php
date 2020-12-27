<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\InferenceEngine;
use App\Quotations;
class quoteController extends Controller
{
    use InferenceEngine;

    public function index()
    {
        return view('quote');
    }
    public function create()
    {
        return view('quote');
    }
    public function show(Request $request)
    {
        $plan = $this->inferenceEngine($request);
        return view('result',compact('request', 'plan'));

    }
    public function saveQuotation(Request $request)
    {         
        return "haiiiiii";

        $id = Auth::user()->id;

        // $quotationDetail = new Quotations([
        //     'PlanId'=> $request->get('PlanId'),
        //     'PlanName'=> $request->get('PlanName'),
        //     'ContTerm'=> $request->get('ContTerm'),
        //     'PlanNo'=> $request->get('PlanNo'),
        //     'BenefitDeath' => $request->get('BenefitDeath'),
        //     'CriticalIllness' => $request->get('CriticalIllness'),
        //     'AccidentialDeath' => $request->get('AccidentialDeath'),
        //     'HospitalBenefit'=> $request->get('HospitalBenefit'),
        //     'TotalMonthlyContribution' => $request->get('TotalMonthlyContribution'),
        //     'TotalAnuallyRegularContribution' => $request->get('TotalAnuallyRegularContribution'),
        //     'user_id' => $id,
    
        // ]);
        // $quotationDetail->save();
        // return view();
    }
}
