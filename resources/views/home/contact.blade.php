@extends ('layout.app')
    
@section('content')
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">HUBUNGI KAMI</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">PT. Home Interior Project</a></li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact pb-5" id="contact">
        <div class="container pb-md-5 pb-4">
            <div class="row contact-block">
                <div class="col-lg-7 contact-right mt-5">
                    <h3 class="title-style mb-4 pb-2">Mulai Konsultasi</h3>
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
                <div class="col-lg-5 mt-lg-0 mt-5 pl-xl-5 pl-lg-4">
                    <div class="map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31917.559910590022!2d101.4680004!3d0.4505046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af6544673511%3A0x64f8979a9b4b9a6f!2sPT.%20HOME%20INTERIOR%20PROJECT!5e0!3m2!1sid!2sid!4v1724127797496!5m2!1sid!2sid"
                            width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
@endsection

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