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
        $comic = Comic::find($id);

        if (!$comic) {
            // Lancio un messaggio d'errore personalizzato
            abort(406, "Ritenta, sarai più fortunato");
        }


        /*
    // esempio di dependency injection
    public function edit(Product $product) {
        return view("products.edit", [
            "product" => $product
        ]);
    } */

        return view("comics.edit", [
            "comic" => $comic
        ]);
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
        $data = $request->all();



        // $checkboxes = ["available", "pippo", "pluto"];

        // Le checkbox, se sono flaggate, vengono inviate al server on valore "on"
        // Se NON sono flaggate, NON vengono inviate, quindi nei dati non vedremo la chiave
        // di quella checkbox.
        // Se nei dati non c'è la chiave available, allora la assegno a false
        if (!key_exists("available", $data)) {
            $data["available"] =  false;
        } else {
            $data["available"] = true;
        }

        // recupero i dati dell'elemento che corrisponde all'id indicato
        // $product = Product::findOrFail($id);
        // $product->name = $data["name"];
        // $product->description = $data["description"];
        // $product->price = (float) $data["price"];
        // $product->available = $data["available"];
        // $product->save();

        $comic = Product::findOrFail($id);
        $comic->name = $data["name"];
        $comic->description = $data["description"];
        $comic->price = (float) $data["price"];
        $comic->available = $data["available"];
        $comic->save();
        // Assegna i valori come il fill e poi esegue il save();
        $comic->update($data);

        // devo reindirizzare l'utente ad una pagina in GET
        return redirect()->route("comics.show", $comic->id);

        //si potrebbe anche fare un metoto più veloce
        //public function update(Request $request, Comic $comic) 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        // sull'istanza del model, il metodo da usare è delete()
        $comic->delete();

        // Un volta eliminato l'elemento dalla tabella, dobbiamo reindirizzare l'utente da qualche parte.
        return redirect()->route("comics.index");
    }
}