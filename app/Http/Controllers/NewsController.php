<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('query');
        if ($query) {
            $data = DB::table('berita')
                ->leftJoin('user', 'user.id', '=', 'berita.id_user')
                ->select('berita.*', 'user.nama')
                ->where('rilis', 1)
                ->where('berita.judul', 'like', '%' . $query . '%')
                ->paginate(3);
            $latest = DB::table('berita')->orderBy('id', 'desc')
                ->leftJoin('user', 'user.id', '=', 'berita.id_user')
                ->select('berita.*', 'user.nama')
                ->where('rilis', 1)
                ->limit(6)->get();
        } else {
            $data = DB::table('berita')
                ->leftJoin('user', 'user.id', '=', 'berita.id_user')
                ->select('berita.*', 'user.nama')
                ->where('rilis', 1)
                ->paginate(3);
            $latest = DB::table('berita')->orderBy('id', 'desc')
                ->leftJoin('user', 'user.id', '=', 'berita.id_user')
                ->select('berita.*', 'user.nama')
                ->where('rilis', 1)
                ->limit(6)->get();
        }
        return view('user.news', compact('data', 'latest'));
    }

    public function show($id)
    {
        $data = DB::table('berita')
            ->where('berita.id', $id)
            ->leftJoin('user', 'user.id', '=', 'berita.id_user')
            ->select('berita.*', 'user.nama')
            ->get();
        $latest = DB::table('berita')->orderBy('id', 'desc')
            ->leftJoin('user', 'user.id', '=', 'berita.id_user')
            ->select('berita.*', 'user.nama')
            ->where('rilis', 1)
            ->limit(6)->get();
        return view('user.detail-news', compact('data', 'latest'));
    }
}
