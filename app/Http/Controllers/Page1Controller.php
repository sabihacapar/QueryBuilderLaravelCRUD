<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;//veritabanının yolu
use Illuminate\Support\Facades\Schema;//bu şema sınıfı ile var olan şema methodlarını kullanabiliriz


class Page1Controller extends Controller
{
    public function index(){
        /*
        $blog=DB::table('blog')->get();//veritabanındaki blog tablosundaki tüm verileri almak için
        dd($blog);//alınan verileri ekrana bastırmak için
       */
      /*
      $blog=DB::table('blog')
      ->where('blog_id',3)
      ->get();//veritabanındaki blog tablosundaki tüm verileri almak için
        dd($blog);//alınan verileri ekrana bastırmak için
       */
      /*
      $blog=DB::table('blog')
      ->select('blog_title as title') //blog title ı title olarak değiştirdi
      ->get();//veritabanındaki blog tablosundaki tüm verileri almak için
        dd($blog);//alınan verileri ekrana bastırmak için
       */
    //   $blog=DB::table('user')

    //   ->join('blog','blog.user_id','=','user.id')
    //   ->get();//veritabanındaki blog tablosundaki tüm verileri almak için
    //     dd($blog);//alınan verileri ekrana bastırmak için
    // $blog=DB::table('blog')
    // ->where('id',8)
    // ->delete();
    //   dd($blog);//alınan verileri ekrana bastırmak için






    //-----------------------------MİGRATİON-----------------------------
    // if(Schema::hasTable('blogs'))
    // {
    //   echo 'blogs isminde tablo mevcut';
    // }
    //------------------Tablo ismini değiştirme

    // Schema::rename('course','new_course');//var olan tablonun ismini değiştirme
   //Schema::drop('new_course'); //var olan tabloyu silme
  
  }
    
}
