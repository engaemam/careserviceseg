<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Message;
use App\Application;
use App\getnews;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
    public function index()
    {
        $images = DB::table('gallery')->where('service','=', 'security')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get(); 
        $imageselec = DB::table('gallery')->where('service','=', 'electronics')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();
        $imagesenv = DB::table('gallery')->where('service','=', 'environmental')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();
        $imagesint = DB::table('gallery')->where('service','=', 'integrated')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();
        $news = DB::table('news_info')
        ->where('lang','=','en')
        ->orderBy('id', 'desc')
        ->take(2)
        ->get(); 
       
        $data = [
            'security'  => $images,
            'electronics'   => $imageselec,
            'environmental' => $imagesenv,
            'integrated' => $imagesint,
            'news'  => $news,
            
        ];

        return view('homepage')->with($data);
    }
    public function index_ar()
    {
        $images = DB::table('gallery')->where('service','=', 'security')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get(); 
        $imageselec = DB::table('gallery')->where('service','=', 'electronics')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();
        $imagesenv = DB::table('gallery')->where('service','=', 'environmental')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();
        $imagesint = DB::table('gallery')->where('service','=', 'integrated')
        ->orderBy('id', 'desc')
        ->take(4)
        ->get();
        $news = DB::table('news_info')
        ->where('lang','=','ar')
        ->orderBy('id', 'desc')
        ->take(2)
        ->get(); 
       
        $data = [
            'security'  => $images,
            'electronics'   => $imageselec,
            'environmental' => $imagesenv,
            'integrated' => $imagesint,
            'news'  => $news,
            
        ];

        return view('view-ar.homepage-ar')->with($data);
    }
    
    public function send_mail(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|min:10',
        ]);
            
        $message= new Message();
       
        $message->crs_name=$request->name;
        $message->crs_email=$request->email;
        $message->crs_message=$request->message;
        $message->save();
        return back()->with(['message'=>'Message is sent']);

    }
    public function send_mail_ar(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|min:10',
        ]);
            
        $message= new Message();
       
        $message->crs_name=$request->name;
        $message->crs_email=$request->email;
        $message->crs_message=$request->message;
        $message->save();
        return back()->with(['message'=>'Message is sent']);
    }
    public function apply_now(Request $request)
    { 
        
        $application = new Application();
        $application->crs_name=$request->name;
        $application->crs_mobile=$request->mobile;
        $application->crs_email=$request->email;
        $application->crs_message=$request->message;
        $application->resume = $request->file('resume')->getClientOriginalName();

        $application->save();
        
        $fileName = $application->crs_name . '.' . 
        $request->file('resume')->getClientOriginalName();

        $request->file('resume')->move(
            base_path() . '/public/uploads/resumes', $fileName
        );
        return redirect('/contact-us');

    }
    public function apply_now_ar(Request $request)
    { 
        
        $application = new Application();
        $application->crs_name=$request->name;
        $application->crs_mobile=$request->mobile;
        $application->crs_email=$request->email;
        $application->crs_message=$request->message;
        $application->resume = $request->file('resume')->getClientOriginalName();

        $application->save();
        
        $fileName = $application->crs_name . '.' . 
        $request->file('resume')->getClientOriginalName();

        $request->file('resume')->move(
            base_path() . '/public/uploads/resumes', $fileName
        );
        return redirect('/contact-us-ar');

    }
    public function subscribe(Request $request)
    { 
        $subscribe = new getnews();
       
        $subscribe->emails=$request->email;
        $subscribe->save();
        return back()->with(['message'=>'subscribed to news']);
    }

    public function subscribe_ar(Request $request)
    { 
        $subscribe = new getnews();
        try { 
            $subscribe->emails=$request->email;
            $subscribe->save();
            return back()->with(['message'=>'subscribed to news']);
           } 
           catch (\Throwable $exception) {
            return back()->with(['message'=>'failed to news']);
        }
        catch (Illuminate\Database\QueryException $e) {
            return back()->with(['message'=>'failed to news']);

            } catch (\Illuminate\Database\PDOException $e) {
                return back()->with(['message'=>'failed to news']);
            }  
            catch (\Exception $e) {
                return back()->with(['message'=>'failed to news']); // something went wrong elsewhere, handle gracefully
            }
     
      
    }
}
