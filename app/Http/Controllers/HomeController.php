<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use AsalNgoding\Fpdf\PDF_Code128;
use Illuminate\Support\Facades\Storage;
use Exception;

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

    public function print(Request $req){
        $user = Auth::user();
        $month = [
            1=>'Januari',
            2=>'Februari',
            3=>'Maret',
            4=>'April',
            5=>'Mei',
            6=>'Juni',
            7=>'Juli',
            8=>'Agustus',
            9=>'September',
            10=>'Oktober',
            11=>'November',
            12=>'Desember'
        ];

        if($req->avatar){
            $this->validate($req, [
                'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
            
            $file = $req->file('avatar');
            $ext = $file->extension();
            $file_name = $user->nim .'.'. $ext;
            
            try {
                $path = $file->storeAs('public/img/avatar', $file_name);
                $user->avatar = 'storage/img/avatar/' . $file_name;
                $saved = $user->save();
            } catch (Exception $e) {
                echo $e;
            }
        }

        $degree = $user;
        $department = $user->department->name;
        $faculty = $user->department->faculty->name;

        $birth = explode('-',$user->birthdate);
        $birthdate = $birth[2].' '.$month[intval($birth[1])].' '.$birth[0];
        
        $pdf = new PDF_Code128('l','mm','karmas');
        $pdf->AddPage();

        switch ($degree->id) {
            case 1:
                $pdf->Image('storage/img/sarjana.png', 0,0, '85.5', '54');
                break;
            
            case 2:
                $pdf->Image('storage/img/pasca.png', 0,0, '85.5', '54');
                break;

            case 3:
                $pdf->Image('storage/img/pasca.png', 0,0, '85.5', '54');
                break;
            
            case 4:
                $pdf->Image('storage/img/transfer.png', 0,0, '85.5', '54');
                break;
            
            case 5:
                $pdf->Image('storage/img/vokasi.png', 0,0, '85.5', '54');
                break;

            case 6:
                $pdf->Image('storage/img/vokasi.png', 0,0, '85.5', '54');
                break;

            case 7:
                $pdf->Image('storage/img/vokasi.png', 0,0, '85.5', '54');
                break;

            default:
                $pdf->Image('storage/img/salah.jpg', 0,0, '85.5', '54');
                break;
        }

        $pdf->Image($user->avatar, 2.5, 19, 17, 22);

        $pdf->AddFont('Arial Narrow','','ARIALNB.php');
        $pdf->SetFont('Arial Narrow','',9,'L');
        
        $pdf->Code128(43.6,45,$user->nim,38,4);

        $pdf->Cell(0,18,'',0,1); //Space kosong atas

        $pdf->Cell(21,4,'',0,0);
        $pdf->Cell(13,4,'Nama',0,0);
        $pdf->Cell(1,4,':',0,0);
        $pdf->CellFitScale(48,4,$user->name,0,1); //,1); ->akhir baris


        $pdf->Cell(21,4,'',0,0);
        $pdf->Cell(13,4,'NIM',0,0); 
        $pdf->Cell(1,4,':',0,0);
        $pdf->CellFitScale(48,4,$user->nim,0,1); //,1); ->akhir baris 

        $pdf->Cell(21,4,'',0,0);
        $pdf->Cell(13,4,'Tgl. Lahir',0,0);
        $pdf->Cell(1,4,':',0,0);
        $pdf->CellFitScale(48,4,$birthdate,0,1); //,1); ->akhir baris

        $pdf->Cell(21,4,'',0,0);
        $pdf->Cell(13,4,'Prodi',0,0);
        $pdf->Cell(1,4,':',0,0);
        $pdf->CellFitScale(48,4,$degree->name.'-'.$department,0,1); //,1); ->akhir baris

        $pdf->Cell(21,4,'',0,0);
        $pdf->Cell(13,4,'Fakultas',0,0);
        $pdf->Cell(1,4,':',0,0);
        $pdf->CellFitScale(48,4,$faculty,0,1); //,1); ->akhir baris 

        $pdf->Cell(21,4,'',0,0);
        $pdf->Cell(13,4,'Asal',0,0);
        $pdf->Cell(1,4,':',0,0);
        $pdf->CellFitScale(48,4,$user->city,0,1); //,1); ->akhir baris 

        $pdf->Output('','Karmas Digital '. '- ' .$user->nim.'.pdf');
    }
}
