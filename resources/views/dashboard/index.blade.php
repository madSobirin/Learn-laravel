<x-layout>
    <x-slot name="header">
        <x-header :title="'Welcome back ' . auth()->user()->name" />
    </x-slot>

    <p>Isi Dashboard...</p>
</x-layout>
