<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Service;
use App\Models\ImageService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $services = ImageService::join('services', 'image_services.service_id', '=', 'services.id')
            ->where('category_id', '=', '1')
            ->get();

        return view('home.index', [
            'title' => 'Punamu Decoration',
            'services' => $services,
        ]);
    }

    public function contact(){
        return view('home.contact', [
            'title' => 'Punamu Decoration',
        ]);
    }

    public function service(){
        $makeups = Service::join('image_services', 'services.id', '=', 'image_services.service_id')
        ->where('category_id', '=', '2')
        ->get();
        $decorations = Service::join('image_services', 'services.id', '=', 'image_services.service_id')
        ->where('category_id', '=', '1')
        ->get();
        return view('home.product', [
            'title' => 'Punamu Decoration',
            'makeups' => $makeups,
            'decorations' => $decorations,
        ]);
    }

    public function about(){
        return view('home.about', [
            'title' => 'Punamu Decoration',
        ]);
    }

    public function detail($id){
        $details = ImageService::join('services', 'image_services.service_id', '=', 'services.id')
            ->where('service_id', '=', $id)
            ->first();
        $reviews = User::join('reviews', 'users.id', '=', 'reviews.user_id')
            ->where('service_id', '=', $id)
            ->get();
        return view('home.details', [
            'title' => 'Punamu Decoration',
            'details' => $details,
            'reviews' => $reviews,
        ]);
    }

}
