<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form class="shadow p-5 rounded bg-custom" wire:submit="update">
        <div class="mb-3">
            <label for="inputName" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputName" aria-describedby="name" wire:model.live="name">
            <div>@error('title'){{$message}}@enderror</div>
        </div>
        <div class="mb-3">
            <label for="inputPrice" class="form-label">Prezzo:</label>
            <input type="number" class="form-control" id="inputPrice" aria-describedby="price" wire:model.live="price">
            <div>@error('price'){{$message}}@enderror</div>
        </div>
        <div class="mb-3">
            <label for="inputOrigin" class="form-label">Provenienza:</label>
            <input type="text" class="form-control" id="inputOrigin" aria-describedby="Origin" wire:model.live="origin">
            <div>@error('origin'){{$message}}@enderror</div>

        </div>
        <div class="mb-3">
            <label for="inputDescription" class="form-label">Corpo del Prodotto</label>
            <textarea id="inputDescription" class="form-control" cols="30" rows="10" wire:model.live="description"></textarea>
            <div>@error('description'){{$message}}@enderror</div>

        </div>
        <div class="mb-3">
            <label for="inputImage" class="form-label">Immagine dell'articolo:</label>
            <input type="file" class="form-control" id="inputImage" aria-describedby="Image" wire:model.live="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror

        </div>
        <button type="submit" class="btn btnCustom btnModify">Modifica Prodotto</button>
    </form>
</div>
