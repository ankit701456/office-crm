<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Client List
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $clients = Client::latest()->get();

        return view('clients.index', compact('clients'));
    }

    /*
    |--------------------------------------------------------------------------
    | Create Page
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('clients.create');
    }

    /*
    |--------------------------------------------------------------------------
    | Save Client
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        Client::create([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,


            'address' => $request->address

        ]);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client Created');
    }

    /*
    |--------------------------------------------------------------------------
    | Edit Page
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.edit', compact('client'));
    }

    /*
    |--------------------------------------------------------------------------
    | Update Client
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->update([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'address' => $request->address

        ]);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client Updated');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Client
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        Client::findOrFail($id)->delete();

        return back()
            ->with('success', 'Client Deleted');
    }
}