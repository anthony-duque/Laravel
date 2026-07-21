<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>The Parts App</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])        

</head>

<body>

    <nav>

        <x-navlink onclick="window.location.href='/stage'"
                  class="{{ request()->is('stage') ? 'btn btn-light fw-bold fst-italic' : 'btn btn-light' }}">
            Stage
        </x-navlink>
        
        <x-navlink onclick="window.location.href='/production'"
                  class="{{ request()->is('production') ? 'btn btn-secondary fw-bold fst-italic' : 'btn btn-secondary' }}">
            Production
        </x-navlink>
        
        <x-navlink onclick="window.location.href='/deliveries'" 
                class="{{ request()->is('deliveries') ? 'btn btn-success fw-bold fst-italic' : 'btn btn-success' }}">
            Deliveries
        </x-navlink>
        
        <x-navlink onclick="window.location.href='/part_search'" 
                class="{{ request()->is('part_search') ? 'btn btn-danger fw-bold fst-italic' : 'btn btn-danger' }}">
            Part Search
        </x-navlink>

        <x-navlink onclick="window.location.href='/materials'" 
                class="{{ request()->is('materials') ? 'btn btn-warning fw-bold fst-italic' : 'btn btn-warning' }}">
            Materials
        </x-navlink>

        <x-navlink onclick="window.location.href='/follow-up'" 
                class="{{ request()->is('follow-up') ? 'btn btn-info fw-bold fst-italic' : 'btn btn-info' }}">
            Follow-up
        </x-navlink>

        <x-navlink onclick="window.location.href='/return_forms'" 
                class="{{ request()->is('return_forms') ? 'btn btn-light fw-bold fst-italic' : 'btn btn-light' }}">
            Return Forms
        </x-navlink>

        <x-navlink onclick="window.location.href='/vendors'" 
                class="{{ request()->is('vendors') ? 'btn btn-dark fw-bold fst-italic' : 'btn btn-dark' }}">
            Vendors
        </x-navlink>
    </nav>

    <br/>

    @yield('content')

</body>
</html>