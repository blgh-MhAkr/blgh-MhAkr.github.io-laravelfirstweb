@extends('layar/bar')

@section('halaman')
    

    <!-- Background -->
    <section class="background">
        <section class="profil text-center" style="margin-top: 50px">
        <h2 style="color: #114672">Biodata</h2>
    </section>
    </section>


    <section class="bio">
      <div class="container" style="margin-top: 50px">
        <div class="row">
          <div class="col">
            <h2 style="color: white">
              <div class="row" style="background-color: #23C0D9">
                <div class="col">
                  {{ $p }}
                </div>
              </div>
              </h2>
            <h4>
              <div class="row align-items-center" style="background-color: white">
                <div class="col">
                  <ul type="none">
                    <li>Nama</li>
                    <li>Nim</li>
                    <li>Kelas</li>
                    <li>Alamat</li>
                  </ul>
                </div>
                <div class="col">
                  <ul type="none">
                    <li>: {{ $p }}</li>
                    <li>: {{ $n }}</li>
                    <li>: PTIK D</li>
                    <li>: Makassar</li>
                  </ul>
                </div>
                <div class="w-100" style="margin-top: 1px"></div>
                <div class="col">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat atque aspernatur sit aperiam hic, beatae molestiae neque unde, explicabo corporis saepe voluptatum animi id at tempore iste obcaecati repudiandae quasi? Fugiat eos aliquam harum repellat alias, amet eligendi eveniet dolor?
                </div>
              </div>
            </h4>
          </div>
          <div class="col-4">
            <h1><a href="gambar/p{{ $p }}.jpg"><img src="gambar/p{{ $p }}.jpg" alt="" width="80%" class="rounded-circle img-thumbnail" style="margin-left: 60px"></a></h1>
          </div>
        </div>
      </div>
    </section>

    <!--sosmed-->
    <section id="icons">
      <div class="container" style="margin-top: 10px">
        <div class="row">
          <div class="col-2 border border-primary border-3 rounded-3">
            <a href="https://www.facebook.com/muh.firmansyah1304">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/fb.jpg" alt="" width="30px" class="rounded-circle border"></div>
                <div class="col"><h4 style="color: white" class="">Facebook</h4></div>
              </div>
            </a>
          </div>
          <div class="col-2 border border-danger border-3 rounded-3">
            <a href="https://www.instagram.com/muhfirmansyah13/">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/ig.jpg" alt="" width="30px" class="rounded-circle"></div>
                <div class="col"><h4 style="color: white" class="">Instagram</h4></div>
              </div>
            </a>
          </div>
          <div class="col-2 border border-info border-3 rounded-3">
            <a href="#">
              <div class="row">
                <div class="col-2"><img src="gambar/icon/twit.jpg" alt="" width="30px" class="rounded-circle"></div>
                <div class="col"><h4 style="color: white" class="">Twitter</h4></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

  
  
  <!--buttonback-->
  <div class="container" style="margin: 100px">
    <a href="/home" class="text-center"><h4 style="color: #114672" class="">back</h4></a>
  </div>

@endsection