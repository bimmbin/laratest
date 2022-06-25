@extends('layouts.layout')



@section('content')


    <section>

        <form action="/" method="POST">
            @csrf
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="middle" placeholder="Middle Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="submit">
        </form>


        <div class="data-container">
            @foreach($datas as $data)
            <div class="data">

                {{ $loop->iteration }}. {{ $data->name }} - {{ $data->middle }} - {{ $data->last }}

                <div class="du">
                    <form action="/{{ $data->id }}" method="GET">
                        @csrf
                        <input type="submit" value="edit">
                    </form>
                    <form action="/{{ $data->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </div>
            </div>
            @endforeach
        </div>


        @if (session('edit'))

            <form action="/{{ session('edit')->id }}" method="POST">
                @csrf
                <input type="text" name="first" placeholder="First Name" value="{{ session('edit')->name }}">
                <input type="text" name="middle" placeholder="Middle Name" value="{{ session('edit')->middle }}">
                <input type="text" name="last" placeholder="Last Name" value="{{ session('edit')->last }}">
                <input type="submit" value="update">
            </form>
        @endif


    </section>

@endsection