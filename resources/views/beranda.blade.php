@extends('layar/bar')

@section('halaman')

    <!-- Background -->
    <section class="background">
        <section class="profil text-center" style="margin-top: 50px">
        <h2 style="color: aqua">Selamat Datang</h2>
        <h3><img src="gambar/unmnight.jpg" alt="" style="margin-top: 10px" width="25%" style="margin-block-start: -30%"
            class="rounded-circle img-thumbnail"></h3>
        <h2 style="color: white">Universitas Negeri Makassar</h2>
    </section>
    </section>
    
    <!---sejarah-->
    <section id="about" style="margin-top: 50px">
      <div class="container">
        <div class="row text-center" style="background-color: #23C0D9">
          <div class="col">
            <h2 style="color: white">Sejarah</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col" style="background-color: white">
            <p>
              Universitas Negeri Makassar tidak dapat dilepaskan dari sejarah berdirinya IKIP Ujung Pandang sebagai Lembaga Pendidikan Tenaga Kependidikan (LPTK).
              <br><br>
              Semula IKIP Ujung Pandang sebagai Fakultas Keguruan dan Ilmu Pendidikan (FKIP) dari Universitas Hasanuddin Makassar, yaitu berdasarkan SK Menteri Perguruan Tinggi dan Ilmu  Pengetahuan (PTIP) 1 Agustus 1961 s.d 31 Agustus 1964, berdasarkan SK Menteri  PTIP No. 30 Tahun 1964 Tanggal 1 Agustus 1961.
              <br><br>
              September 1964 s.d. Januari 1965 berstatus IKIP Yogyakarta cabang Makassar, berdasarkan SK Menteri PTIP No. 154 Tahun 1965 Tanggal 1
              September 1965. Pada tanggal 5 Januari s.d. 3 Agustus 1999, berstatus mandiri dengan nama IKIP Makassar, berdasarkan SK Presiden Republik Indonesia No. 272 Tahun 1965 tanggal 5 Januari 1965.
              <br><br>
              Pada fase itu, sejak 1 April 1972, IKIP Makassar berubah menjadi IKIP Ujungpandang dengan mengikuti perubahan nama Kotamadya Makassar menjadi Kotamadya Ujungpandang. Kemudian tanggal 4 Agustus 1999 sampai sekarang berstatus Universitas dengan nama Universitas Negeri Makassar (UNM) berdasarkan SK Presiden Republik Indonesia No. 93 Tahun 1999 tanggal 4 Agustus 1999.
            </p>
          </div>
        </div>
      </div>
    </section>


  <section id="nkel" style="margin-top: 40px">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-8" style="color: white">
          <h2 style="background-color: #23C0D9">Kelas PTIK D :</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <ul style="background-color: white">
            <li>ANNISA SEPTIANI KAMAL</li>
            <li>ODELIA YUNITA KOMAKAIMU</li>
            <li>MUHAMMAD SYABAN RAHMATULLAH</li>
            <li>ALIFYARAMADANI HIDAYAH</li>
            <li>ANGELINA RAMADHANI NATSIR EDE</li>
            <li>ZULHAM ABIDIN</li>
            <li>MUH. MUFLIH AL GHIFARI SALAM</li>
            <li>ANDI ARDILLA</li>
            <li>MUHAMMAD FADHIL WAHYUDI</li>
            <li>ABDULLAH MALIKI AKBAR M</li>
            <li>NUR HIKMAH</li>
            <li>MUH. RAFLI ANDRIAN</li>
            <li>MUH ANDRI APRIADI</li>
            <li>MUH. ARFAH AWALUDDIN T</li>
            <li>MUHAMMAD AL ISRA</li>
        </ul>
        </div>
        <div class="col-4">
          <ul style="background-color: white">
            <li>DEVIKA DIYANTI HARIS</li>
            <li>MUH FIRMANSYAH</li>
            <li>ANDI AULIA AHMAD ALTHAF PASSALOWONGI</li>
            <li>MUHAIMINUL AKRAM</li>
            <li>HAKIPRAWANI</li>
            <li>MARWAN KAMARUDDIN</li>
            <li>NUR AINUN NAJIBAH</li>
            <li>MUHAMMAD SABRIEL</li>
            <li>NUR IKHSAN</li>
            <li>ZHYSKA WULANDARY</li>
            <li>REZKY DWIYANTI UMAR</li>
            <li>JUSNIAR</li>
            <li>ASTRI AYUNINGSIH</li>
            <li>SITTI MARYAM</li>
        </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="agtklp">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Pembuat website :</h2>
        </div>
      </div>

      <div class="row">
        <div class="col"><a href="/arf">
          <div class="row justify-content-start">
            <div class="col text-end"><img src="gambar/p{{ $arfah }}.jpg" alt="" width="40%" class="rounded-circle img-thumbnail"></div>
            <div class="col" style="color: white">{{ $arfah }}
              <p>1929042012</p>
            </div>
          </div>
        </a></div>
        <div class="col"><a href="/isr">
          <div class="row justify-content-start">
            <div class="col text-end"><img src="gambar/p{{ $isra }}.jpg" alt="" width="40%" class="rounded-circle img-thumbnail"></div>
            <div class="col" style="color: white">{{ $isra }}
              <p>1929042013</p>
            </div>
          </div>
        </a></div>
        <div class="col"><a href="/dev">
          <div class="row justify-content-start">
            <div class="col text-end"><img src="gambar/p{{ $devika }}.jpg" alt="" width="40%" class="rounded-circle img-thumbnail"></div>
            <div class="col" style="color: white">{{ $devika }}
              <p>1929042014</p>
            </div>
          </div>
        </a></div>

        <div class="w-100" style="margin-top: 20px"></div>
        <div class="col"><a href="/fir">
          <div class="row justify-content-start">
            <div class="col text-end"><img src="gambar/p{{ $firman }}.jpg" alt="" width="40%" class="rounded-circle img-thumbnail"></div>
            <div class="col" style="color: white">{{ $firman }}
              <p>1929042015</p>
            </div>
          </div>
        </a></div>
        <div class="col"><a href="/atf">
          <div class="row justify-content-start">
            <div class="col text-end"><img src="gambar/p{{ $altaf }}.jpg" alt="" width="40%" class="rounded-circle img-thumbnail"></div>
            <div class="col" style="color: white">{{ $altaf }}
              <p>1929042016</p>
            </div>
          </div>
        </a></div>
        <div class="col"><a href="/akr">
          <div class="row justify-content-start">
            <div class="col text-end"><img src="gambar/p{{ $akram }}.jpg" alt="" width="40%" class="rounded-circle img-thumbnail"></div>
            <div class="col" style="color: white">{{ $akram }}
              <p>1929042017</p>
            </div>
          </div>
        </a></div>

      </div>
    </div>
  </section>

    <!--sebuah kata-->
    <section id="about" style="margin-top: 40px">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Laravel</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, 
              menggunakan konsep Model-View-Controller. Laravel berada dibawah lisensi MIT, 
              dengan menggunakan GitHub sebagai tempat berbagi kode. 
              Wikipedia</p>
          </div>
          <div class="col">
            <p>Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan 
              penggunaan PHP di dalam proses pengembangan website. 
              ... Selain itu, Laravel juga mempermudah proses pengembangan website dengan 
              bantuan beberapa fitur unggulan, seperti Template Engine, Routing, dan Modularity.</p>
          </div>
          <div class="col">
            <p>Laravel adalah framework aplikasi web kontemporer, open source dan digunakan secara luas untuk perancangan aplikasi web yang cepat dan mudah. Laravel dibuat oleh Taylor Otwell pada tahun 2011. Framework ini dibuat untuk pengembangan aplikasi website dimana mengikuti arsitektur MVC (model view controller).</p>
          </div>
        </div>
      </div>
    </section>

    <section id="about" style="margin-top: 40px">
      <div class="container">
        <div class="row text-center" style="background-color: #23C0D9">
          <div class="col">
            <h2 style="color: white"><b> M V C</b></h2>
          </div>
        </div>
        <div class="row" style="background-color: rgb(255, 255, 255)">
          <div class="col">
            <p>Laravel menyertakan Eloquent, 
              sebuah object-relational mapper (ORM) yang membuatnya menyenangkan untuk berinteraksi dengan database Anda.
              Saat menggunakan Eloquent, 
              setiap tabel database memiliki "Model" terkait yang digunakan untuk berinteraksi dengan tabel tersebut.
              Selain mengambil catatan dari tabel database, 
              model Eloquent memungkinkan Anda untuk menyisipkan, memperbarui, dan menghapus catatan dari tabel juga.
            </p>
          </div>
          <div class="col">
            <p>Tentu saja, tidak praktis untuk mengembalikan seluruh string dokumen HTML langsung 
              dari rute dan pengontrol Anda. 
              Untungnya, tampilan menyediakan cara yang nyaman untuk menempatkan semua HTML kami di file terpisah.
              Tampilan memisahkan logika pengontrol/aplikasi Anda dari logika presentasi Anda 
              dan disimpan di direktori resources/views.
            </p>
          </div>
          <div class="col">
            <p>Alih-alih mendefinisikan semua logika penanganan permintaan Anda sebagai penutupan di file rute Anda, 
              Anda mungkin ingin mengatur perilaku ini menggunakan kelas "pengontrol". 
              Pengontrol dapat mengelompokkan logika penanganan permintaan terkait ke dalam satu kelas. 
              Misalnya, kelas UserController mungkin menangani semua permintaan masuk yang terkait dengan pengguna, 
              termasuk menampilkan, membuat, memperbarui, dan menghapus pengguna. 
              Secara default, pengontrol disimpan di direktori app/Http/Controllers.</p>
          </div>
        </div>
      </div>
    </section>

@endsection
    
