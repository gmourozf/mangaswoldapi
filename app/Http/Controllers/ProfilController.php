<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\Models\Lecteur;

class ProfilController extends Controller {

    // Collection des rôles disponibles avec leur libellé
    private $roles = array("admin" => "Administrateur", "comment" => "Commentateur", "contrib" => "Contributeur");

    /**
     * Retourne une instance du Lecteur dont on passé l'Id
	 * @param int $id Id du Lecteur à lire
     * @return instance de Lecteur
     */
    public function show($id) {
        $lecteur = Lecteur::find($id);
        return response()->json($lecteur,200);


    }

    /**
     * Enregistre le profil
     * @return Vue home
     */
    public function update(Request $request) {
        try {

        } catch (Exception $ex) {

        }
    }

}
