<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function fillTable()
    {
        $tasks = Task::all();
        return view('main', compact('tasks'));
    }


    public function addTaskCounter($id)
    {
/*                $counter = DB::table('tasks')
                  ->where('id', $id)
                  ->value('counter');
                DB::table('tasks')->where('id', $id)->update(['counter' => ++$counter]);


                DB::table('logs')->insert([
                  'task_id' => $id,
                  'status'  => 0,
                ]);
*/
        $task = Task::find($id);
        $task->counter++;
        $task->save();

        (new LogsController())->create($id);

        return redirect()->route('main');
    }

}
