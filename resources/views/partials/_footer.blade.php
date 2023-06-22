<footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{config('app.name')}}</h2>
                    <p>Your Trusted Real Estate Expert for Buying, Selling, and Investing.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://twitter.com/{{config('app.twitter')}}" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.linkedin.com/in/{{config('app.linkedin')}}" target="_blank"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="https://t.snapchat.com/{{config('app.snapchat')}}" target="_blank"><span class="icon-snapchat"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/{{config('app.instagram')}}" target="_blank"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="{{route('about')}}"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="{{route('properties')}}"><span class="icon-long-arrow-right mr-2"></span>Properties</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">New Uploads</h2>
                    <p>Subscribe to my social media platforms and receive daily update on new uploads.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | {{config('app.name')}} by <a href="https://israelmanudebrah.bio/" target="_blank">Soludim inc</a>
                </p>
            </div>
        </div>
    </div>
</footer>