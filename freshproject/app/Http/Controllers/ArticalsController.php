<?php

namespace App\Http\Controllers;

use App\Artical;
use Illuminate\Http\Request;

class ArticalsController extends Controller
{
    public function show($id)
    {
        $artical = Artical::find($id);
        return view('articals.show', ['artical' => $artical]);
    }
}
