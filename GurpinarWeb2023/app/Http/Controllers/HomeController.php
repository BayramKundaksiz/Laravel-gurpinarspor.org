<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\AnasayfaSlider;

use App\Models\GuncelYazi;

use App\Models\UstGorsel;

use App\Models\Duyurular;

use App\Models\Ustalar;

use App\Models\Alimsatim;

use App\Models\OtobusSaatleri;

use App\Models\Resimler;

use App\Models\Videolar;

use App\Models\Iletisim;

use App\Models\VefatListesi;

use App\Models\TabloHazirla;

use Yajra\DataTables\DataTables;

use Carbon\Carbon;

use DB;

use Illuminate\Pagination\CursorPaginator;


class HomeController extends Controller
{

    public function index()
    {
        $anasayfagetir = AnasayfaSlider::orderby('id','desc')->get();
        $guncelyazilar = GuncelYazi::all();
        $ustgorselgetir = UstGorsel::all();
        $duyurular = Duyurular::paginate(4);
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        $otobusseferi = OtobusSaatleri::all();
        $ustalar = Ustalar::orderby('id','desc')->get();
        $alimsatim = Alimsatim::orderby('id','desc')->get();
        return view('home.userpage', compact('anasayfagetir','guncelyazilar','ustgorselgetir',
        'tarih','duyurular','otobusseferi', 'ustalar', 'alimsatim'));
    }

    public function anasayfa()
    {
        $anasayfagetir = AnasayfaSlider::orderby('id','desc')->get();
        $guncelyazilar = GuncelYazi::all();
        $ustgorselgetir = UstGorsel::all();
        $duyurular = Duyurular::paginate(4);
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        $otobusseferi = OtobusSaatleri::all();
        $ustalar = Ustalar::orderby('id','desc')->get();
        $alimsatim = Alimsatim::orderby('id','desc')->get();
        return view('home.userpage', compact('anasayfagetir','guncelyazilar','ustgorselgetir','tarih','duyurular'
    ,'otobusseferi', 'ustalar', 'alimsatim'));
    }

    public function kategorilerigetir()
    {
        $anasayfagetir = AnasayfaSlider::all();
        $guncelyazilar = GuncelYazi::all();
        $ustgorselgetir = UstGorsel::all();
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        return view('home.kategoriler', compact('anasayfagetir','guncelyazilar','ustgorselgetir','tarih'));
    }

    public function resimler()
    {
        $anasayfagetir = AnasayfaSlider::all();
        $guncelyazilar = GuncelYazi::all();
        $ustgorselgetir = UstGorsel::all();
        $duyurular = Duyurular::paginate(4);
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        $otobusseferi = OtobusSaatleri::all();
        $ustalar = Ustalar::orderby('id','desc')->get();
        $alimsatim = Alimsatim::orderby('id','desc')->get();
        $nostaljiresimler = Resimler::paginate(9);
        return view('home.resimler', compact('anasayfagetir','guncelyazilar','ustgorselgetir',
        'tarih','duyurular','otobusseferi', 'ustalar', 'alimsatim', 'nostaljiresimler'));
    }

    public function iletisimegit()
    {
        $anasayfagetir = AnasayfaSlider::all();
        $guncelyazilar = GuncelYazi::all();
        $ustgorselgetir = UstGorsel::all();
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        return view('home.contact', compact('anasayfagetir','guncelyazilar','ustgorselgetir','tarih'));
    }

    public function iletigonder(Request $gelenmesaj)
    {
        $gondericininmesaji  = new Iletisim;

        $gondericininmesaji->isim=$gelenmesaj->isim;

        $gondericininmesaji->soyisim=$gelenmesaj->soyisim;

        $gondericininmesaji->konu=$gelenmesaj->konu;

        $gondericininmesaji->mesaj=$gelenmesaj->mesaj;

        $gondericininmesaji->telefon=$gelenmesaj->telefon;

        if($gelenmesaj->hasFile('gelengorsel')){
            $gorsel = $gelenmesaj->file('gelengorsel');
            $gondericigorselismi = $gorsel->getClientOriginalName();
            $gorsel->move('gondericimesajgorselleri', $gondericigorselismi);
            $gondericininmesaji->gelengorsel = $gondericigorselismi;
        }

        $gondericininmesaji ->save();

        return redirect()->back()->with('message','Mesajınız Gönderildi');
    }


    public function tumotobussaatleri()
    {
        $guncelyazilar = GuncelYazi::all();
        $tumotobussaatleri = OtobusSaatleri::all();
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        return view('home.butunotobussaatleri',compact('guncelyazilar','tumotobussaatleri','tarih'));
    }

    public function tumduyurular()
    {
        $guncelyazilar = GuncelYazi::all();
        $tumduyurular = Duyurular::all();
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        return view('home.butunduyurular',compact('guncelyazilar','tumduyurular','tarih'));
    }

    public function tumustalar()
    {
        $guncelyazilar = GuncelYazi::all();
        $tumustalar = Ustalar::orderby('id','desc')->get();
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        return view('home.butunustalar',compact('guncelyazilar','tumustalar','tarih'));
    }

