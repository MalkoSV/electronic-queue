<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Task;
use Illuminate\Http\Request;

class LogsController extends Controller
{

    public function show($status)
    {
        //        $queue = DB::table('tasks')
        //          ->join('logs', 'task_id', '=', 'tasks.id')
        //          ->where('status', 0)
        //          ->select('logs.id', 'name', 'created_at')
        //          ->orderBy('created_at', 'desc')
        //          ->get();

        $queue = Log::where('status', $status)
          ->orderBy('created_at', 'desc')
          ->get();
        $title = $status ? 'Уже обрабатываются' : 'Еще ожидают в очереди' ;

        return view('queue', compact('queue', 'title'));
    }

    public function create($id)
    {
        Log::create(
          [
            'task_id' => $id,
            'status'  => 0,
          ]

        );
    }

    public function getToWork()
    {
        $record         = Log::where('status', 0)->first();
        $workId         = $record->id;
        $record->status = 1;
        $record->save();

        return view('towork', compact('workId'));
    }


}
