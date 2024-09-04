<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan data ke database
        $message = Message::create($validatedData);

        // Kembalikan respons JSON
        return response()->json([
            'status' => 'success',
            'message' => 'Data stored successfully!',
            'data' => $message
        ], 201);
    }
}
