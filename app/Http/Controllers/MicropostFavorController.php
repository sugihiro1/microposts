<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicropostFavorController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->favor($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavor($id);
        return redirect()->back();
    }
}
