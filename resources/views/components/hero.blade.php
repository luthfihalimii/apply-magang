@php
  $title = $title ?? 'Business Intelligence';
  $subtitle = $subtitle ?? 'Visualisasi infografis untuk presentasi yang menarik & memudahkan pengguna, analisis dan top manajemen. Infografis yang ditampilkan dinamis mengikuti update data.';
@endphp

<section class="w-full">
  <div class="max-w-6xl mx-auto px-6 py-10">
    <div class="relative overflow-hidden rounded-xl shadow">

      {{-- Background image (kanan) --}}
      <img
        src="{{ asset('assets/images/hero.png') }}"
        alt="Hero"
        class="w-full h-[340px] md:h-[360px] object-cover"
      >

      {{-- Overlay gradient biru (kiri) --}}
      <div class="absolute inset-0 bg-gradient-to-r from-blue-700/95 via-blue-600/80 to-transparent"></div>

      {{-- Content kiri --}}
      <div class="absolute inset-0 flex items-center">
        <div class="w-full md:w-1/2 px-8 md:px-12 text-white">
          {{-- top line + small text --}}
          <div class="flex items-center gap-3 mb-3">
            <span class="w-14 h-[2px] bg-white/80"></span>
            <span class="text-xs tracking-wide text-white/90">Tentang kami</span>
          </div>

          <h1 class="text-3xl md:text-4xl font-semibold leading-tight">
            {{ $title }}
          </h1>

          <p class="mt-3 text-sm md:text-[13px] text-white/90 leading-relaxed max-w-md">
            {{ $subtitle }}
          </p>

          {{-- bullet list --}}
          <ul class="mt-5 space-y-3 text-sm text-white/90">
            <li class="flex items-start gap-3">
              <span class="mt-1 w-3.5 h-3.5 rounded-full border-2 border-white/90"></span>
              <span>Visualisasi infografis untuk presentasi yang menarik</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 w-3.5 h-3.5 rounded-full border-2 border-white/90"></span>
              <span>Memudahkan pengguna, analisis dan top manajemen</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 w-3.5 h-3.5 rounded-full border-2 border-white/90"></span>
              <span>Infografis yang ditampilkan dinamis mengikuti update data</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 w-3.5 h-3.5 rounded-full border-2 border-white/90"></span>
              <span>&nbsp;</span>
            </li>
          </ul>

          {{-- buttons --}}
          <div class="mt-6 flex flex-wrap gap-3">
            <a
              href="#"
              class="inline-flex items-center gap-2 bg-white text-blue-700 px-5 py-2.5 rounded-md text-sm font-medium shadow hover:bg-white/90"
            >
              Baca selengkapnya
              <span>→</span>
            </a>

            <a
              href="#"
              class="inline-flex items-center gap-2 border border-white/80 text-white px-5 py-2.5 rounded-md text-sm font-medium hover:bg-white/10"
            >
              Hubungi kami
              <span>→</span>
            </a>
          </div>
        </div>
      </div>

      {{-- Wave putih bawah (SVG) --}}
      <div class="absolute bottom-0 left-0 w-full">
        <svg viewBox="0 0 1440 120" class="w-full h-16 md:h-20" preserveAspectRatio="none">
          <path fill="#ffffff" d="M0,80 C240,140 480,20 720,60 C960,100 1200,10 1440,60 L1440,120 L0,120 Z"></path>
        </svg>
      </div>

    </div>
  </div>
</section>