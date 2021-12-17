<?php

namespace App\Http\Controllers;

use App\amountcapital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmountcapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amountcapital=amountcapital::join('users','users.id','=','amountcapitals.user_id')
            ->where('amountcapitals.user_id','=',Auth::user()->id)
            ->select('amountcapitals.*')
            ->first();
//        if(is_null($amountcapital) )
//        {
            return view('acckt_sarmayeh.pages.panel.amountCapital_insert');
//        }
//        else
//        {
//            return view('acckt_sarmayeh.pages.panel.amountCapital_edit')
//                ->with('amountcapital',$amountcapital);
//        }
        //return view('panelUser.amountCapital_insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'capitalgroup_id'       =>'required|numeric|',
            'capitalcategory_id'    =>'required|numeric|',
            'trl'                   =>'required|array|',
            'amountcapitals_id'     =>'required|numeric|',
            'description'           =>'required|string|max:250',
            'description_startup'   =>'nullable|string|max:250',
            'injectioncapital_id'   =>'required|numeric',
            'outstanding_investment'=>'nullable|string|max:250',
            'request'               =>'nullable|string|max:250',
            'statute'               =>'nullable|max:600|mimes:jpeg,jpg,png,pdf',
        ]);

        $request['trl']=implode(',',$request->trl);
        $status=amountcapital::create($request->all()+
            [
                'user_id'   =>Auth::user()->id
            ]
        );

        if($request->has('statute')&&($request->file('statute')->isvalid()))
        {
            $file=$request->file('statute');
            $statute="statute_".$status->id.".".$request->file('statute')->extension();
            $path=public_path('documents/users/sarmayeh');
            $files=$request->file('statute')->move($path,$statute);
            if($files)
            {
                $status->statute=$statute;
                $status->save();
            }
            else
            {
                alert()->error('خطا در بارگذاری فایل')->persistent('بستن');
            }
        }



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

    /**
     * Display the specified resource.
     *
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function show(amountcapital $amountcapital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function edit(amountcapital $amountcapital)
    {
        if($amountcapital->user_id==Auth::user()->id)
        {
            return view('acckt_sarmayeh.pages.panel.amountCapital_edit')
                            ->with('amountcapital',$amountcapital);
        }
        else
        {
            alert()->error('این سرمایه مربوط به شما نمی باشد')->persistent('بستن');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, amountcapital $amountcapital)
    {
        $this->validate($request,[
            'capitalgroup_id'       =>'required|numeric|',
            'capitalcategory_id'    =>'required|numeric|',
            'trl'                   =>'required|array|',
            'amountcapitals_id'     =>'required|numeric|',
            'description'           =>'required|string|max:250',
            'description_startup'   =>'nullable|string|max:250',
            'injectioncapital_id'   =>'required|numeric',
            'outstanding_investment'=>'nullable|string|max:250',
            'request'               =>'nullable|string|max:250',
        ]);
        $request['trl']=implode(',',$request->trl);
        $status=$amountcapital->update($request->all());
        if($request->has('statute')&&($request->file('statute')->isvalid()))
        {
            $file=$request->file('statute');
            $statute="statute_".$amountcapital->id.".".$request->file('statute')->extension();
            $path=public_path('images/users/');
            $files=$request->file('statute')->move($path,$statute);
            if($files)
            {
                $amountcapital->statute=$statute;
                $amountcapital->save();
            }
            else
            {
                alert()->error('خطا در بارگذاری فایل')->persistent('بستن');
            }
        }

        if($status)
        {
            alert()->success('اطلاعات با موفقیت بروزرسانی شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در بروزرسانی')->persistent('بستن');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function destroy(amountcapital $amountcapital)
    {
        if($amountcapital->user_id==Auth::user()->id)
        {
            $status=$amountcapital->delete();
            if($status)
            {
                alert()->success('سرمایه با موفقیت حذف شد')->persistent('بستن');
            }
            else
            {
                alert()->error('خطا در حذف')->persistent('بستن');
            }

            return back();
        }
        else
        {
            alert()->error('شما مجاز به حذف این سرمایه نمی باشید')->persistent('بستن');
            return back();
        }
    }

    public function my()
    {
        $amountcapitals=amountcapital::where('user_id','=',Auth::user()->id)
                        ->orderby('id','desc')
                        ->paginate(20);

        foreach ($amountcapitals as $item)
        {
            switch ($item->capitalgroup_id)
            {
                case '1':$item->capitalgroup="تجارت الکترونیک";
                            break;
                case '2':$item->capitalgroup="سلامت";
                            break;
                case '3':$item->capitalgroup="گردشگری";
                            break;
                case '4':$item->capitalgroup="مرتبط با IT";
                            break;
                default:$item->capitalgroup='خطا';
            }

        }

        return view('acckt_sarmayeh.pages.panel.amountCapital_my')
                            ->with('amountcapitals',$amountcapitals);
    }
}
