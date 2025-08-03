<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guests;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'come' => 'required|in:true,false',
        ]);

        Guests::create([
            'name' => $request->name,
            'come' => $request->come === 'true', // преобразуем в boolean
        ]);

        return redirect()->back()->with('success', 'Анкета отправлена!');
    }
}
