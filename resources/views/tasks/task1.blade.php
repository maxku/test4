@extends('template')

@section('content')
    @include('tasks.form1')
    <?php
    $id = 7;
    $level = null;

    if (isset($_GET['id']) && $_GET['id'] != '')
        $id = (int)$_GET['id'];
    if (isset($_GET['level']) && $_GET['level'] != '')
        $level = (int)$_GET['level'];

    echo "<br>Children of $id<pre>";
    $loc = new \App\Location($id);
    var_dump($loc->getChild($level));
    echo "</pre>Parents of $id<br><pre>";
    var_dump($loc->getParent($level));
    ?>

@stop