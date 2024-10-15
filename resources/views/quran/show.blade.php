@extends('index')

@section('content')
<div class="jumbotronn" id="home" style="margin-top: -140px; margin-bottom:20;">
    <div class="bg-dark">
        <div class="text-center font-weight-bold fs-5">
            <h2 class="about text-center" id="about" style="color: white;">Daftar Surat</h2>
        </div>
    </div>
</div>
<table class="table table-striped">
  <thead style="background-color:orange;">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Surah</th>
      <th scope="col"></th>
      <th scope="col">Latin</th>
      <th scope="col">Arti</th>
      <th scope="col">Jumlah Ayat</th>
      <th scope="col">Tempat Turun</th>
      <th scope="col">Type</th>
      <th scope="col">Audio</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($response as $quran)
    <tr >
      <th scope="row" class="pt-4">{{$quran->number_of_surah}}</th>
      <td class="pt-4">{{$quran->name_translations->ar}}<br>
     </td>
      <td>
        <a href="/quran/{{$quran->number_of_surah}}">
        <button type="button" class="btn btn-warning pt">Lihat Surat</button>
        </a>
      </td>
      <td class="pt-4">{{$quran->name}}</td>
      <td class="pt-4">{{$quran->name_translations->id}}</td>
      <td class="pt-4">{{$quran->number_of_ayah}}</td>
      <td class="pt-4">{{$quran->place}}</td>
      <td style="text-align: justify;" class="pt-4">{{$quran->type}}</td>
      <td>
        <figure>
            <audio src="{{$quran->recitation}}" controls ></audio>
        </figure>
      </td> 
    </tr>
   
    @endforeach
  </tbody>
 
</table>
@endsection