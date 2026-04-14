<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    // Tüm görevleri listele
    public function index(): JsonResponse
    {
        $tasks = Task::latest()->get();

        return response()->json([
            'success' => true,
            'data'    => $tasks,
        ]);
    }

    // Yeni görev oluştur
    public function store(TaskRequest $request): JsonResponse
    {
        $task = Task::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Görev oluşturuldu.',
            'data'    => $task,
        ], 201);
    }

    // Tek görevi getir
    public function show(Task $task): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $task,
        ]);
    }

    // Görevi güncelle
    public function update(TaskRequest $request, Task $task): JsonResponse
    {
        $task->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Görev güncellendi.',
            'data'    => $task,
        ]);
    }

    // Görevi sil
    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            'success' => true,
            'message' => 'Görev silindi.',
        ]);
    }
}
