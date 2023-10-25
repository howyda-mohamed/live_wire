<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Livewire Counter Example</title>
        <link href="{{asset('style.css')}}"rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <livewire:styles />
    </head>
    <body>

    {{-- <livewire:counter /> --}}

    <livewire:contact-form />

    <livewire:scripts />        
</html>
