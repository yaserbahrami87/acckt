<?php

namespace App\Http\Controllers;

use App\verify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $dateNow = verta();
        $this->dateNow = $dateNow->format('Y/m/d');
        $this->timeNow = $dateNow->format('H:i:s');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $check_verify= verify::where('tel','=',Auth::user()->tel)
//                                ->where('verify','=',1)
//                                ->where('type','=','tel_verify')
//                                ->where('date_fa','=',$this->dateNow)
//                                ->latest()
//                                ->first();
        $check_verify=$this->get_verify(NULL,Auth::user()->tel,NULL,1,'tel_verify',$this->dateNow,NULL,'first');

        $verifyTel=false;
        if(isset($check_verify->code))
        {
            $check_verify->created_at=$check_verify->created_at->addMinutes(30);

            if( $check_verify->created_at>Carbon::now())
            {
                $verifyTel=true;
            }
        }


        return view('panelUser.index')
                    ->with('verifyTel',$verifyTel);
    }
}
