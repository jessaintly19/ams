<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view ('subjects.index')->with('subjects', $subjects);
    }
    
    public function create()
    {
        return view('subjects.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Subject::create($input);
        return redirect('subject')->with('flash_message', 'Class Subject Addedd!');  
    }
    
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('subjects.show')->with('subjects', $subject);
    }
    
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit')->with('subjects', $subject);
    }
  
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $input = $request->all();
        $subject->update($input);
        return redirect('subject')->with('flash_message', 'Class Subject Updated!');  
    }
  
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect('subject')->with('flash_message', 'Class Subject deleted!');  
    }
}
