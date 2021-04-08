<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getTitle=request('Btitle');
        $getAuthor=request('Bauthor');
        $getDes=request('Bdes');
        $getDis=request('Bdis');
        $getPrice=request('Bprice');
       echo $getTitle;
       echo "<br>";
       echo $getAuthor;
       echo "<br>";
       echo $getDes;
       echo "<br>";
       echo $getDis;
       echo "<br>";
       echo $getPrice;
       echo "<br>";
       $book=new BookModel();
       $book->Btitle= $getTitle;
       $book->Bauthor= $getAuthor;
       $book->Bdes= $getDes;
       $book->Bdis= $getDis;
       $book->Bprice= $getPrice;
       $book->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
