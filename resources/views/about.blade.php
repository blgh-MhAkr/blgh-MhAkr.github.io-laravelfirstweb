@extends('layar/bar')

@section('halaman')
    
@foreach ($about as $post)

<section class="container" style="margin: 70px 100px">
    <article class="mb-5">
        <section class="background">
            <section class="profil text-center" style="margin-top: 50px">
            <h3 style="color: rgb(0, 199, 199)">{{ $post['title'] }}</h3>
            <h3><img src="gambar/p{{ $post['penulis'] }}.jpg" alt="gambar/p{{ $post['penulis'] }}.jpg" style="margin-top: 10px" width="10%" style="margin-block-start: -30%"
                class="rounded-circle img-thumbnail"></h3>
            <h3 style="color: white">
                <a href="about/{{ $post['slug'] }}">
                    {{ $post['penulis'] }}
                </a>
            </h3>
            <h6>
                {{ $post['nim'] }}
            </h6>
            <div class="row text-center justify-content-center">
                <div class="col-8">
                    <p>{{ $post['cerita'] }}</p>
                </div>
            </div>
            
        </section>
        </section>
        
        
    </article>
</section>

@endforeach




@endsection
