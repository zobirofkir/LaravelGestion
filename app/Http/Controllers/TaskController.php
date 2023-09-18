<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard");
    }

    public function GetTask()
    {
        $tasks = Task::all();
    
        return view("GetTask", compact("tasks"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("PostTasks");
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email", // Add email validation
            "date" => "required|date",   // Add date validation
            "status" => "required"
        ]);
    
        $task = new Task(); // Use a more conventional variable name
        $task->name = $request->input('name');
        $task->email = $request->input('email');
        $task->date = $request->input('date');
        $task->status = $request->input('status');
        $task->save();
    
        return redirect("/Get/Task");
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $GetEdit = Task::findOrFail($id);

        if ($GetEdit) {
            return view("updateTask", compact('GetEdit'));
        } else {
            return redirect("/dashboard");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $GetEdit = Task::findOrFail($id);
        
        if ($GetEdit){
            $GetEdit->name = $request->input("name"); 
            $GetEdit->email = $request->input("email"); 
            $GetEdit->date = $request->input("date"); 
            $GetEdit->status = $request->input("status"); 
            $GetEdit->save();
            return redirect("/Get/Task");
        }else{
            return abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DeleteTask = Task::findOrFail($id);
        if ($DeleteTask){
            $DeleteTask->delete();
            return redirect("/Get/Task");
        }else{
            return abort(404);
        }
    }
}
