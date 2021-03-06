<?php

namespace App\Http\Controllers;

use App\amountcapital;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

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
            'avatar'        =>'nullable|max:600|mimes:jpeg,jpg,png',
            'national_code' =>'nullable|numeric|min:12',
            'biography'     =>'nullable|string|',
            'birth_date'    =>'nullable|string|',
            'address'       =>'nullable|string|',
            'phone'         =>'nullable|numeric|',
            'site'          =>'nullable|url|',
            'university'    =>'nullable|string|',
            'faculty'       =>'nullable|string|',
            'study_field'   =>'nullable|string|',
            'major'         =>'nullable|string|',
            'instagram'     =>'nullable|string|',
            'linkedin'      =>'nullable|string|',
        ]);


        $status=$user->update($request->all());
        if($status)
        {
            if($request->has('avatar')&&($request->file('avatar')->isvalid()))
            {
                $file=$request->file('avatar');
                $image_profile="profile_".$user->tel.".".$request->file('avatar')->extension();
                $path=public_path('images/users/');
                $files=$request->file('avatar')->move($path,$image_profile);
                if($files)
                {
                    $user->avatar=$image_profile;
                    $user->save();
                }
                else
                {
                    alert()->error('?????? ???? ???????????????? ??????')->persistent('????????');
                }
            }
            alert()->success('?????????????????? ???? ???????????? ?????????? ????')->persistent('????????');

        }
        else
        {
            alert()->error('?????? ???? ?????????????????? ')->persistent('????????');
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


    //?????????? ?????????????? ??????????
    public function profile()
    {
        if(Auth::user()->type==2)
        {

            return view('sarmayeh.index');
        }
        else
        {

            return view('panelUser.profile');
        }

    }

    public function amountcapitalCreate()
    {
//        $user=Auth::user()->amountcapital->select('users.*')->first();
//        $amountcapital=Auth::user()->amountcapital->first();
//        $amountcapital=user::join('amountcapitals','users.id','=','amountcapitals.user_id')
//                    ->where('amountcapitals.user_id','=',Auth::user()->id)
//                    ->first();
//
//        if(is_null($amountcapital) )
//        {
//            return view('acckt_sarmayeh.pages.amountCapital_insert')
//                        ->with('amountcapital',$amountcapital);
//        }
//        else
//        {
//
//        }

    }

    public function amountcapitalUpdate(User $user,Request $request)
    {
//        $this->validate($request,[
//            'amountcapitals_id'     =>'required|numeric',
//        ]);
//
//        $status=$user->update($request->all());
//        if($status)
//        {
//            alert()->success('?????????????? ?????????? ???????????? ???? ???????????? ???????????????? ????')->persistent('????????');
//        }
//        else
//        {
//            alert()->error('?????? ???? ?????? ?????????????? ?????????? ????????????')->persistent('????????');
//        }
//
//        return back();

    }

    public function venturecapitalCreate()
    {

    }

    public function venturecapitalUpdate(User $user,Request $request)
    {


    }

    public function users()
    {
        $users=User::where('type','=',1)
                        ->orderby('id','desc')
                        ->paginate(30);

        return view('sarmayeh.users')
                        ->with('users',$users);
    }

    public  function showUser(User $user)
    {
        switch($user->amountcapitals_id)
        {
            case 1:$user->amountcapitals_id="???????? ???? ???? ?????????????? ??????????";
                    break;
            case 2:$user->amountcapitals_id="?????? ???? ???? ???? ?????????????? ??????????";
                    break;
            case 3:$user->amountcapitals_id="?????? ???? ???? ?????????????? ??????????";
                break;
            default:$user->amountcapitals_id="??????";
                break;
        }


        switch ($user->investmentindex_id)
        {
            case 1:$user->investmentindex_id="????";
                    break;
            case 2:$user->investmentindex_id="??????????";
                break;
            case 3:$user->investmentindex_id="????????";
                break;
            default:$user->investmentindex_id="??????";
                break;

        }
        return view('sarmayeh.profile')
                    ->with('user',$user);
    }

    public function userFurtherInformationCreate()
    {
        if(Auth::user()->type==1)
        {
            return view('acckt_sarmayeh.pages.panel.further_information');
        }
        elseif(Auth::user()->type==2)
        {
            return view('acckt_master.pages.panel.further_information');
        }

    }

    public function socialNetworksCreate()
    {
        if(Auth::user()->type==1)
        {
            return view('acckt_sarmayeh.pages.panel.social_networks');
        }
        elseif(Auth::user()->type==2)
        {
            return view('acckt_master.pages.panel.social_networks');
        }
    }

    public function changePassword()
    {
        return view('acckt_master.pages.panel.forgot_password');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'password'  =>'required|string|min:8|confirmed'
        ]);

        $user=Auth::user();

        $status=$user->update(
        [
            'password'  =>Hash::make($request->password),
        ]);

        if($status)
        {
            alert()->success('?????? ???? ???????????? ?????????? ??????')->persistent('????????');
        }
        else
        {
            alert()->error('?????? ???? ?????????? ?????? ????????')->persistent('????????');
        }

        return back();
    }
}
