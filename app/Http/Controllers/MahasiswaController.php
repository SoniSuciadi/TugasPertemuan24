<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){
        $result= DB::insert('insert into mahasiswas (npm,nama_mahasiswa,tempat_lahir,tanggal_lahir, alamat, created_at)values (?,?,?,?,?,?)',['1822240086','Soni Suciadi','Palembang','2000-08-03','11 Ulu',now()]);
        dump($result);
    }
    public function update(){
        $result=DB::update('UPDATE `mahasiswas` SET `nama_mahasiswa` = "Jenny Putri", `updated_at` = now() WHERE `mahasiswas`.`npm` = ?',['1822240086']);
        dump($result);
    }
    public function delete(){
        $result=DB::delete('DELETE FROM `mahasiswas` WHERE `mahasiswas`.`npm` = ?',['1822240086']);
        dump($result);
    }
    public function select(){
        $kampus='Universitas Multi Data Palembang';
        $result=DB::select('SELECT * FROM mahasiswas');
//        dump($result);
        return view('mahasiswa.index',['allmahasiswa'=>$result,'kampus'=>$kampus]);
    }
    public function insertQb(){
        $result=DB::table('mahasiswas')->insert(
            [
                'npm'=>'1822240089',
                'nama_mahasiswa'=>'Soni SUciadi',
                'tempat_lahir'=>'Palembang',
                'tanggal_lahir'=>'2000-08-03',
                'alamat'=>'11ulu',
                'created_at'=>now()
            ]
        );
    }
    public function updateQb(){
        $result=DB::table('mahasiswas')
            ->where('npm','1822240086')
            ->update([
                'nama_mahasiswa'=>'Sonii',
                'updated_at'=>now()
            ]);
        dump($result);
    }
    public function deleteQb(){
        $result=DB::table('mahasiswas')
            ->where('npm','=','1822240086')
            ->delete();
        dump($result);
    }
    public function selectQb(){
        $kampus='Universitas Multi Data Palembang';
        $result=DB::table('mahasiswas')->get();
        return view('mahasiswa.index',['allmahasiswa'=>$result,'kampus'=>$kampus]);
    }
    public function insertElq(){
        $mahasiswa=new Mahasiswa();
        $mahasiswa->npm='1822240090';
        $mahasiswa->nama_mahasiswa='Soniiiiiih';
        $mahasiswa->tempat_lahir='Palembang';
        $mahasiswa->tanggal_lahir='2000-03-08';
        $mahasiswa->alamat='11 Ulu';
        $mahasiswa->save();
        dump($mahasiswa);
    }
    public function updateElq(){
        $mahasiswa=Mahasiswa::where('npm',182249909);
        $mahasiswa->nama_mahasiswa= 'yogi';
        $mahasiswa-> save();
        dump($mahasiswa);
    }
    public function deleteElq(){
        $mahasiswa=Mahasiswa::where('npm','182240076');
        $mahasiswa=$this->delete();
        dump($mahasiswa);
    }
    public function SelectElq(){
        $kampus='Universitas Multi Data Palembang';
        $result=DB::table('mahasiswas')->get();
        return view('mahasiswa.index',['allmahasiswa'=>$result,'kampus'=>$kampus]);
    }


}
