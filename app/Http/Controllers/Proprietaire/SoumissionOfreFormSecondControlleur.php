<?php

namespace App\Http\Controllers\Proprietaire;

use App\Models\Chambre;
use App\Models\Logement;
use App\Models\Appartement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoumissionOfreFormSecondControlleur extends Controller
{


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

        //nombre de chambre entrer a etape1
        $nombre_chambre=$request->cache_nbre;

        //les chambres sont identiques ?
        $chambre_idem=$request->cache_idem;

        //type de logement
        $type_log=$request->type_log;

        $id_log=$request->id_log;
        $ID_APPART=$request->id_appart;
        //list des id des inserées a etape 1
        $chaine_id=$request->tab_id;
        $tab_id=explode('.',$chaine_id);

        if( $type_log=="chambre")
        {
            if( $chambre_idem=='yes')
            {
                $request->validate([
                    'roomPhotoPrincipale' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
                    'roomPhoto1.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
                ]);
                $logement=Logement::find(intval( $id_log));
                $imagePrincipale = $request->file("roomPhotoPrincipale");
                $imagePath=$imagePrincipale->store('proprietaire/offre','public');
                $logement->photos1=$imagePath;
                $logement->save();


                $tab_images=$request->roomPhoto1;

                 //verifier le nombre d'images
                if(count($tab_images)>1)
                {
                    foreach($tab_id as $item)
                    {

                        $chambre=Chambre::find(intval($item));
                        if(count($tab_images)==2)
                        {
                            $chambre->photos1=$tab_images[0]->store('proprietaire/offre','public');
                            $chambre->photos2=$tab_images[1]->store('proprietaire/offre','public');
                        }
                        else{
                            $chambre->photos1=$tab_images[0]->store('proprietaire/offre','public');
                            $chambre->photos2=$tab_images[1]->store('proprietaire/offre','public');
                            $chambre->photos3=$tab_images[2]->store('proprietaire/offre','public');
                        }
                        $chambre->save();

                    }
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
            ///les chambres ne sont iden
            else{

                $logement=Logement::find(intval( $id_log));
                $imagePrincipale = $request->file("roomPhotoPrincipale");
                $imagePath=$imagePrincipale->store('proprietaire/offre','public');
                $logement->photos1=$imagePath;
                $logement->save();

                $count=1;

                for($count;$count<$nombre_chambre+1;$count++)
                {
                    $roomPhoto=$request->file('roomPhoto'.strval($count));
                    //dd($reque $roomPhotost->get('roomPhoto'.strval($count)));
                    //dd($request->file('roomPhoto'.strval(1)));
                    $chambre=Chambre::find($tab_id[$count-1]);

                    if(count($roomPhoto)>1)
                    {
                         if(count($roomPhoto)==2)
                            {
                                $chambre->photos1= $roomPhoto[0]->store('proprietaire/offre','public');
                                $chambre->photos2= $roomPhoto[1]->store('proprietaire/offre','public');
                            }
                            else{
                                $chambre->photos1= $roomPhoto[0]->store('proprietaire/offre','public');
                                $chambre->photos2= $roomPhoto[1]->store('proprietaire/offre','public');
                                $chambre->photos3= $roomPhoto[2]->store('proprietaire/offre','public');
                            }
                          $chambre->save();
                    }
                    else{
                        //erreur
                    }
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
         *
         *
         * apparteùent
         */
        if($type_log=="appartement")
        {
            //dd($request->all());

            $logement=Logement::find(intval( $id_log));
            $imagePrincipale = $request->file("roomPhotoPrincipale");
            $imagePath=$imagePrincipale->store('proprietaire/offre','public');
            $logement->photos1=$imagePath;
            $logement->save();

            $appartement=Appartement::find($ID_APPART);
            //dd($ID_APPART);
            $imagesAppartement=$request->Photoappar;
            $appartement->photos1=$imagesAppartement[0]->store('proprietaire/offre','public');
            $appartement->photos2=$imagesAppartement[1]->store('proprietaire/offre','public');
            $appartement->save();

             //les chambres de appartement sont identiques ?
            if( $chambre_idem=='yes')
            {
                $tab_images=$request->roomPhoto1;

                //verifier le nombre d'images
               if(count($tab_images)>1)
               {
                   foreach($tab_id as $item)
                   {

                       $chambre=Chambre::find(intval($item));
                       if(count($tab_images)==2)
                       {
                           $chambre->photos1=$tab_images[0]->store('proprietaire/offre','public');
                           $chambre->photos2=$tab_images[1]->store('proprietaire/offre','public');
                       }
                       else{
                           $chambre->photos1=$tab_images[0]->store('proprietaire/offre','public');
                           $chambre->photos2=$tab_images[1]->store('proprietaire/offre','public');
                           $chambre->photos3=$tab_images[2]->store('proprietaire/offre','public');
                       }
                       $chambre->save();

                   }
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
            }else{

                $count=1;
                for($count;$count<$nombre_chambre+1;$count++)
                {
                    $roomPhoto=$request->file('roomPhoto'.strval($count));
                    $chambre=Chambre::find($tab_id[$count-1]);

                    if(count($roomPhoto)>1)
                    {
                         if(count($roomPhoto)==2)
                            {
                                $chambre->photos1= $roomPhoto[0]->store('proprietaire/offre','public');
                                $chambre->photos2= $roomPhoto[1]->store('proprietaire/offre','public');
                            }
                            else{
                                $chambre->photos1= $roomPhoto[0]->store('proprietaire/offre','public');
                                $chambre->photos2= $roomPhoto[1]->store('proprietaire/offre','public');
                                $chambre->photos3= $roomPhoto[2]->store('proprietaire/offre','public');
                            }
                          $chambre->save();
                    }
                    else{
                        //erreur
                    }
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
