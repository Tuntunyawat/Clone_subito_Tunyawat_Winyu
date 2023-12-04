<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('addPost.add');
    }

    public function store(Article $article, Request $request){
        
        $imageId = uniqid();
        $article = new Article;
        
        $article->title = $request->title;
        $article->content = $request->content;
        $article->price = $request->price;
        $article->user_id = auth()->user()->id;

        if($request->file('image')){
            $image = $request->file('image');

            $image_columns = [];

            foreach($image as $image){
                $imageId = uniqid();
                $filename = 'image-article-' . $imageId . '.' . $image->extension();

                $image_columns[] = [
                    'file_name' => $filename,
                    'file_id' => $imageId,
                    'article_id' => $article->id,
                ];

                Image::insert(
                    $image_columns
                );


                $image = $image->storeAs('public', $filename);
                
                $image->save();

            }
       }
        $article->save();

        $categories = $request->categories;

        foreach($categories as $category){
            $article->category()->attach($category);
        }
        
        return redirect()->route('homepage');

    }

    public function edit($id){

        $article = Article::find($id);

        if(auth()->user()->id === $article->user_id){
            return view('users.edit-post', compact('article'));
        }
        else{
            return redirect()->route('homepage');
        }
        
    }

    public function update(Article $article, Request $request, $id){

        $imageId = uniqid();

        $article = Article::find($id);
        
        if(auth()->user()->id == $article->user_id){
            $article->title = $request->title;
            $article->content = $request->content;
            $article->price = $request->price;
            $article->user_id = auth()->user()->id;

           if($request->file('image')){
                $image = $request->file('image');

                $image_columns = [];

                foreach($image as $image){
                    $imageId = uniqid();
                    $filename = 'image-article-' . $imageId . '.' . $image->extension();

                    $image_columns[] = [
                        'file_name' => $filename,
                        'file_id' => $imageId,
                        'article_id' => $article->id,
                    ];

                    Image::insert(
                        
                        $image_columns
                    );

                    $image = $image->storeAs('public', $filename);

                    $image->save();

                }
           }

            
            $article->save();

            $article->category()->detach();

            $categories = $request->categories;

            foreach($categories as $category){
                $article->category()->attach($category);
            }
            
            return redirect()->route('myArticle');
        }
    }

    public function destroy($id){
        
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('homepage');
    }
}