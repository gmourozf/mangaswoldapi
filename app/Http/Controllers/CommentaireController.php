<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Commentaire;
use App\Models\Manga;
use Illuminate\Console\Command;

class CommentaireController extends Controller {

    /**
     * Retourne un Commentaire ayant l'Id
     * passé en paramètre
     * @param type $id Id du Commentaire à retourner
     * @return type
     */
    public function show($id) {

    }

    /**
     * Retourne la liste de tous les Commentaire
     * @return Collection de Manga
     */
    public function index() {

    }

    /**
     * Retourne la liste des tous les Commentaires d'un Manga
     * @param int $id Id du Manga
     * @return Collection de Commentaires
     */
    public function getCommentairesManga($id) {
        $commentaires = Commentaire::where('id_manga',$id)->get();
        return response()->json($commentaires, 200);

    }

    /**
     * Ajoute un Manga
     * @return Manga créé
     */
    public function store(Response $response) {
        try {

        } catch (Exception $ex) {

        }
    }

    /**
     * Mise à jour d'un Commentaire
     * @return Commentaire modifié
     */
    public function update(Response $response) {
        try {

        } catch (Exception $ex) {

        }
    }

    /**
     * Supression d'un Commentaire sur son Id
     * @param int $id : Id du Commentaire à supprimer
     * @return Message
     */
    public function delete($id) {
        try {

        } catch (Exception $ex) {

        }
    }

}
