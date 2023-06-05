<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.review.index', [
            'title' => 'Reviews',
            'reviews' => Review::where('user_id', auth()->user()->id)->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Transaction::join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
        ->join('services', 'transaction_details.service_id', '=', 'services.id')
        ->where('transactions.user_id', '=', auth()->user()->id)
        ->where('transactions.status', '=', 'SUCCESS')
        ->get();
        if($services->isEmpty()) {
            Alert::error('Error', 'Tidak dapat membuat review!');
            return back();
        };
        return view('dashboard.review.create', [
            'title' => 'Create Reviews',
            'services' => $services
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $review = new Review();
        $validateData = $request->validate([
            'service_id' => 'required',
            'description' => 'required',
            'star' => 'required',
        ]);
        $review->service_id = $validateData['service_id'];
        $review->user_id = auth()->user()->id;
        $review->description = $validateData['description'];
        $review->star = $validateData['star'];
        $review->save();
        $reviews = Review::where('service_id', $validateData['service_id'])->get();
        $service = Service::find($validateData['service_id']);
        $service->rating = $reviews->avg('star');
        $service->save();
        Alert::success('Success', 'Data berhasil ditambahkan!');
        return redirect('/dashboard/review');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Review::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus!');
        return redirect('/dashboard/review');
    }
}
