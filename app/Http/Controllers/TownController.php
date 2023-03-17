<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TownController extends Controller
{
    public function index()
    {
        $towns = Town::all();

        $user = Auth::user();

        $su = false;

        if ($user) {
            $su = $user->SU;
        }

        $data = array('towns'=>$towns, 'su'=>$su);
        return view('towns', compact('data'));
    }

    public function show($id)
    {
        $town = Town::findOrFail($id);

        return view('town', compact('town'));
    }

    public function edit($id)
    {
        $town = Town::findOrFail($id);

        return view('town', $town);
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            "title" =>          ["required", "string", ],
            "address" =>        ["required", "string", ],
            "size" =>           ["required", "between:0,99999999.99", ],
            "phoneNumber" =>    ["required", "regex:[\d][\- |. ]?(\(?\d{3,4}\)?[\- |. ]?)?[\d\- |. ]{5,10}$", ],
            "youTubeLink" =>    ["required", "string", ],
            "picture" =>        ["required", "image", "nullable"],
            "presentation" =>   ["required", "file", "nullable"],
        ]);
        $town = Town::findOrFail($id);
        $town->update($valid);

        return redirect(route('towns'));
    }


}
