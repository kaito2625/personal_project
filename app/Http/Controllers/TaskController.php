<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class TaskController extends Controller
{
    public function index(Folder $folders){
        
        return view('tasks.index')->with(['folders' => $folders->get()]);
    }
    
    
}
