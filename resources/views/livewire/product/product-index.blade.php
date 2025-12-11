<div>

    <form wire:submit.prevent class="text-center">
        <input type="text" class="border rounded p-2 w-full mb-4" placeholder="Cerca Articoli..." wire:model.live="search">
        
    </form>


   <div class="container vh ">
        <div class="row justify-content-center">
            @foreach ($products as $product)
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card CustomCard" >
                    <div class="card-body text-center">
                        <h5 class="card-title h5">{{ $product->name }}</h5>
                        
                        <img src="{{$product->image ? Storage::url($product->image) : Storage::url('image/imageDefault.jpeg')}}" alt="{{$product->title}}" class=" img-fluid rounded  w-60 WHCustom d-block mx-auto">

                        <div class="d-flex flex-column divButtonsCard">

                        <a href="{{route('product.show', $product)}}" class="btn btnMore" aria-placeholder="Maggiori Dettagli">Dettaglio <i class="fa-solid fa-arrow-right"></i></a>
                        @auth
                        {{-- Pulsante di Modifica --}}
                        <a href="{{route('product.edit', $product)}}" class="btn btnModify" aria-placeholder="Modifica"><i class="fa-solid fa-pencil fa-1x"></i></a>
                        {{-- Pulsante di Cancellazione --}}
                        <button class="btn btnDelete" wire:click="delete({{ $product->id }})" aria-placeholder="Elimina"><i class="fa-solid fa-ban"></i></button>
                        @endauth

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  