@extends('Admin/layout')

@section('content')

    <nav class="row">
        <ul>
            <li><a href="{{URL::route('listeArticlesAdmin')}}">Liste d'articles</a>

            </li>
        </ul>
    </nav>

    @endsection