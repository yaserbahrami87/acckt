<?php

namespace App\Http\Controllers;

use App\verify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function show(verify $verify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function edit(verify $verify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, verify $verify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function destroy(verify $verify)
    {
        //
    }

    public function sendCodeTel()
    {
        $digit_random_number = mt_rand(100, 999999);
        $status=verify::create([
            'tel'       =>Auth::user()->tel,
            'code'      =>$digit_random_number,
            'type'      =>'tel_verify',
            'date_fa'   =>$this->dateNow,
            'time_fa'   =>$this->timeNow,

        ]);

        if($status)
        {
            $msg="کد فعال سازی:".$digit_random_number;
            $this->sendSMS($msg,Auth::user()->tel);
            alert()->success('کد فعال سازی به تلفن شما ارسال شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ارسال کد فعال سازی')->persistent('بستن');
        }

        return back();
    }

    public function checkCodeTel(Request $request)
    {
        $this->validate($request,[
            'code'  =>'required|numeric'
        ]);

        $verify=verify::where('code','=',$request->code)
                    ->where('type','tel_verify')
                    ->where('verify','=',1)
                    ->latest()
                    ->first();
        if(is_null($verify))
        {
            alert()->error('کد وارد شده اشتباه است')->persistent('بستن');
        }
        else
        {
            if($verify->tel==Auth::user()->tel)
            {
                $verify->created_at=$verify->created_at->addMinutes(30);
                if($verify->created_at>Carbon::now())
                {
                    $user=Auth::user();
                    $user->tel_verify=1;
                    $user->save();

                    //مقدار به 0 تغییر پیدا میکند
                    $verify->verify=0;
                    $verify->save();
                    alert()->success('شماره همراه شما فعال شد')->persistent('بستن');
                }
                else
                {
                    alert()->error('کد فعال سازی منقضی شده است')->persistent('بستن');

                }

            }
            else
            {
                alert()->error('کد وارد شده مروبط به تلفن شما نمی باشد')->persistent('بستن');
            }
        }
        return back();


    }

    public  function checkCodeLogin(Request $request)
    {
        $this->validate($request,[
            'tel'   =>'required|iran_mobile',
        ]);

        $digit_random_number = mt_rand(100, 999999);
        $status=verify::create([
            'tel'       =>$request->tel,
            'code'      =>$digit_random_number,
            'type'      =>'login',
            'date_fa'   =>$this->dateNow,
            'time_fa'   =>$this->timeNow,

        ]);

        if($status)
        {
            $msg="کد یکبار مصرف:".$digit_random_number;
            $this->sendSMS($msg,$request->tel);
            alert()->success('کد یکبار مصرف به تلفن شما ارسال شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ارسال کد یکبار مصرف')->persistent('بستن');
        }

        return back();
    }
}
