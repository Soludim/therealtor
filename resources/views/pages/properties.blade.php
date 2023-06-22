@extends('main')
@php
  $query = "&keyword={$search_data['keyword']}&location={$search_data['location']}&prop_type={$search_data['prop_type']}&prop_status={$search_data['prop_status']}&min_beds={$search_data['min_beds']}&min_baths={$search_data['min_baths']}&max_price={$search_data['max_price']}";
@endphp

@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_4.png')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Properties</h1>
        <p class="breadcrumbs"><span class="mr-2">
            <a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a>
          </span> <span>Properties <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
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
                    <input type="text" name="keyword" class="form-control" placeholder="Keyword" value="{{$search_data['keyword'] ?? ''}}" />
                  </div>
                </div>
              </div>
              <div class="col-md-12 align-items-end ftco-animate">
                <div class="form-group">
                  <label for="location">Location</label>
                  <div class="form-field">
                    <div class="icon"><span class="icon-pencil"></span></div>
                    <input name="location" type="text" class="form-control" placeholder="City/Locality Name" value="{{$search_data['location'] ?? ''}}">
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
                        <option {{$propType->id == $search_data['prop_type'] ? 'selected' : ''}} value="{{$propType->id}}">{{$propType->name}}</option>
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
                        <option {{$propStat->id == $search_data['prop_status'] ? 'selected' : ''}} value="{{$propStat->id}}">{{$propStat->name}}</option>
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
                        @for($i=1; $i < 6; $i++) <option {{$i == $search_data['min_beds'] ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
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
                        @for($i=1; $i < 6; $i++) <option {{$i == $search_data['min_baths'] ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
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
                        <option {{5000 == $search_data['max_price'] ? 'selected' : ''}} value="5000">$5,000</option>
                        <option {{100000 == $search_data['max_price'] ? 'selected' : ''}} value="100000">$100,000</option>
                        <option {{500000 == $search_data['max_price'] ? 'selected' : ''}} value="500000">$500,000</option>
                        <option {{1000000 == $search_data['max_price'] ? 'selected' : ''}} value="1000000">$1,000,000</option>
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
      <div class="col-lg-9">
        <div class="row">
          @if(count($properties) == 0)
          <p class="ftco-animate" style="margin:auto">
             No properties found for the selected criterion.
          </p>
          @endif
          @foreach($properties as $property)
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="project">
              <div class="img">
                <img src="{{$property->images[1]->image_url}}" class="img-fluid" alt="property" />
                <div class="text">
                  <span>{{$property->status->name}}</span>
                  <h3><a href="{{route('properties-single', ['id' => $property->id])}}">{{$property->name}}</a></h3>
                </div>
              </div>
              <div class="desc pt-3">
                <h4 class="price">${{$property->status->id == 1 ? number_format($property->price, 0, '.', ','). '' : number_format($property->price, 0, '.', ',') .'/M'}}</h4>
                <p class="h-info">
                  <span class="location">{{$property->location}}</span>
                  <span class="details">&mdash; {{$property->bedrooms}}bds, {{$property->bathrooms}}bath</span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        @if($properties->lastPage() != 1)
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="{{$properties->previousPageUrl(). $query}}">&lt;</a></li>
                @for($i=1; $i <= $properties->lastPage(); $i++)
                  @if($properties->currentPage() == $i)
                  <li class="active"><span>{{$i}}</span></li>
                  @else
                  <li class="{{ $properties->currentPage() == $i ? 'active' : '' }}"><a href="{{url('properties?page='.$i). $query}}">{{$i}}</a></li>
                  @endif
                  @endfor
                  <li> <a href="{{$properties->nextPageUrl() . $query}}">&gt;</a></li>
              </ul>
              <p>Showing {{$properties->firstItem()}} to {{$properties->lastItem()}} of {{$properties->total()}} properties.</p>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection