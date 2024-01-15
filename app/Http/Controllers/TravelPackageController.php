<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;
// use App\Models\TravelPackages;

class TravelPackageController extends Controller
{
    public function index()
    {
        $travelPackages = TravelPackage::all();

        return view('travel-packages.index', compact('travelPackages'));
    }

    public function create()
    {
        return view('travel-packages.create');
    }

    public function store(Request $request)
    {
        $datas = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:travel_packages',
            'location' => 'required|string|max:255',
            'featured_event' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'foods' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'duration' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'about' => 'required|string',
        ]);

        TravelPackage::create([
            'title' => $datas['title'],
            'slug' => $datas['slug'],
            'location' => $datas['location'],
            'featured_event' => $datas['featured_event'],
            'language' => $datas['language'],
            'foods' => $datas['foods'],
            'departure_date' => $datas['departure_date'],
            'duration' => $datas['duration'],
            'type' => $datas['type'],
            'price' => $datas['price'],
            'about' => $datas['about'],
        ]);

        return redirect()->route('travel-packages.index');
    }

    public function edit(TravelPackage $travelPackage)
    {
        return view('travel-packages.edit', compact('travelPackage'));
    }

    public function update(Request $request, TravelPackage $travelPackage)
    {
        // Validation can be added here based on your requirements.

        $travelPackage->update($request->all());

        return redirect()->route('travel-packages.index');
    }

    public function destroy(TravelPackage $travelPackage)
    {
        $travelPackage->delete();

        return redirect()->route('travel-packages.index');
    }
}
