@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="container content-section">
        <nav class="breadcrumb-container mt-4 mb-3">
            <a href="{{ route('beranda') }}#sambutan-kepsek" class="breadcrumb-link">Sambutan</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-active">Sambutan Kepala Sekolah</span>
        </nav>
        <div class="banner-container">
            <img src="{{ asset('images/sambutan.jpeg') }}" class="banner-img" alt="Banner Sekolah">
            <div class="profile-photo">
                <img src="{{ asset('images/guru/insan.png') }}" alt="Kepala Sekolah">
            </div>
        </div>

        <div class="text-body">
            <h2 class="fw-bold">Sambutan Kepala Sekolah</h2>
            <h5 class="fw-bold">Insan Gunarjo, S.Pd.I., M.S.I</h5>
            <div class="divider-hijau"></div>

            <div class="isi-sambutan">
                <div class="main-text">
                    <p>Assalamu'alaikum warahmatullahi wabarakatuh,</p>
                    <p>Dengan penuh rasa syukur, izinkan saya menyampaikan sambutan ini sebagai Kepala SMK Muhammadiyah 2
                        Bantul.
                        Di tengah perkembangan dunia yang serba cepat, khususnya di era digital dan teknologi masa kini,
                        generasi
                        muda dituntut untuk lebih adaptif, kreatif, dan visioner. SMK Muhammadiyah 2 Bantul hadir bukan
                        hanya sebagai
                        lembaga pendidikan, tetapi juga sebagai ruang tumbuh bagi Gen Z untuk mengasah potensi, menguasai
                        teknologi, sekaligus
                        membentuk karakter unggul.</p>
                    <p>Pilihan tepat untuk generasi masa kini adalah sekolah yang mampu menghubungkan dunia pendidikan
                        dengan kebutuhan industri.
                        Di SMK Muhammadiyah 2 Bantul, kami terus mengembangkan kurikulum berbasis teknologi dan inovasi.
                        Siswa tidak hanya
                        diajarkan teori, tetapi juga langsung praktik sesuai dengan perkembangan dunia kerja, termasuk tren
                        digital, bisnis
                        kreatif, hingga live commerce yang sedang booming.</p>
                    <p>Akhirnya, saya mengajak para orang tua, siswa, dan masyarakat luas untuk menjadikan SMK Muhammadiyah
                        2 Bantul sebagai
                        pilihan utama. Bersama, kita wujudkan generasi muda yang cerdas, berakhlak, dan siap memimpin masa
                        depan dengan inovasi.</p>
                    <p>Wassalamu'alaikum warahmatullahi wabarakatuh.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
