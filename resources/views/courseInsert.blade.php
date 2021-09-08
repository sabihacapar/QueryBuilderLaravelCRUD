@extends('layouts.app')
@section('title','Course Page form')
    @section('content')

    {{-- ara gövdede kalanlar ana tasarımın gövdesine gömülecek olanlar--}}
    <div class="container mt-4"><h1>Course Page</h1></div><hr>
    

    <div class="col-lg-6 text-center mx-auto">
@if(session()->has('status'))
        <h2>Kurs Ekle</h2>
        <div class="alert alert-success">
            {{session('status')}}
    
        </div>
        @endif
        @if($errors->any()){{-- eğer herhangi bir atağı varsa if koşulu başlasın--}}
       <ul>
           @foreach (
            $errors->all() as $error)
            <li>{{$error}}</li>
               
           @endforeach
       </ul>
        @endif

    <form action="{{route('courseInsertPost')}}" method="POST">
        @csrf {{-- SAYFAYI YÜKLEMESİ İÇİN , formun projeyinin içinden gelip gelmediğini kontrol eder--}}
        <div class="form-group mt-5" enctype="multipart/form-data">
            
            
           
            <div class="form-group mt-2 ">
            <input class="form-control" type="text" value="{{old('course_title')}}" name="course_title" placeholder="Title">
            </div>
            <div class="form-group mt-2 ">
            <input  class="form-control" type="text" value="{{old('course_content')}}" name="course_content" placeholder="Content">
            </div>
            <div class="form-group mt-2"> 
            <input  class="form-control" type="number" value="{{old('course_must')}}" name="course_must" placeholder="Must">
            </div>
            <div class="form-group mt-2">   
            <input  class="form-control" type="submit" value="Kurs Ekle">
            </div>


    </form>
    </div>
    @endsection
