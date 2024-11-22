<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\ApiResource;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->paginate(10);
        return response()->json($tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string',
            'due_date' => 'nullable|date', 
            'user_id' =>'required'
        ]);

        $store = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
            'user_id' => $request->user_id
        ]);

        return new ApiResource (
            $store, "Berhasil", "True"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = Task::find($id);
        // return response()->json(
        //     ["pesan" => "Berhasil",
        //     "status" => "Completed",
        //     "data" => $tasks]);

        return new ApiResource (
            $tasks, "Berhasil", "True"
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::find($id);
        $tasks->delete();

        return new ApiResource (
            $tasks, "Berhasil dihapus", "True"
        );
    }
}