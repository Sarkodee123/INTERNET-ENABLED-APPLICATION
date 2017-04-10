<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Http\Request;
use Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Getting all tasks
        $tasks = Task::latest()->orderBy('created_at','desc')->get();
        if($tasks->count()<1) {
            Session::flash('warning', 'No tasks found');
            return view('all', compact('tasks'));
        }
        else{
//            Session::flash('info', $tasks->count().' task(s) found');
            return view('all',compact('tasks'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        Session::flash('info',' Add a task');

        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        //
//        $store = new Task();
//        $store->name = $request->name;
//        $store->status = $request->status;
//        $store->save();

        Task::create($request->all());
        Session::flash('success',' new task created');

        return redirect(route('add_task.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //grab a particular record
        $task=Task::find($id);
       // dd($task);
        Session::flash('info', ' task ready for update');

        return view('edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        //
        Task::find($id)->update($request->all());
        Session::flash('info', ' task updated');

        return redirect(route('add_task.index'));
//        $updatedTask = Task::find($id);
//        dd($updatedTask);
//        $updatedTask->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Task::destroy($id);
        Session::flash('danger',' task deleted');

        return redirect(route('add_task.index'));
    }
}
