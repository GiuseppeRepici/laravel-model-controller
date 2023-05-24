<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')

    @section('content')
        <h2>Home</h2>
        <ul>
            
            <div class="d-flex flex-wrap">
                @foreach ($movies as $movie)
                <div class="card col-4 m-4" style="width: 15rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                    </div>
                </div> 
                @endforeach 
            </div>  
            
        </ul>
    @endsection