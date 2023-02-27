@extends('layout')

@section('title' , 'create computer')
@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8">
                    <h1>create new Computer</h1>
                </div>
                <div class="mt-8">
                    <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1">
                       @csrf
                        <input type="text" name="computer_name"  id="computer_name" 
                        placeholder="name" required value="{{old('computer_name')}}"> 

                        @error('computer_name')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="text" name="computer_origin"id="computer_origin" 
                        placeholder="origin"required value="{{old('computer_origin')}}">

                        @error('computer_origin')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="text" name="computer_price" id="computer_price" 
                        placeholder="price"required value="{{old('computer_price')}}">
                        
                        @error('computer_price')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="submit" class=submit>
                    </form>
                </div>
            </div>
        </div>


@endsection