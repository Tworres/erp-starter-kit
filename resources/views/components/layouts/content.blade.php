@extends('layouts.master')

@section('content')
    <div class="d-flex">
        <x-side-menu height="50px"></x-side-menu>
        <div class="d-flex flex-column flex-grow-1">
            <x-top-menu height="50px"></x-top-menu>
            <div class="flex-grow-1 p-5" style="background: #e3e3e3">
                <div class="container-sm">
                    {{ $slot }}
                </div>
            </div>
            <x-footer></x-footer>
        </div>
    </div>
@endsection

@section('scripts-footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c513091341.js" crossorigin="anonymous"></script>
@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection
