<!-- error-section -->
<section class="error-section pt_150 pb_150 centred">
    <div class="auto-container">
        <div class="content-box">
            <figure class="error-image"><img src="assets/images/icons/error-1.png" alt=""></figure>
            <h2>Erreur de chargement de section</h2>
            <p>{{ $message ?? 'Une erreur est survenue lors du chargement de cette section.' }}</p>
            <a href="{{ route('home') }}" class="theme-btn btn-two"><span class="text">Retour à l'accueil</span><i class="icon-2"></i></a>
        </div>
    </div>
</section>
<!-- error-section end -->