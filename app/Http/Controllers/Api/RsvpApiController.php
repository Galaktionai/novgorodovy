<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guests;

class RsvpApiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'come' => 'required|in:true,false',
        ]);

        $guest = Guests::create([
            'name' => $validated['name'],
            'come' => $validated['come'] === 'true',
        ]);

        return response()->json([
            'message' => 'Анкета успешно отправлена!',
            'data' => $guest,
        ], 201);
    }
}
