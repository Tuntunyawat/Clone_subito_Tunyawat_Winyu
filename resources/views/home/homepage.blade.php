@extends('components.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide mb-5">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-15-finish-select-202309-6-1inch_GEO_EMEA_FMT_WHH?wid=1280&hei=492&fmt=p-jpg&qlt=80&.v=1692925259606" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://support.apple.com/content/dam/edam/applecare/images/en_US/psp_heros/hero-banner-macbook-air-3.image.large_2x.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://www.techbyte.it/wp-content/uploads/2023/02/galaxy-s23-series-smartphone.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="text-center mb-4">Categorie</h4>
            @foreach ($categories as $category)
                <div class="col-4">
                    <div class="category-selector-container">
                        <div class="card-category my-4">
                            <a href="#">
                                {{ $category->name }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


