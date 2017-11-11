@extends('template')

@section('content')
    <?php
    $dec = new \App\RSADecryption();
    echo $dec->decrypt();
    ?>
@stop