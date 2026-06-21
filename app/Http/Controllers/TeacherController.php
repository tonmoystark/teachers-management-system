<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(Request $request)
    {
        $teachers = Teacher::when($request->search, function ($query) use ($request) {
            return $query->whereAny([
                'name',
                'email',
                'age',
                'role',
                'gender'
            ], 'like', '%' . $request->search . '%');
        })->get();
        return view('home', compact('teachers'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:teachers',
            'age' => 'required|integer|min:18|max:60',
            'role' => 'required|string',
            'gender' => 'required|string|in:m,f',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->age = $request->age;
        $teacher->role = $request->role;
        $teacher->gender = $request->gender;
        $teacher->save();

        return redirect('/');
    }

    public function edit(int $id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('edit', compact('teacher'));
    }

    public function update(Request $request, int $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->age = $request->age;
        $teacher->role = $request->role;
        $teacher->gender = $request->gender;
        $teacher->update();

        return redirect('/');
    }

    public function delete(int $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect('/');
    }

    public function showSuspended()
    {
        $teachers = Teacher::onlyTrashed()->get();

        return view('suspended', compact('teachers'));
    }
    public function permanent_delete(int $id)
    {
        $teacher = Teacher::onlyTrashed()->findOrFail($id);
        $teacher->forceDelete();

        return redirect('/suspended');
    }

    public function retrieve(int $id)
    {
        $teacher = Teacher::onlyTrashed()->findOrFail($id);
        $teacher->restore();

        return redirect('/');
    }
}
