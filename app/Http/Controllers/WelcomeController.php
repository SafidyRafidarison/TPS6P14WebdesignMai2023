<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\PDF;
use PDF;
class WelcomeController extends Controller
{
    //

    public function index(): View
    {   
        return view('welcome');
    }   
    public function front(): View
    {   
        $inf = DB::select("select * from information ");
        $data = array(
            'infs'=>   $inf
        );
        return view('front',$data);
    }   
    public function details($extra,$id):View
    {
        // echo urlPrint("testons si mandeha ve ito ou pas").$id."  ".$extra;
        // echo $id."  ".$extra;
        $inf = DB::table('information')
            ->where('idinformation', $id)
            ->get();
            $data = array(
                'inf'=>   $inf[0]
            );
            return view('details',$data);
            // echo $users[0]->titre;
    }
   
    public function liste()
    {
        $per = DB::select("select * from personne ");
        return response()->json($per);
    }
    public function show($no,$a): View
    {
        // $tab=array("one"=>"allow");
        // return view('show')->with([$n,$tab]);        
        // $per= DB::select('select * from personne'); 
        $t="to";
        $phone = '%'.$t.'%';
        $per = DB::select("select * from personne where nom like ?", [$phone]);
        // $per = DB::select('select * from users where id = ?', [$id]);
        // $per = DB::table('personne')->find(3);
        // $deleted = DB::table('users')->where('votes', '>', 100)->delete();


        // {
        //     DB::table('personne')->insert([
        //         ['nom' => 'picard', 'naissance' => '5/1/2003'],
        //     ]);
        // }
           
        // {
        //         $affected = DB::table('personne')
        //       ->where('nom', 'picard')
        //       ->update(['naissance' => '11/4/2006']);
        //  }

        { 
            $deleted = DB::table('personne')->where('idpersonne', '>', 5)->delete();
        }
        $data = array(
            'id' => $no,
            'name' => $a       ,
            'pers'=>   $per
        );
        return view('show', $data);
    }

    public function store(Request $request)
    {
        $val=[
            'nom'=>$request->input('editor1'),
            'age'=>$request->input('age')
        ];

        return $val;
        // 'Le nom est ' . $request->input('nom').'   age='.$request->input('val')
        // return 'Le nom est ' . $request->input('nom');
    }
    public function generatePDF()
    {
        // composer require barryvdh/laravel-dompdf
        $per = DB::select("select * from personne ");  
        $pdf = app(PDF::class);
        // $pdf->loadHTML('<h1>'.count($per).'</h1>');
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'users' => $per
        ]; 
            
        $pdf = PDF::loadView('pdfTest', $data);
        return $pdf->download('hello.pdf');
    }

    public function back()
    {
        $inf = DB::select("select * from information ");
        $data = array(
            'infs'=>   $inf
        );
        return view('back',$data);
        
    }

    public function delete($extra,$id)
    {
        $deleted = DB::table('information')->where('idinformation',$id)->delete();
        redirect()->route('back-office');
    }
    public function addContent(Request $request)
    {
        
        $picture = $request->file('file');
        //  $filename = $picture->getClientOriginalName();
        //  $picture->move(public_path('uploads'), $filename);
        $filename='test.jpg';
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $encoded_image = base64_encode(file_get_contents($image));
            $filename=$encoded_image;
        }
        DB::table('information')->insert([
                    ['idauteur' => $request->input('idauteur'), 'date_creation' =>  $request->input('creation'),'date_publication' =>  $request->input('creation'),
                    'resume' => $request->input('editor2'),'contenus' => $request->input('editor1'),'titre' => $request->input('titre'),'couverture' =>$filename]
                ]);
                return redirect()->route('ajout');
    }
}
