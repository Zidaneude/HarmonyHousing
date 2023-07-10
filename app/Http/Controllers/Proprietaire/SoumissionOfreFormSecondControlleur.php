<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Chambre;
use App\Models\Logement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoumissionOfreFormSecondControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('soumission_offre.soumission-offre2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request->all());
        //$id_log=$request->id;

        $id=Auth::guard('proprietaire')->user()->id;
        $nb=$request->cache_nbre;
        $chambre_idem=$request->cache_idem;
        $chaine_id=$request->tab_id;
        $tab_id=explode('.',$chaine_id);

        if( $chambre_idem=='yes')
        {

            $request->validate([
                'roomPhotoPrincipale' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
                'roomPhoto1.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
            ]);
            foreach($tab_id as $item)
            {

                $logement=Chambre::find(intval($item));

                $imagePrincipale = $request->file("roomPhotoPrincipale");
                $imagePath=$imagePrincipale->store('proprietaire/offre','public');

                if(count($request->roomPhoto1)==2)
                {

                    $imageSecondaire1=$request->roomPhoto1[0];
                    $pad=$imageSecondaire1->store('proprietaire/offre','public');

                    $imageSecondaire2=$request->roomPhoto1[1];
                    $pad2=$imageSecondaire2->store('proprietaire/offre','public');
                    $logement->photos1=$imagePath;
                    $logement->photos2=$pad;
                    $logement->photos3=$pad2;
                    $logement->save();
                    return redirect()->route('soumission.offre.step3.create');
                }
                else{
                    return redirect()->route('soumission.offre.step3.create')->with(['message'=>"Au plus 2 images"]);
                }
            }
        }
        else
        {
            $i=1;

            $stringId=$request->id1;
            $arrayId=explode('.',$stringId);
            foreach($arrayId as $item)
            {

                $logement=Chambre::find(intval($item));
                $imagePrincipale = $request->file("roomPhotoPrincipale");
                $imagePath=$imagePrincipale->store('proprietaire/offre','public');

                $roomPhoto1=$request->input('roomPhoto'.strval($i));

                $imageSecondaire1=$request->roomPhoto1[0];
                $pad=$imageSecondaire1->store('proprietaire/offre','public');

                $imageSecondaire2=$request->roomPhoto1[1];
                $pad2=$imageSecondaire2->store('proprietaire/offre','public');

                $logement->photos1=$imagePath;
                $logement->photos2=$pad;
                $logement->photos3=$pad2;
                $logement->save();
                $i++;
            }
            $pre=Auth::guard('proprietaire')->user()->nom;
            $sexe=Auth::guard('proprietaire')->user()->sexe;
            if($sexe=='Homme')
            {
                toastr()->success('Mr. '.$pre.' Votre annonce ete envoyée avec succes');
                return redirect()->route('soumission.offre.step3.create');
            }
            else{
                toastr()->success('Mme. '.$pre.' Votre annonce a ete envoyée avec succes');
                return redirect()->route('soumission.offre.step3.create');
            }


        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
