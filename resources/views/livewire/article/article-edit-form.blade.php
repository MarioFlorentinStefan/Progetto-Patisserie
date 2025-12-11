<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form class="shadow p-5 rounded bg-custom" wire:submit="update">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="inputTitle" aria-describedby="title" wire:model.live="title">
            <div>@error('title'){{$message}}@enderror</div>
        </div>
        <div class="mb-3">
            <label for="inputOrigin" class="form-label">Provenienza:</label>
            <input type="text" class="form-control" id="inputOrigin" aria-describedby="Origin" wire:model.live="origin">
            <div>@error('origin'){{$message}}@enderror</div>

        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Corpo del articolo</label>
            <textarea id="inputBody" class="form-control" cols="30" rows="10" wire:model.live="body"></textarea>
            <div>@error('body'){{$message}}@enderror</div>

        </div>
        <div class="mb-3">
            <label for="inputImage" class="form-label">Immagine dell'articolo:</label>
            <input type="file" class="form-control" id="inputImage" aria-describedby="Image" wire:model.live="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        <button type="submit" class="btn btnCustom btnModify">Modifica Articolo</button>
    </form>
</div>
