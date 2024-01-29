<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    @vite('resources/js/layouts/auth.js')
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            {{$slot}}
        </div>
    </div>
</body>

</html>
