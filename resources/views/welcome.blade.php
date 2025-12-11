<x-layout>
    {{-- Header Con search bar & images --}}
    <x-header/>
    {{-- Subscriptions Increment --}}
    <x-subscriptions :iscritti="$iscritti" :clienti="$clienti" :prodotti="$prodotti" />

    {{-- Presentation with Story, Carousel Reviews --}}
    <x-presentation :reviews="$reviews"/>
    <x-review-section />
    
</x-layout>