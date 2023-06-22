<?php

use App\Mail\Contact;
use App\Models\Property;
use App\Models\PropStatus;
use App\Models\PropType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('home')->get('/', function () {
    $properties = Property::with(['status', 'type'])->latest()->get();
    $propTypes = PropType::all();
    $propStat = PropStatus::all();
    return view('pages/index', [
        'properties' => $properties,
        'propTypes' => $propTypes, 'propStatus' => $propStat,
    ]);
});
Route::name('about')->get('/about', function () {
    return view('pages/about');
});

Route::name('properties')->get('/properties', function (Request $request) {
    $keyword = $request->input('keyword');
    $location = $request->input('location');
    $prop_type = $request->input('prop_type');
    $prop_status = $request->input('prop_status');
    $min_beds = $request->input('min_beds') ?? 1;
    $min_baths = $request->input('min_baths') ?? 1;
    $max_price = $request->input('max_price');

    $properties = Property::with(['status', 'type'])
        ->where('description', 'LIKE', "%{$keyword}%")
        ->where('location', 'LIKE', "%{$location}%")
        ->when($prop_type, function ($query) use ($prop_type) {
            return $query->where('type_id', '=', $prop_type);
        })
        ->when($prop_status, function ($query) use ($prop_status) {
            return $query->where('status_id', '=', $prop_status);
        })
        ->where('bedrooms', '>=', $min_beds)
        ->where('bathrooms', '>=', $min_baths)
        ->when($max_price, function ($query) use ($max_price) {
            return $query->where('price', '<=', $max_price);
        })
        ->latest()->paginate(6, ['*'], 'page', $request->query('page', 1));

    $propTypes = PropType::all();
    $propStat = PropStatus::all();
    return view('pages/properties', [
        'properties' => $properties,
        'propTypes' => $propTypes, 'propStatus' => $propStat,
        'search_data' => [
            'keyword' => $keyword,
            'location' => $location,
            'prop_type' => $prop_type, 'prop_status' => $prop_status,
            'min_beds' => $min_beds, 'min_baths' => $min_baths,
            'max_price' => $max_price
        ]
    ]);
});
Route::name('properties-single')->get('/properties-single/{id}', function ($id) {
    $property = Property::with(['type', 'status'])->find($id);
    $propTypes = PropType::all();
    $propStat = PropStatus::all();
    return view('pages/properties-single', [
        'property' => $property,
        'propTypes' => $propTypes, 'propStatus' => $propStat,
    ]);
});
Route::name('contact')->get('/contact', function () {
    return view('pages/contact');
});
Route::name('send-mail')->post('/send-mail', function (Request $request) {
    $mail_data = $request->all();
    try {
        Mail::to('isolution455@gmail.com')->send(new Contact($mail_data));
        $message = 'Email sent successfully!';
    } catch (\Exception $e) {
        $message = 'Failed to send email.';
    }

    return back()->with('message', $message);
});
