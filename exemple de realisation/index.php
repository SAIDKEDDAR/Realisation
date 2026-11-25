<?php 
$siteTitle = "Sanaa Market";
$email  = "saidkeddar0@gmail";
$date = "2026-11-23";

$navigation = [
    "#boutique" => "BOUTIQUE",
    "#avis" => "AVIS",
    "#comment" => "COMMENT CA MARCHE",
    "#contact" => "CONTACT",
];

$produits =[
    [
        "nom" => "Tapis marocain",
        "image" => "image/tapis.jpg",
        "description" => "Un tapis fait a la main avec de belles couleurs.",
        "prix" => 1200,   
     ],
    [
        "nom" => "Sac artisanal",
        "image" => "image/sac.jpg",
        "description" => "Un sac pratique et fabrique a la main.",
        "prix" => 350,   
     ],
    [
        "nom" => "Porterie de Safi",
        "image" => "image/Porterie-de-Safi.jpg",
        "description" => "Un bol en céramique peint à la main.",
        "prix" => 180,   
     ],
    [
        "nom" => "Huile d'argan",
        "image" => "image/Huile-d'argan.jpg",
        "description" => "Une huile pure produite par une coopérative.",
        "prix" => 120,   
     ],
];
 
$avis = [
    ["nom" => "Amine", "pays" => "Maroc", "texte" => "Le produit est magnifique, je suis tres content."],
    ["nom" => "Sarah", "pays" => "France", "texte" => "La qualité est excellente, je recommande !"],
    ["nom" => "Julian", "pays" => "Espagne", "texte" => "J’ai reçu ma commande rapidement et l’emballage était très soigné."],
];

$etapes = [
    ["titre" => "1. Choisis", "texte" => "Choisis un produit fait par une cooperative."],
    ["titre" => "2. Paye 30%" , "texte" => "Tu payes un acompte de 30 % pour lancer la fabrication."],
    ["titre" => "3. Recois" , "texte" => "Tu paies le reste avant la livraison et tu reçois ta commande."],
];

require "index-template.php" ;
?>