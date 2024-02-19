<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fumetto;

use App\Http\Requests\FumettoFormRequest;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumettos = Fumetto :: all();

        return view('pages.index', compact('fumettos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FumettoFormRequest $request)
    {
        $data = $request -> all();

        $newFumetto = new Fumetto();

        $newFumetto -> title = $data['title'];
        $newFumetto -> publishing_house = $data['publishing_house'];
        $newFumetto -> price = $data['price'];

        $newFumetto -> save();

        return redirect() -> route('fumettos.show', $newFumetto -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Fumetto :: find($id);

        return view('pages.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Fumetto :: find($id);

        return view('pages.update', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FumettoFormRequest $request, $id)
    {
        $fumetto = Fumetto :: find($id);

        // $data = $request -> all();

        $data = $request -> validate(
            $this -> getValidationRules(),
            $this -> getValidationMessages());

        $fumetto -> title = $data['title'];
        $fumetto -> publishing_house = $data['publishing_house'];
        $fumetto -> price = $data['price'];

        $fumetto -> save();

        return redirect() -> route('fumettos.show', $fumetto -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fumetto = Fumetto :: find($id);
        $fumetto -> delete();

        return redirect() -> route('fumettos.index');
    }

    private function getValidationRules() {
        return
        ['title' => 'required|string|min:3|max:255',
        'publishing_house' => 'required|string|min:3|max:255',
        'price' => 'required|numeric'];
    }

    private function getValidationMessages() {
        return [
            'title.required' => "Il titolo è richiesto",
            'publishing_house.required' => "La casa editrice è richiesta",
            'price.required' => "Il prezzo è richiesto",
            'title.min' => "Il titolo deve avere almeno 3 caratteri",
            'publishing_house.min' => "La Casa Editrice deve contenere almeno 3 caratteri",
            'price.numeric' => "Il prezzo può contenere solo numeri"
        ];
    }
}
