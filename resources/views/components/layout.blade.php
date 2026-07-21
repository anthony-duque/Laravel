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

        <x-navlink onclick="window.location.href='/stage'" :active="request()->is('stage')"
                    base-class="btn btn-light">
            Stage
        </x-navlink>
        
        <x-navlink onclick="window.location.href='/production'" :active="request()->is('production')"
                  base-class="btn btn-secondary">
            Production
        </x-navlink>
        
        <x-navlink onclick="window.location.href='/deliveries'" :active="request()->is('deliveries')"
                base-class="btn btn-success">
            Deliveries
        </x-navlink>
        
        <x-navlink onclick="window.location.href='/part_search'" :active="request()->is('part_search')"
                base-class="btn btn-danger">
            Part Search
        </x-navlink>

        <x-navlink onclick="window.location.href='/materials'" :active="request()->is('materials')"
                base-class="btn btn-warning">
            Materials
        </x-navlink>

        <x-navlink onclick="window.location.href='/follow-up'" :active="request()->is('follow-up')"
                base-class="btn btn-info">
            Follow-up
        </x-navlink>

        <x-navlink onclick="window.location.href='/return_forms'" :active="request()->is('return_forms')"
                base-class="btn btn-light">
            Return Forms
        </x-navlink>

        <x-navlink onclick="window.location.href='/vendors'" :active="request()->is('vendors')"
                base-class="btn btn-dark">
            Vendors
        </x-navlink>
    </nav>

    <br/>

    @yield('content')

</body>
</html>