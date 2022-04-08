<?php
//connexion a la BDD
include '../utils/connectBdd.php';

include '../model/model_user.php';

include '../view/view_create_account.php';

if(isset($_POST['name_user']) AND isset($_POST['first_name_user']) 
AND isset($_POST['login_user']) AND isset($_POST['mdp_user']) AND 
$_POST['name_user'] !='' AND $_POST['first_name_user'] !='' AND 
$_POST['login_user'] !='' AND $_POST['mdp_user'] !=''){
    $nom =$_POST['name_user'];
    $prenom =$_POST['first_name_user'];
    $email =$_POST['login_user'];
    $mdp =md5($_POST['mdp_user']);
    createAccount($bdd,$nom,$prenom,$email,$mdp);
    echo "$nom à été ajouté en  BDD";


}

?>