<!-- Footer Start -->
<div class="container py-5 px-lg-5">
    <div class="row g-5">
        <div class="col-md-6 col-lg-3">
            <p class="section-title text-white h5 mb-4">Address<span></span></p>
            <p><i class="fa fa-map-marker-alt me-3"></i>{{$settings->address}}</p>
            <p><i class="fa fa-phone-alt me-3"></i>{{$settings->phone}}</p>
            <p><i class="fa fa-envelope me-3"></i>{{$settings->email}}</p>
            <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href="{{$settings->twitter}}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href="{{$settings->facebook}}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href="{{$settings->instagram}}"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social" href="{{$settings->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
            <a class="btn btn-link" href="{{route('client-side.about')}}">About Us</a>
            <a class="btn btn-link" href="{{route('client-side.services')}}">Services</a>
            <a class="btn btn-link" href="{{route('client-side.projects')}}">Projects</a>
            <a class="btn btn-link" href="{{route('client-side.contact')}}">Contact Us</a>
        </div>
        <div class="col-md-6 col-lg-3">
            <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
            <div class="row g-2">
                <div class="col-4">
                    <img class="img-fluid" src="{{asset("front-assets/img/portfolio-1.jpg")}}" alt="Image">
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{asset("front-assets/img/portfolio-2.jpg")}}" alt="Image">
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{asset("front-assets/img/portfolio-3.jpg")}}" alt="Image">
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{asset("front-assets/img/portfolio-4.jpg")}}" alt="Image">
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{asset("front-assets/img/portfolio-5.jpg")}}" alt="Image">
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{asset("front-assets/img/portfolio-6.jpg")}}" alt="Image">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
            <div class="position-relative w-100 mt-3">
                @livewire('client-side.components.subscription-component')
            </div>
        </div>
    </div>
</div>

<script>
    // Auto-hide the message after 5 seconds
    setTimeout(function() {
        let messageElement = document.getElementById('session-message');
        if (messageElement) {
            messageElement.style.transition = "opacity 0.5s ease"; // Optional fade effect
            messageElement.style.opacity = 0;
            setTimeout(() => messageElement.remove(), 500); // Remove after fade-out
        }
    }, 5000);
</script>
<!-- Footer End -->