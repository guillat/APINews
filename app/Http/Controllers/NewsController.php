<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $news=News::where('id', '<', 11)
            ->select('id','title','published_at')
            ->get();
        return $news;
    }

    public function getPage($page){
       
        $news=News::select('title','id','published_at')        
            ->paginate(10,['*'],'page',$page); 

        return $news; 
    }

    public function newsDetail($id){
        
        $news=News::where('id', $id)->get();
        
        return $news;
    }

    public function getCategory($id,$page){       
        
        $news=News::where('category_id', $id)       
            ->select('title','id','published_at')        
            ->paginate(10,['*'],'page',$page);         
       
        
        return $news;
    }

    public function getAuthor($id,$page){
       
        
        $news=News::where('author_id', $id)       
            ->select('title','id','published_at','author_id')        
            ->paginate(10,['*'],'page',$page);         
       
        
        return $news;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
