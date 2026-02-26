@php
  // Data slide: kamu bisa tambah/ubah isi di sini
  $slides = [
    [
      'tag' => 'Tentang kami',
      'title' => 'Penyedia Solusi IT',
      'subtitle' => 'Berdiri sejak 2012 dan aktif sejak 2013, perusahaan ini telah melayani 200+ pelanggan di Indonesia dalam bidang Teknologi dan Sistem Informasi, menyediakan solusi aplikasi dan konsultasi sistem, serta didukung 20+ tim ahli berpengalaman.',
      'bullets' => [
        'Solusi aplikasi & konsultasi sistem',
        'Melayani 200+ pelanggan di Indonesia',
        'Didukung 20+ tim ahli berpengalaman',
      ],
      'image' => asset('assets/images/hero.png'),
      'primary' => ['text' => 'Baca selengkapnya', 'href' => '#'],
      'secondary' => ['text' => 'Hubungi kami', 'href' => '#'],
    ],
    [
      'tag' => 'Tentang kami',
      'title' => 'Data Warehouse',
      'subtitle' => 'Aplikasi ini berfungsi untuk menyimpan Daftar Kamus Data dan menjadi gudang data. User dapat melakukan input data, verifikasi, update data, view dan monitoring. Dapat terintegrasi dengan aplikasi transaksi operasional lainnya, ataupun ekstraksi data dari format pdf.',
      'bullets' => [
        'Input, verifikasi, update data',
        'View & monitoring',
        'Integrasi sistem operasional',
      ],
      'image' => asset('assets/images/hero.png'),
      'primary' => ['text' => 'Baca selengkapnya', 'href' => '#'],
      'secondary' => ['text' => 'Hubungi kami', 'href' => '#'],
    ],
    [
      'tag' => 'Tentang kami',
      'title' => 'Membantu Organisasi Dalam Berinovasi, Mengubah, dan Memimpin',
      'subtitle' => 'Kami membantu klien menyelesaikan masalah saat ini dan mengantisipasi tantangan masa depan, sehingga mereka dapat mengambil keputusan yang efektif bagi organisasi.',
      'bullets' => [
        'Problem solving saat ini',
        'Antisipasi tantangan masa depan',
        'Keputusan lebih efektif',
      ],
      'image' => asset('assets/images/hero.png'),
      'primary' => ['text' => 'Baca selengkapnya', 'href' => '#'],
      'secondary' => ['text' => 'Hubungi kami', 'href' => '#'],
    ],
    [
      'tag' => 'Tentang kami',
      'title' => 'Dapatkan Solusi Lebih Baik untuk Bisnis Anda',
      'subtitle' => 'Kami akan membantu Anda mewujudkan ide kreatif perusahaan Anda menjadi kenyataan.',
      'bullets' => [
        'Ide kreatif jadi nyata',
        'Solusi untuk bisnis',
        'Pendampingan end-to-end',
      ],
      'image' => asset('assets/images/hero.png'),
      'primary' => ['text' => 'Baca selengkapnya', 'href' => '#'],
      'secondary' => ['text' => 'Hubungi kami', 'href' => '#'],
    ],
    [
      'tag' => 'Tentang kami',
      'title' => 'Business Intelligence',
      'subtitle' => 'Visualisasi infografis untuk presentasi yang menarik & memudahkan pengguna, analis dan top manajemen. Infografis yang ditampilkan dinamis mengikuti update data.',
      'bullets' => [
        'Visualisasi infografis menarik',
        'Memudahkan pengguna & analis',
        'Dinamis mengikuti update data',
      ],
      'image' => asset('assets/images/hero.png'),
      'primary' => ['text' => 'Baca selengkapnya', 'href' => '#'],
      'secondary' => ['text' => 'Hubungi kami', 'href' => '#'],
    ],
  ];

  // ID unik biar kalau component dipakai lebih dari 1 kali gak tabrakan
  $heroId = 'hero_' . uniqid();
@endphp

