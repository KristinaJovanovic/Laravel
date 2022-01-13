<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResourceProducer;
use App\Http\Resources\ResourceProduct;
use App\Models\Producer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProducerController extends BaseController
{
    public function getProducers(){
        $allProducers = Producer::all();
        return $allProducers;
    }

    public function openAddProducerForm(){
        return view('addProducer');
    }

    public function addProducer(Request $request){
        $producer = new Producer();
        $producer->name = $request->name;
        $producer->save();
        return redirect('/producers');
    }

    public function show($name){

        $product = Product::find($name);

        $producer = Producer::firstWhere('name', $name);

        if(is_null($producer))
        return $this->sendError("Nepoznati proizvodjac");

        $products = Product::all();
        $filteredProducts = $products->where('producer_id', $producer->id);


        if(is_null($filteredProducts->all()))
        return $this->sendError("Nema proizvoda ovog proizvodjaca");

        if($filteredProducts->isEmpty())
        return $this->sendError("Nema proizvoda ovog proizvodjaca");

        return $this->sendResponse(ResourceProduct::collection($filteredProducts->all()), "Proizvod pronadjen");
    }

    public function index(){
        $producers = Producer::all();
        return $this->sendResponse(ResourceProducer::collection($producers), "Proizvodjaci uspesno pronadjeni");
    }
    public function destroy($id){
        $producer = Producer::find($id);


        if(is_null($producer)){
            return $this->sendError("Proizvod ne postoji u bazi");
        }

        $producer->delete();

        return $this->sendResponse($producer, "Proizvod uspesno izbrisan");

    }
}
