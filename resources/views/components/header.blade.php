{{-- <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">Welcome back {{ auth()->user()->name }}</h1>
    </div>
</header> --}}
<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            {{ $title ?? 'Default Title' }}
        </h1>
    </div>
</header>