    public function tumalimsatim()
    {
        $guncelyazilar = GuncelYazi::all();
        $tumalimsatim = Alimsatim::orderby('id','desc')->get();
        $tarih = Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        return view('home.butunalimsatim',compact('guncelyazilar','tumalimsatim','tarih'));
    }

    public function videolar()
    {
        $guncelyazilar = GuncelYazi::all();
        $tumvideolar = Videolar::paginate(6);
        return view('home.videolar',compact('guncelyazilar', 'tumvideolar'));
    }

    public function vefatlistesi(Request $request)
    {

        $guncelyazilar = GuncelYazi::all();


        if($request->ajax()){
            $data = vefatlistesi::select('*');
            return Datatables::of($data)
            ->order(function ($q){
                $q->orderBy('vefat_yili','asc');


                })->addColumn('vefat_yili', function ($data) {
                return Carbon::parse($data->vefat_yili)->translatedFormat("d F Y", strtotime($data->vefat_yili));
            })


                ->addColumn('action', function($data) {

                    if($data->fotografi == null){
                        $btnull = '<div class="btn-group" style="width: 110px;" role="group" >
                        <a class="btn btn-danger">Bulunamadı</a>
                       </div>';

                    return $btnull;

                    }elseif ($data->aciklama == 'a'){

                        $btnaciklama = '<div class="btn-group" role="group" style="width: 110px;" >
                        <a href="' . route('vefatslug', $data->slug) . '" data-id="'.$data->id.'" target="_blank" class="btn btn-success">Açıklama</a>
                       </div>';

                       return $btnaciklama;

                    }

                    elseif ($data->fotografi != null) {

                        $btn = '<div class="btn-group" role="group" style="width: 110px;" >
                        <a href="' . route('vefatslug', $data->slug) . '" data-id="'.$data->id.'" target="_blank" class="btn btn-info">Fotoğraf</a>
                       </div>';

                    return $btn;

                    }


                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('home.vefatlistesi', compact('guncelyazilar'));

    }



    public function vefatslug($vefatslugdegeri, $id)
    {

        $slugvefat=vefatlistesi::where('slug','id', $vefatslugdegeri)->firstOrFail();
        $vefatbilgiler = vefatlistesi::where('id', $slugvefat->id)->get();
        $guncelyazilar = GuncelYazi::all();
        return view('home.vefatlistesislug', compact('slugvefat','vefatbilgiler','guncelyazilar'));
    }

    public function slug($slugdegeri)
    {

        $sluganasayfa=AnasayfaSlider::where('slug', $slugdegeri)->firstOrFail();
        $bilgiler = AnasayfaSlider::where('id', $sluganasayfa->id)->get();
        $guncelyazilar = GuncelYazi::all();
        $tablo = TabloHazirla::where('id', $sluganasayfa->id)->get();
        return view('home.slug', compact('sluganasayfa', 'bilgiler', 'guncelyazilar','tablo'));
    }

    public function slugotobus($otobusslugdegeri)
    {

        $otobusslug=OtobusSaatleri::where('slug', $otobusslugdegeri)->firstOrFail();
        $otobusbilgiler = OtobusSaatleri::where('id', $otobusslug->id)->get();
        $guncelyazilar = GuncelYazi::all();
        return view('home.otobussaatlerislug', compact('otobusslug', 'otobusbilgiler', 'guncelyazilar'));
    }

    public function slugduyuru($duyuruslugdegeri)
    {

        $duyuruslug=Duyurular::where('slug', $duyuruslugdegeri)->firstOrFail();
        $duyurubilgiler = Duyurular::where('id', $duyuruslug->id)->get();

        $guncelyazilar = GuncelYazi::all();
        return view('home.duyuruslug', compact('guncelyazilar', 'duyuruslug', 'duyurubilgiler'));
    }

    public function slugusta($ustaslugdegeri)
    {

        $ustaslug=Ustalar::where('slug', $ustaslugdegeri)->firstOrFail();
        $ustabilgiler = Ustalar::where('id', $ustaslug->id)->get();

        $guncelyazilar = GuncelYazi::all();
        return view('home.ustaslug', compact('guncelyazilar', 'ustaslug', 'ustabilgiler'));
    }

    public function slugalimsatim($alimsatimslugdegeri)
    {

        $alimsatimslug=Alimsatim::where('slug', $alimsatimslugdegeri)->firstOrFail();
        $alimsatimbilgiler = Alimsatim::where('id', $alimsatimslug->id)->get();

        $guncelyazilar = GuncelYazi::all();
        return view('home.alimsatimslug', compact('guncelyazilar', 'alimsatimslug', 'alimsatimbilgiler'));
    }



    public function redirect()
    {




        if(!empty(Auth::user()) && Auth::user()->usertype == 1 ){
            $gelenmesaj = Iletisim::paginate(5);
            return view('admin.home', compact('gelenmesaj'));
        }


        return redirect()->route('anasayfayadon')->with('message','Yetkiniz Yok');



    }


}
