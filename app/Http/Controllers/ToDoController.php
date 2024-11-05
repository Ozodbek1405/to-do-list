<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    protected $todos = [];

    public function __construct()
    {
        if (file_exists(storage_path('todos.json'))) {
            $this->todos = json_decode(file_get_contents(storage_path('todos.json')), true);
        }
    }

    public function index()
    {
        return view('index');
    }

    public function getTodos()
    {
        return response()->json(array_values($this->todos));
    }

    public function store(Request $request)
    {
        if (rand(1, 5) === 5) {
            sleep(5);
        }

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $newTodo = [
            'id' => uniqid(),
            'title' => $request->input('title'),
            'completed' => false,
        ];
        $this->todos[] = $newTodo;

        if (file_put_contents(storage_path('todos.json'), json_encode($this->todos)) === false) {
            return response()->json(['error' => trans('translation.error_files')], 500);
        }

        return response()->json($newTodo, 201);
    }


    public function destroy($id)
    {
        $this->todos = array_filter($this->todos, function ($todo) use ($id) {
            return $todo['id'] !== $id;
        });

        if (file_put_contents(storage_path('todos.json'), json_encode($this->todos)) === false) {
            return response()->json(['error' => trans('translation.error_files')], 500);
        }

        return response()->json(['success' => true]);
    }


    public function readme()
    {
        $readmeContent = file_get_contents(base_path('README.md'));
        return response($readmeContent, 200)
            ->header('Content-Type', 'text/plain')
            ->header('X-Robots-Tag', 'noindex');
    }

    public function about()
    {
        return response()->view('about')->header('X-Robots-Tag', 'noindex');
    }
}
