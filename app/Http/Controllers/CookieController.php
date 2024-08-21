<?php

namespace App\Http\Controllers;

use App\Models\Cookie;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    // Show all cookies
    public function index()
    {
        $cookies = Cookie::all();
        return view('cookies.index', compact('cookies'));
    }

    // Show form to create a new cookie
    public function create()
    {
        return view('cookies.create');
    }

    // Store a new cookie
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'production_date' => 'required|date',
        ]);

        Cookie::create($request->all());

        return redirect()->route('cookies.index')->with('success', 'Cookie created successfully.');
    }

    // Show a single cookie
    public function show($id)
    {
        $cookie = Cookie::findOrFail($id);
        return view('cookies.show', compact('cookie'));
    }

    // Show form to edit a cookie
    public function edit($id)
    {
        $cookie = Cookie::findOrFail($id);
        return view('cookies.edit', compact('cookie'));
    }

    // Update a cookie
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'production_date' => 'required|date',
        ]);

        $cookie = Cookie::findOrFail($id);
        $cookie->update($request->all());
        return redirect()->route('cookies.index')->with('success', 'Cookie updated successfully.');
    }

    // Delete a cookie
    public function destroy($id)
    {
        $cookie = Cookie::findOrFail($id);
        $cookie->delete();
        return redirect()->route('cookies.index')->with('success', 'Cookie deleted successfully.');
    }
}
