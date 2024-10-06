<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        // Inisialisasi query dasar
        $properties = Property::query()->where('status', 'ACTIVE')->with('developer');

        // Filter berdasarkan kata kunci (name atau location)
        if ($request->filled('keywords')) {
            $keywords = $request->input('keywords');
            $properties->where(function($query) use ($keywords) {
                $query->where('name', 'LIKE', "%{$keywords}%")
                      ->orWhere('location', 'LIKE', "%{$keywords}%");
            });
        }

        // Filter berdasarkan tipe properti
        if ($request->filled('property_type')) {
            $properties->where('property_type', $request->input('property_type'));
        }

        // Filter berdasarkan status (sewa/jual)
        if ($request->filled('status')) {
            $properties->where('status', $request->input('status'));
        }

        // Filter berdasarkan jumlah kamar tidur
        if ($request->filled('bedrooms')) {
            if ($request->input('bedrooms') == '6+') {
                $properties->where('bedrooms', '>=', 6);
            } else {
                $properties->where('bedrooms', $request->input('bedrooms'));
            }
        }

        // Filter berdasarkan harga (rentang harga)
        if ($request->filled('price_range')) {
            $priceRange = explode('-', $request->input('price_range'));
            $minPrice = filter_var($priceRange[0], FILTER_SANITIZE_NUMBER_INT);
            $maxPrice = filter_var($priceRange[1], FILTER_SANITIZE_NUMBER_INT);
            $properties->whereBetween('price', [(float)$minPrice, (float)$maxPrice]);
        }

        // Filter berdasarkan luas bangunan
        if ($request->filled('square_feet')) {
            $squareFeet = explode('-', $request->input('square_feet'));
            $minSquareFeet = filter_var($squareFeet[0], FILTER_SANITIZE_NUMBER_INT);
            $maxSquareFeet = filter_var($squareFeet[1], FILTER_SANITIZE_NUMBER_INT);
            $properties->whereBetween('building_area', [(float)$minSquareFeet, (float)$maxSquareFeet]);
        }

        // Filter berdasarkan tahun bangunan
        if ($request->filled('year_built')) {
            $yearBuilt = explode('-', $request->input('year_built'));
            $properties->whereBetween('year_built', [trim($yearBuilt[0]), trim($yearBuilt[1])]);
        }

        // Filter berdasarkan fitur-fitur properti
        if ($request->filled('features')) {
            foreach ($request->input('features') as $feature) {
                $properties->whereJsonContains('facilities', $feature);
            }
        }

        // Urutkan berdasarkan pilihan pengguna
        if ($request->filled('sort')) {
            switch ($request->input('sort')) {
                case 'price_low':
                    $properties->orderBy('price', 'asc');
                    break;
                case 'price_high':
                    $properties->orderBy('price', 'desc');
                    break;
                default:
                    $properties->orderBy('created_at', 'desc');
                    break;
            }
        }

        // Paginate hasil pencarian
        $properties = $properties->paginate(10);

        return view('frontend.properties.index', compact('properties'));
    }

    public function show($id)
    {
        $property = Property::with('developer')->findOrFail($id);
        return view('frontend.properties.detail', compact('property'));
    }
}

