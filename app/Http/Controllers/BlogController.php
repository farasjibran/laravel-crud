<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
     {
        $blog = blog::all();
        return view('blog.index', ['blog' => $blog]);
    }

    public function create()
    {
       return view('blog.create');
   }

   public function store(Request $req)
     {
        $blog = new Blog;
        $blog->nama = $req->nama;
        $blog->nomortelp = $req->nomortelp;
        $blog->email = $req->email;
        $blog->Alamat = $req->Alamat;
        $blog->save();

        return redirect(Route('home'));
    }

    public function edit($id)
     {
        $blog = Blog::find($id);
        
        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(Request $req, $id)
     {
        $blog = Blog::find($id);
        $blog->nama = $req->nama;
        $blog->email = $req->email;
        $blog->Alamat = $req->Alamat;
        $blog->save();

        return redirect(Route('home'));
    }

    public function destroy($id)
     {
        $blog = Blog::destroy($id);

        return redirect(Route('home'));
    }
}
