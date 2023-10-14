<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Folder;
use App\Models\tasks;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function create(){
        return view('folders.create');
    }
    
    public function store(Request $request, Folder $folder){
       $folder->title = $request->title;
       $folder->user_id = \Auth::id();
       $folder->save();
        return redirect('/folders');
    }
    
}
