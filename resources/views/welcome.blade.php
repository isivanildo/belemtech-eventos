@extends('layouts.main')

@section('title', 'Belém Tech')

@section('content')
<h1>Título da página</h1>
        <img src="/img/evento2.jpg" alt="">
        @if (10 > 15)
        <p>Condição verdadeira.</p>
        @endif

        <p>{{$nome}}</p>

        @if ($nome == "Renata")
        <p>O nome é Renata</p>
        @elseif ($nome == "Ivanildo")
        <p>O nome é {{$nome}} e tem {{$idade}} anos, e trabalha como {{$profissao}}</p>
        @else
        <p>O nome não é Renata</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
        @endfor

        @foreach ($nomes as $nome)
            <p>{{$nome}}</p>
        @endforeach

        @php
        $nome = "Renata";
        echo $nome;
        @endphp

@endsection

