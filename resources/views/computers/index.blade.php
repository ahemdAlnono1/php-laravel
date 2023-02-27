@extends('layout')

@section('title', 'Computer')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8">
                    <h1>Computer</h1>
                </div>
                <div class="mt-8">
                    @if(count($computers) > 0)
                    <ul>
                            @foreach($computers as $co)
                            <a href="{{route('computers.show' , ['computer' => $co['id']])}}">
                                <li>{{$co['name']}} <strong>({{$co['origin']}})</strong><strong>{{$co['price']}}$</strong></li>
                            </a>
                            @endforeach   
                    </ul>
                    @else
                        <p>thir are no computers now</p>
                    @endif
                </div>
            </div>
        </div>
@endsection