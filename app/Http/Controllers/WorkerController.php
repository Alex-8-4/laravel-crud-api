<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $workers = Worker::all();

        return response()->json($workers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
        ]);

        try {
            $worker = Worker::create($validatedData);
        } catch (\Illuminate\Database\UniqueConstraintViolationException $exception) {
            return response('Worker with this params already exist', 500);
        }

        return response()->json($worker, 201);
    }

    public function read(Worker $worker): \Illuminate\Http\JsonResponse
    {
        return response()->json($worker);
    }

    public function update(Request $request, worker $worker): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
        ]);
        $worker->update($validatedData);

        return response()->json($worker, 200);
    }

    public function destroy(Worker $worker): \Illuminate\Http\JsonResponse
    {
        $worker->delete();

        return response()->json(null, 204);
    }
}
