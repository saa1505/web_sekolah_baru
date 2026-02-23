<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', 'Segoe UI', sans-serif;
    }

    nav {
        background: #ffffff;
        padding: 5px 0;
        border-bottom: 1px solid #f1f1f1;
    }

    .nav-link {
        color: #333333 !important;
        font-weight: 700 !important;
        font-size: 15px;
        transition: 0.3s;
    }

    .nav-link:hover {
        color: #0b5d34 !important;
    }

    .dropdown-menu {
        padding: 0 !important;
        border-radius: 8px !important;
        border: 1px solid #e0e0e0 !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        margin-top: 10px !important;
        overflow: hidden !important;
    }

    .dropdown-item {
        padding: 12px 20px !important;
        font-size: 15px !important;
        color: #333333 !important;
        border-bottom: 1px solid #f1f1f1 !important;
        transition: 0.2s ease-in-out;
    }

    .dropdown-item:hover {
        background-color: #f1f3f5 !important;
        color: #0f8743 !important;
    }

    .dropdown-item:last-child {
        border-bottom: none !important;
    }

    .btn-spmb {
        background-color: #0b5d34;
        color: white !important;
        padding: 10px 28px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        transition: 0.3s;
        display: inline-block;
    }

    /* --- PERBAIKAN TOTAL: ANTI-PECAH & SUPER TAJAM --- */
    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        display: flex;
        align-items: center;
        background-color: #818181;
    }

    .video-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: translate(-50%, -50%);
        z-index: 1;
        /* Mematikan semua filter yang bikin buram/pecah */
        filter: none !important;
        /* Hardware acceleration untuk menjaga kualitas HD tetap asli */
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    /* Overlay Gradasi Super Halus: Hanya untuk kontras teks di kiri */
    .hero-section::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Sisi kanan video akan 100% TERANG & TAJAM tanpa lapisan apapun */
        background: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.1) 40%, transparent 100%);
        z-index: 2;
        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        color: white;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.8));
    }

    /* --- END PERBAIKAN --- */

    .hero-content h1 {
        font-weight: 900;
        font-size: 45px;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .hero-content p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 30px;
        max-width: 800px;
    }

    .welcome-card {
        background: white;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-top: -80px;
        position: relative;
        z-index: 10;
    }

    .headmaster-img {
        width: 140px !important;
        height: 140px !important;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    .stats-title {
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        text-align: center;
    }

    .stat-box {
        text-align: center;
    }

    .stat-number {
        font-size: 32px;
        font-weight: 900;
        color: #333;
        display: block;
    }

    .stat-label {
        font-size: 12px;
        font-weight: 700;
        color: #777;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .agenda-section {
        padding: 50px 0;
        background: #fff;
    }

    .agenda-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .agenda-card {
        background: #f4f9ff;
        border-radius: 6px;
        padding: 18px;
        height: 100%;
        border-bottom: 3px solid #0b5d34;
        transition: 0.3s;
        display: flex;
        flex-direction: column;
        min-height: 180px;
    }

    /* Membuat Grid 5 Kolom yang Rapi */
    @media (min-width: 992px) {
        .col-custom-5 {
            flex: 0 0 20%;
            max-width: 20%;
            padding: 0 10px;
        }
    }

    /* Tombol Selengkapnya ala Professional */
    .btn-selengkapnya-green {
        background-color: #0b5d34;
        color: #ffffff !important;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s ease;
        display: inline-block;
        border: none;
    }

    .btn-selengkapnya-green:hover {
        background-color: #084a29;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(11, 93, 52, 0.2);
        text-decoration: none;
    }

    /* Kartu Staff */
    .staff-card {
        text-align: center;
        transition: transform 0.3s ease;
    }

    .staff-img-wrapper {
        width: 100%;
        aspect-ratio: 3 / 4;
        /* Menjaga rasio foto tetap konsisten */
        overflow: hidden;
        border-radius: 20px;
        /* Sudut tumpul seperti di gambar */
        margin-bottom: 15px;
        background-color: #f0f0f0;
        /* Warna cadangan jika gambar gagal load */
    }

    .staff-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Agar foto tidak gepeng */
        display: block;
    }

    .staff-info h5 {
        font-size: 17px;
        font-weight: 800;
        color: #333;
        margin-bottom: 4px;
    }

    .staff-info p {
        font-size: 13px;
        color: #888;
        line-height: 1.4;
        font-weight: 500;
    }

    .agenda-icon {
        font-size: 28px;
        color: #0b5d34;
        margin-bottom: 12px;
        display: block;
    }

    .agenda-card h5 {
        font-weight: 700;
        font-size: 15px;
        color: #333;
        margin-bottom: 20px;
        line-height: 1.5;
        min-height: 50px;
        flex-grow: 1;
    }

    .agenda-date {
        color: #555;
        font-size: 13px;
        font-weight: 600;
        padding-top: 12px;
        border-top: 1px solid #e0e0e0;
        display: block;
    }

    footer {
        background: #333;
        color: white;
        text-align: center;
        padding: 20px;
        margin-top: 50px;
    }

    a {
        text-decoration: none !important;
    }

    /* --- CSS TESTIMONI (FINAL FIX) --- */
    .testimoni-section {
        padding: 80px 0;
        background-color: #ffffff;
    }

    .testi-main-title {
        font-weight: 800;
        color: #333;
        font-size: 32px;
    }

    /* Kunci agar semua item ditarik sejajar oleh Owl Carousel */
    .testi-carousel .owl-stage {
        display: flex !important;
        align-items: stretch !important;
    }

    .testi-carousel .owl-item {
        display: flex !important;
        height: auto !important;
        /* Membiarkan tinggi mengikuti stage */
    }

    .testi-carousel .item {
        display: flex;
        width: 100%;
    }

    .testi-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: 1px solid #f1f1f1;

        /* Paksa kartu mengisi 100% tinggi dari .item */
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

        transition: all 0.3s ease;
        margin: 10px 0 30px 0;
    }

    .testi-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .testi-content {
        /* Ini yang akan menarik kotak Ganis jadi panjang */
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .quote-icon {
        color: #add8e6;
        font-size: 26px;
        margin-bottom: 10px;
        text-align: right;
        opacity: 0.6;
    }

    .testi-text {
        /* Dorong footer kartu ke posisi paling bawah */
        flex-grow: 1;
        font-size: 14px;
        color: #666;
        line-height: 1.7;
        font-style: italic;
        margin-bottom: 20px;
    }

    .testi-user {
        display: flex;
        align-items: center;
        padding-top: 15px;
        border-top: 1px solid #f9f9f9;
    }

    .testi-user img {
        width: 48px !important;
        height: 48px !important;
        border-radius: 50% !important;
        object-fit: cover;
        margin-right: 12px;
        flex-shrink: 0;
    }

    .user-info h5 {
        font-size: 14px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .rating-stars {
        color: #ffc107;
        font-size: 10px;
    }

    .time-ago {
        font-size: 10px;
        color: #aaa;
    }

    .devsaa-link {
        color: #777;
        text-decoration: none;
        font-weight: bold;
        border-bottom: 1px solid rgba(119, 119, 119, 0.4);
        padding-bottom: 1px;
        transition: all 0.3s ease;
        /* Biar transisinya halus, gak kaget */
        display: inline-block;
    }

    .devsaa-link:hover {
        font-size: 16px;
        /* Ukuran saat kursor menempel, silakan ubah angkanya kalau kurang besar */
        color: #fff;
        /* Opsional: warna jadi putih pas di-hover biar jelas */
    }

    .sosmed-icons {
        display: flex;
        gap: 12px;
        justify-content: center;
        /* Ini yang akan menarik ikon ke tengah */
        align-items: center;
        margin-top: 10px;
        /* Jarak antara tulisan 'Sosial Media' dan ikon */
    }


    .sosmed-icons a:hover {
        transform: scale(1.2);
        /* Membesar 20% saat di-hover */
        opacity: 0.8;
    }

    .sosmed-title {
        color: white;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
        /* Pastikan judulnya juga di tengah */
    }

    /* Container Ikon (Lingkaran) */
    .user-avatar-circle {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
        border: 2px solid #fff;
        /* Memberi kesan border putih tipis */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    /* Pengaturan Ikon di dalam Lingkaran */
    .user-avatar-circle i {
        font-size: 28px;
        display: block;
    }

    /* WARNA UNTUK PEREMPUAN (Pink Lembut) */
    .user-avatar-circle.female {
        background-color: #ffeef2 !important;
        /* Background pink muda */
    }

    .user-avatar-circle.female i {
        color: #f06292 !important;
        /* Ikon orang warna pink */
    }

    /* WARNA UNTUK LAKI-LAKI (Biru Lembut) */
    .user-avatar-circle.male {
        background-color: #e3f2fd !important;
        /* Background biru muda */
    }

    .user-avatar-circle.male i {
        color: #42a5f5 !important;
        /* Ikon orang warna biru */
    }

    .info-contact-wrapper {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .contact-item {
        display: flex;
        align-items: center;
    }

    .icon-box {
        width: 35px;
        height: 35px;
        background: #3c7494;
        border-radius: 50%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    .contact-item span {
        display: block;
        font-size: 10px;
        color: #888;
        font-weight: 600;
        line-height: 1;
    }

    .contact-item strong {
        font-size: 13px;
        color: #333;
    }

    .social-box {
        display: flex;
        gap: 12px;
        padding-left: 15px;
        border-left: 1px solid #ddd;
        align-items: center;
    }

    .social-box a {
        font-size: 18px;
        text-decoration: none;
    }

    .wa {
        color: #25d366;
    }

    .tk {
        color: #000;
    }

    .ig {
        color: #e4405f;
    }

    .yt {
        color: #ff0000;
    }

    .header-logo-section {
        display: flex;
        align-items: center;
    }

    .logo-img {
        width: 80px;
        height: auto;
        margin-right: 15px;
    }

    .title-main {
        margin: 0;
        font-size: 20px;
        font-weight: 900;
        color: #1e4d2b;
        line-height: 1.1;
    }

    .title-sub {
        margin: 2px 0 0 0;
        font-size: 15px;
        font-weight: 700;
        color: #a3a72f;
        letter-spacing: 2px;
    }

    /* Penguat garis footer khusus halaman sambutan */
    footer hr {
        border-top: 1px solid rgba(255, 255, 255, 0.3) !important;
        opacity: 1 !important;
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
    }


    /* Banner & Profile Overlap (Area Sambutan) */
    .content-section {
        margin-top: 40px;
        margin-bottom: 60px;
    }

    .banner-container {
        position: relative;
        width: 100%;
        height: 350px;
    }

    .banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    .profile-photo {
        position: absolute;
        bottom: -60px;
        left: 50px;
    }

    .profile-photo img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 6px solid #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Penguat garis footer khusus halaman sambutan */
    footer hr {
        border-top: 1px solid rgba(255, 255, 255, 0.3) !important;
        opacity: 1 !important;
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
    }

    /* Ganti .text-content jadi .text-body ya, maaf tadi salah ketik */
    .text-body {
        margin-top: 90px !important;
        /* Naikin angkanya biar jaraknya makin plong */
        padding: 0 20px;
    }

    .text-body h2 {
        font-weight: 700;
        margin-bottom: 15px;
    }

    /* Karena di HTML kamu pakai <h5> buat nama, kita atur di sini */
    .text-body h5 {
        margin-bottom: 40px;
        color: #000000;
        font-weight: 700;
    }

    /* Styling Garis Hijau di bawah nama */
    .divider-hijau {
        width: 100%;
        /* Biar panjangnya penuh sesuai lebar konten */
        height: 1px;
        /* Tipis saja biar elegan */
        background-color: #eee;
        /* Pakai abu-abu muda dulu biar persis gambar asli */
        margin-top: 15px;
        /* Jarak dari nama ke garis */
        margin-bottom: 20px;
        /* Jarak dari garis ke teks salam */
        border-bottom: 1px dashed #ccc;
        /* Kalau mau model garis putus-putus halus */
    }

    .agenda-header {
        background-color: #0b5d34;
        color: white;
    }

    .calendar-icon {
        background: #0b5d34;
        color: white;
        padding: 10px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-agenda {
        background-color: #eef7ff;
        border-radius: 10px;
        transition: transform 0.2s;
    }

    .card-agenda:hover {
        transform: translateY(-5px);
    }

    .sidebar-title {
        border-bottom: 2px solid #0b5d34;
        display: inline-block;
        padding-bottom: 5px;
    }

    /* Menghapus warna hijau yang mengganggu di bagian Agenda */
    .agenda-section {
        background-color: #ffffff !important;
        /* Paksa latar belakang putih */
        position: relative;
        z-index: 1;
        margin-top: 0 !important;
    }

    .agenda-header {
        background-color: transparent !important;
        /* Pastikan tidak ada warna di header */
    }

    /* CSS Khusus Halaman Agenda */
    .agenda-banner-page {
        background-color: #0b5d34 !important;
        /* Warna hijau identitas sekolah */
        color: white !important;
        padding-top: 60px;
        padding-bottom: 60px;
        margin-top: 0;
        position: relative;
        width: 100%;
    }

    /* Memastikan konten utama tidak tertutup navbar sticky */
    main {
        padding-top: 0;
        /* Sesuaikan jika navbar kamu menutupi konten */
    }

    /* Reset jika ada padding/margin bawaan yang merusak */
    .agenda-banner-page h1 {
        margin: 0;
        font-size: 2.5rem;
    }

    /* Memperbaiki jarak section kartu di bawahnya */
    .my-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    /* Header Banner Hijau */
    .news-header {
        background-color: #0b5d34;
        color: white;
    }

    /* Kartu Berita */
    .card-news {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        background: #fff;
    }

    .card-news:hover {
        transform: translateY(-10px);
        /* Efek melayang saat kursor menempel */
    }

    .card-news img {
        height: 200px;
        object-fit: cover;
        /* Agar gambar tidak gepeng */
    }

    /* Teks dan Link */
    .news-title {
        font-size: 16px;
        font-weight: 700;
        line-height: 1.5;
        color: #333;
        text-decoration: none;
    }

    .news-title:hover {
        color: #0b5d34;
        /* Berubah warna saat hover */
    }

    .news-date {
        font-size: 13px;
        color: #888;
    }

    /* Penomoran Halaman (Pagination) */
    .pagination .page-link {
        color: #0b5d34;
        border-radius: 5px;
        margin: 0 3px;
        border: 1px solid #ddd;
    }

    .pagination .page-item.active .page-link {
        background-color: #0b5d34;
        border-color: #0b5d34;
        color: #fff;
    }

    /* Sidebar Styling */
    .sidebar-box {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
    }

    .sidebar-title {
        font-weight: 800;
        border-bottom: 2px solid #0b5d34;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 20px;
    }

    .guru-header {
        background-color: #0b5d34;
        color: white;
    }

    /* Kartu Guru */
    .card-guru {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        background: transparent;
        text-align: center;
        margin-bottom: 30px;
    }

    .img-wrapper-guru {
        width: 100%;
        aspect-ratio: 1 / 1;
        /* Membuat kotak sempurna */
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .img-wrapper-guru img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Agar foto tidak gepeng */
        transition: transform 0.3s;
    }

    .card-guru:hover .img-wrapper-guru img {
        transform: scale(1.1);
        /* Efek zoom saat kursor menempel */
    }

    .guru-name {
        font-weight: 700;
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .guru-subject {
        font-size: 13px;
        color: #0b5d34;
        font-weight: 600;
    }

    /* Tombol Filter */
    .btn-filter {
        background-color: #0b5d34;
        color: white;
        border-radius: 20px;
        padding: 5px 20px;
        font-size: 14px;
        border: none;
    }

    .btn-filter {
        background-color: #0b5d34 !important;
        color: white !important;
        border-radius: 25px !important;
        padding: 8px 25px !important;
        font-weight: 600;
        border: none;
    }

    .dropdown-item {
        font-size: 14px;
        color: #555;
        border-radius: 5px;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #0b5d34;
    }

    /* Menghilangkan tanda panah bawaan bootstrap jika ingin persis gambar */
    .dropdown-toggle::after {
        margin-left: 10px;
    }

    .keahlian-header {
        background-color: #0b5d34;
        color: white;
    }

    /* Kartu Program Keahlian */
    .card-program {
        display: flex;
        /* Membuat teks dan gambar sejajar ke samping */
        border: none;
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 30px;
        height: 250px;
        /* Tinggi kartu yang seragam */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card-program:hover {
        transform: translateY(-5px);
    }

    /* Sisi Kiri (Teks) */
    .program-info {
        background-color: #0b5d34;
        color: white;
        width: 50%;
        /* Membagi kartu jadi dua bagian sama besar */
        display: flex;
        align-items: center;
        padding: 30px;
    }

    .program-info h5 {
        font-weight: 800;
        font-size: 20px;
        line-height: 1.4;
        margin: 0;
    }

    /* Sisi Kanan (Gambar) */
    .program-img {
        width: 50%;
        overflow: hidden;
    }

    .program-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Agar gambar tidak gepeng */
    }

    /* Responsif untuk layar HP */
    @media (max-width: 768px) {
        .card-program {
            height: auto;
            flex-direction: column;
            /* Teks di atas, gambar di bawah saat di HP */
        }

        .program-info,
        .program-img {
            width: 100%;
        }

        .program-info {
            padding: 20px;
        }
    }

    .kontak-banner {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .kontak-title {
        font-weight: 800;
        color: #333;
        margin-top: 30px;
    }

    .info-box-kontak {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 30px;
    }

    .kontak-item-list {
        display: flex;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #dee2e6;
    }

    .kontak-item-list:last-child {
        border-bottom: none;
    }

    .kontak-icon {
        width: 40px;
        color: #333;
        font-size: 18px;
        text-align: center;
        margin-right: 15px;
    }

    .kontak-text {
        font-size: 15px;
        color: #444;
        margin: 0;
    }

    .map-container {
        width: 100%;
        height: 450px;
        border-radius: 12px;
        overflow: hidden;
        margin-top: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .map-container {
        width: 100%;
        height: 450px;
        border-radius: 15px;
        /* Memberikan efek lengkungan di sudut peta */
        overflow: hidden;
        margin-top: 20px;
        border: 1px solid #dee2e6;
    }

    .social-box a {
        transition: 0.3s;
        margin: 0 5px;
        text-decoration: none;
    }

    .wa:hover {
        color: #25d366;
    }

    /* Warna Hijau WA */
    .tk:hover {
        color: #000000;
    }

    /* Warna Hitam TikTok */
    .ig:hover {
        color: #e4405f;
    }

    /* Warna Instagram */
    .yt:hover {
        color: #ff0000;
    }

    /* Warna YouTube */

    .detail-header {
        background-color: #0b5d34;
        color: white;
        padding: 20px 0;
        margin-bottom: 40px;
    }

    .detail-header h2 {
        font-weight: 700;
        margin: 0;
    }

    .content-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        margin-bottom: 30px;
        text-align: justify;
    }

    .main-photo {
        width: 100%;
        border-radius: 15px;
        /* Sudut melengkung sesuai gambar */
        margin-bottom: 15px;
        object-fit: cover;
    }

    .source-text {
        font-size: 13px;
        color: #666;
        margin-bottom: 40px;
    }

    /* Thumbnail Galeri */
    .thumb-gallery img {
        width: 100%;
        aspect-ratio: 1/1;
        object-fit: cover;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    .thumb-gallery img:hover {
        opacity: 0.8;
        transform: scale(1.05);
    }

    /* Galeri Video */
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* Ratio 16:9 */
        height: 0;
        overflow: hidden;
        border-radius: 10px;
        background: #000;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .video-title {
        font-weight: 700;
        font-size: 18px;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    .galeriSwiper .swiper-slide img {
        width: 100%;
        height: 150px;
        /* Atur tinggi agar seragam */
        object-fit: cover;
        border-radius: 10px;
        transition: 0.3s;
    }

    .galeriSwiper .swiper-slide img:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .swiper-pagination-bullet-active {
        background: #0b5d34 !important;
        /* Warna hijau khas Mudaba */
    }

    .galeri-header {
        background-color: #0b5d34;
        color: white;
    }

    .galeri-item {
        margin-bottom: 30px;
        text-align: center;
    }

    .galeri-img-wrapper {
        position: relative;
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .galeri-img-wrapper:hover {
        transform: scale(1.03);
        /* Efek sedikit membesar saat hover */
    }

    .galeri-img-wrapper img {
        width: 100%;
        height: 220px;
        /* Tinggi seragam untuk semua foto */
        object-fit: cover;
    }

    /* Ikon Galeri di sudut kanan bawah foto */
    .galeri-icon-badge {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 5px 8px;
        border-radius: 5px;
        font-size: 14px;
    }

    .galeri-title {
        margin-top: 15px;
        font-weight: 700;
        color: #333;
        font-size: 16px;
    }

    .profil-title {
        font-weight: 800;
        color: #333;
        margin-bottom: 25px;
    }

    .main-content img {
        width: 100%;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .main-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
    }

    /* Sidebar Styling */
    .sidebar-card {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 30px;
        border: 1px solid #eee;
    }

    .sidebar-title {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 15px;
        border-bottom: 2px solid #0b5d34;
        display: inline-block;
        padding-bottom: 5px;
    }

    .list-sidebar {
        list-style: none;
        padding: 0;
    }

    .list-sidebar li {
        padding: 10px 0;
        border-bottom: 1px dashed #ddd;
    }

    .list-sidebar li a {
        text-decoration: none;
        color: #0b5d34;
        font-size: 14px;
        transition: 0.3s;
    }

    .list-sidebar li a:hover {
        padding-left: 5px;
        font-weight: bold;
    }

    .article-date {
        font-size: 11px;
        color: #888;
        display: block;
    }

    .identitas-title {
        font-weight: 800;
        font-size: 28px;
        color: #333;
        margin-bottom: 30px;
    }

    .table-identitas {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 40px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .table-identitas td {
        padding: 15px 20px;
        border: 1px solid #f0f0f0;
        font-size: 14px;
    }

    /* Kolom Label (Kiri) */
    .table-identitas td:first-child {
        width: 35%;
        font-weight: 700;
        background-color: #fcfcfc;
        color: #444;
    }

    /* Kolom Isi (Kanan) */
    .table-identitas td:last-child {
        color: #666;
    }

    .section-subtitle {
        font-weight: 700;
        font-size: 18px;
        text-transform: uppercase;
        margin-bottom: 20px;
        color: #333;
    }

    .identitas-container {
        padding: 40px 0;
        background-color: #fff;
    }

    .identitas-title {
        font-weight: 700;
        font-size: 32px;
        color: #2d3436;
        margin-bottom: 30px;
    }

    /* Styling Tabel Identitas */
    .table-identitas {
        width: 100%;
        margin-bottom: 30px;
        border: 1px solid #edf2f7;
    }

    .table-identitas tr:nth-child(even) {
        background-color: #f8fafc;
        /* Baris abu-abu selang-seling */
    }

    .table-identitas td {
        padding: 12px 20px;
        font-size: 14px;
        color: #4a5568;
        border-bottom: 1px solid #edf2f7;
    }

    /* Kolom Label (Kiri) */
    .table-identitas td:first-child {
        width: 35%;
        font-weight: 700;
        color: #2d3748;
    }

    /* Judul Bagian Alamat */
    .alamat-title {
        font-weight: 700;
        font-size: 16px;
        text-transform: uppercase;
        color: #2d3748;
        margin: 40px 0 20px 0;
    }

    .visi-misi-container {
        padding: 40px 0;
    }

    .page-title {
        font-weight: 800;
        font-size: 32px;
        color: #2d3436;
        margin-bottom: 40px;
    }

    .visi-section {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-label {
        font-size: 16px;
        color: #636e72;
        margin-bottom: 20px;
        display: block;
    }

    .visi-text {
        font-size: 18px;
        font-weight: 700;
        font-style: italic;
        color: #2d3436;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .misi-section {
        margin-top: 40px;
    }

    .misi-intro {
        font-size: 15px;
        color: #4a5568;
        margin-bottom: 25px;
        line-height: 1.7;
    }

    .misi-list {
        padding-left: 20px;
        list-style-type: decimal;
    }

    .misi-list li {
        font-size: 15px;
        color: #4a5568;
        margin-bottom: 15px;
        line-height: 1.7;
        padding-left: 10px;
    }

    .sejarah-container {
        padding: 40px 0;
    }

    .sejarah-title {
        font-weight: 800;
        font-size: 32px;
        color: #2d3436;
        margin-bottom: 30px;
    }

    .sejarah-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
        margin-bottom: 25px;
    }

    .kepemimpinan-title {
        font-size: 16px;
        color: #4a5568;
        margin: 40px 0 20px 0;
        line-height: 1.6;
    }

    .kepemimpinan-list {
        list-style-type: decimal;
        padding-left: 20px;
        margin-bottom: 40px;
    }

    .kepemimpinan-list li {
        font-size: 15px;
        color: #444;
        margin-bottom: 10px;
        padding-left: 10px;
    }

    .wakasek-header {
        background-color: #0b5d34;
        color: white;
        padding: 40px 0;
        /* Memberi ruang atas dan bawah */
        margin-bottom: 50px;
    }

    .wakasek-header h2 {
        font-weight: 700;
        margin: 0;
        /* Opsional: tambah padding-left jika ingin jarak khusus */
        padding-left: 15px;
    }

    .wakasek-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
        margin-bottom: 50px;
    }

    /* Card Profil Staf */
    .staf-card {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        border: 1px solid #f0f0f0;
    }

    .staf-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 20px;
    }

    .staf-info h5 {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 5px;
        color: #333;
    }

    .staf-info p {
        font-size: 13px;
        color: #777;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .wakasek-header {
        background-color: #0b5d34;
        color: white;
        padding: 40px 0;
        margin-bottom: 50px;
    }

    .wakasek-header h2 {
        font-weight: 700;
        margin: 0;
    }

    .staf-card {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        display: flex !important;
        align-items: center !important;
        margin-bottom: 20px;
        border: 1px solid #f0f0f0;
    }

    .staf-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .staf-info h5 {
        font-weight: 700;
        margin: 0;
        text-align: left;
    }

    /* --- INI CSS TAMBAHAN UNTUK MITRA HUMAS --- */
    .mitra-section {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mitra-title {
        font-weight: 700;
        font-size: 24px;
        color: #333;
        margin-bottom: 30px;
    }

    .mitra-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: center;
    }

    .mitra-item img {
        height: 40px;
        width: auto;
        transition: 0.3s;
    }

    /* Desain Banner Hijau di Bagian Atas */
    .wakasek-header {
        background-color: #0b5d34;
        /* Hijau Khas Mudaba */
        color: white;
        padding: 40px 0;
        margin-bottom: 50px;
    }

    .wakasek-header h2 {
        font-weight: 700;
        margin: 0;
        /* Judul otomatis rata kiri mengikuti container */
    }

    /* Pengaturan Teks Deskripsi */
    .wakasek-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
        margin-bottom: 50px;
    }

    /* Desain Kartu Profil Staf (Ibu Ika) */
    .staf-card {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #f0f0f0;
        margin-bottom: 20px;

        /* KUNCI: Membuat foto dan nama berjejer ke samping */
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        text-align: left !important;
    }

    .staf-img {
        width: 80px !important;
        height: 80px !important;
        border-radius: 50% !important;
        object-fit: cover;
        margin-right: 20px !important;
        flex-shrink: 0;
        /* Agar foto tidak gepeng */
    }

    .staf-info {
        text-align: left !important;
    }

    .staf-info h5 {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 5px;
        color: #333;
    }

    .staf-info p {
        font-size: 13px;
        color: #777;
        margin: 0;
        text-transform: uppercase;
    }

    /* Desain Banner Hijau Atas */
    .wakasek-header {
        background-color: #0b5d34;
        /* Hijau Mudaba */
        color: white;
        padding: 40px 0;
        margin-bottom: 50px;
    }

    .wakasek-header h2 {
        font-weight: 700;
        margin: 0;
    }

    /* Teks Deskripsi */
    .wakasek-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
        margin-bottom: 50px;
    }

    /* Kartu Profil Staf */
    .staf-card {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #f0f0f0;
        margin-bottom: 20px;

        /* Membuat foto & nama berjejer ke samping */
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
    }

    .staf-img {
        width: 80px !important;
        height: 80px !important;
        border-radius: 50% !important;
        object-fit: cover;
        margin-right: 20px !important;
        flex-shrink: 0;
    }

    .staf-info {
        text-align: left !important;
    }

    .staf-info h5 {
        font-weight: 700;
        font-size: 16px;
        margin: 0;
        color: #333;
    }

    .staf-info p {
        font-size: 13px;
        color: #777;
        margin: 0;
        text-transform: uppercase;
    }

    /* Banner Hijau Atas */
    .bkk-header {
        background-color: #0b5d34;
        /* Hijau Mudaba */
        color: white;
        padding: 40px 0;
        margin-bottom: 50px;
    }

    .bkk-header h2 {
        font-weight: 700;
        margin: 0;
    }

    /* Teks Deskripsi */
    .bkk-text {
        font-size: 15px;
        line-height: 1.8;
        color: #444;
        text-align: justify;
        margin-bottom: 50px;
    }

    .bkk-text strong {
        font-weight: 700;
        color: #000;
    }

    /* Kartu Profil Staf BKK */
    .staf-card {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #f0f0f0;
        margin-bottom: 20px;
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
    }

    .staf-img {
        width: 100px !important;
        height: 100px !important;
        border-radius: 50% !important;
        object-fit: cover;
        margin-right: 20px !important;
        flex-shrink: 0;
    }

    .staf-info {
        text-align: left !important;
    }

    .staf-info h5 {
        font-weight: 700;
        font-size: 16px;
        margin: 0;
        color: #333;
    }

    .staf-info p {
        font-size: 12px;
        color: #777;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .tefa-title {
        font-weight: 800;
        font-size: 28px;
        color: #333;
        margin-bottom: 25px;
    }

    .tefa-img {
        width: 100%;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .tefa-img {
        width: 100%;
        height: auto;
        border-radius: 15px;
        margin-bottom: 20px;
    }

    .tefa-text p {
        text-align: justify;
        line-height: 1.6;
    }

    .breadcrumb-container {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 15px;
    }

    .breadcrumb-link {
        color: #ffb400;
        /* Warna oranye */
        text-decoration: none;
        font-weight: 500;
    }

    .breadcrumb-link:hover {
        text-decoration: underline;
        color: #e6a300;
    }

    .breadcrumb-separator {
        color: #bdc3c7;
        /* Warna abu-abu garis miring */
    }

    .breadcrumb-active {
        color: #444;
        /* Warna teks halaman saat ini */
        font-weight: 400;
    }

    .breadcrumb-link {
        color: #0b5d34;
        /* Ganti ke Hijau Tua supaya senada */
        text-decoration: none;
        font-weight: 600;
        cursor: pointer;
    }

    .breadcrumb-link:hover {
        color: #14a05a;
        /* Warna hijau agak terang pas disentuh kursor */
        text-decoration: underline;
    }

    .breadcrumb-separator {
        color: #666;
        /* Abu-abu netral untuk pemisah */
        margin: 0 5px;
    }

    .breadcrumb-active {
        color: #333;
        /* Hitam/Abu tua untuk halaman aktif */
        font-weight: 500;
    }

    body {
        font-family: 'Inter', 'Segoe UI', sans-serif;
        background-color: #ffffff;
    }

    /* Judul Utama */
    h2 {
        font-weight: 700;
        color: #2c3e50;
    }

    /* Styling Kotak/Seksi (Warna Biru Muda sesuai Gambar) */
    .section-box {
        background-color: #eef7ff;
        /* Warna biru muda khas form tersebut */
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 25px;
        border: 1px solid #ddecff;
    }

    /* Label Input */
    .col-form-label {
        font-weight: 600;
        color: #495057;
        font-size: 0.95rem;
    }

    /* Input Field */
    .form-control,
    .form-select {
        border-radius: 4px;
        border: 1px solid #ced4da;
        padding: 10px;
    }

    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1);
    }

    /* Styling Judul Sub-Seksi (DATA PRIBADI, DATA AYAH, dll) */
    .sub-title {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-transform: uppercase;
        border-left: 5px solid #1a5e20;
        /* Garis hijau di samping */
        padding-left: 10px;
    }

    /* Box Captcha */
    .captcha-display {
        background-color: #ffffff;
        padding: 10px 20px;
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        letter-spacing: 8px;
        border: 2px dashed #ccc;
        display: inline-block;
        font-size: 1.5rem;
        color: #333;
    }

    /* Tombol Daftar */
    .btn-daftar {
        background-color: #1a5e20;
        /* Hijau Muhammadiyah */
        border: none;
        padding: 12px 35px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-daftar:hover {
        background-color: #144517;
        transform: translateY(-2px);
    }

    .registration-container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 0 15px;
    }

    .form-section {
        background-color: #f0f7ff;
        /* Warna biru muda sesuai gambar */
        padding: 30px;
        border-radius: 8px;
    }

    .form-group-row {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        /* Jarak antar baris */
    }

    .form-group-row label {
        flex: 1;
        /* Memberi ruang label di kiri */
        font-size: 15px;
        color: #333;
        font-weight: 400;
        /* Label di gambar tidak terlalu tebal */
    }

    .form-group-row label span {
        color: red;
        margin-left: 3px;
    }

    .input-wrapper {
        flex: 2;
        /* Memberi ruang input lebih luas di kanan */
    }

    .input-wrapper input,
    .input-wrapper select {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        background-color: #fff;
        color: #666;
        font-size: 14px;
        outline: none;
    }

    /* Efek saat diklik agar mirip browser modern */
    .input-wrapper input:focus,
    .input-wrapper select:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }

    .spmb-container {
        padding: 40px 15px;
    }

    .spmb-title {
        margin-bottom: 30px;
        font-weight: bold;
        line-height: 1.4;
    }

    .jalur-item {
        margin-bottom: 40px;
    }

    /* Memberi jarak antar blok jalur */
    .jalur-name {
        margin-bottom: 5px;
        font-weight: bold;
        color: #000;
    }

    /* Mengubah span menjadi block agar tidak tabrakan */
    .jalur-periode {
        display: block;
        margin-bottom: 10px;
        font-style: italic;
        color: #555;
    }

    .jalur-deskripsi {
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .btn-daftar {
        display: inline-block;
        padding: 8px 20px;
        background-color: #006633;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }

    .text-bold {
        font-weight: bold;
    }

    .main-content img {
        width: 100%;
        height: auto;
        border-radius: 15px;
        margin-bottom: 25px;
    }

    .main-text p {
        text-align: justify;
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .profil-title {
        margin-bottom: 1.5rem;
        font-weight: bold;
    }

    /* Membuat container sedikit lebih rapi untuk teks yang lebar */
    .visi-misi-container {
        max-width: 1100px;
        /* Opsional: Agar teks tidak terlalu melar ke ujung layar */
        margin: auto;
    }

    .page-title {
        font-weight: bold;
        margin-bottom: 2rem;
        color: #333;
    }

    .section-label {
        display: block;
        font-weight: 600;
        color: #888;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    .visi-text {
        font-size: 1.5rem;
        font-style: italic;
        font-weight: 700;
        color: #2c3e50;
        line-height: 1.4;
        margin-bottom: 40px;
    }

    .misi-list li {
        margin-bottom: 12px;
        line-height: 1.6;
        text-align: justify;
    }

    .misi-intro {
        margin-bottom: 20px;
        color: #555;
    }

    .sejarah-container {
        max-width: 1100px;
        /* Menjaga agar teks tidak terlalu melar ke samping */
        margin: auto;
    }

    .sejarah-title {
        font-weight: bold;
        margin-bottom: 25px;
        color: #333;
    }

    .sejarah-text p {
        text-align: justify;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .kepemimpinan-title {
        font-weight: 600;
        margin-top: 30px;
        margin-bottom: 15px;
        line-height: 1.6;
    }


    .kepemimpinan-list {
        background-color: #ffffff;
        padding: 30px 40px;
        border-radius: 10px;
    }

    .kepemimpinan-list li {
        margin-bottom: 10px;
        font-weight: 500;
    }

    .table-identitas {
        width: 100%;
        margin-bottom: 2rem;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .table-identitas td {
        padding: 15px 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .table-identitas td:first-child {
        width: 30%;
        font-weight: 600;
        background-color: #f8f9fa;
        color: #555;
    }

    .table-identitas tr:last-child td {
        border-bottom: none;
    }

    .identitas-title,
    .alamat-title {
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .alamat-title {
        margin-top: 2rem;
        border-left: 5px solid #006b3d;
        padding-left: 15px;
    }

    .identitas-section {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 40px;
        margin-bottom: 40px;
    }

    .identitas-title {
        font-weight: 800;
        color: #2c3e50;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .identitas-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 60px;
        height: 4px;
        background: #006b3d;
        /* Warna Hijau Mudaba */
        border-radius: 2px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .info-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 10px;
        background: #f8f9fa;
        transition: all 0.3s ease;
    }

    .info-item:hover {
        background: #e9ecef;
        transform: translateY(-3px);
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: #006b3d;
        color: white;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        margin-right: 15px;
    }

    .info-content label {
        display: block;
        font-size: 0.8rem;
        color: #6c757d;
        margin-bottom: 2px;
        font-weight: 600;
    }

    .info-content span {
        display: block;
        font-size: 1rem;
        color: #2c3e50;
        font-weight: 700;
    }

    .alamat-header {
        display: flex;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 25px;
    }

    .alamat-header i {
        font-size: 1.5rem;
        color: #006b3d;
        margin-right: 15px;
    }

    .alamat-header h5 {
        margin: 0;
        font-weight: 700;
        color: #2c3e50;
    }

    .page-title {
        font-weight: 800;
        color: #2c3e50;
        text-align: center;
        margin-bottom: 50px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Styling Visi - Warna lebih Elegan (Soft Dark Blue/Teal) */
    .visi-card {
        background: linear-gradient(135deg, #68c6c9 0%, #20685d 100%);
        color: white;
        padding: 60px 50px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 15px 35px rgba(49, 51, 54, 0.15);
        margin-bottom: 60px;
        position: relative;
        overflow: hidden;
    }

    .visi-card::before {
        content: '\f10d';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        top: 20px;
        left: 30px;
        font-size: 5rem;
        opacity: 0.05;
    }

    .section-label {
        display: inline-block;
        background: rgba(171, 220, 221, 0.479);
        backdrop-filter: blur(5px);
        padding: 6px 25px;
        border-radius: 50px;
        font-size: 0.85rem;
        margin-bottom: 25px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        color: white;
    }

    .visi-text {
        font-size: 1.85rem;
        font-weight: 700;
        line-height: 1.6;
        font-style: italic;
        max-width: 900px;
        margin: 0 auto;
    }

    .misi-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .misi-header h3 {
        font-weight: 800;
        color: #2c3e50;
        margin-top: 10px;
    }

    .misi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 25px;
    }

    .misi-item {
        background: #ffffff;
        border: 1px solid #edf2f7;
        padding: 30px;
        border-radius: 18px;
        display: flex;
        align-items: flex-start;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
    }

    .misi-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.06);
        border-color: #2da599;
    }

    .misi-number {
        background: #f1f5f9;
        color: #000000;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        flex-shrink: 0;
        margin-right: 20px;
        font-size: 1rem;
        transition: 0.3s;
    }

    .misi-item:hover .misi-number {
        background: #359a7a;
        color: white;
    }

    .misi-content {
        font-size: 0.95rem;
        color: #4a5568;
        line-height: 1.7;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .visi-text {
            font-size: 1.3rem;
        }

        .visi-card {
            padding: 40px 25px;
        }

        .misi-grid {
            grid-template-columns: 1fr;
        }
    }

    .card-program {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        border: none;
        /* Menghilangkan background putih agar tidak belang */
        background-color: #ffffff;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        /* Memastikan kartu punya tinggi yang sama */
        height: 100%;
    }

    .img-container {
        position: relative;
        width: 100%;
        /* Mengunci rasio gambar agar semua sama panjang & tingginya (16:9) */
        aspect-ratio: 16 / 9;
        overflow: hidden;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        /* Ini kunci agar gambar tidak gepeng tapi terpotong rapi */
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card-program:hover img {
        transform: scale(1.1);
    }

    /* Efek Overlay Modern: Teks di atas gambar dengan gradasi */
    .program-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
        padding: 30px 20px 20px;
        z-index: 2;
    }

    .program-overlay h5 {
        color: #ffffff;
        font-weight: 700;
        font-size: 1.15rem;
        margin: 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    /* Badge "SMK" kecil untuk pemanis di pojok */
    .badge-smk {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(11, 93, 52, 0.9);
        color: white;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        z-index: 3;
    }

    .card-program:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(11, 93, 52, 0.2);
    }

    .footer-links li a {
        color: #ccc;
        text-decoration: none;
        transition: 0.3s;
        /* Supaya transisi warnanya halus */
    }

    .footer-links li a:hover,
    .footer-links li a:active,
    .footer-links li a:focus {
        color: #00a651 !important;
        /* Warna hijau khas SMK Mudaba */
        padding-left: 5px;
        /* Sedikit efek geser biar lebih moderen */
    }

    /* Container kartu putih utama */
    .custom-card {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-top: -50px;
        position: relative;
        z-index: 2;
    }

    /* Judul dengan aksen garis kuning di kiri */
    .section-title {
        border-left: 5px solid #ffc107;
        padding-left: 15px;
        color: #0b5d34;
        font-weight: 700;
        font-size: 26px;
        margin-bottom: 25px;
    }

    /* Gaya teks deskripsi */
    .content-text {
        line-height: 1.8;
        color: #444;
        text-align: justify;
        font-size: 15px;
        margin-bottom: 30px;
    }

    /* Judul untuk Mitra Industri */
    .mitra-title {
        font-weight: 700;
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
    }

    /* Grid logo mitra */
    .mitra-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 40px;
    }

    .mitra-item img {
        height: 40px;
        /* Sesuaikan ukuran logo */
        width: auto;
        filter: grayscale(20%);
        transition: all 0.3s ease;
    }

    .mitra-item img:hover {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    /* Bagian Staf */
    .staf-section-title {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 700;
        font-size: 18px;
        color: #333;
        margin-bottom: 20px;
    }

    /* Box profil staf */
    .staf-wrapper {
        background: #f9f9f9;
        border-radius: 12px;
        padding: 15px;
        display: flex;
        align-items: center;
        border: 1px solid #eeeeee;
    }

    .staf-img-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        /* Bulat sesuai gambar pertama */
        object-fit: cover;
        margin-right: 20px;
    }

    .staf-label {
        font-size: 11px;
        color: #888;
        margin-bottom: 2px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .staf-nama {
        font-size: 16px;
        font-weight: 700;
        color: #0b5d34;
        margin-bottom: 0;
    }

    .card-agenda-home {
        transition: transform 0.3s ease;
    }

    .card-agenda-home:hover {
        transform: translateY(-5px);
    }

    .text-success {
        color: #0b5d34 !important;
    }

    .profil-text p {
        margin-bottom: 25px;
        font-size: 16px;
    }

    .sejarah-container {
        max-width: 1100px;
        margin: auto;
    }

    .sejarah-title {
        font-weight: 800;
        color: #2c3e50;
        text-align: center;
        margin-bottom: 50px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Desain Timeline */
    .timeline {
        position: relative;
        padding: 20px 0;
    }

    .timeline-item {
        position: relative;
        padding-left: 50px;
        margin-bottom: 40px;
        border-left: 3px solid #006b3d;
        /* Warna hijau Mudaba */
    }

    .timeline-dot {
        position: absolute;
        left: -11px;
        top: 0;
        width: 20px;
        height: 20px;
        background: #006b3d;
        border-radius: 50%;
        border: 4px solid #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .timeline-date {
        font-weight: 800;
        color: #006b3d;
        font-size: 1.2rem;
        margin-bottom: 10px;
        display: block;
    }

    .timeline-content {
        background: #ffffff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }

    .timeline-content:hover {
        transform: translateX(10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .timeline-content p {
        margin: 0;
        text-align: justify;
        line-height: 1.7;
        color: #4a5568;
    }

    /* Bagian Kepemimpinan */
    .kepemimpinan-section {
        background: #f8fafc;
        padding: 40px;
        border-radius: 20px;
        margin-top: 60px;
    }

    .kepemimpinan-title {
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
    }

    .kepemimpinan-title i {
        margin-right: 15px;
        color: #006b3d;
    }

    .kepemimpinan-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .leader-item {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
        border-bottom: 3px solid transparent;
        transition: 0.3s;
    }

    .leader-item:hover {
        border-color: #006b3d;
        transform: translateY(-5px);
    }

    .leader-number {
        width: 35px;
        height: 35px;
        background: #006b3d;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .leader-info span {
        display: block;
        font-size: 0.95rem;
        font-weight: 600;
        color: #2c3e50;
    }

    .section-header {
        font-size: 14px;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    .form-box {
        background-color: #eef7ff;
        border: 1px solid #ddecff;
        border-radius: 4px;
        padding: 25px;
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 14px;
    }

    /* public/css/spmb-style.css */
    .jalur-card {
        transition: all 0.3s ease-in-out;
        border-radius: 10px;
        border: 1px solid #eee !important;
    }

    .jalur-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        border-color: #198754 !important;
    }

    .divider-custom {
        border-top: 1px solid #eee;
        opacity: 1;
    }

    /* KONDISI AWAL: Kotakan Garis Hijau, Tulisan Hijau */
    .btn-spmb-custom {
        background-color: #ffffff !important;
        /* Latar putih */
        color: #198754 !important;
        /* Tulisan Hijau */
        border: 2px solid #198754 !important;
        /* Garis Hijau */
        font-weight: bold;
        transition: all 0.3s ease-in-out;
        display: block;
        text-align: center;
        text-decoration: none;
        padding: 10px 0;
    }

    /* KONDISI HOVER: Latar jadi Hijau, Tulisan jadi Putih */
    .btn-spmb-custom:hover {
        background-color: #198754 !important;
        /* Latar Hijau */
        color: #ffffff !important;
        /* Tulisan Putih */
        box-shadow: 0 4px 12px rgba(25, 135, 84, 0.3);
    }

    /* Styling Box dan Header Section */
    .form-box {
        background: #fdfdfd;
        border: 1px solid #eee;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .section-header {
        background-color: #1a5e20;
        color: white;
        padding: 10px 15px;
        font-weight: bold;
        border-radius: 5px;
        margin-bottom: 15px;
        display: inline-block;
    }

    .form-label {
        font-weight: 600;
        color: #444;
    }

    /* Captcha Styling */
    .captcha-box {
        background: #f8f9fa !important;
        border: 2px dashed #1a5e20 !important;
        color: #1a5e20;
        width: 180px;
        user-select: none;
        /* Supaya nggak bisa di-copy paste */
    }

    /* Button Hover */
    .btn-daftar {
        background-color: #1a5e20;
        border: none;
        transition: background 0.3s ease;
    }

    .btn-daftar:hover {
        background-color: #2e7d32;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }
</style>
