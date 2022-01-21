<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet"> --}}
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .tw { color: white; }
            .tp { color: violet; }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-200 sm:items-center py-4 sm:pt-0">
            <div class="space-y-6 bg-gray-100 py-6 max-w-6xl mx-auto sm:px-6 lg:px-8">
                <x-jet-button class="text-purple-800">Test</x-jet-button>
                <div>
                    <h2 class="text-center">Badges</h2>

                    <h3 class="my-2 text-sm">Types</h3>
                    <x-badge>default (no attributes)</x-badge>
                    <x-badge type="primary">primary</x-badge>
                    <x-badge type="secondary">secondary</x-badge>

                    <h3 class="my-2 text-sm">Sizes</h3>
                    <x-badge size="xs">xs lorem</x-badge>
                    <x-badge size="sm">sm lorem</x-badge>
                    <x-badge size="base">base lorem</x-badge>
                    <x-badge size="lg">lg lorem</x-badge>

                    <h3 class="my-2 text-sm">Custom</h3>
                    <x-badge type="primary" class="text-white">primary text-white</x-badge>
                    <x-badge type="secondary" class="rounded px-5">secondary rounded p-x-5</x-badge>
                </div>

                <div>
                    <h2 class="text-center">Buttons</h2>

                    <h3 class="my-2 text-sm">Types</h3>
                    <x-button>default</x-button>
                    <x-button type="primary">primary</x-button>
                    <x-button type="secondary">secondary</x-button>

                    <h3 class="my-2 text-sm">Sizes</h3>
                    <x-button size="xs">xs</x-button>
                    <x-button size="sm">sm</x-button>
                    <x-button size="lg">lg</x-button>

                    <h3 class="my-2 text-sm">Custom</h3>
                    <x-button type="secondary" class="text-purple-800 rounded-full">type:secondary class:text-purple-800 rounded-full</x-button>
                </div>

                <div>
                    <h2 class="text-center">Links</h2>

                    <h3 class="my-2 text-sm">Types</h3>
                    <div class="space-x-5">
                        <x-link>default</x-link>
                        <x-link underline>underline</x-link>
                    </div>

                    <h3 class="my-2 text-sm">Sizes</h3>
                    <div class="space-x-5">
                        <x-link size="xs">size:xs</x-link>
                        <x-link size="sm">size:sm</x-link>
                        <x-link size="base">size:base</x-link>
                        <x-link size="lg">size:lg</x-link>
                    </div>

                    <h3 class="my-2 text-sm">Custom</h3>
                    <div class="space-x-5">
                        <x-link class="hover:underline">[default hover:underline]</x-link>
                        <x-link underline class="font-bold">underline bold</x-link>
                        <x-link underline class="text-red-500">
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span>destroy database</span>
                        </x-link>
                    </div>
                </div>

                <div>
                    <h2 class="text-center">Input</h2>

                    <h3 class="my-2 text-sm">Types</h3>
                    <x-input placeholder="default" />

                    <h3 class="my-2 text-sm">Sizes</h3>
                    <div class="space-y-2">
                        <x-input size="xs" placeholder="default size:xs" />
                        <x-input size="sm" placeholder="default size:sm" />
                        <x-input size="base" placeholder="default size:base" />
                        <x-input size="lg" placeholder="default size:lg" />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
