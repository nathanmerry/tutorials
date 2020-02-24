<?php

namespace App\Http\Controllers;

use App\Artical;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ArticalsController extends Controller
{
    public function index()
    {
        // render a list of a resource
        $articals = Artical::latest()->get();
        return view('articals.index', ['articals' => $articals]);
    }

    public function show(Artical $artical)
    {
        // show single resource
        return view('articals.show', ['artical' => $artical]);
    }

    public function create()
    {
        //    shows view to create a resource

        return view('articals.create');
    }

    public function store()
    {
        //    Persist the new resource
        Artical::create($this->validateArtical());

        return redirect('/articals');
    }

    public function edit(Artical $artical)
    {
        //    Show a view to edit an exisitng resource
        return view('articals.edit', compact('artical'));
    }

    public function update(Artical $artical)
    {
        Artical::update($this->validateArtical());

        return redirect('/articals/' . $artical->id);
    }

    public function destroy()
    {
        //    Delete the recourse
    }

    protected function validateArtical()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
