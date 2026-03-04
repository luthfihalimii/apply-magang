@extends('layouts.app')

@section('title', 'Publikasi - Piramidasoft')

@section('content')
  {{-- Hero Section --}}
  <section class="relative w-full h-[253px] bg-blue-600/55">
    <img
      src="{{ asset('assets/images/hero-pages.png') }}"
      alt="Hero Background"
      class="absolute inset-0 w-full h-full object-cover -z-10"
    >

    <div class="relative max-w-6xl mx-auto px-6 h-full flex flex-col items-center justify-center text-white">
      <h1 class="text-5xl md:text-[68px] font-bold text-shadow-lg mb-4">
        Publikasi
      </h1>

      <div class="flex items-center gap-2 text-lg md:text-[21px] font-semibold">
        <span>Home</span>
        <div class="w-3 h-[3px] bg-white"></div>
        <span>Publikasi</span>
      </div>
    </div>
  </section>

  @php
    // PDF di public/assets/pdf
    $items = [
      [
        'img' => 'assets/images/pub-egov.png',
        'title' => 'Product Profile',
        'subtitle' => 'E-Government Service Software',
        'desc' => 'Berikut adalah Product Profile (E-Government service software) PT Piramida Teknologi Informasi',
        'pdf' => 'assets/pdf/e-government-service-software.pdf',
        'buttons' => ['dokumen' => true, 'flipbook' => true, 'unduh' => false],
      ],
      [
        'img' => 'assets/images/pub-soft.png',
        'title' => 'Product Profile',
        'subtitle' => 'Software Solution',
        'desc' => 'Berikut adalah Product Profile (Software solution) PT Piramida Teknologi Informasi',
        'pdf' => 'assets/pdf/software-solution.pdf',
        'buttons' => ['dokumen' => true, 'flipbook' => true, 'unduh' => false],
      ],
      [
        'img' => 'assets/images/pub-company.png',
        'title' => 'Company Profile',
        'subtitle' => null,
        'desc' => 'Booklet Piramida Teknologi Indonesia. Berikut adalah dokumen company profile PT Piramida Teknologi Informasi.',
        'pdf' => 'assets/pdf/company-profile.pdf',
        'buttons' => ['dokumen' => true, 'flipbook' => false, 'unduh' => true],
      ],
      [
        'img' => 'assets/images/pub-brosur.png',
        'title' => 'Brosur Insight GOV',
        'subtitle' => null,
        'desc' => 'Silahkan unduh brosur berikut untuk mengetahui informasi mengenai insight GOV lebih detail.',
        'pdf' => 'assets/pdf/brosur.pdf',
        'buttons' => ['dokumen' => true, 'flipbook' => false, 'unduh' => true],
      ],
    ];
  @endphp

  {{-- Content --}}
  <section class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @foreach ($items as $item)
        <div class="bg-white border border-[#E6E6E6] rounded-2xl shadow-sm p-6">
          <div class="flex gap-5">
            <img
              src="{{ asset($item['img']) }}"
              alt="{{ $item['title'] }}"
              class="w-[92px] h-[122px] object-cover rounded-lg border border-[#EAEAEA]"
            >

            <div class="flex-1">
              <h3 class="text-xl font-bold text-slate-950 leading-tight">
                {{ $item['title'] }}
              </h3>

              @if (!empty($item['subtitle']))
                <p class="text-[13px] text-[#5e5b5b] font-medium -mt-1">
                  {{ $item['subtitle'] }}
                </p>
              @endif

              <p class="mt-3 text-[13px] text-[#6b6b6b] leading-relaxed">
                {{ $item['desc'] }}
              </p>

              <div class="mt-4 flex gap-3 flex-wrap">
                {{-- Dokumen = Lihat PDF --}}
                @if ($item['buttons']['dokumen'])
                  <a
                    href="{{ asset($item['pdf']) }}"
                    target="_blank"
                    rel="noopener"
                    class="px-5 py-2 rounded-lg bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition"
                  >
                    Dokumen
                  </a>
                @endif

                {{-- Flipbook --}}
                @if ($item['buttons']['flipbook'])
                  <a
                    href="{{ route('publikasi.flipbook', [
                      'file' => $item['pdf'],
                      'title' => $item['subtitle'] ?? $item['title'],
                    ]) }}"
                    class="px-5 py-2 rounded-lg bg-blue-500 text-white text-sm font-semibold hover:bg-blue-600 transition"
                  >
                    Flipbook
                  </a>
                @endif

                {{-- Unduh = Download PDF --}}
                @if ($item['buttons']['unduh'])
                  <a
                    href="{{ asset($item['pdf']) }}"
                    download
                    class="px-5 py-2 rounded-lg bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition"
                  >
                    Unduh
                  </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection