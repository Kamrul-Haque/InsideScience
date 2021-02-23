<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('Tag.index', compact('tags'));
    }

    public function create()
    {
        return view('Tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|unique:tags'
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('tag');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('Tag.edit',compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:3|unique:tags,name,'.$id
        ]);

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('tag');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->route('tag');
    }
}
