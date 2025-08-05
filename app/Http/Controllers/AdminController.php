<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter');

        $query = Guests::query();

        if ($filter === 'coming') {
            $query->where('come', true);
        } elseif ($filter === 'no-coming') {
            $query->where('come', false);
        }

        $guests = $query->latest()->get();

        return view('admin.guests', compact('guests', 'filter'));
    }

    public function destroy($id)
    {
        $guest = Guests::findOrFail($id);
        $guest->delete();

        return redirect()->back()->with('success', 'Гость удалён.');
    }
}
