<div class="container-fluid hidden pt-5">
    <div class="row">
        
        <div class="col-12 col-lg-6  d-flex flex-column align-items-center CustomContainer " data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
            
            <img src="/images/index.jpg" alt="" class="img-fluid rounded w-75 d-block mx-auto">
            
            <h2 class="text-center mt-5">Vincenzo Ievolella | Pastry Chef |</h2>
            <p class="CustomPadding px-4 mt-3">Vincenzo Ievolella,<br> giovane pasticcere di 26 anni, unisce tecnica moderna e creatività pura. Ogni sua creazione nasce da una ricerca instancabile e da un’idea nuova da trasformare in gusto. Scopri il suo percorso e la sua visione rivoluzionaria.</p>
            <span><a href="" class="btn CustomButton">Scopri di più</a></span>
        </div>
        
        <div class="col-12 col-lg-6  d-flex flex-column align-items-center CustomContainer1  " data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h1 class=" mb-4 mt-5">La Storia di Vincenzo Ievolella</h1>
        <p class=" px-4">
            Fin da ragazzo, Vincenzo Ievolella ha coltivato una passione instancabile per la pasticceria,
            trasformando la curiosità in studio, sperimentazione e ricerca continua.
            Dopo anni di lavoro tra laboratori artigianali e pasticcerie moderne, ha voluto creare
            uno spazio tutto suo: un luogo dove condividere le tecniche, le tradizioni e le innovazioni
            che rendono la pasticceria un’arte in continua evoluzione.
        </p>
        
        <p class="px-4">
            Da questa visione nasce il suo sito: un viaggio attraverso le specialità dolciarie
            delle diverse parti del mondo, raccontate con cura e attenzione a ogni dettaglio.
            Ogni prodotto diventa un capitolo, ogni dolce una storia da scoprire.
        </p>
        
        <p class="px-4">
            Qui, Vincenzo unisce esperienza, studio e creatività per far conoscere non solo
            le ricette, ma anche ciò che si nasconde dietro ogni tradizione, ogni profumo
            e ogni ingrediente. Un invito ad esplorare la pasticceria con occhi nuovi.
        </p>
        {{-- Da mettere carousel con prodotti/articoli o recensioni --}}
        
            <h2 class="py-5">Cosa dicono su di noi!</h2>
            
                @if($reviews->count())
                <div id="carouselExample" class="carousel slide carouselCustom" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
                    <div class="carousel-inner">
                        @props(['reviews'])
                        @foreach($reviews as $index => $review)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <h4 class="fw-bolder">Utente: {{ $review->name }}</h2>
                            <p class="fw-bolder">Prodotto: {{ $review->product }}</p>
                            <p>Descrizione: {{ $review->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            
        
        <span><a href="{{route('reviews.index')}}" class="btn mb-4 CustomButton">Vedi tutte le Recensioni!</a></span>
    </div>
</div>
@endif
</div>