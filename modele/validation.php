<?php

function add_competences($liste_c,$nom_c)
{
    global $bdd;
    
    $liste_c = (string) $liste_c;
    $nom_c = (string) $nom_c;
    
    $req = $bdd->prepare("INSERT INTO competences (nom_c, liste_c) VALUES (:nom_c, :liste_c);");
    $req->bindParam(':liste_c', $liste_c, PDO::PARAM_STR);
    $req->bindParam(':nom_c', $nom_c, PDO::PARAM_STR);
    $req->execute();
}

function add_experiences($duree_e,$entreprise_e,$poste_e,$travaux_e)
{
    global $bdd;
    
    $duree_e = (string) $duree_e;
    $entreprise_e = (string) $entreprise_e;
    $poste_e = (string) $poste_e;
    $travaux_e = (string) $travaux_e;
    
    $req = $bdd->prepare("INSERT INTO experiences (duree_e, entreprise_e, poste_e, travaux_e) VALUES (:duree_e, :entreprise_e, :poste_e, :travaux_e);");
    $req->bindParam(':duree_e', $duree_e, PDO::PARAM_STR);
    $req->bindParam(':entreprise_e', $entreprise_e, PDO::PARAM_STR);
    $req->bindParam(':poste_e', $poste_e, PDO::PARAM_STR);
    $req->bindParam(':travaux_e', $travaux_e, PDO::PARAM_STR);
    $req->execute();
}

function add_projets($date_p,$description_p,$lien_p)
{
    global $bdd;
    
    $date_p = (string) $date_p;
    $description_p = (string) $description_p;
    $lien_p = (string) $lien_p;
    
    $req = $bdd->prepare("INSERT INTO projets (date_p, description_p, lien_p) VALUES (:date_p, :description_p, :lien_p);");
    $req->bindParam(':date_p', $date_p, PDO::PARAM_STR);
    $req->bindParam(':description_p', $description_p, PDO::PARAM_STR);
    $req->bindParam(':lien_p', $lien_p, PDO::PARAM_STR);
    $req->execute();
}

function add_formations($annee_f,$description_f,$ecole_f)
{
    global $bdd;
    
    $annee_f = (string) $annee_f;
    $description_f = (string) $description_f;
    $ecole_f = (string) $ecole_f;
    
    $req = $bdd->prepare("INSERT INTO formation (annee_f, description_f, ecole_f) VALUES (:annee_f, :description_f, :ecole_f);");
    $req->bindParam(':annee_f', $annee_f, PDO::PARAM_STR);
    $req->bindParam(':description_f', $description_f, PDO::PARAM_STR);
    $req->bindParam(':ecole_f', $ecole_f, PDO::PARAM_STR);
    $req->execute();
}

function add_interets($description_i)
{
    global $bdd;
    
    $description_i = (string) $description_i;
    
    $req = $bdd->prepare("INSERT INTO interets (description_i) VALUES (:description_i);");
    $req->bindParam(':description_i', $description_i, PDO::PARAM_STR);
    $req->execute();
}