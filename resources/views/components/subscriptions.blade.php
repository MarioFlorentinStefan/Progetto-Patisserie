<section id="stats" class="container-fluid">
    <div class="row subs justify-content-center align-items-center">
        <div class="col-12 col-md-10">
            <h2 class="display-5 fw-bold my-4 text-center">I DATI NON MENTONO!</h2>
            <div class="d-flex justify-content-evenly">
                <p class="">
                    <span class="Int" id="iscritti" data-value="{{ $iscritti }}">0</span>Clienti Iscritti
                </p>
                <p class="">
                    <span class="Int" id="clienti" data-value="{{ $clienti }}">0</span>Clienti soddisfatti
                </p>
                <p class="">
                    <span class="Int" id="prodotti" data-value="{{ $prodotti }}">0</span>Prodotti Presenti
                </p>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/subscriptions.js') }}"></script>
