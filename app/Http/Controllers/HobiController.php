<?php

namespace App\Http\Controllers;
use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
     public function index()
    {
        $hobi = Hobi::latest()->paginate(5);
        return view('hobi.index', compact('hobi'));
    }


    public function create()
    {
        return view('hobi.create');
    }

    public function store(Request $request)
    {
        //validate form
	      $validated = $request->validate([
            'hobi'      => 'required|min:5',
           
        ]);

        $hobi = new hobi();
        $hobi->hobi = $request->hobi;
        
        

        $hobi->save();
        return redirect()->route('hobi.index');
        
    }


    public function edit($id)
    {
        $hobi = hobi::findOrFail($id);
        return view('hobi.edit', compact('hobi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'hobi'      => 'required|min:5',
        ]);
        

        $hobi = hobi::findOrFail($id);
        $hobi->hobi = $request->hobi;
	      
        $hobi->save();
        return redirect()->route('hobi.index');

    }

    public function destroy($id)
    {
        $hobi = hobi::findOrFail($id);
        $hobi->delete();
        return redirect()->route('hobi.index');

    }
}
