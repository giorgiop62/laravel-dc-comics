<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //faccio la query
        $comics = Comic::all();
        return view('comics.index',compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //creo un nuovo fumetto
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request->all ottengo i dati che mi servono
        $form_data = $request->all();

        $new_comic = new Comic();
            $new_comic->title = $form_data['title'];
            $new_comic->slug = Comic::generateSlug($new_comic->title);
            $new_comic->description = $form_data['description'];
            $new_comic->thumb = $form_data['thumb'];
            $new_comic->price = $form_data['price'];
            $new_comic->series = $form_data['series'];
            $new_comic->sale_date = $form_data['sale_date'];
            $new_comic->type = $form_data['type'];
            $new_comic->save();

        //portami alla show dell'elemento appena creato

        return redirect()->route('comics.show', $new_comic);






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


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
