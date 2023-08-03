<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Ville;
use App\Trait\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    use Image;

    public function index(Request $request)
    {
        $query=$request->query('query');
        $data=Client::when($query,function($builder) use ($query) {
            $searchQuery = '%'.$query.'%';
            $columns = ['adress', 'cin', 'nom', 'email', 'passport', 'status', 'telephone', 'ville'];
              return $builder->where(function($builder) use ($searchQuery,$columns){
               foreach($columns as $column){
                 $builder->orWhere($column,'like',$searchQuery);
               }
            });
        })->paginate(10);

       /*  if($request->query('query')){
            $villes=Client::query()
            ->where('adress','like','%'.$request->query('query').'%')
            ->orWhere('cin','like','%'.$request->query('query').'%')
            ->orWhere("nom",'like','%'.$request->query('query').'%')
            ->orWhere('email','like','%'.$request->query('query').'%')
            ->orWhere('passport','like','%'.$request->query('query').'%')
            ->orWhere('status','like','%'.$request->query('query').'%')
            ->orWhere('telephone','like','%'.$request->query('query').'%')
            ->orWhere('ville','like','%'.$request->query('query').'%')
            ->paginate(10);
        }
        else{
            $data = Client::paginate(10);
        } */

        $villes = Ville::all();

        return view('Clients', compact('data', 'villes'));
    }

    public function store(Request $request)
    {
        Client::create(['nom' => $request->nom,
            'cin' => $request->cin,
            'dateNaissance' => $request->dateNaissance,
            'ice' => $request->ice,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adress' => $request->adress,
            'passport' => $request->passport,
            'dateDelivrence' => $request->dateDelivrence,
            'dateExpiration' => $request->dateExpiration,
            'deleivrerPar' => $request->deleivrerPar,
            'ville' => $request->ville,
            'status' => $request->status,
            'remarque' => $request->remarque,
            'cinrecto' => $this->AddImage($request->cinrecto),
            'cinverso' => $this->AddImage($request->cinverso)]);

        return back()->with('success', 'client bien ajouter');
    }

    public function destroy(Request $request, $id)
    {
        $this->deleteImage(Client::find($id)->value('cinrecto'));
        $this->deleteImage(Client::find($id)->value('cinverso'));
        Client::destroy($id);

        return back()->with('success', 'client bien supprimer');
    }

        public function Edite(Request $request, $client)
        {
            $client = Client::findOrFail($client);
            if ($data = $request->validate([
                'nom' => 'required',
                'cin' => 'required',
                'dateNaissance' => 'required',
                'ice' => 'required',
                'email' => Rule::unique('clients')->ignore($client->id)->whereNot('email', $request->email),
                'telephone' => ['required', Rule::unique('clients')->ignore($client->id)->whereNot('telephone', $request->telephone)],
                'adress' => 'required',
                'passport' => ['required', Rule::unique('clients')->ignore($client->id)->whereNot('passport', $request->password)],
                'dateDelivrence' => 'required',
                'dateExpiration' => 'required',
                'deleivrerPar' => 'required',
                'ville' => 'required',
                'status' => 'required',
                'remarque' => 'required'])
            ) {
                if ($request->has('cinrecto')) {
                    $cinrecto = $this->ModifierImage($client->cinrecto, $request->file('cinrecto'));
                }
                if ($request->has('cinverso')) {
                    $cinverso = $this->ModifierImage($client->cinverso, $request->file('cinverso'));
                }
                $data = array_merge($data, ['cinrecto' => $cinrecto ?? $client->cinrecto, 'cinverso' => $cinverso ?? $client->cinverso]);
                $client->update($data);

                return back();
            }

            dd(back()->withInput());
        }
}
