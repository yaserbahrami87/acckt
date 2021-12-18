<?php

namespace App\Http\Controllers;
use App\demand;
use App\User;
use App\verify;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Kavenegar;

class BaseController extends Controller
{
    public function __construct()
    {
        $dateNow = verta();
        $this->dateNow = $dateNow->format('Y/m/d');
        $this->timeNow = $dateNow->format('H:i:s');
    }

    public function get_user($id=NULL,$tel=NULL,$type=NULL,$paginate='get')
    {
        return User::when($id,function($query) use ($id)
        {
            return $query->where('id','=',$id);
        })
        ->when($tel,function($query) use($tel)
        {
            return $query->where('tel','=',$tel);
        })
        ->when($type,function($query) use ($type)
        {
            return $query->where('type','=',$type);
        })
        ->when($paginate=='get',function($query) use ($paginate)
        {
            return $query->get();
        })
        ->when($paginate=='paginate',function($query) use ($paginate)
        {
            return $query->paginate($this->get_paginate());
        })
        ->when($paginate=='first',function($query) use ($paginate)
        {
            return $query->first();
        });
    }

    public function sendSMS($msg,$tel)
    {

        try {
            $sender = "10008888088080";
            $message = $msg;
            $receptor = array($tel);
            $result = Kavenegar::Send($sender, $tel, $message);

            if ($result) {
                foreach ($result as $r) {
                    $messageid = $r->messageid;
                    $message = $r->message;
                    $status = $r->status;
                    $statustext = $r->statustext;
                    $sender = $r->sender;
                    $receptor = $r->receptor;
                    $date = $r->date;
                    $cost = $r->cost;
                }
                $msg=[];
                return $msg;
            }

        } catch (\Kavenegar\Exceptions\ApiException $e) {
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            $msg=[];
            $msg['msg'] = $e->errorMessage();
            $msg['status']=false;
            return $msg;

        } catch (\Kavenegar\Exceptions\HttpException $e) {
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            $msg=[];
            $msg['msg'] = $e->errorMessage();
            $msg['status'] =false;
            return $msg;
        }
    }

    public function get_verify($id=NULL,$tel=NULL,$code=NULL,$verify=NULL,$type=NULL,$date_fa=NULL,$time_fa=NULL,$paginate='first')
    {
        return verify::when($id,function($query) use ($id)
        {
            return $query->where('id','=',$id);
        })
        ->when($tel,function($query) use ($tel)
        {
            return $query->where('tel','=',$tel);
        })
        ->when($code,function($query) use($code)
        {
            return $query->where('code','=',$code);
        })
        ->when($verify,function($query) use($verify)
        {
            return $query->where('verify','=',$verify);
        })
        ->when($type,function($query) use($type)
        {
            return $query->where('type','=',$type);
        })
        ->when($date_fa,function($query) use($date_fa)
        {
            return $query->where('date_fa','=',$date_fa);
        })
        ->when($time_fa,function($query) use($time_fa)
        {
            return $query->where('time_fa','=',$time_fa);
        })
        ->when($paginate=='get',function($query)
        {
            return $query->get();
        })
        ->when($paginate=='paginate',function($query)
        {
            return $query->paginate($this->get_paginate());
        })
        ->when($paginate=='first',function($query)
        {
            $query->latest();
            return $query->first();
        });
    }

    public function get_paginate()
    {
        $count=30;
        return $count;
    }

    //تبدیل تاریخ میلادی به شمسی
    public function changeTimestampToShamsi($date)
    {
        $dateMiladi=new verta($date);
        return ($dateMiladi->hour.":".$dateMiladi->minute."  ".$dateMiladi->year."/".$dateMiladi->month."/".$dateMiladi->day);
    }

    //تبدیل تاریخ شمسی به میلادی
    public function changeTimestampToMilad($date)
    {
        $dateShamsi=Verta::parse($date);
        $dateMiladi= (Verta::getGregorian($dateShamsi->year,$dateShamsi->month,$dateShamsi->day));
        $dateMiladi=($dateMiladi[0].'-'.$dateMiladi[1].'-'.$dateMiladi[2]);
        return $dateMiladi;
    }

    public function get_demand($id=NULL,$user_id=NULL,$idea_id=NULL,$condition=NULL,$status=NULL,$date_fa=NULL,$paginate='paginate')
    {
        return demand::when($id,function($query) use($id)
        {
            return $query->where('id','=',$id);
        })
        ->when($user_id,function($query) use($user_id)
        {
            return $query->where('user_id','=',$user_id);
        })
        ->when($idea_id,function($query) use($idea_id)
        {
            return $query->where('idea_id','=',$idea_id);
        })
        ->when($condition,function($query) use($condition)
        {
            return $query->where($condition[0],$condition[1],$condition[2]);
        })
        ->when($status,function($query) use($status)
        {
            return $query->where('status','=',$status);
        })
        ->when($paginate=='get',function($query)
        {
            return $query->get();
        })
        ->when($paginate=='paginate',function($query)
        {
            return $query->paginate($this->get_paginate());
        })
        ->when($paginate=='first',function($query)
        {
            $query->latest();
            return $query->first();
        });

    }
}
