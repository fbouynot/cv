<?php

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv","root","root");
}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}