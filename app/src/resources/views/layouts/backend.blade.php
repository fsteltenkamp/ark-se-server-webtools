<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-background-light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite([
        'resources/css/app-light.css',
        'resources/js/app.js',
    ])
</head>

<body>
    <div class="columns">
        <div class="column is-one-fifth">
            @include('partials.nav.main')
        </div>
        <div class="column">
            <div class="level" style="margin-top:60px;">
                <div class="level-left">
                    @if (isset($breadcrumbs))
                        <div class="container is-fluid mt-5 mb-5 level-item">
                            <x-breadcrumbs.main>
                                {{ $breadcrumbs }}
                            </x-breadcrumbs.main>
                        </div>
                    @endif
                </div>
                <div class="level-right">
                    @if (isset($heading_buttons) && !isset($heading))
                        <div class="container is-fluid level-right">
                            <ul>
                                {{ $heading_buttons }}
                            </ul>
                        </div>
                    @endif
                </div>
            </div>

            @if (isset($header) || isset($heading))
                <!-- Page Heading -->
                @if (!empty($header))
                    {{ $header }}
                @else
                    <section class="hero is-small">
                        <div class="hero-body">
                            <div class="container is-fluid">
                                <h1 class="title">{{ $heading }}</h1>
                                @if (isset($headingsubtitle))
                                    <h2 class="subtitle">{{ $headingsubtitle }}</h2>
                                @endif
                            </div>
                        </div>
                        @if (isset($heading_buttons))
                            <div class="hero-foot">
                                <nav class="tabs">
                                    <div class="container is-fluid">
                                        <ul>
                                            {{ $heading_buttons }}
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        @endif
                    </section>
                @endif
            @endif

            <!-- Page Content -->
            <main class="container is-fluid" style="margin-bottom:80px;">
                <div class="card py-5">
                    {{ $slot ?? '' }}
                </div>
            </main>
        </div>
    </div>
</body>
</html>
