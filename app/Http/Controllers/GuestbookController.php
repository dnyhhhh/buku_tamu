<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestbookEntry;


class GuestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guestbookEntries = GuestbookEntry::all();

        return view('dashboard', compact('guestbookEntries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku_tamu_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'message' => 'required',
        ]);
    
        $guestbookEntry = new GuestbookEntry();
        $guestbookEntry->name = $request->name;
        $guestbookEntry->partner = $request->partner;
        $guestbookEntry->alamat = $request->alamat;
        $guestbookEntry->email = $request->email;
        $guestbookEntry->message = $request->message;
        $guestbookEntry->save();
    
        return redirect()->route('buku_tamu.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = GuestbookEntry::where('id',$id)->first();
        return view('buku_tamu_edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'message.required' => 'Ucapan wajib diisi',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'message' => $request->input('message'),
        ];
        GuestbookEntry::where('id',$id)->update($data);
        return redirect()->route('buku_tamu.index')->with('success', 'Data berhasil disimpan.');

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GuestbookEntry::where('id',$id)->delete();
        return redirect()->route('buku_tamu.index')->with('success', 'Data berhasil dihapus.');
    }
}
