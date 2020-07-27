<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;

class LessonController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return Lesson::all();
    }

    public function show(Lesson $lesson)
    {
        return $lesson;
    }

    public function store(Request $request)
    {
        $lesson = Lesson::create($request->all());

        return response()->json($lesson, 201);
    }

    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return response()->json($lesson, 200);
    }

    public function delete(Lesson $lesson)
    {
        $lesson->delete();

        return response()->json(null, 204);
    }
}
