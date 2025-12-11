<x-layout>
    <div class="container customMargin">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Modifica il prodotto{{$product->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <livewire:product-edit-form :productObject="$product" />
            </div>
        </div>
    </div>
</x-layout>