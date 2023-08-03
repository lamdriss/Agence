<?php

namespace App\Http\Controllers;

use App\Models\Billetterie;
use App\Models\Chamber;
use App\Models\Client;
use App\Models\Compagnie;
use App\Models\Hotel;
use App\Models\Modepaimant;
use App\Models\Pay;
use App\Models\Produit;
use App\Models\Programme;
use App\Models\Reservation;
use App\Models\Ville;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $pays = Pay::all();
        $hotels = Hotel::all();
        $villes = Ville::all();
        $clients = Client::all();
        $produits = Produit::all();
        $billetteries = Billetterie::all();
        $programmes = Programme::all();
        $chambers = Chamber::all();
        $modepaiments = Modepaimant::all();
        $compagnies = Compagnie::all();
        /*         $reservations = Reservation::with('clienti')->paginate(10);
         */
        $dateDebu = $request->query('dateDu');
        $dateAu = $request->query('dateAu');
        $reservations = Reservation::when($dateDebu, function ($query) use ($dateDebu) {
            return $query->where("datereservation",'>',$dateDebu);
        })->when($dateAu, function ($query) use ($dateAu) {
            return $query->where('datereservation','<',$dateAu);
        })->paginate(10);

        return view('Reservation',
            compact('hotels', 'villes',
                'produits', 'programmes',
                'chambers', 'compagnies',
                'reservations', 'modepaiments',
                'clients', 'pays', 'billetteries'));
    }

    public function store(Request $request)
    {
        Reservation::create($request->except('page'));

        return redirect('/Reservations');
    }

    public function destroy(Request $request, $id)
    {
    }

    public function create(){
        $pays = Pay::all();
        $hotels = Hotel::all();
        $villes = Ville::all();
        $clients = Client::all();
        $produits = Produit::all();
        $billetteries = Billetterie::all();
        $programmes = Programme::all();
        $chambers = Chamber::all();
        $modepaiments = Modepaimant::all();
        $compagnies = Compagnie::all();
        return view('Models.AjouterReservation',compact('pays','hotels','villes','programmes','clients','produits','billetteries','chambers','modepaiments','compagnies'));
    }
}
