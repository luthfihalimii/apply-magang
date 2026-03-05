<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        return view('publikasi');
    }

    public function flipbook(Request $request)
    {
        // whitelist biar gak bisa akses file sembarangan
        $allowed = [
            'assets/pdf/brosur.pdf',
            'assets/pdf/e-government-service-software.pdf',
            'assets/pdf/company-profile.pdf',
            'assets/pdf/software-solution.pdf',
        ];

        $file = $request->query('file');
        $title = $request->query('title', 'Flipbook');

        if (!in_array($file, $allowed, true)) {
            abort(404);
        }

        return view('publikasi.flipbook', [
            'title' => $title,
            'pdfUrl' => asset($file),
        ]);
    }
}