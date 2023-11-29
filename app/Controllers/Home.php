<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
  //    echo view('header');
        // echo view('menu');
        // echo view('footer');
        

        $model=new M_model();
        echo view('login');
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model = new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>$p
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

        }else {
        return redirect()->to('/home');
    }
}

    public function log_out()
    {
        // if(session()->get('id')>0) {

         session()->destroy();
         return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }

    public function dashboard()
    {
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }

    public function user()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('user');

        $id = session()->get('id');
        $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_user');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    // public function tambah_user()
    // {
    //     $model = new M_model();
    //     $kui['ferdi']=$model->tampil('user');
    //     echo view('header');
    //     echo view('menu');
    //     echo view('v_tambah_user',$kui);
    //     echo view('footer');
    // }

    // public function aksi_tambah_user()
    // {
    //     $a= $this->request->getPost('username');
    //     $b= $this->request->getPost('password');
    //     $c= $this->request->getPost('level');
        
    //     $simpan=array(
    //         'username'=>$a,
    //         'password'=>$b,
    //         'level'=>$c
           
    //     );
    //     $model = new M_model();
    //     $model->simpan('user',$simpan);
    //     return redirect()->to('/home/user');
    // }

    public function hapus_user($id)
    {
        $model = new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('/home/user');
    }

///////////////===============================PENITIP BARANG============================///////////////
    public function penitip_barang()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('penitip_barang');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_penitip_barang');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_penitip_barang()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('penitip_barang');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_penitip_barang',$kui);
        echo view('footer');
    }

    public function aksi_tambah_penitip_barang()
    {
        $a= $this->request->getPost('nama');
        $b= $this->request->getPost('email');
        $c= $this->request->getPost('alamat');
        $d= $this->request->getPost('no_hp');      
        $e= $this->request->getPost('tanggal');      

        $simpan=array(
            'nama'=>$a,
            'email'=>$b,
            'alamat'=>$c,
            'no_hp'=>$d,
            'tanggal'=>$e            

        );
        $model = new M_model();
        $model->simpan('penitip_barang',$simpan);
        return redirect()->to('/home/penitip_barang');
    }

    public function edit_penitip_barang($id)
    {
        $model = new M_model();
        $where=array('id_penitip_barang'=>$id);
        $kui['ferdi']=$model->getRow('penitip_barang',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_penitip_barang',$kui);
        echo view('footer');
    }

    public function aksi_edit_penitip_barang()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama= $this->request->getPost('nama');
         $email= $this->request->getPost('email');
         $alamat= $this->request->getPost('alamat');
         $no_hp= $this->request->getPost('no_hp');
         $tanggal= $this->request->getPost('tanggal');

         $where=array('id_penitip_barang'=>$id);
         $simpan=array(
            'nama'=>$nama,
            'email'=>$email,
            'alamat'=>$alamat,
            'no_hp'=>$no_hp,
            'tanggal'=>$tanggal,

         );

         $model = new M_model();
         $model->edit('penitip_barang', $simpan, $where);
         return redirect()->to('/home/penitip_barang');
    }

    public function hapus_penitip_barang($id)
    {
        $model = new M_model();
        $where=array('id_penitip_barang'=>$id);
        $model->hapus('penitip_barang',$where);
        return redirect()->to('/home/penitip_barang');
    }

///////////////===============================PESANAN KHUSUS============================///////////////
    public function pesanan_khusus()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('pesanan_khusus');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_pesanan_khusus');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_pesanan_khusus()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('pesanan_khusus');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_pesanan_khusus',$kui);
        echo view('footer');
    }

    public function aksi_tambah_pesanan_khusus()
    {
        $a= $this->request->getPost('nama_brg');
        $b= $this->request->getPost('kategori');

        $simpan=array(
            'nama_brg'=>$a,
            'kategori'=>$b

        );
        $model = new M_model();
        $model->simpan('pesanan_khusus',$simpan);
        return redirect()->to('/home/pesanan_khusus');
    }

    public function edit_pesanan_khusus($id)
    {
        $model = new M_model();
        $where=array('id_pesanan_khusus'=>$id);
        $kui['ferdi']=$model->getRow('pesanan_khusus',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_pesanan_khusus',$kui);
        echo view('footer');
    }

    public function aksi_edit_pesanan_khusus()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama_brg= $this->request->getPost('nama_brg');
         $kategori= $this->request->getPost('kategori');

         $where=array('id_pesanan_khusus'=>$id);
         $simpan=array(
            'nama_brg'=>$nama_brg,
            'kategori'=>$kategori
         );

         $model = new M_model();
         $model->edit('pesanan_khusus', $simpan, $where);
         return redirect()->to('/home/pesanan_khusus');
    }

    public function hapus_pesanan_khusus($id)
    {
        $model = new M_model();
        $where=array('id_pesanan_khusus'=>$id);
        $model->hapus('pesanan_khusus',$where);
        return redirect()->to('/home/pesanan_khusus');
    }

