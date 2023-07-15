<?php
require_once 'functions.php';

$data = $_REQUEST;

$nomor = $data['nomor'];

if ( ! $nomor ) {
    header( 'Location: index.php' );
}

handle_no_hp( $nomor );