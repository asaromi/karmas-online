<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use AsalNgoding\Fpdf\PDF_Code128;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $degree = $user->degree->name;
        $department = $user->department->name;
        $faculty = $user->department->faculty->name;

        return view('home', compact(['user', 'degree', 'department', 'faculty']));
    }

    public function print(){
        $pdf = new PDF_Code128('l','mm',array(54,85.4));
        $pdf->AddPage();

        $pdf->Image('storage/img/foto.jpg', 70, 59, 17, 22);

        $pdf->AddFont('Arial Narrow','','ARIALNB.php');
        $pdf->SetFont('Arial Narrow','',9,'L');
        $pdf->Cell(40,10,'Hello World!');
        
        dd($pdf->Output('','anu'));
    }
}
