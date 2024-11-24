<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages =  Page::all();
        return view('admin.page.index', compact('pages'));
    }

    public function show($id)
    {

        $page = Page::findOrFail($id);
        return view('admin.page.show', compact('page'));
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.page.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect()->back()->with('success', 'Page updated');
    }


    public function create(){

        
       return view('admin.page.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|max:255',
            'title'=> 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        Page::create([
            'id' => $request->id,
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->back();
    }



    // public function delete($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     return redirect()->route('admin.index')->with('success', 'Kullanıcı başarıyla silindi!');
    // }
}
