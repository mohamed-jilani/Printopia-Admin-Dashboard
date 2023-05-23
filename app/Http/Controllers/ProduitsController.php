<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\TypeProduit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $prods=Produit::get();
        return view('dash.produit',['prods'=>$prods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
    
        $types = TypeProduit::all();
        return view('dash.addProd',['types'=>$types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         // Validate the incoming request data
         $validatedData = $request->validate([
            'type_id' => 'required|exists:typeproduit,id',
            'image' => 'required|image',    
             'qttProduit' => 'required|numeric',
             'prixProduit' => 'required|numeric',
             'description' => 'required|string',
         ]);
 
         // Create a new product instance
         $product = new Produit();
 
         // Assign values to the product attributes
         $product->type_id = $request->input('type_id');
         $product->qttProduit = $request->input('qttProduit');
         $product->prixProduit = $request->input('prixProduit');
         $product->description = $request->input('description');
 
         if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image = $imagePath;
        }
         // Save the product to the database
         $product->save();
 
         // Redirect to a success page or do something else
         return redirect()->route('produits')->with('success', 'Product created successfully');
     }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prod=Produit::find($id);
        return view('dash.produitDetails',['prod'=>$prod]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect()->route('produits')->with('success', 'product deleted successfully.');
    }
}
