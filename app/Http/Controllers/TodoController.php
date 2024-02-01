<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view("pages.todos", ["todos" => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.add-todo");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo '<pre>';
        print_r($request->all());

        $this->validate($request, [
            "title" => "required",
            'description' => ['required', 'string'],
        ]);


        $todo = Todo::create($request->all());
        return redirect()->route('todos')->with('success', 'New task successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        return view('pages.edit-todo', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => ['required', 'string'],
        ]);
        $todo = Todo::find($id);
        if (!is_null($todo)) {
            $todo->update($request->all());
            return redirect()->route('todos')->with('success', 'Task details updated successfully.');
        } else {
            return redirect()->route('')->with('error', '');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $todo = Todo::find($id);
        if (!is_null($todo)) {
            $todo->delete();
            return redirect()->route('todos')->with('success', 'Task deleted successfully');
        }
    }
}
