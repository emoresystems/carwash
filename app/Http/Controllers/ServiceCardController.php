<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCard;
use Illuminate\Support\Facades\Storage;

class ServiceCardController extends Controller
{
    public function index()
    {
        $serviceCards = ServiceCard::all();
        return view('services.show', compact('serviceCards'));
    }

    public function create()
    {
        return view('services.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image file
        'heading' => 'required',
        'description' => 'required',
    ]);

    // Handle file upload
    $image = $request->file('image');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move(public_path('/storage/images'), $imageName); // Move the image to public/images directory

    // Save image URL to database
    $serviceCard = new ServiceCard();
    $serviceCard->image_url = '/images/' . $imageName; // Assuming images are stored in public/images directory
    $serviceCard->heading = $request->input('heading');
    $serviceCard->description = $request->input('description');
    $serviceCard->save();

    return redirect()->route('services.create')
        ->with('success', 'Service card created successfully.');
}



    public function show(ServiceCard $serviceCard)
    {
        return view('service_cards.show', compact('serviceCard'));
    }

    public function edit(ServiceCard $serviceCard)
    {
        return view('service_cards.edit', compact('serviceCard'));
    }

    public function update(Request $request, ServiceCard $serviceCard)
    {
        $request->validate([
            'image_url' => 'required',
            'heading' => 'required',
            'description' => 'required',
        ]);

        $serviceCard->update($request->all());

        return redirect()->route('services.index')
            ->with('success', 'Service card updated successfully');
    }

    public function destroy(ServiceCard $serviceCard)
    {
        $serviceCard->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service card deleted successfully');
    }
}
