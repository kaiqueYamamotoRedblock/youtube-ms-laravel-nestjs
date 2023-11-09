<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmailsMSController extends Controller
{
    public function create(Request $request) {
        $email = $request->input('email');
        $tags = 'email_marketing';
        $domain = 'emails.google';

        $response = Http::post('http://127.0.0.1:3000/', [
            "email" => $email,
            "tags" => $tags,
            "domain" => $domain
        ]);

        return $response->body();
    }
}
