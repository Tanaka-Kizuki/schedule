<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index() {
        $datas = Schedule::orderBy('date','desc')->get();
        return view('welcome',['datas'=>$datas]);
    }

    public function create(Request $request) {
        $request->date = str_replace("T"," ",$request->date);
        $request->date = $request->date.":00";
        $schedule = new Schedule();
        $data = [
            'company' => $request->company,
            'url' => $request->url,
            'status' => $request->status,
            'date' => $request->date,
            'memos' => $request->memos
        ];
        $schedule->fill($data);
        $schedule->save();
        return redirect('/');
    }

    public function show($id) {
        $form = Schedule::find($id)->first();
        return view('show',['form' => $form]);
    }


}
