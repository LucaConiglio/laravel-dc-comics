<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Support\Facades\Validator;

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
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
        
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
    public function store(StoreComicRequest $request)
    {
        // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
        $data = $request->validated();
        


        // dump($data);

        // Con i dati ricevuti, creo una nuova riga nel database
        $comic = new Comic();
        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price =  $data["price"];
        $comic->series = $data["series"];
        $comic->type = $data["type"];
        $comic->save();


        

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
    public function show($id) {
        $comic = Comic::findOrFail($id);

        
        return view("comics.show", ["comic" => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //$comic = Comic::find($id);

        // if (!$comic) {
        //     // Lancio un messaggio d'errore personalizzato
        //     abort(406, "Ritenta, sarai più fortunato");
        // }


        /*
    // esempio di dependency injection
    public function edit(Product $product) {
        return view("products.edit", [
            "product" => $product
        ]);
    } */

        return view("comics.edit", ["comic" => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)

        // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
    {
        $data = $request->validated();

        

        // $checkboxes = ["available", "pippo", "pluto"];

        // Le checkbox, se sono flaggate, vengono inviate al server on valore "on"
        // Se NON sono flaggate, NON vengono inviate, quindi nei dati non vedremo la chiave
        // di quella checkbox.
        // Se nei dati non c'è la chiave available, allora la assegno a false
        // if (!key_exists("available", $data)) {
        //     $data["available"] =  false;
        // } else {
        //     $data["available"] = true;
        // }

        

        
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