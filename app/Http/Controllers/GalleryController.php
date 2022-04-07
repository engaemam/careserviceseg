<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallery::where('service','=', 'security')->paginate(12);
        $imageselec = Gallery::where('service','=', 'electronics')->paginate(12);
        $imagesenv = Gallery::where('service','=', 'environmental')->paginate(12);
        $imagesint = Gallery::where('service','=', 'integrated')->paginate(12);
        $data = [
            'security'  => $images,
            'electronics'   => $imageselec,
            'environmental' => $imagesenv,
            'integrated' => $imagesint
        ];
      
        return view('gallery')->with($data);
        }
        public function index_ar()
        {
            $images = Gallery::where('service','=', 'security')->paginate(12);
            $imageselec = Gallery::where('service','=', 'electronics')->paginate(12);
            $imagesenv = Gallery::where('service','=', 'environmental')->paginate(12);
            $imagesint = Gallery::where('service','=', 'integrated')->paginate(12);
            $data = [
                'security'  => $images,
                'electronics'   => $imageselec,
                'environmental' => $imagesenv,
                'integrated' => $imagesint
            ];
          
            return view('view-ar.gallery-ar')->with($data);
            }
    }
    

