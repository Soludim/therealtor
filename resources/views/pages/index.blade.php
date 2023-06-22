@extends('main')

@section('content')
<section class="home-slider owl-carousel">
    @foreach($properties->take(2) as $property)
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container d-md-block d-none">
            <div class="row d-md-flex slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-7 d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text pb-4 pt-5">
                        <h1 class="mb-4">{{$property->name}}</h1>
                        <div class="desc">
                            <p>{!!substr($property->description, 0, 164)!!}...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img" style="background-image:url({{$property->images[0]->image_url}});">
            <div class="container">
                <div class="row d-flex justify-content-start">
                    <div class="col-md-6 col-lg-4">
                        <div class="details p-5">
                            <span class="cat d-block mb-4">{{$property->status->name}}</span>
                            <h3 class="mb-3">{{$property->name}}</h3>
                            <p class="loc"><span class="icon-my_location mr-2"></span> {{$property->location}}</p>
                            <ul class="mb-4">
                                <li><span>Type:</span> <span>{{$property->type->name}}</span></li>
                                <li><span>Bedroom</span> <span>{{$property->bedrooms}}</span></li>
                                <li><span>Bathroom:</span> <span>{{$property->bathrooms}}</span></li>
                                <li><span>Price:</span> <span>${{$property->status->id == 1 ? number_format($property->price, 0, '.', ','). '' : number_format($property->price, 0, '.', ',') .'/M'}}</span></li>
                            </ul>
                            <p><a href="{{route('properties-single', ['id' => $property->id])}}" class="btn btn-black btn-outline-black py-3">View Property</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4 px-5">
                    <form method="get" action="{{route('properties')}}" autocomplete="off" class="search-property-1">
                        @csrf
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="icon-pencil"></span></div>
                                        <input name="location" type="text" class="form-control" placeholder="City/Locality Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="prop_type">Property Type</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="prop_type" class="form-control">
                                                <option value="">Type</option>
                                                @foreach($propTypes as $propType)
                                                <option value="{{$propType->id}}">{{$propType->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="prop_status">Property Status</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="prop_status" class="form-control">
                                                <option value="">Type</option>
                                                @foreach($propStatus as $propStat)
                                                <option value="{{$propStat->id}}">{{$propStat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="max_price">Price Limit</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="max_price" id="" class="form-control">
                                                <option value="">Max Price</option>
                                                <option value="5000">$5,000</option>
                                                <option value="100000">$100,000</option>
                                                <option value="500000">$500,000</option>
                                                <option value="1000000">$1,000,000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-start mb-5">
            <div class="col-md-8 heading-section ftco-animate">
                <h2 class="mb-4">Recently Added</h2>
                <p>New listings available now! Check out the latest houses added to our portfolio. Contact us for more information</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-properties owl-carousel">
                    @foreach($properties as $property)
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{$property->images[1]->image_url}}" class="img-fluid" alt="Colorlib Template">
                                <div class="text">
                                    <span>{{$property->status->name}}</span>
                                    <h3><a href="{{route('properties-single', ['id' => $property->id])}}">{{$property->name}}</a></h3>
                                </div>
                            </div>
                            <div class="desc pt-3">
                                <h4 class="price">${{$property->status->id == 1 ? number_format($property->price, 0, '.', ','). '' : number_format($property->price, 0, '.', ',') .'/M'}}</h4>
                                <p class="h-info"><span class="location">{{$property->location}}</span> <span class="details">&mdash; {{$property->bedrooms}}bds, {{$property->bathrooms}}bath</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/bg_1.jpg);">
            </div>
            <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section mb-4 ml-md-4 pl-md-5">
                    <h2 class="mb-4">We can help you to find luxurious and beautiful properties in your local area</h2>
                </div>
                <div class="pl-md-5 ml-md-4 mb-5">
                    <p>Looking to buy, sell, or rent a property? Contact me today for expert guidance and personalized service. Let's work together to achieve your real estate goals!</p>
                    <div class="row my-5 pt-2">
                        <div class="col-lg-6">
                            <div class="services-2 px-4 text-center">
                                <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-house"></span></div>
                                <div class="text">
                                    <h3>Buy &amp; Rent Modern Properties</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 px-4 text-center">
                                <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-purse"></span></div>
                                <div class="text">
                                    <h3>Making Money</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><a href="{{route('properties')}}" class="btn-custom">Learn More <span class="ml-2 ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="heading-section mb-5 ftco-animate">
                    <h2 class="mb-4">Welcome to {{config('app.name')}}, A Real Estate Broker</h2>
                    <p>Your premier destination for real estate.</p>
                </div>
                <div class="about-img img p-5 d-flex align-items-center" style="background-image: url(images/bg_1.jpg);">
                    <div class="about-div">
                        <h4 style="color:white;">{!!substr(config('app.about'), 0, 80)!!}...</h4>
                        <p class="mb-0"><a href="{{route('about')}}" class="btn-custom-2">Read more <span class="ml-2 icon-long-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="img img-3 p-5 d-flex align-self-stretch border" style="background-image: url(images/derrick.jpeg);background-size: contain;">
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials._testimonies')

@include('partials._counter')
@endsection