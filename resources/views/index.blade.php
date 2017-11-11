@extends('template')

@section('content')
    <p style="font-size: large;">Task 1:</p>
    @include('tasks.form1')
    <p style="font-size: large; margin-top: 50px;">Task 2:</p>
    <a href="/task2">
        <div class="btn btn-primary">Decrypt</div>
    </a>
    <p style="font-size: large; margin-top: 50px;">Task 3:</p>
    @include('tasks.form3')
@stop
