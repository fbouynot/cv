<?php

/* function get_experience()
{
    global $bdd;
    
    $req = $bdd->prepare('SELECT id, titre, contenu FROM billet LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();
    
    return $billets;
} */