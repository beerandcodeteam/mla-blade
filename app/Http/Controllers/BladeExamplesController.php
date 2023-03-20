<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExamplesController extends Controller
{
    public function index() {

        $title = "Titulo do alerta";
        $message = "Mensagem do alerta";

        $users = [
            ['user_id' => 1, 'name' => 'John Doe'],
            ['user_id' => 2, 'name' => 'Jane Doe'],
            ['user_id' => 3, 'name' => 'John Smith'],
            ['user_id' => 4, 'name' => 'Jane Smith'],
        ];

        return view('index', [
            'title' => $title,
            'message' => $message,
            'users' => $users
        ]);
    }

    public function secondPage() {
        return view('second');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:3'
        ]);


        return redirect()->back()
            ->with('success', 'Enviado com sucesso');
    }
}
