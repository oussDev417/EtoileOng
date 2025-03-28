<!-- section-benevole -->
<section class="contact-section pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image">
                        <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image" class="rounded-20">
                    </figure>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="form-inner">
                    <div class="sec-title mb_50">
                        <span class="sub-title mb_12">Agir avec nous dès maintenant</span>
                        <h2>Devenez <span>Bénévole</span> ou <br />volontaire - Devenez partenaires</h2>
                    </div>
                    <form action="{{ route('benevole.store') }}" method="POST" class="default-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Nom" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="prenom" placeholder="Prénom" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Téléphone" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button class="theme-btn btn-one" type="submit"><span class="text">Envoyer</span></button>
                            </div>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('prenom')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('phone')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section-benevole end -->