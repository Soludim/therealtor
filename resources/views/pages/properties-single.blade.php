@extends('main')

@section('content')
  <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_4.png')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Properties Single</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{route('properties')}}">Properties <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Single <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <div class="search-wrap">
          <h3>Advance Search</h3>
          <form method="get" action="{{route('properties')}}" class="search-property" autocomplete="off">
            @csrf
            <div class="row">
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="keyword">Keyword</label>
                  <div class="form-field">
                    <div class="icon"><span class="icon-pencil"></span></div>
                    <input type="text" name="keyword" class="form-control" placeholder="Keyword"/>
                  </div>
                </div>
              </div>
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="location">Location</label>
                  <div class="form-field">
                    <div class="icon"><span class="icon-pencil"></span></div>
                    <input name="location" type="text" class="form-control" placeholder="City/Locality Name">
                  </div>
                </div>
              </div>
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="prop_type">Property Type</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="prop_type" id="" class="form-control">
                        <option value="">Type</option>
                        @foreach($propTypes as $propType)
                        <option value="{{$propType->id}}">{{$propType->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="prop_status">Property Status</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="prop_status" id="" class="form-control">
                        <option value="">Type</option>
                        @foreach($propStatus as $propStat)
                        <option value="{{$propStat->id}}">{{$propStat->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="min_beds">Min Beds</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="min_beds" id="" class="form-control">
                        @for($i=1; $i < 6; $i++) <option value="{{$i}}">{{$i}}</option>
                          @endfor
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="min_baths">Min Bathroom</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="min_baths" id="" class="form-control">
                        @for($i=1; $i < 6; $i++) <option value="{{$i}}">{{$i}}</option>
                          @endfor
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="max_price">Max Price</label>
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
              <div class="col-md-12 align-self-end ftco-animate">
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
        <div class="col-md-9 properties-single">
          <div class="single-slider owl-carousel">
            @foreach($property->images as $image)
            <div class="item">
              <div class="properties-img" style="background-image: url({{$image->image_url}});"></div>
            </div>
            @endforeach
          </div>
          <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
            <h2>{{$property->name}}</h2>
            <p class="rate mb-4">
              <span class="loc"><a href="#"><i class="icon-map"></i> {{$property->location}}</a></span>
            </p>
            <p>{!! $property->description !!}</p>
            <div class="d-md-flex mt-5 mb-5">
              <ul>
                <li><span>Bed Rooms: </span> {{$property->bedrooms}}</li>
                <li><span>Bath Rooms: </span> {{$property->bathrooms}}</li>
              </ul>
              <ul class="ml-md-5">
                <li><span>Status:: </span> {{$property->status->name}}</li>
                <li><span>Type:: </span> {{$property->type->name}}</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
            <h3 class="mb-4">Take A Tour</h3>
            <div class="block-16">
              <figure>
                <img src="{{$property->images[0]->image_url}}" alt="Image placeholder" class="img-fluid">
                <a href="https://docs.google.com/uc?id={{$property->take_tour_video}}" class="play-button popup-vimeo"><span class="icon-play"></span></a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection