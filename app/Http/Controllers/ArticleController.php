<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($id)
    {
        return "Selamat Datang <br> NIM: 2341760025 - Nama: M.Bhimantara.W.E.P <br> Halaman Artikel dengan ID $id";
    }
}
