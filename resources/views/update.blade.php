@extends('layouts.layout')



@section('content')


    <section>

        @if (session('edit'))

            <form action="/" method="POST">
                @csrf
                <input type="text" name="first" placeholder="First Name" value="{{ session('edit')->name }}">
                <input type="text" name="middle" placeholder="Middle Name" value="{{ session('edit')->middle }}">
                <input type="text" name="last" placeholder="Last Name" value="{{ session('edit')->last }}">
                <input type="submit" value="update">
            </form>

        @endif

    </section>

@endsection