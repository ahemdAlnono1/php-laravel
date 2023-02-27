@extends('layout')

@section('title' , 'show computer')
@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8">
                    <h1>Computer</h1>
                </div>
                <div class="mt-8">
                    <h3>
                    {{$computer['name']}}<strong>({{$computer['origin']}})</strong>
                    {{$computer['price']}}$
                    </h3>
                </div>
                <a href="{{route('computers.index')}}">Back</a>
                <br>
                <a href="{{route('computers.edit' , $computer -> id)}}">Edit</a>
                <br>
                <form action="{{route('computers.destroy' , $computer -> id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Delete</button>
                </form>
            </div>
        </div>


@endsection
