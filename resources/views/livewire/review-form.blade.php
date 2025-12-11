<div>
    <div class="reviewCustom">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="text-center">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model.defer="name">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Prodotto</label>
            <input type="text" class="form-control" wire:model.defer="product">
            @error('product') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Recensione</label>
            <textarea class="form-control" rows="4" wire:model.defer="description"></textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="CustomButton">Invia recensione</button>
        </div>
    </form>
    </div>
</div>
