<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 

        $tasks = Task::select('tasks.*')
            ->join('users as u', 'tasks.user_id', '=', 'u.id')
            ->where('u.email', $user->email)
            ->get();

        return view('todo', compact('tasks'));
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'task' => 'nullable',
        ]);

        
        $task = new Task;
        $task->task = $validatedData['task'];
        $task->user_id = Auth::id(); 
        $task->save();

        return redirect()->route('todos.index')->with('success', 'Task created successfully!');
    }

    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('todos.index');
    }

    public function editTask($id){
        $task = Task::find($id);
        return view('todoedit', compact('task'));

    }

    public function update(Request $r){
        $task = Task::find($r->task_id);
        $task->task = $r->task;
        $task->save();

        return redirect()->route('todos.index');
    }
}
