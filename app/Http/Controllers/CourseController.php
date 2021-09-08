<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;//validator sınıfını buraya eklemek için kullanılır
use App\Rules\Age;

use Illuminate\Support\Facades\DB;//veritabanının yolu
use Illuminate\Support\Facades\Schema;//bu şema sınıfı ile var olan şema methodlarını kullanabiliriz

class CourseController extends Controller
{
  public  function index(){

    
    $course=DB::table('course')
    ->orderBy('course_must','DESC')
    ->get();//tüm verileri çeker
    return view('course',compact('course'));
    }
    public function courseInsert(Request $request){

      return view('courseInsert');

  }
  public function courseInsertPost(Request $request){
   $request->validate([
     'course_title'=>'required',
     'course_content'=>'required',
     'course_must'=>'required',
   ]);
   // return $request->all();
   $course=DB::table('course')
   ->insert(
    [
      'course_title' =>$request-> course_title,
      'course_content' =>$request->course_content,
      'course_must'=>$request->course_must
    ]
   );
   if($course){
    return back()->with('status','kayıt Başarılı');

   }
  
  }
  public function courseUpdate($id)
  {

//        $course=DB::table('course')
//            ->where('id',$id)
//            ->first();

      $course=DB::table('course')
          ->find($id);

     return view('courseUpdate',compact('course'));
  }
  
  public function courseUpdatePost(Request $request,$id)
  {

      $request->validate([
          'course_title' => 'required',
          'course_content' => 'required',
          'course_must' => 'required'
      ]);

//        return $request->all();

      $course = DB::table('course')
          ->where('id',$id)
          ->update(
          [
              'course_title' => $request->course_title,
              'course_content' => $request->course_content,
              'course_must' => $request->course_must
          ]
      );

      if ($course) {
          return back()->with('status', 'Güncelleme Başarılı');
      }
  }
  
  public function courseDelete($id){

    //        DB::table('course')
    //            ->Where('id',$id)
    //            ->Delete();
    
            DB::table('course')
                ->Delete($id);
    
            return back();
        }
  
}
