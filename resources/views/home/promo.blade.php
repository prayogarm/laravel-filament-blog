@extends ('layout.app')
    
@section('content')
<div class="inner-banner">
    <div class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">PROMO KEMERDEKAAN</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a >Diskon 500rb/m Semua Kualitas!</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //banner section -->
    <div style="margin: 8px auto; display: block; text-align:center;"></div>
<!-- banner bottom section -->
<section class="w3l-grids-6 py-5">
    <div class="container py-md-5 py-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="section-heading mb-sm-5 mb-4">
                    <h3 class="title-style mb-1">Khusus 5 Orang Pertama</h3>
                    <h5 class="title-style mb-2">Isi Form Sekarang & Dapatkan Diskon Eksklusif Bulan Ini</h5>
                </div>
            </div>
        </div>
        <section class="w3l-contact" id="contact">
            <div class="container">
                <div class="row contact-block justify-content-center">
                    <div class="col-lg-6 contact-right mt-3">
                        <form id="contactForm" class="signin-form">
                            <div class="input-grids">
                                <input type="text" name="name" id="name" placeholder="Nama Lengkap*"
                                    class="contact-input" required="" />
                                <input type="number" name="telpon" id="telpon" placeholder="Nomor WhatsApp*"
                                    class="contact-input" required="" />
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat*"
                                    class="contact-input" required="" />
                                <input type="text" name="kota" id="kota" placeholder="Kota*"
                                    class="contact-input" required="" />
                            </div>
                            <div class="form-input">
                                <textarea name="pesanan" id="pesanan" placeholder="Project yang ingin dipesan atau tanyakan*"
                                    required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-style mt-sm-3">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- pricing section -->
<section class="w3l-pricing py-5" id="price">
    <div class="container py-md-5 py-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="section-heading mb-sm-5 mb-4">
                    <h3 class="title-style mb-2">Pilih Produk</h3>
                    <p class="lead">
                        Perkiraan biaya pembangunan bisa menyesuaikan dengan ketersediaan anggaran dan keinginan Anda.
                    </p>
                </div>
            </div>
        </div>
        <div class="row t-in justify-content-center">
            <div class="col-lg-4 col-md-6 price-main-info">
                <div class="price-inner card box-shadow">

                    <div class="card-body">
                        <h4 class="text-uppercase text-center mb-3">Kualitas Standard</h4>
                        <h5 class="card-title pricing-card-title">
                            <span class="align-top">Rp</span>1.700.000 <span class="sub-coast">/m</span>
                            <br>
                            <span class="align-top"><del>Rp 2.200.000</del></span>
                        </h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <span class="fa fa-check"></span> Survey Lokasi</li>
                            <li> <span class="fa fa-check"></span> Desain 3D Interior</li>
                            <li> <span class="fa fa-check"></span> Finishing HPL (ex TACO)</li>
                            <li> <span class="fa fa-check"></span> Inner Melamin</li>
                            <li> <span class="fa fa-check"></span> Bahan Blockboard</li>
                            <li class="disable"> <span class="fa fa-check"></span> Sudut sambungan HPL ditusir</li>
                            <li class="disable"> <span class="fa fa-check"></span> Bahan Multiplek</li>
                        </ul>
                        <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="https://wa.link/7z50j7" class="btn btn-style"> Tanya Produk Ini</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 price-main-info mt-md-0 mt-4">
                <div class="price-inner card box-shadow active">

                    <div class="card-body">
                        <label class="price-label">Recommended</label>
                        <h4 class="text-uppercase text-center mb-3">Kualitas Medium</h4>
                        <h5 class="card-title pricing-card-title">
                            <span class="align-top">Rp</span>2.200.000 <span class="sub-coast">/m</span>
                            <br>
                            <span class="align-top"><del>Rp 2.700.000</del></span>
                        </h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <span class="fa fa-check"></span> Survey Lokasi</li>
                            <li> <span class="fa fa-check"></span> Desain 3D Interior</li>
                            <li> <span class="fa fa-check"></span> Finishing HPL (ex TACO)</li>
                            <li> <span class="fa fa-check"></span> Inner Melamin</li>
                            <li> <span class="fa fa-check"></span> Bahan Blockboard</li>
                            <li> <span class="fa fa-check"></span> Sudut sambungan HPL ditusir</li>
                            <li class="disable"> <span class="fa fa-check"></span> Bahan Multiplek</li>
                        </ul>
                        <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="https://wa.link/9g2tny" class="btn btn-style"> Tanya Produk Ini</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 price-main-info mt-lg-0 mt-4">
                <div class="price-inner card box-shadow">

                    <div class="card-body">
                        <h4 class="text-uppercase text-center mb-3">Kualitas Premium</h4>
                        <h5 class="card-title pricing-card-title">
                            <span class="align-top">Rp</span>2.700.000 <span class="sub-coast">/m</span> 
                            <br>
                            <span class="align-top"><del>Rp 3.200.000</del></span>
                        </h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <span class="fa fa-check"></span> Survey Lokasi</li>
                            <li> <span class="fa fa-check"></span> Desain 3D Interior</li>
                            <li> <span class="fa fa-check"></span> Finishing HPL (ex TACO)</li>
                            <li> <span class="fa fa-check"></span> Inner Melamin</li>
                            <li> <span class="fa fa-check"></span> Sudut sambungan HPL ditusir</li>
                            <li> <span class="fa fa-check"></span> Bahan Multiplek</li>
                        </ul>
                        <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="https://wa.link/zre350" class="btn btn-style"> Tanya Produk Ini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //pricing section -->

@push('js')
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var name = document.getElementById('name').value;
            var telpon = document.getElementById('telpon').value;
            var alamat = document.getElementById('alamat').value;
            var kota = document.getElementById('kota').value;
            var pesanan= document.getElementById('pesanan').value;

            var message = `Assalamualaikum Admin HIP, nama saya ${name} tinggal di ${alamat}, ${kota}. Saya ingin konsultasi mengenai ${pesanan}, dan ingin mendapat potongan 500rb/m.`;

            var whatsappNumber = "6285210668989";

            var whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

            // Arahkan pengguna ke WhatsApp
            window.open(whatsappURL, '_blank');
        });
    </script>    
@endpush

@endsection