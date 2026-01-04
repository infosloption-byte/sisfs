<?php

namespace App\Http\Controllers;


use DB;
use PDF;
use Image;
use Sentinel;
use Response;
use Exception;
use Carbon\Carbon;
use App\Classes\Functions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;

use App\Modules\RegistrationRequestManage\Logics\RegistrationRequestLogic;
use App\Modules\InquiryManage\Logics\InquiryLogic;
use System\Employee\Models\Employee;

class FrontController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FrontController Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles REST api requests from mobile application.
    |
    */
    
    /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct(Functions $common,RegistrationRequestLogic $requestLogic,InquiryLogic $inquiryLogic)
    {
        $this->common = $common;
        $this->requestLogic = $requestLogic;
        $this->inquiryLogic = $inquiryLogic;
    }

    public function index(Request $request)
    {
        return view('front.index');
    }

    public function aboutusView(Request $request)
    {
        return view('front.about-us');
    }

    public function capabilityView(Request $request)
    {
        // $employees = Employee::select('first_name','last_name','image')->where('type','employee')->whereNotIn('id',[])->get();

        // return view('front.capability-of-us',compact('employees'));
        return view('front.capability-of-us');
    }

    public function csrView(Request $request)
    {
        return view('front.csr');
    }

    public function faqView(Request $request)
    {
        return view('front.faq');
    }

    public function industryView(Request $request)
    {
        return view('front.industry');
    }

    public function serviceView(Request $request)
    {
        return view('front.services');
    }

    public function contactusView(Request $request)
    {
        return view('front.contact-us');
    }

    public function joinusView(Request $request)
    {
        return view('front.join-us');
    }

    public function createEmployeeRequest(Request $request)
    {
        $details = $this->requestLogic->createRegisterRequest($request);

        return response()->json($details);
    }

    public function createInquiry(Request $request)
    {
        $details = $this->inquiryLogic->createInquiry($request);

        return response()->json($details);
    }

    public function systemSupport(Request $request)
    {
        return view('support.index');
    }

}
