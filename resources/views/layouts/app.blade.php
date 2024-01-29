<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    @vite('resources/js/layouts/app.js')
</head>

<body>
    <div id="app">
        <livewire:app.sidebar />
        <div id="main" class='layout-navbar navbar-fixed'>
            @include('layouts.partials.header')
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>{{$pageTitle}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                {{$slot}}
            </div>
        </div>
    </div>
</body>

</html>
