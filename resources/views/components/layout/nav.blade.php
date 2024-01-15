<nav class="container mx-auto p-4 flex justify-between">
    {{-- left navigation--}}
    <div class="flex items-center space-x-2">
        <a class="hidden sm:block font-medium text-lg" href="{{ route('home') }}">
            Examen PHP 23-24 January
        </a>
    </div>

    {{-- right navigation --}}
    <div class="relative flex items-center space-x-2">
        <x-nav-link href="#" :active="request()->routeIs('shop')">
            Shows
        </x-nav-link>
    </div>
</nav>