///////////////===============================ULASAN============================///////////////
    public function ulasan()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('ulasan');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_ulasan');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_ulasan()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('ulasan');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_ulasan',$kui);
        echo view('footer');
    }

    public function aksi_tambah_ulasan()
    {
        $a= $this->request->getPost('rating');       
        $b= $this->request->getPost('komen');
 
        $simpan=array(
            'rating'=>$a,
            'komen'=>$b

        );
        $model = new M_model();
        $model->simpan('ulasan',$simpan);
        return redirect()->to('/home/ulasan');
    }

    public function edit_ulasan($id)
    {
        $model = new M_model();
        $where=array('id_ulasan'=>$id);
        $kui['ferdi']=$model->getRow('ulasan',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_ulasan',$kui);
        echo view('footer');
    }

    public function aksi_edit_ulasan()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $rating= $this->request->getPost('rating');         
         $komen= $this->request->getPost('komen');
      
         $where=array('id_ulasan'=>$id);
         $simpan=array(
            'rating'=>$rating,
            'komen'=>$komen

         );

         $model = new M_model();
         $model->edit('ulasan', $simpan, $where);
         return redirect()->to('/home/ulasan');
    }

    public function hapus_ulasan($id)
    {
        $model = new M_model();
        $where=array('id_ulasan'=>$id);
        $model->hapus('ulasan',$where);
        return redirect()->to('/home/ulasan');
    }

//////////////===============================DETAIL TRANSAKSI============================//////////////
    public function detail_transaksi()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('detail_transaksi');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_detail_transaksi');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_detail_transaksi()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('detail_transaksi');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_detail_transaksi',$kui);
        echo view('footer');
    }

    public function aksi_tambah_detail_transaksi()
    {
        $a= $this->request->getPost('harga_satuan_pesanan_khusus');
        $b= $this->request->getPost('biaya_jasa_titipan');
        $c= $this->request->getPost('tanggal');

        $simpan=array(
            'harga_satuan_pesanan_khusus'=>$a,
            'biaya_jasa_titipan'=>$b,
            'tanggal'=>$c            

        );
        $model = new M_model();
        $model->simpan('detail_transaksi',$simpan);
        return redirect()->to('/home/detail_transaksi');
    }

    public function edit_detail_transaksi($id)
    {
        $model = new M_model();
        $where=array('id_detail_transaksi'=>$id);
        $kui['ferdi']=$model->getRow('detail_transaksi',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_detail_transaksi',$kui);
        echo view('footer');
    }

    public function aksi_edit_detail_transaksi()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $harga_satuan_pesanan_khusus= $this->request->getPost('harga_satuan_pesanan_khusus');
         $biaya_jasa_titipan= $this->request->getPost('biaya_jasa_titipan');
         $tanggal= $this->request->getPost('tanggal');

         $where=array('id_detail_transaksi'=>$id);
         $simpan=array(
            'harga_satuan_pesanan_khusus'=>$harga_satuan_pesanan_khusus,
            'biaya_jasa_titipan'=>$biaya_jasa_titipan,
            'tanggal'=>$tanggal

         );
         $model = new M_model();
         $model->edit('detail_transaksi', $simpan, $where);
         return redirect()->to('/home/detail_transaksi');
    }

    public function hapus_detail_transaksi($id)
    {
        $model = new M_model();
        $where=array('id_detail_transaksi'=>$id);
        $model->hapus('detail_transaksi',$where);
        return redirect()->to('/home/detail_transaksi');
    }

