<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search != '')
            $data['blogs'] = Blog::where('judul', 'like', "%{$search}%")->get();
        else
            $data['blogs'] = Blog::all();

        $data['key'] = $search;
        return view('blog.index')->with($data);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|max:50',
            'isiberita' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png'
        ]);

        $uploadedFile = $request->file('foto');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('images/blog'), $imgName);

        $data = [
            'judul' => $request->judul,
            'isi_berita' => $request->isiberita,
            'foto'  => $imgName
        ];

        $blog = Blog::create($data);
        if ($blog)
            return redirect()->route('blog.create')->withSuccess('Sukses tambah data');

        return redirect()->route('blog.create')->withError('Gagal tambah data');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:5|max:50',
            'isiberita' => 'required',
            'foto' => 'nullable|mimes:jpeg,jpg,png'
        ]);

        $blog = Blog::find($id);
        $blog->judul = $request->judul;
        $blog->isi_berita = $request->isiberita;

        if (!empty($request->file('foto'))) {
            $uploadedFile = $request->file('foto');
            $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('images/blog'), $imgName);

            $blog->foto = $imgName;
        }

        if ($blog->save())
            return redirect()->route('blog.index')->withSuccess('Sukses update data');

        return redirect()->route('blog.update', $id)->withError('Gagal update data');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog->delete())
            return redirect()->route('blog.index')->withSuccess('Sukses hapus data');

        return redirect()->route('blog.index')->withError('Gagal hapus data');
    }
}
