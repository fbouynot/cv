<?php

function get_competences()
{
    global $bdd;

    $req = $bdd->prepare('SELECT nom_c,liste_c FROM competences;');
    $req->execute();
    $competences = $req->fetchAll();

    return $competences;
}

function get_experiences()
{
    global $bdd;
    
    $req = $bdd->prepare('SELECT duree_e,entreprise_e,poste_e,travaux_e FROM experiences');
    $req->execute();
    $experiences = $req->fetchAll();
    
    return $experiences;
}

function get_projets()
{
    global $bdd;
    
    $req = $bdd->prepare('SELECT date_p,description_p,lien_p FROM projets');
    $req->execute();
    $projets = $req->fetchAll();
    
    return $projets;
}

function get_formation()
{
    global $bdd;
    
    $req = $bdd->prepare('SELECT annee_f,description_f,ecole_f FROM formation');
    $req->execute();
    $formations = $req->fetchAll();
    
    return $formations;
}

function get_interets()
{
    global $bdd;
    
    $req = $bdd->prepare('SELECT description_i FROM interets');
    $req->execute();
    $interets = $req->fetchAll();
    
    return $interets;
}