///////////////===============================DENDA============================///////////////
    public function denda()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('denda');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_denda');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_denda()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('denda');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_denda',$kui);
        echo view('footer');
    }

    public function aksi_tambah_denda()
    {
        $a= $this->request->getPost('denda');
        $b= $this->request->getPost('keterangan');

        $simpan=array(
            'denda'=>$a,
            'keterangan'=>$b

        );
        $model = new M_model();
        $model->simpan('denda',$simpan);
        return redirect()->to('/home/denda');
    }

    public function edit_denda($id)
    {
        $model = new M_model();
        $where=array('id_denda'=>$id);
        $kui['ferdi']=$model->getRow('denda',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_denda',$kui);
        echo view('footer');
    }

    public function aksi_edit_denda()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $denda= $this->request->getPost('denda');
         $keterangan= $this->request->getPost('keterangan');

         $where=array('id_denda'=>$id);
         $simpan=array(
            'denda'=>$denda,
            'keterangan'=>$keterangan

         );

         $model = new M_model();
         $model->edit('denda', $simpan, $where);
         return redirect()->to('/home/denda');
    }

    public function hapus_denda($id)
    {
        $model = new M_model();
        $where=array('id_denda'=>$id);
        $model->hapus('denda',$where);
        return redirect()->to('/home/denda');
    }

///////////////===============================INFO DENDA============================///////////////
    public function info_denda()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('info_denda');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_info_denda');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_info_denda()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('info_denda');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_info_denda',$kui);
        echo view('footer');
    }

    public function aksi_tambah_info_denda()
    {
        $a= $this->request->getPost('nama');
        $b= $this->request->getPost('minggu');
        $c= $this->request->getPost('bulan');
        $d= $this->request->getPost('tahun');
        $e= $this->request->getPost('denda');

        $simpan=array(
            'nama'=>$a,
            'minggu'=>$b,
            'bulan'=>$c,
            'tahun'=>$d,
            'denda'=>$e
            
        );
        $model = new M_model();
        $model->simpan('info_denda',$simpan);
        return redirect()->to('/home/info_denda');
    }

    public function edit_info_denda($id)
    {
        $model = new M_model();
        $where=array('id_info_denda'=>$id);
        $kui['ferdi']=$model->getRow('info_denda',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_info_denda',$kui);
        echo view('footer');
    }

    public function aksi_edit_info_denda()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama= $this->request->getPost('nama');
         $minggu= $this->request->getPost('minggu');
         $bulan= $this->request->getPost('bulan');
         $tahun= $this->request->getPost('tahun');
         $denda= $this->request->getPost('denda');

         $where=array('id_info_denda'=>$id);
         $simpan=array(
            'nama'=>$nama,
            'minggu'=>$minggu,
            'bulan'=>$bulan,
            'tahun'=>$tahun,
            'denda'=>$denda

         );
         $model = new M_model();
         $model->edit('info_denda', $simpan, $where);
         return redirect()->to('/home/info_denda');
    }

    public function hapus_info_denda($id)
    {
        $model = new M_model();
        $where=array('id_info_denda'=>$id);
        $model->hapus('info_denda',$where);
        return redirect()->to('/home/info_denda');
    }

///////////////===============================RESEP============================///////////////
//     public function resep()
//     {
//         // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { 

//         $model = new M_model();
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->ultra('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3);

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));
//         $kui['user']=$model->getRow('user',$where);

//         echo view('header', $kui);
//         echo view('menu');
//         echo view('v_resep');
//         echo view('footer');
//     // }else{
//     //     return redirect()->to('/home/dashboard');
//     // }
//     }

//     public function tambah_resep()
//     {
//         // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

//         $model=new M_model();
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->ultra('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3);

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));    
//         $kui['user']=$model->getRow('user',$where);

//         $where=array('id_user' => session()->get('id'));
//         // $kui['user']=$model->getRow('user',$where);

//         $kui['duar']=$model->tampil('dokter'); 
//         $kui['a']=$model->tampil('pasien'); 
//         $kui['b']=$model->tampil('poliklinik'); 


//         echo view('header',$kui);
//         echo view('menu');
//         echo view('v_tambah_resep');
//         echo view('footer');

//     //     }else{
//     //     return redirect()->to('/home/dashboard');
//     // }
//     }

//     public function aksi_tambah_resep()
//     {
//         $model = new M_model();
//         $id_dokter = $this->request->getPost('id_dokter');
//         $id_pasien = $this->request->getPost('id_pasien');
//         $id_poliklinik = $this->request->getPost('id_poliklinik');
//         $tgl_resep = $this->request->getPost('tgl_resep');
//         $total_harga = $this->request->getPost('total_harga');
//         $bayar = $this->request->getPost('bayar');
//         $kembali = $this->request->getPost('kembali');

