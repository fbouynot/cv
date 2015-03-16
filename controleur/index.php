<?php

include(ROOT."/modele/connexion.php");
include(ROOT."/modele/index.php");

$competences = get_competences();
foreach ($competences as $cle => $competence)
{
    $competences[$cle]['nom_c'] = nl2br(htmlspecialchars($competence['nom_c']));
    $competences[$cle]['liste_c'] = nl2br(htmlspecialchars($competence['liste_c']));
}

$experiences = get_experiences();
foreach ($experiences as $cle => $experience)
{
    $experiences[$cle]['duree_e'] = nl2br(htmlspecialchars($experience['duree_e']));
    $experiences[$cle]['entreprise_e'] = nl2br(htmlspecialchars($experience['entreprise_e']));
    $experiences[$cle]['poste_e'] = nl2br(htmlspecialchars($experience['poste_e']));
    $experiences[$cle]['travaux_e'] = nl2br(htmlspecialchars($experience['travaux_e']));
}

$projets = get_projets();
foreach ($projets as $cle => $projet)
{
    $projets[$cle]['date_p'] = nl2br(htmlspecialchars($projet['date_p']));
    $projets[$cle]['description_p'] = nl2br(htmlspecialchars($projet['description_p']));
    $projets[$cle]['lien_p'] = nl2br(htmlspecialchars($projet['lien_p']));
}

$formations = get_formation();
foreach ($formations as $cle => $formation)
{
    $formations[$cle]['annee_f'] = nl2br(htmlspecialchars($formation['annee_f']));
    $formations[$cle]['description_f'] = nl2br(htmlspecialchars($formation['description_f']));
    $formations[$cle]['ecole_f'] = nl2br(htmlspecialchars($formation['ecole_f']));
}

$interets = get_interets();
foreach ($interets as $cle => $interet)
{
    $interets[$cle]['description_i'] = nl2br(htmlspecialchars($interet['description_i']));
}

$nav = "Navigation";
//$competences = "<a href='" . BASE_URL . "/administration'>Je suis un lapin.</a>";
//$experiences = "experiences";
//$projets = "projets";
//$formation = "formation";
//$interets = "interets";

include(ROOT . "/vue/index.php");
