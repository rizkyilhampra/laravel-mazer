<?php

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;

name('dashboard');
middleware('auth');

?>

<x-layouts.app>hallo</x-layouts.app>
