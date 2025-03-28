<!-- gallery-page-section -->
<section class="gallery-page-section bg-color-1 pt_120 pb_90 centred">
    <div class="auto-container">
        <div class="sec-title mb_50">
            <span class="sub-title mb_12">Notre Galerie</span>
            <h2>Un voyage à travers notre <br />galerie <span>d'images</span></h2>
        </div>
        <div class="sortable-masonry">
            <div class="auto-container">
                <div class="filter-tabs mb_50">
                    <ul class="filter-btns clearfix horizontal-filter">
                        <li class="active filter-btn" data-filter="*">Tout</li>
                        @if(isset($galerieCategories))
                            @foreach($galerieCategories as $category)
                                <li class="filter-btn" data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</li>
                            @endforeach
                        @else
                            @php
                                $galerieCategories = \App\Models\GalerieCategory::with(['galeries' => function($query) {
                                    $query->latest();
                                }])->get();
                            @endphp
                            @foreach($galerieCategories as $category)
                                <li class="filter-btn" data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    @foreach($galeries as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column {{ Str::slug($item->category->name) }}">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    @if($item->path)
                                        <figure class="image-box">
                                            <img src="{{ asset($item->path) }}" alt="{{ $item->title }}" class="img-fluid">
                                        </figure>
                                        <div class="content-box">
                                            <div class="inner">
                                                <div class="view-btn">
                                                    <a href="{{ asset($item->path) }}" class="lightbox-image" data-fancybox="gallery">
                                                        <i class="icon-9"></i>
                                                    </a>
                                                </div>
                                                <div class="text-box">
                                                    <h3><a href="#">{{ $item->title }}</a></h3>
                                                    <span>{{ $item->category->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-page-section end -->

<style>
.horizontal-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

.filter-btn {
    padding: 8px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    background-color: #f5f5f5;
}

.filter-btn.active {
    background-color: #198754;
    color: white;
    font-weight: bold;
}

.filter-btn:hover:not(.active) {
    background-color: #e0e0e0;
}

.gallery-block-one {
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}

.gallery-block-one .inner-box {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
}

.gallery-block-one .image-box img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.gallery-block-one:hover .image-box img {
    transform: scale(1.1);
}

.gallery-block-one .content-box {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
    color: #fff;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.gallery-block-one:hover .content-box {
    transform: translateY(0);
}

.gallery-block-one .view-btn {
    position: absolute;
    top: 20px;
    right: 20px;
}

.gallery-block-one .view-btn a {
    color: #fff;
    font-size: 24px;
    background: rgba(255, 255, 255, 0.2);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.gallery-block-one .view-btn a:hover {
    background: #198754;
}

.gallery-block-one .text-box h3 {
    font-size: 20px;
    margin-bottom: 5px;
}

.gallery-block-one .text-box h3 a {
    color: #fff;
    text-decoration: none;
}

.gallery-block-one .text-box span {
    font-size: 14px;
    color: #ddd;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.masonry-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
            
            // Récupérer le filtre sélectionné
            const filterValue = this.getAttribute('data-filter');
            
            // Filtrer les éléments
            galleryItems.forEach(item => {
                if (filterValue === '*') {
                    item.style.display = 'block';
                } else {
                    if (item.classList.contains(filterValue.replace('.', ''))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        });
    });
    
    // Initialiser le filtre "Tout" au chargement
    document.querySelector('.filter-btn[data-filter="*"]').click();
});
</script>