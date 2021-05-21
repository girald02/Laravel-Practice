<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// MODEL & MIGRATION
use App\Articles;

class Articles_Controller extends Controller
{
    public function index(){
    	$articles = Articles::paginate(5); // How many articles per row
    	return view('blog')->with('articles' , $articles);
    }

    public function store(Request $request){
    	$article = new Articles;
    	$article->title = $request->input('txtTitle');
    	$article->content = $request->input('txtContent');
    	$article->save();

    	return redirect('blog')->with('message', 'Successfully Added!');
    }

    public function create(){
   		return view('add_articles_form');
    }

    public function show($id){
    	$article = Articles::find($id);
    	return view('show_article')->with('article' , $article);
    }

    public function edit($id){
   		$article = Articles::find($id);
    	return view('edit_article')->with('article' , $article);
    }

    public function update(Request $request, $id){
    	$article = Articles::find($id);
    	$article->title = $request->txtTitle;
    	$article->content = $request->txtContent;
    	$article->save(); 
    	return redirect('/blog/'.$id)->with('message', 'Successfully Updated!');
    }

     public function destroy($id){
   		Articles::destroy($id);
    	return redirect('blog')->with('message-delete', 'Successfully Deleted!');
    }
}