<section class="w-full">
  <div class="max-w-6xl mx-auto px-6 py-10">
    <div id="{{ $heroId }}" class="relative overflow-hidden rounded-xl shadow">

      {{-- Background image --}}
      <img
        data-hero-image
        src="{{ $slides[0]['image'] }}"
        alt="Hero"
        class="w-full h-[340px] md:h-[360px] object-cover"
      >

      {{-- Overlay gradient --}}
      <div class="absolute inset-0 bg-gradient-to-r from-blue-700/95 via-blue-600/80 to-transparent"></div>

      {{-- Left bullets circles --}}
      <div class="absolute left-6 md:left-8 top-1/2 -translate-y-1/2 flex flex-col gap-6 z-10">
        @foreach($slides as $i => $s)
          <button
            type="button"
            data-hero-dot="{{ $i }}"
            aria-label="Slide {{ $i+1 }}"
            class="w-5 h-5 rounded-full border-4 border-white/90 transition"
          ></button>
        @endforeach
      </div>

      {{-- Content --}}
      <div class="absolute inset-0 flex items-center">
        <div class="w-full md:w-1/2 pl-16 md:pl-24 pr-8 md:pr-12 text-white">
          <div class="flex items-center gap-3 mb-3">
            <span class="w-14 h-[2px] bg-white/80"></span>
            <span data-hero-tag class="text-xs tracking-wide text-white/90">{{ $slides[0]['tag'] }}</span>
          </div>

          <h1 data-hero-title class="text-3xl md:text-4xl font-semibold leading-tight">
            {{ $slides[0]['title'] }}
          </h1>

          <p data-hero-subtitle class="mt-3 text-sm md:text-[13px] text-white/90 leading-relaxed max-w-md">
            {{ $slides[0]['subtitle'] }}
          </p>

          <ul data-hero-bullets class="mt-5 space-y-3 text-sm text-white/90">
            @foreach($slides[0]['bullets'] as $b)
              <li class="flex items-start gap-3">
                <span class="mt-1 w-3.5 h-3.5 rounded-full border-2 border-white/90"></span>
                <span>{{ $b }}</span>
              </li>
            @endforeach
          </ul>

          <div class="mt-6 flex flex-wrap gap-3">
            <a data-hero-primary
              href="{{ $slides[0]['primary']['href'] }}"
              class="inline-flex items-center gap-2 bg-white text-blue-700 px-5 py-2.5 rounded-md text-sm font-medium shadow hover:bg-white/90"
            >
              <span>{{ $slides[0]['primary']['text'] }}</span>
              <span>→</span>
            </a>

            <a data-hero-secondary
              href="{{ $slides[0]['secondary']['href'] }}"
              class="inline-flex items-center gap-2 border border-white/80 text-white px-5 py-2.5 rounded-md text-sm font-medium hover:bg-white/10"
            >
              <span>{{ $slides[0]['secondary']['text'] }}</span>
              <span>→</span>
            </a>
          </div>
        </div>
      </div>

      {{-- Wave --}}
      <div class="absolute bottom-0 left-0 w-full">
        <svg viewBox="0 0 1440 120" class="w-full h-16 md:h-20" preserveAspectRatio="none">
          <path fill="#ffffff" d="M0,80 C240,140 480,20 720,60 C960,100 1200,10 1440,60 L1440,120 L0,120 Z"></path>
        </svg>
      </div>
    </div>
  </div>
</section>

@once
  <script>
    // Helper untuk escape injection (aman)
    const escapeHtml = (str) =>
      String(str).replace(/[&<>"']/g, (m) => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m]));

    // Simpan semua hero yang ada (kalau component dipakai >1)
    window.__PTI_HERO_SLIDERS__ = window.__PTI_HERO_SLIDERS__ || [];
  </script>
@endonce

<script>
  (function () {
    const root = document.getElementById(@json($heroId));
    if (!root) return;

    const slides = @json($slides);

    const elImage = root.querySelector('[data-hero-image]');
    const elTag = root.querySelector('[data-hero-tag]');
    const elTitle = root.querySelector('[data-hero-title]');
    const elSubtitle = root.querySelector('[data-hero-subtitle]');
    const elBullets = root.querySelector('[data-hero-bullets]');
    const elPrimary = root.querySelector('[data-hero-primary]');
    const elSecondary = root.querySelector('[data-hero-secondary]');
    const dots = Array.from(root.querySelectorAll('[data-hero-dot]'));

    let index = 0;
    let timer = null;
    const intervalMs = 4500;

    function render(i) {
      index = i;

      // active dot
      dots.forEach((btn, idx) => {
        if (idx === index) {
          btn.classList.add('bg-white');
          btn.classList.remove('bg-transparent');
        } else {
          btn.classList.remove('bg-white');
          btn.classList.add('bg-transparent');
        }
      });

      const s = slides[index];

      // update content
      elImage.src = s.image;
      elTag.textContent = s.tag;
      elTitle.textContent = s.title;
      elSubtitle.textContent = s.subtitle;

      // bullets
      elBullets.innerHTML = (s.bullets || []).map(b => `
        <li class="flex items-start gap-3">
          <span class="mt-1 w-3.5 h-3.5 rounded-full border-2 border-white/90"></span>
          <span>${escapeHtml(b)}</span>
        </li>
      `).join('');

      // buttons
      elPrimary.href = s.primary?.href || '#';
      elPrimary.querySelector('span')?.textContent && (elPrimary.querySelector('span').textContent = s.primary?.text || 'Baca selengkapnya');

      // cara aman untuk button text:
      elPrimary.childNodes[0].textContent = (s.primary?.text || 'Baca selengkapnya') + ' ';
      elSecondary.href = s.secondary?.href || '#';
      elSecondary.childNodes[0].textContent = (s.secondary?.text || 'Hubungi kami') + ' ';
    }

    function start() {
      stop();
      timer = setInterval(() => {
        render((index + 1) % slides.length);
      }, intervalMs);
    }

    function stop() {
      if (timer) clearInterval(timer);
      timer = null;
    }

    // dot click
    dots.forEach((btn) => {
      btn.addEventListener('click', () => {
        const i = Number(btn.getAttribute('data-hero-dot'));
        render(i);
        start(); // reset timer biar enak
      });
    });

    // pause on hover (opsional, enak)
    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);

    // init
    render(0);
    start();
  })();
</script>