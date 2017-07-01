<?php
session_start();
$juegos=array(
    "id"=>"juego",
    "nombre"=>"HITMAN 2018",
    "descripcion"=>"juego vilateral",
    "precio"=>"120.000",
    
);

$_SESSION["juego"]=$juegos;

$fifa=array(
    "id"=>"fifa",
    "nombre"=>"FIFA 2017",
    "descripcion"=>"futbol fifa 2017",
    "precio"=>"150.000",
    
);

$_SESSION["fifa"]=$fifa;



$GAME=array(
    "id"=>"GAME",
    "nombre"=>"GAME TOUR",
    "descripcion"=>"GAME TOUR",
    "precio"=>"150000",
    
);

$_SESSION["GAME"]=$GAME;

$productos=array(
    "0"=>$juegos,
    "1"=>$fifa,
    "2"=>$GAME,
    
    
    
);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

