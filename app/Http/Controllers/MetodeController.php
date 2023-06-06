<?php

namespace App\Http\Controllers;

use App\Models\tb_penilaian;
use App\Models\KetNilai;
use App\Models\Penilaian;
use App\Models\Skala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetodeController extends Controller
{
    //

    public function index()
    {
        $metode = DB::table("metode");
        return view('metode', compact('metode'));
    }

    public function proses_hitung()
    {

        // @TODO 1 : ambil data keterangan nilai dari database
        // select * from penilaian (keterangan nilai)
        $dt_keterangan_nilai = KetNilai::all();

        // @TODO 2 : ambil data skala
        $dt_skala = Skala::all();

        // @TODO 3 : dataset
        /**
         * Contoh query
         *  SELECT
                    tb_penilaian.ID_Penilaian, tb_maskapai.id_maskapai, tb_maskapai.Nama_Wisata,
                    tb_nilaifasilitas.Nilai_KriteriaLokasi,
                    tb_nilaiharga.Nilai_KriteriaFasilitas,
                    tb_nilaipelayanan.Nilai_KriteriaKeamanan,
                    tb_nilaikualitas.Nilai_KriteriaObjekAtraksi
                    FROM tb_penilaian

                JOIN tb_maskapai ON tb_penilaian.id_maskapai = tb_maskapai.id_maskapai
                JOIN tb_nilaifasilitas ON tb_penilaian.id_fasilitas = tb_nilaifasilitas.id_fasilitas
                JOIN tb_nilaiharga ON tb_penilaian.id_harga = tb_nilaiharga.id_harga
                JOIN tb_nilaipelayanan ON tb_penilaian.id_pelayanan = tb_nilaipelayanan.id_pelayanan
                JOIN tb_nilaikualitas ON tb_penilaian.id_kualitas = tb_nilaikualitas.id_kualitas
         */

        $dataset = Penilaian::join('tb_maskapai', 'tb_maskapai.id_maskapai', '=', 'tb_penilaian.id_maskapai')
            ->join('tb_nilaifasilitas', 'tb_nilaifasilitas.id_fasilitas', '=', 'tb_penilaian.id_fasilitas')
            ->join('tb_nilaiharga', 'tb_nilaiharga.id_harga', '=', 'tb_penilaian.id_harga')
            ->join('tb_nilaipelayanan', 'tb_nilaipelayanan.id_pelayanan', '=', 'tb_penilaian.id_pelayanan')
            ->join('tb_nilaikualitas', 'tb_nilaikualitas.id_kualitas', '=', 'tb_penilaian.id_kualitas')
            ->select('tb_nilaifasilitas.*', 'tb_nilaiharga.*', 'tb_nilaipelayanan.*', 'tb_nilaikualitas.*', 'tb_maskapai.*', 'tb_penilaian.*');


        // cek apakah memiliki dataset ?
        if ($dataset->count() > 0) {


            // boleh melakukan perhitungan
            $dt_konversi_nilai = array();
            $total = 0;
            foreach ($dataset->get() as $isi) {

                $nilai_kriteria_kualitas = (int) $isi->nilai_KriteriaKualitas;
                $nilai_fasilitas = (int) $isi->nilai_KriteriaFasilitas;
                $nilai_harga = (int) $isi->nilai_KriteriaHarga;
                $nilai_pelayanan = (int) $isi->nilai_KriteriaPelayanan;


                $convert_kriteria_kualitas = $this->konversi_tb_penilaian($nilai_kriteria_kualitas, $dt_keterangan_nilai);
                $convert_kriteria_harga = $this->konversi_tb_penilaian($nilai_harga, $dt_keterangan_nilai);
                $convert_kriteria_pelayanan = $this->konversi_tb_penilaian($nilai_pelayanan, $dt_keterangan_nilai);
                $convert_kriteria_fasilitas = $this->konversi_tb_penilaian($nilai_fasilitas, $dt_keterangan_nilai);
                // perhitungan s
                $s_kualitas = $this->mencari_nilai_s($convert_kriteria_kualitas, "Kriteria Kualitas");
                $s_harga = $this->mencari_nilai_s($convert_kriteria_harga, "Kriteria Harga");
                $s_pelayanan  = $this->mencari_nilai_s($convert_kriteria_pelayanan, "Kriteria Pelayanan");
                $s_fasilitas  = $this->mencari_nilai_s($convert_kriteria_fasilitas, "Kriteria Fasilitas");


                $vektor_s = $s_kualitas * $s_harga * $s_pelayanan * $s_fasilitas;

                // konversi nilai ke tb_penilaian
                // echo "<h2>$isi->ID_Penilaian hasil s : $nilai_s_keseluruhan</h2>";
                // echo number_format($s_kualitas, 10).". ; $s_harga ; $s_pelayanan ; $s_fasilitas";
                $isi->convert_kriteria_kualitas = $convert_kriteria_kualitas;
                $isi->convert_kriteria_harga = $convert_kriteria_harga;
                $isi->convert_kriteria_pelayanan = $convert_kriteria_pelayanan;
                $isi->convert_kriteria_fasilitas = $convert_kriteria_fasilitas;

                $isi->s_kualitas = $s_kualitas;
                $isi->s_harga = $s_harga;
                $isi->s_pelayanan = $s_pelayanan;
                $isi->s_fasilitas = $s_fasilitas;
                $isi->vektor_s = $vektor_s;

                // $total += $nilai_s_keseluruhan;
                $total = $total + $vektor_s;

                array_push($dt_konversi_nilai, $isi);
            }



            // perhitungan vektor v dan vektor s
            $dt_keseluruhan = array();
            foreach ($dt_konversi_nilai as $isi) {
                // mencari nilai vektor s
                $vektor_s = $isi->vektor_s;
                $vektor_v = $vektor_s / $total;

                $isi->vektor_v = $vektor_v;
                array_push($dt_keseluruhan, $isi);

                // echo "<h2>$isi->ID_Penilaian vektor : ".number_format($vektor_v, 9)."</h2>";
            }




            $original_data = $dt_keseluruhan; // data perhitungan sebelum diurutkan

            // fungsi sorting desc
            usort($dt_keseluruhan, function ($a, $b) {
                return $b->vektor_v <=> $a->vektor_v;
            });



            $origin_json = json_encode($original_data);
            $sorting_json = json_encode($dt_keseluruhan);
            $data = array(

                'origin'    => $origin_json,
                'data_json' => $sorting_json
            );

            DB::table("metode")->insert($data);
            return redirect('metode');



            // print_r( $dt_konversi_nilai );
        } else {

            echo "Anda tidak memiliki dataset";
        }
    }



    // data penilaian
    function konversi_tb_penilaian($nilai_kriteria_kualitas, $dt_keterangan_nilai)
    {

        $bobot = "";

        foreach ($dt_keterangan_nilai as $isi) {

            $nilai_range = $isi->range_nilai;
            // pisah
            $range = explode("-", $nilai_range);
            $rangeAwal = (int) $range[0];
            $rangeAkhir = (int) $range[1];

            // if ( 0 < 33 && 33 < 49 )
            if (($rangeAwal <= $nilai_kriteria_kualitas) && ($nilai_kriteria_kualitas <= $rangeAkhir)) {

                $bobot = $isi->bobot_nilai;
                break;
            }
        }
        return $bobot;
    }

    // mencari nilai s
    function mencari_nilai_s($nilai, $jenis)
    {
        // SELECT * FROM skala_penilaian WHERE Jenis_Kriteria = 'jenis'
        $dt_skala_jenis = Skala::where("jenis_kriteria", $jenis)->first();

        // pangkat
        $pangkat = (float) $dt_skala_jenis->bobot_penilaian;
        $hasil = pow($nilai, $pangkat);

        return $hasil;
    }

    function reset()
    {

        DB::table('metode')->truncate();

        return redirect('metode');
    }
}
