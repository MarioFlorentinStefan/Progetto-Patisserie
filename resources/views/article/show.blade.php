<x-layout>
    <div class="container-fluid  customMargin">
        <div class="row">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-bold text-center align-items-center">
                    <h1 class="text-2xl font-bold text-center ">Dettaglio del prodotto: {{$article->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex mb-3">
                <div class="card mb-3 w-100 h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        
                        <img src="{{Storage::url($article->image)}}" alt="{{$article->name}}">

                        <p class="card-text">{{ $article->origin }}</p>
                        <p class="card-text flex-grow-1">{{ $article->body }}</p>

                        <div class="mt-auto text-center">
                            <a href="{{route('article.index')}}" class="btn btn-primary">Torna indietro</a>
                        
                                <a href="{{route('article.edit', $article)}}" class="btn btn-warning">Modifica</a>
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