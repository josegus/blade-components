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
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <x-jet-button class="text-purple-800">Test</x-jet-button>

                    <h2>Badges</h2>
                    <x-badge primary xs>Primary xs</x-badge>
                    <x-badge secondary sm>Secondary sm</x-badge>
                    <x-badge secondary>Secondary base</x-badge>
                    <x-badge primary lg>Primary lg</x-badge>
                    <x-badge secondary xl>Secondary xl</x-badge>

                    <x-badge primary class="text-red-500">Primary text-red-500</x-badge>
                    <x-badge secondary class="rounded px-5">Secondary rounded p-x-5</x-badge>

                    {{--
                        With default attributes (type=primary size=base)
                        <x-badge>Primary base</x-badge>

                        With named attributes
                        <x-badge
                            type="primary"
                            size="sm"
                            class="rounded px-5"
                        >
                            Primary sm rounded p-x-5
                        </x-badge>
                    --}}
                </div>

                <div class="mt-8">
                    <h1 class="text-xl">Buttons</h1>

                    <h2>Types</h2>
                    <x-button primary>Primary</x-button>
                    <x-button secondary>Secondary</x-button>

                    <h2 class="mt-4">Sizes</h2>
                    <x-button primary xs>xs</x-button>
                    <x-button primary sm>sm</x-button>
                    <x-button primary lg>lg</x-button>
                    <x-button primary xl>xl</x-button>

                    <h2 class="mt-4">Custom</h2>
                    <x-button primary class="text-purple-800 rounded-full">Primary text-purple-800 rounded-full</x-button>
                </div>
            </div>
        </div>
    </body>
</html>
