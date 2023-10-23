<?php
include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';
extract($_POST);
$es = new EtudiantService();
$es->create(new Etudiant($id, $nom, $prenom, $ville, $sexe));
header("location:../index.php");