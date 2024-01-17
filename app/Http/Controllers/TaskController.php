<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::paginate();

        return TaskResource::collection($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->given_name = $request->given_name;
        $task->surname = $request->surname;
        $task->email = $request->email;
        $task->phone = $request->phone;
        $task->home_name = $request->home_name;
        $task->street = $request->street;
        $task->suburb = $request->suburb;
        $task->state = $request->state;
        $task->postcode = $request->postcode;
        $task->country = $request->country;
        if($task->save()){
            return new TaskResource($task);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return new TaskResource($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->given_name = $request->given_name;
        $task->surname = $request->surname;
        $task->email = $request->email;
        $task->phone = $request->phone;
        $task->home_name = $request->home_name;
        $task->street = $request->street;
        $task->suburb = $request->suburb;
        $task->state = $request->state;
        $task->postcode = $request->postcode;
        $task->country = $request->country;
        if($task->save()){
            return new TaskResource($task);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        if($task->delete()){
            return new TaskResource($task);
        }
    }
}