//         $data = array(
//             'id_dokter' => $id_dokter,
//             'id_pasien' => $id_pasien,
//             'id_poliklinik' => $id_poliklinik,
//             'tgl_resep' => $tgl_resep,
//             'total_harga' => $total_harga,
//             'bayar' => $bayar,
//             'kembali' => $kembali
//         );
//     // print_r($data);
//         // Simpan data ke dalam tabel 'resep' menggunakan model
//         $model->simpan('resep', $data);

//         // // Redirect ke halaman '/home/resep'
//         return redirect()->to('/home/resep');
//     }

//     public function edit_resep($id)
//     {
//         // if(session()->get('level')== 4) {

//         $model=new M_model();
//         $where2=array('id_resep'=>$id);
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->edit_resep('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3, $where2);
//         $kui['duar']=$model->tampil('dokter'); 
//         $kui['a']=$model->tampil('pasien'); 
//         $kui['b']=$model->tampil('poliklinik'); 

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));
//         $kui['user']=$model->getwhere('user',$where);

//         echo view('header',$kui);
//         echo view('menu');
//         echo view('v_edit_resep');
//         echo view('footer');

// //     }else{
// //         return redirect()->to('/home/dashboard');
// //     }
//     }

//     public function aksi_edit_resep()
//     {
//         $model=new M_model();
//         $id=$this->request->getPost('id');
//         $a=$this->request->getPost('id_pasien');
//         $b=$this->request->getPost('id_dokter');
//         $c=$this->request->getPost('id_poliklinik');
//         $tgl_resep=$this->request->getPost('tgl_resep');        
//         $total_harga=$this->request->getPost('total_harga');
//         $bayar=$this->request->getPost('bayar');
//         $kembali=$this->request->getPost('kembali');

//         $data=array(
//             'id_pasien'=>$a,
//             'id_dokter'=>$b,
//             'id_poliklinik'=>$c,
//             'tgl_resep'=>$tgl_resep,
//             'total_harga'=>$total_harga,
//             'bayar'=>$bayar,
//             'kembali'=>$kembali,            

//         );
//         // print_r($data);
//         $where=array('id_resep'=>$id);
//         $model->edit('resep',$data,$where);
//         return redirect()->to('/home/resep');
//     }

//     public function hapus_resep($id)
//     {
//         $model = new M_model();
//         $where=array('id_resep'=>$id);
//         $model->hapus('resep',$where);
//         return redirect()->to('/home/resep');
//     }

///////////////===============================LAPORAN============================///////////////
    public function laporan_penitip_barang()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        $kui['kunci']='view_penitip_barang';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_penitip_barang()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        // $on = 'pembayaran.id_pasien = pasien.id_pasien';
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi'] = $model->filter('penitip_barang', $awal, $akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\pengajian\public\assets\KOP_PH.jpg');

        // $kui['foto'] = base64_encode($img);


        echo view('c_p',$kui);

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_penitip_barang()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        // $on = 'pembayaran.id_pasien = pasien.id_pasien';
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter('penitip_barang', $awal, $akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\pegawai\public\assets\KOP_PH.jpg');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_p',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_penitip_barang()
    {
    // if(session()->get('level')== 2) {

    $model=new M_model();
    // $on = 'pembayaran.id_pasien = pasien.id_pasien';
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter('penitip_barang', $awal, $akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama')
    ->setCellValue('B1', 'Email')
    ->setCellValue('C1', 'Alamat')
    ->setCellValue('D1', 'No Hp');

    // ->setCellValue('C1', 'Jarak')
    // // ->setCellValue('D1', 'Due Date')
    // ->setCellValue('D1', 'Suhu')
    // ->setCellValue('E1', 'Tanggal Perjalanan');

    $column=2;

    foreach($data as $data){

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama)
        ->setCellValue('B'. $column, $data->email)
        ->setCellValue('C'. $column, $data->alamat)
        ->setCellValue('D'. $column, $data->no_hp);

        // ->setCellValue('C'. $column, $data->jarak)
        // // ->setCellValue('D'. $column, $data->tgl_jatuh_tempo)
        // ->setCellValue('D'. $column, $data->suhu)
        // ->setCellValue('E'. $column, $data->tanggal_perjalanan);

        // $total += $data->jumlah_gaji;

        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'penitip_barang';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
}
