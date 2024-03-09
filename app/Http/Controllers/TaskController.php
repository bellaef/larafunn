<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        //$tasks = Task::all();
        $tasks = DB::table('tasks')->get();
        return view('task.index',compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request) {
        $validatedData = $request->validated();
        //Task::create($validatedData);
        DB::table('tasks')->insert($validatedData);
        return redirect('/task');
    }

    //public function show(Task $task){
    public function show($taskId){
        $task = DB::table('tasks')->find($taskId); //Tambahan Query Builder
        return view('task.show', compact('task'));
    }

    //public function edit(Task $task){
    public function edit($taskId){
        $task = DB::table('tasks')->find($taskId); //tambahan Query Builder
        return view('task.edit', compact('task'));
    }

    //public function update(UpdateTaskRequest $request, Task $task){
    public function update(UpdateTaskRequest $request, $taskId){
        $validatedData = $request->validated();
        //$task->update($validatedData);
        //return redirect("/task/{$task->id}");
        DB::table('tasks')->where('id', $taskId)->update($validatedData);
        return redirect("/task/{$taskId}");
    }

    public function delete($taskId){
        //$task->delete();
        DB::table('tasks')->where('id', $taskId)->delete();
        return redirect('/task');
    }
}
