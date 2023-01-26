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

     public function app()
     {
         
         return view("app");
     }

    public function index()
    {
       // $comics = Comic::all();

        // return view("comics.index", compact("comics"));
        return view("comics.index");
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
        //$data = $request->all();

        // dump($data);

        // Con i dati ricevuti, creo una nuova riga nel database
        //$product = new Product();
        //$product->name = $data["name"];
        //$product->description = $data["description"];
        //$product->price = (float) $data["price"];
        //$product->available = $data["available"] === "si" ? 1 : 0;
        //$product->img = "valore a caso";
        //$product->save();

        // Per evitare che l'utente rimanga sulla pagina in POST,
        // e ricaricando la pagina possa reinviare gli stessi dati,
        // reindirizziamo l'utente ad un'altra pagina a nostro piacimento.
        // Se la pagina ha un parametro dinamico, dobbiamo passarlo come secondo
        // argomento della funzione route.
        //return redirect()->route("products.show", $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("comics.show");
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
