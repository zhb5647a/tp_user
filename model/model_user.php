<?php
function createAccount($bdd,$nom,$prenom,$email,$mdp){

    try{
        $req = $bdd->prepare('INSERT INTO utilisateur(name_user, first_name_user,
        login_user, mdp_user) 
        VALUES(:name_user, :first_name_user, :login_user, :mdp_user)');
        $req->execute(array(
            'name_user' => $nom,
            'first_name_user' =>$prenom,
            'login_user' =>$email,
            'mdp_user' =>$mdp
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}

?>
