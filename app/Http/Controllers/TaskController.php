<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Folder;
use App\Models\tasks;
use App\Http\Requests\CreateTask;

class TaskController extends Controller
{
    public function index(Folder $folders){
        return view('tasks.index')->with(['folders' => $folders->getByLimit()]);
    }
    
    public function show(Folder $folder, Tasks $tasks){
        return view('tasks.show')->with(['folder' => $folder, 'tasks' => $tasks->where('folder_id', $folder->id)->get()]);
    }
    
     public function create(Folder $folder){
        return view('tasks.create')->with(['folder' => $folder]);
    }
    public function store(CreateTask $request, Tasks $tasks){
        $tasks->folder_id = $request->folder_id;
        $tasks->title = $request->title;
        $tasks->due_date = $request->due_date;
        $tasks->save();
        return redirect('/folders/'.$request->folder_id.'/tasks');
    }
    
    public function edit(Folder $folder, Tasks $task){
        return view('tasks.edit')->with(['folder' => $folder, 'tasks' => $task]);
    }
    
    public function update(CreateTask $request, Folder $folder, Tasks $task){
        $task->folder_id = $request->folder_id;
        $task->title = $request->title;
        $task->due_date = $request->due_date;
        $task->save();
        return redirect('/folders/'.$request->folder_id.'/tasks');
    }
    
    public function delete(Folder $folder, Tasks $task){
        $task->delete();
        return redirect('/folders/'.$folder->id.'/tasks');
    }
}
