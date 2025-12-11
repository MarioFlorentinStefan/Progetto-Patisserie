<x-layout>
    <div class="container customMargin">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Modifica l'articolo {{$article->title}}</h1>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <livewire:article-edit-form :articleObject="$article" />
            </div>
        </div>
    </div>
</x-layout>