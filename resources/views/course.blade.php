@extends('layouts.app')
@section('title','Course Page form')
    @section('content')

    {{-- ara gövdede kalanlar ana tasarımın gövdesine gömülecek olanlar--}}
    <div class="container mt-4">
        <div class="col-md-12">
        <h1>KURSLAR</h1></div><hr>
    <div aling="right">
       <a href="{{route('courseInsert')}}"><button class="btn btn-success">Ekle</button></a> 
    </div>
    <br>
        
        <table class="table table-striped">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($course as $key)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                <td>{{$key->course_title}}</td>
                <td>{{$key->course_content}}</td>
                <td>{{$key->course_must}}</td>
                <td width="10"><a href="{{route('courseUpdate',['id'=>$key->id])}}"><button class="btn btn-primary">Düzenle</button></a></td>
                <td width="10"><a href="{{route('courseDelete',['id'=>$key->id])}}"><button class="btn btn-danger">sil</button></a></td>


                </tr>
                
          @endforeach
               
            </tbody>
            
          </table>


       

    
    </div>
</div>
    @endsection
