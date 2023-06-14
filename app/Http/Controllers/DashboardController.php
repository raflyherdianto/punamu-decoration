<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Transaction;
use App\Models\ImageService;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()->role == 'admin'){
            return view('dashboard.index', [
                'title' => 'Dashboard',
                'customer' => User::where('role', 'customer')->count(),
                'service' => Service::count(),
                'transaction' => Transaction::count(),
                'category' => Category::count(),
                'image' => ImageService::count(),
                'income' => Transaction::where('status', 'SUCCESS')->sum('total_price'),
            ]);
        } elseif (auth()->user()->role == 'customer'){
            return view('dashboard.index', [
                'title' => 'Dashboard',
                'cart' => Cart::where('user_id', auth()->user()->id)->count(),
                'favorite' => Favorite::where('user_id', auth()->user()->id)->count(),
                'review' => Review::where('user_id', auth()->user()->id)->count(),
                'transaction' => Transaction::where('user_id', auth()->user()->id)->count(),
            ]);
        };

    }
}
