@extends('layouts.app')

@section('title', 'Tentang Kami - Piramidasoft')

@section('content')

{{-- HERO --}}
<section class="relative w-full h-[253px] overflow-hidden">
  <img
    src="{{ asset('assets/images/hero-pages.png') }}"
    alt="Hero Background"
    class="absolute inset-0 w-full h-full object-cover"
  />
  <div class="absolute inset-0 bg-blue-600/50"></div>

  <div class="relative max-w-6xl mx-auto px-6 h-full flex flex-col items-center justify-center text-white">
    <h1 class="font-extrabold drop-shadow leading-none text-[56px] md:text-[72px]">
      Tentang kami
    </h1>
    <p class="mt-2 text-[14px] font-semibold text-white/95">
      Home &nbsp;–&nbsp; Tentang kami
    </p>
  </div>
</section>

{{-- CONTENT --}}
<section class="bg-white">
  <div class="max-w-6xl mx-auto px-6 pt-10 pb-0">

    {{-- garis + subtitle --}}
    <div class="flex items-center gap-5 mb-10">
      <div class="w-[55px] h-[3px] bg-blue-500"></div>
      <p class="text-[22px] font-medium text-slate-300">
        Professional Solution for Your Business
      </p>
    </div>

    {{-- 2 kolom (KUNCI PERSIS) --}}
    <div class="flex flex-col lg:flex-row items-start justify-between gap-12">

      {{-- LEFT (biar sejajar sama gambar) --}}
      <div class="w-full lg:w-[calc(100%-612px-48px)]">

        <h2 class="text-[32px] font-extrabold text-black mb-3">
          DESKRIPSI
        </h2>

        <div class="text-[13px] leading-[1.9] text-[#5e5b5b] space-y-5">
          <p>
            Piramidasoft adalah perusahaan teknologi informasi yang berfokus pada pengembangan
            solusi digital yang inovatif, efisien, dan sesuai kebutuhan bisnis modern. Kami membantu
            perusahaan dalam membangun sistem, mengembangkan aplikasi, serta mengoptimalkan proses
            bisnis melalui teknologi yang tepat guna. Dengan tim profesional yang berpengalaman,
            kami berkomitmen memberikan layanan terbaik untuk mendukung pertumbuhan dan transformasi
            digital klien.
          </p>

          <p>
            Kami memahami bahwa setiap bisnis memiliki kebutuhan dan tantangan yang berbeda dalam
            penerapan teknologi. Oleh karena itu, Piramidasoft berusaha menghadirkan solusi digital
            yang praktis, relevan, dan dapat digunakan secara efektif sesuai kebutuhan klien. Dengan
            pendekatan yang komunikatif dan berorientasi pada solusi, kami berkomitmen memberikan
            layanan yang membantu perusahaan beradaptasi dan berkembang di tengah perubahan teknologi
            yang terus berlangsung.
          </p>
        </div>

        <h2 class="text-[32px] font-extrabold text-black mt-12 mb-3">
          VISI KAMI
        </h2>

        <p class="text-[13px] leading-[1.9] text-[#5e5b5b]">
          Menjadi perusahaan teknologi informasi terpercaya yang menghadirkan solusi digital inovatif,
          berkualitas tinggi, dan berkelanjutan untuk membantu bisnis berkembang serta beradaptasi di era
          transformasi digital.
        </p>

      </div>

      {{-- RIGHT IMAGE (FIX 612 x 407) --}}
      <div class="w-full lg:w-[612px] flex justify-start lg:justify-end">
        <div class="w-full lg:w-[612px] h-[407px] rounded-[15px] overflow-hidden shadow-lg">
          <img
            src="{{ asset('assets/images/About me.png') }}"
            alt="About Us"
            class="w-full h-full object-cover"
          />
        </div>
      </div>

    </div>
  </div>

  {{-- garis biru tebal atas footer --}}
  <div class="mt-10 h-[10px] bg-blue-500"></div>
</section>

@endsection