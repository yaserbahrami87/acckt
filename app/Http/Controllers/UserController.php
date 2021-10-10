<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {

        $this->validate($request,[
            'fname'         =>'nullable|persian_alpha|max:20',
            'lname'         =>'nullable|persian_alpha|max:100',
            'tel'           =>'nullable|iran_mobile|',
            'email'         =>'nullable|email|',
            'image_profile' =>'nullable|max:600|mimes:jpeg,jpg,png'
        ]);
        $status=$user->update($request->all());
        if($status)
        {
            if($request->has('image_profile')&&($request->file('image_profile')->isvalid()))
            {
                $file=$request->file('image_profile');
                $image_profile="profile_".$user->tel.".".$request->file('image_profile')->extension();
                $path=public_path('images/users/');
                $files=$request->file('image_profile')->move($path,$image_profile);
                if($files)
                {
                    $user->image_profile=$image_profile;
                    $user->save();
                    alert()->success('بروزرسانی با موفقیت انجام شد')->persistent('بستن');
                }
                else
                {
                    alert()->error('خطا در بارگذاری عکس')->persistent('بستن');
                }
            }

        }
        else
        {
            alert()->error('خطا در بروزرسانی ')->persistent('بستن');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //نمایش پروفایل کاربر
    public function profile()
    {
        return view('panelUser.profile');
    }

    public function amountcapitalCreate()
    {
        return view('panelUser.amountCapital_insert');
    }

    public function amountcapitalUpdate(User $user,Request $request)
    {
        $this->validate($request,[
            'amountcapitals_id'     =>'required|numeric',
        ]);

        $status=$user->update($request->all());
        if($status)
        {
            alert()->success('اطلاعات میزان سرمایه با موفقیت بارگذاری شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت اطلاعات میزان سرمایه')->persistent('بستن');
        }

        return back();

    }

    public function venturecapitalCreate()
    {
        return view('panelUser.venturecapital_insert');
    }

    public function venturecapitalUpdate(User $user,Request $request)
    {

        $this->validate($request,[
            'investmentIndex_id'    =>'required|numeric'
        ]);
        $status=$user->update($request->all());
        if($status)
        {
            alert()->success('اطلاعات سرمایه گذاری خطرپذیر با موفقیت بارگذاری شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت اطلاعات سرمایه گذاری خطرپذیر')->persistent('بستن');
        }

        return back();


    }
}
