<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query('query');
        $produits = Produit::when($query, function ($builder) use ($query) {
        $builder->where('produit', 'like', '%' . $query . '%');
        })->paginate(10);
        return view('Produits', compact('produits'));
    }

    public function store(Request $request)
    {
        if ($request->validate(['produit' => 'required'])) {
            Produit::create(['produit' => $request->produit, 'user_id' => $request->user()->id]);

            return back()->with('success', 'Produit bien cree');
        }

        return back()->withInput();
    }

    public function edite(Request $request, $id)
    {
        if ($request->validate(['produit' => 'required'])) {
            Produit::find($id)->update(['produit' => $request->produit]);

            return back()->with('success', 'Produit bien modifier');
        }

        return back()->withInput();
    }

    public function destroy(Request $request, $id)
    {
        Produit::destroy($id);

        return back()->with('success', 'Produit bien supprimer');
    }
}
