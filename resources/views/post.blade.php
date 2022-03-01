@extends('layar/bar')

@section('halaman')


<section class="container" style="margin: 200px 100px">
    <article>
        <img src="gambar/p{{ $post['penulis'] }}.jpg" alt="p{{ $post['penulis'] }}.jpg">
        <h5>{{ $post['title'] }}</h5>
        <h3>{{ $post['penulis'] }}</h3>
        <h4>{{ $post['nim'] }}</h4>
        <p>{{ $post['cerita'] }}</p>
    </article>
    <div class="container" style="margin: 100px">
        <a href="/about" class="text-center"><h4 style="color: #114672" class="">back</h4></a>
      </div>
    
</section>
    
@endsection