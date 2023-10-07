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
        return view('tasks.index')->with(['folders' => $folders->get()]);
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
        $tasks->status = $request->status;
        $tasks->due_date = $request->due_date;
        $tasks->save();
        return redirect('/folders/'.$request->folder_id.'/tasks');
    }
}
