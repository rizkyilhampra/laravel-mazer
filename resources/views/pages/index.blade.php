<?php

use function Laravel\Folio\{middleware, name};

name('home');
middleware(['auth'])

?>

<x-app-layout title="Home" pageTitle="Home">
@volt
    <div>

    </div>
@endvolt
</x-app-layout>
