<x-layouts.app>
    <main class="row gap-3 justify-content-center">
        <x-sidebar/>
        <article class="col bg-secondary rounded">
            {{ $slot }}
        </article>
    </main>
</x-layouts.app>
