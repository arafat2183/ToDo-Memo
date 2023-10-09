<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toDoAllData = Todo::latest()->get();
        return view("toDoView", compact('toDoAllData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Todo::create($request->only('todo'));
        return redirect()->route('todo')->with(['success' => 'Your memo is created successfully!']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        Todo::where('id', $request->id)->update($request->only('todo'));
        return $this->redirectBackWithSuccess('Your memo is Updated successfully!');
//        return redirect()->route('todo')->with(['success' => 'Your memo is Updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $todo)
    {
        Todo::where('id', $todo)->delete();
        return redirect()->route('todo')->with(['success' => 'Your memo is successfully Deleted from Database!']);
    }

    private function redirectBackWithSuccess(string $message): RedirectResponse
    {
        return redirect()->route('todo')->with('success', $message);
    }
}
