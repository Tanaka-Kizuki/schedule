<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index() {
        // $datas = Schedule::orderBy('date','desc');
        return view('welcome');
    }

    public function create(Request $request) {
        $request->date = str_replace("T","&nbsp",$request->date);
        $request->date = $request->date.":00";
        $schedule = new Schedule();
        $data = [
            'company' => $request->company,
            'url' => $request->url,
            'status' => $request->status,
            'date' => "2019-10-04 15:25:07",
            'memos' => $request->memos
        ];
        $schedule->fill($data);
        $schedule->save();
        return redirect('/');
    }


}
