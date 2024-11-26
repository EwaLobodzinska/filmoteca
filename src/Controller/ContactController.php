<?php
declare(strict_types=1);

namespace App\Controller;

class ContactController{
    public function list(){
        echo "Liste des contact";
    }
    public function create(){
        echo "Creer un contact";
    }
    public function read(){
        echo "Lire un contact";
    }
    public function update(){
        echo "Mettre à jour un contact";
    }
    public function delete(){
        echo "Supprimer un contact";
    }
}

?>