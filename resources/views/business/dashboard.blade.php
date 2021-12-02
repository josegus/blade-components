{{-- <x-layout.business alpine livewire jquery vue>
    @section('navbar')
        @parent

        <div>this should goes to the bottom of navbar</div>
    @endsection

    @section('content')
        <p>Main content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias similique aperiam molestiae
            quod dolore cum autem commodi nulla id ipsa, aut, harum maxime vero sint, a nobis voluptatum excepturi atque?
        </p>
    @endsection
</x-layout.business>
 --}}

<x-layout.business alpine livewire jquery vue>
    <p>Main content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias similique aperiam molestiae
        quod dolore cum autem commodi nulla id ipsa, aut, harum maxime vero sint, a nobis voluptatum excepturi atque?
    </p>

    <x-slot name="scripts">
        <div>script from dashboard</div>
    </x-slot>
</x-layout.business>
