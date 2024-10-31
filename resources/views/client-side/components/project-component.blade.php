<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
            <h1 class="text-center mb-5">Recently Completed Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Web Design</li>
                    <li class="mx-2" data-filter=".second">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            @if(count($projects) > 0)
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden" style="height: 400px;"> <!-- Set a fixed height for the card -->
                            <div class="position-relative overflow-hidden" style="height: 250px;"> <!-- Set a fixed height for the image container -->
                                <img style="width: 100%; height: 100%; object-fit: cover;" src="{{$project->image()}}" alt=""> <!-- Adjusted image styling -->
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{$project->image()}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4" style="height: calc(400px - 250px);"> <!-- Adjusted height for the text container -->
                                <p class="text-primary fw-medium mb-2">{{$project->name}}</p>
                                <h5 class="lh-base mb-0">{{$project->description}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Projects End -->