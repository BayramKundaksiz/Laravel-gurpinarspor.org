<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AnasayfaSlider;

use App\Models\GuncelYazi;

use App\Models\Duyurular;

use App\Models\UstGorsel;

use App\Models\Alimsatim;

use App\Models\OtobusSaatleri;

use App\Models\Resimler;

use App\Models\Videolar;

use App\Models\Iletisim;

use App\Models\Ustalar;

use App\Models\VefatListesi;

use Carbon\Carbon;

use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function anasayfaekle()
    {
        $anasayfagetir  = AnasayfaSlider::all();
        return view('admin.anasayfaekle', compact('anasayfagetir'));
    }

    public function anasayfasil($id)
    {
        $anasayfagetir = AnasayfaSlider::find($id);
        $anasayfagetir->delete();
        return redirect()->back()->with('message', 'Haber Silindi');
    }

    public function anasayfasliderekle(Request $request)
    {
        $anasayfaslider  = new AnasayfaSlider;

        $anasayfaslider ->yazar_adi=$request->yazar_adi;

        $anasayfaslider ->tarih=$request->tarih;

        $anasayfaslider ->baslik=$request->baslik;

        $anasayfaslider->slug = Str::slug($request->baslik);

        $anasayfaslider ->aciklama=$request->aciklama;
        
        if($request->hasFile('gorsel')){
            $gorsel = $request->file('gorsel');
            $gorselismi = $gorsel->getClientOriginalName();
            $gorsel->move('anasayfaslider', $gorselismi);
            $anasayfaslider->gorsel = $gorselismi;
        }

        $anasayfaslider ->save();

        return redirect()->back()->with('message','Ürün Başarıyla Eklendi');
    }

    public function anasayfaguncelle($id)
    {
        $anasayfagetir = AnasayfaSlider::find($id);

        return view('admin.anasayfaguncelle', compact('anasayfagetir'));
    }

    public function anasayfa_guncelleme_islemi(Request $guncellemeislemi, $id)
    {
        $anasayfagetir = AnasayfaSlider::find($id);
        $anasayfagetir->yazar_adi = $guncellemeislemi->yazar_adi;
        $anasayfagetir->tarih = $guncellemeislemi->tarih;
        $anasayfagetir->baslik = $guncellemeislemi->baslik;
        $anasayfagetir->aciklama = $guncellemeislemi->aciklama;


        $gorsel = $guncellemeislemi->gorsel;

        if($gorsel){
            

            $gorselismi = $gorsel->getClientOriginalName();

            $guncellemeislemi->gorsel->move('anasayfaslider', $imagename);

            $anasayfagetir->gorsel = $imagename;

        }



        $anasayfagetir->save();

        return redirect()->route('anasayfaekle')->with('message','Güncellendi');

    }

    public function otobusler()
    {
        return view('admin.otobussaatiekle');
    }

    public function otobusekle(Request $request)
    {
        $otobussaatleri = new OtobusSaatleri;
        $otobussaatleri->otobus_baslik = $request->otobus_baslik;
        $otobussaatleri->slug = Str::slug($request->otobus_baslik);
        $otobussaatleri->otobus_aciklama = $request->otobus_aciklama;
        $otobusgorsel = $request->otobus_gorsel;
        $otobusgorselismi = time().'.'.$otobusgorsel->getClientOriginalExtension();
        $request->otobus_gorsel->move('otobussaatleri', $otobusgorselismi);
        $otobussaatleri->otobus_gorsel=$otobusgorselismi;
        $otobussaatleri->save();
        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function videoekle()
    {
        return view('admin.videoekle');
    }

    public function videoeklendi(Request $videolar)
    {
        $video = new Videolar;
        $video->baslik = $videolar->baslik;
        $video->youtube_linki = $videolar->youtube_linki;
        $video->save();
        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function guncelyazi(Request $request)
    {

        return view('admin.guncelyaziekle');

    }

    public function guncelyaziekle(Request $request)
    {
        $guncelyazi = new GuncelYazi;
        $guncelyazi->guncel_metin = $request->guncel_metin;
        $guncelyazi ->save();
        return redirect()->back()->with('message','Güncel yazı eklendi');
    }


    public function ustgorsel()
    {
        return view('admin.ustgorseller');
    }

    public function eklenecekustgorsel(Request $request)
    {
        $ustgorsel = new UstGorsel;

        $ustgorsel->ust_baslik = $request->ust_baslik;

        $gorsel = $request->ust_gorsel;

        $gorselismi = time().'.'.$gorsel->getClientOriginalExtension();

        $request->ust_gorsel->move('ustgorseller', $gorselismi);

        $ustgorsel->ust_gorsel=$gorselismi;

        $ustgorsel->save();

        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function sagkategoriler()
    {
        return view('admin.sagkategoriler');
    }

    public function duyurular()
    {
        return view('admin.duyurular');
    }

    public function ustalar()
    {
        return view('admin.ustalar');
    }

    public function ustaekle(Request $request)
    {
        $ustaekle = new Ustalar;

        $ustaekle->usta_ismi = $request->usta_ismi;

        $ustaekle->slug = Str::slug($request->ustanin_yaptigi_is);

        $ustaekle->ustanin_yaptigi_is=$request->ustanin_yaptigi_is;

        $ustaekle->usta_aciklamasi=$request->usta_aciklamasi;

        $usta_gorseli = $request->usta_gorseli;

        $ustagorselismi = time().'.'.$usta_gorseli->getClientOriginalExtension();

        $request->usta_gorseli->move('ustagorseller', $ustagorselismi);

        $ustaekle->usta_gorseli=$ustagorselismi;

        $ustaekle->save();

        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function alimsatim()
    {
        return view('admin.alimsatim');
    }

    public function resimekle()
    {
        return view('admin.resimekle');
    }

    public function resimeklendi(Request $nostaljiresim)
    {
        $nostaljiresimekle = new Resimler;

        $nostaljiresimekle->gonderici_ismi = $nostaljiresim->gonderici_ismi;

        $nostaljiresimekle->slug = Str::slug($nostaljiresim->resim_basligi);

        $nostaljiresimekle->resim_basligi=$nostaljiresim->resim_basligi;

        $nostaljiresimekle->resim_tarihi=$nostaljiresim->resim_tarihi;

        $nostaljiresimekle->resim_aciklamasi=$nostaljiresim->resim_aciklamasi;

        $resim_gorseli = $nostaljiresim->resim_gorseli;

        $nostaljiresimgorselismi = time().'.'.$resim_gorseli->getClientOriginalExtension();

        $nostaljiresim->resim_gorseli->move('nostaljiresimler', $nostaljiresimgorselismi);

        $nostaljiresimekle->resim_gorseli=$nostaljiresimgorselismi;

        $nostaljiresimekle->save();

        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function alimsatimekle(Request $request)
    {
        $alimsatimekle = new AlimSatim;

        $alimsatimekle->satici_ismi = $request->satici_ismi;

        $alimsatimekle->slug = Str::slug($request->urun_basligi);

        $alimsatimekle->urun_basligi=$request->urun_basligi;

        $alimsatimekle->ilan_tarihi=$request->ilan_tarihi;

        $alimsatimekle->urun_aciklamasi=$request->urun_aciklamasi;

        $urun_gorseli = $request->urun_gorseli;

        $alimsatimgorselismi = time().'.'.$urun_gorseli->getClientOriginalExtension();

        $request->urun_gorseli->move('alimsatimgorseller', $alimsatimgorselismi);

        $alimsatimekle->urun_gorseli=$alimsatimgorselismi;

        $alimsatimekle->save();

        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function duyuruekle(Request $request)
    {
        $duyuruekle = new Duyurular;

        $duyuruekle->duyuru_baslik = $request->duyuru_baslik;

        $duyuruekle->slug = Str::slug($request->duyuru_baslik);

        $duyuruekle->duyuru_tarih=$request->duyuru_tarih;

        $duyuruekle->duyuru_yazar=$request->duyuru_yazar;

        $duyuruekle->duyuru_aciklama=$request->duyuru_aciklama;
        
        if($request->hasFile('duyuru_gorsel')){
            $gorsel = $request->file('duyuru_gorsel');
            $duyurugorselismi = $gorsel->getClientOriginalName();
            $gorsel->move('duyurugorseller', $duyurugorselismi);
            $duyuruekle->duyuru_gorsel = $duyurugorselismi;
        }

       

        $duyuruekle->save();

        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function vefatekle()
    {
        return view('admin.vefatekle');
    }


    public function vefateklendi(Request $request)
    {
        $vefatekle = new VefatListesi;

        $vefatekle->adi = $request->adi;

        $vefatekle->soyadi=$request->soyadi;

        $vefatekle->slug = Str::slug($request->adi . ' ' . $request->soyadi);

        $vefatekle->vefat_yili=$request->vefat_yili;

        if($request->hasFile('fotografi')){
            $gorsel = $request->file('fotografi');
            $vefatgorselismi = $gorsel->getClientOriginalName();
            $gorsel->move('vefatlistesi', $vefatgorselismi);
            $vefatekle->fotografi = $vefatgorselismi;
        }

        $vefatekle->save();

        return redirect()->back()->with('message','Güncel yazı eklendi');
    }

    public function mesajsil($id)
    {
        $gelenmesaj = Iletisim::find($id);
        $gelenmesaj->delete();
        return redirect()->back()->with('message', 'Mesaj Silindi');
    }



}
