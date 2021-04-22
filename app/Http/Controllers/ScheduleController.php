<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index() {
        $datas = Schedule::orderBy('date','desc');
        return view('welcome');
    }

    public function create(Request $request) {
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


}
