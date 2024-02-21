<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Event;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'company_agency' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'project_name' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'event_date' => 'required|date',
        ]);

        // Create participant
        $participant = Participant::create([
            'name' => $validatedData['name'],
            'company_agency' => $validatedData['company_agency'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        // Create event
        $event = Event::create([
            'project_name' => $validatedData['project_name'],
            'event_name' => $validatedData['event_name'],
            'event_type' => $validatedData['event_type'],
            'event_date' => $validatedData['event_date'],
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
