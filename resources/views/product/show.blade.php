<x-layout>
    <div class="container-fluid  customMargin">
        <div class="row">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-bold text-center align-items-center">
                    <h1 class="text-2xl font-bold text-center ">Dettaglio del prodotto: {{$product->name}}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex mb-3">
                <div class="card mb-3 w-100 h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        
                        <img src="{{Storage::url($product->image)}}" alt="{{$product->name}}">

                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text flex-grow-1">{{ $product->price }}</p>

                        <h6>Inserito da: {{$product->user->name}}</h6>

                        <div class="mt-auto text-center">
                            <a href="{{route('product.index')}}" class="btn btn-primary">Torna indietro</a>
                        
                                <a href="{{route('product.edit', $product)}}" class="btn btn-warning">Modifica</a>
                                {{-- <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete').submit()" class="btn btn-danger">Cancella</a>
                                <form action="{{route('product.delete', $product)}}" method="POST" class="d-none" id="form-delete">
                                    @csrf
                                    @method('delete')
                                </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>