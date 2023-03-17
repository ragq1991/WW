<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return view('houses', compact('houses'));
    }

    public function show($id)
    {
        $house = House::findOrFail($id);

        return view('house', $house);
    }

    public function edit($id)
    {
        $house = House::findOrFail($id);

        return view('house', $house);
    }

    public function post(Request $request, $id)
    {
        $request->validate([
            "title"             => ["required", "string", ],
            "priceRUB"          => ["required", "between:0,9999999999999.99", ],
            "priceUSD"          => ["required", "between:0,9999999999999.99", ],
            'defaultCurrency'   => ['required', "in(['RUB', 'USD'])", ],
            "countFloor"        => ["required", "string", ],
            "countBedroom"      => ["required", "string", ],
            "size"              => ["required", "between:0,99999999.99", ],
            "houseType_id"      => ["required", 'exists:App\Models\HouseType,id', ],
            "town_id"           => ["required", 'exists:App\Models\Town,id', ],
        ]);
        $house = House::findOrFail($id);

        return view('house', $house);
    }
}
