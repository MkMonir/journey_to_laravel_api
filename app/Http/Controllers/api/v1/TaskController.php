<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->json([
            "data"=> $tasks
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = new Task;

        $task->name = $request->name;
        $task->is_completed = $request->is_completed;

        $task->save();

        return response()->json([
            "message" => "Task created successfully",
            "data" => $task
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $task  = Task::find($id);

        return response()->json([
            "data" => $task
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->name = $request->name;
        $task->is_completed = $request->is_completed;

        $task->save();

        return response()->json([
            "message" => "Task updated successfully",
            "data" => $task
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            "message" => "Task deleted successfully",
            
        ], 200);
    }
}
