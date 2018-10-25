@extends('_layouts.master')

@section('body')

<div class="font-sans flex items-center justify-center h-screen">
    <div class="text-center">
        <img
            src="assets/images/jessarcher.png"
            alt="Jess Archer"
            class="border-white border-4 rounded-full shadow-md w-1/4 mb-4"
        >

        <div class="text-grey-darkest text-xl font-semibold mb-2"> Jess Archer</div>

        <div class="text-grey-dark mb-4">Web Application Developer</div>

        <div class="text-grey-dark text-sm">
            <i class="text-grey fas fa-map-marker-alt"></i> Brisbane, Australia
        </div>
    </div>
</div>

@endsection
