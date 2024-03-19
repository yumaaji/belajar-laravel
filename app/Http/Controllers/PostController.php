<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{   
    public function index(){

        $pageTitle = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $pageTitle = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $pageTitle = ' by ' . $author->name;
        }
        return view('blog', [
            "title" => "All Posts $pageTitle",
            "active" => "post",
            "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(7)
        ]);
    }
    
    // Menampilkan salah satu postingan
    // Didapat dari mengklik salah satu judul Postingan
    // Post - untuk relasi ke tabel Post
    public function showPost(Post $post){
        return view('post',[
            "title"=>"Post",
            "active" => "post",
            "post" => $post
        ]);
    }

    // Menampilkan seluruh kategori Postingan
    public function showCategories(){
        return view('categories', [
            'title' => 'Categories',
            "active" => "categories",
            // categories - untuk menyimpan data
            // Dari function all dari tabel Category
            'categories' => Category::all()
        ]);
    }

}
