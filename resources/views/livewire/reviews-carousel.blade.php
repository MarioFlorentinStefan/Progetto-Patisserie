<div>
    @if($reviews->count())

        <div class="row g-4 customMargin">
            @foreach($reviews as $review)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card custom-card h-100 shadow-sm">
                        <div class="card-body">

                            <h5 class="card-title">
                                {{ $review->name }}
                            </h5>

                            <h6 class="card-subtitle text-muted mb-2">
                                Prodotto recensito: {{ $review->product }}
                            </h6>

                            <p class="card-text">
                                {{ $review->description }}
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @else
        <p class="text-muted">Non ci sono ancora recensioni.</p>
    @endif
</div>
