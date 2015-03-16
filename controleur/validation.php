<?php

include(ROOT."/modele/connexion.php");
include(ROOT."/modele/validation.php");

if (isset($_POST['competences_c']) && isset($_POST['nom_c']))
{
    add_competences($_POST['competences_c'],$_POST['nom_c']);
}
elseif (isset($_POST['duree_e']) && isset($_POST['entreprise_e']) && isset($_POST['travaux_e']) && isset($_POST['poste_e']))
{
    add_experiences($_POST['duree_e'],$_POST['entreprise_e'],$_POST['poste_e'],$_POST['travaux_e']);
}
elseif (isset($_POST['date_p']) && isset($_POST['description_p']) && isset($_POST['lien_p']))
{
    add_projets($_POST['date_p'],$_POST['description_p'],$_POST['lien_p']);
}
elseif (isset($_POST['annee_f']) && isset($_POST['description_f']) && isset($_POST['ecole_f']))
{
    add_formations($_POST['annee_f'],$_POST['description_f'],$_POST['ecole_f']);
}
elseif (isset($_POST['description_i']))
{
    add_interets($_POST['description_i']);
}

include(ROOT . "/vue/validation.php");