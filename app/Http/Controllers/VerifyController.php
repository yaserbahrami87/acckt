<?php

namespace App\Http\Controllers;

use App\verify;
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
            'type'      =>'tel',
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
}
