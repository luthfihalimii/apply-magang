@php
$slides = [
  [
    'tag' => 'Tentang kami',
    'title' => 'Business Intelligence',
    'subtitle' => 'Visualisasi infografis untuk presentasi yang menarik & memudahkan pengguna, analis dan top manajemen. Infografis yang ditampilkan dinamis mengikuti update data.',
    'image' => asset('assets/images/hero.png'),
    'primary' => ['text' => 'Baca selengkapnya', 'href' => url('/tentang')],
    'secondary' => ['text' => 'Hubungi kami', 'href' => url('/kontak')],
  ],
  [
    'tag' => 'Tentang kami',
    'title' => 'Dapatkan Solusi Lebih Baik untuk Bisnis Anda',
    'subtitle' => 'Kami akan membantu  Anda mewujudkan ide kreatif perusahaaan Anda menjadi kenyataan.',
    'image' => asset('assets/images/hero.png'),
    'primary' => ['text' => 'Baca selengkapnya', 'href' => url('/tentang')],
    'secondary' => ['text' => 'Hubungi kami', 'href' => url('/kontak')],
  ],
  [
    'tag' => 'Tentang kami',
    'title' => 'Data Warehouse',
    'subtitle' => 'Aplikasi ini berfungsi untuk menyimpan Daftar Kamus Data dan menjadi gudang data. User dapat melakukan input data, verifikasi, update data, view dan monitoring. Dapat terintegrasi Odengan aplikasi transaksi operasional lainnya, ataupun ekstraksi data dari format pdf.',
    'image' => asset('assets/images/hero.png'),
    'primary' => ['text' => 'Baca selengkapnya', 'href' => url('/tentang')],
    'secondary' => ['text' => 'Hubungi kami', 'href' => url('/kontak')],
  ],
  [
    'tag' => 'Tentang kami',
    'title' => 'Membantu Organisasi Berinovasi',
    'subtitle' => 'Kami membantu klien menyelesaikan masalah saat ini dan mengantisipasi tantangan masa depan, sehingga mereka dapat mengambil keputusan yang efektif bagi organisasi.',
    'image' => asset('assets/images/hero.png'),
    'primary' => ['text' => 'Baca selengkapnya', 'href' => url('/tentang')],
    'secondary' => ['text' => 'Hubungi kami', 'href' => url('/kontak')],
  ],
  [
    'tag' => 'Tentang kami',
    'title' => 'Penyedia Solusi IT',
    'subtitle' => 'Berdiri sejak 2012 dan aktif sejak 2013, perusahaan ini telah melayani 200+ pelanggan di Indonesia dalam bidang Teknologi dan Sistem Informasi, menyediakan solusi aplikasi dan konsultasi sistem, serta didukung 20+ tim ahli berpengalaman.',
    'image' => asset('assets/images/hero.png'),
    'primary' => ['text' => 'Baca selengkapnya', 'href' => url('/tentang')],
    'secondary' => ['text' => 'Hubungi kami', 'href' => url('/kontak')],
  ],
];

$heroId = 'hero_' . uniqid();
@endphp

<section class="w-full">
  <div id="{{ $heroId }}" class="hero-wrap relative w-full overflow-hidden">

    <img data-hero-image
      src="{{ $slides[0]['image'] }}"
      alt="Hero"
      class="w-full h-[420px] md:h-[560px] object-cover">

    <div class="absolute inset-0 z-10 bg-gradient-to-r from-[#2563EB]/95 via-[#2563EB]/85 to-transparent"></div>

    <div class="absolute inset-0 z-20 flex items-center">
      <div class="mx-auto w-full max-w-[1200px] px-6">
        <div class="flex items-start gap-8 pl-10 md:pl-16">

          <div class="hero-bullet-wrap">
            <div data-hero-bullets class="flex flex-col items-center gap-6">
              @foreach($slides as $i => $s)
                <button type="button"
                  aria-label="Slide {{ $i+1 }}"
                  data-hero-dot="{{ $i }}"
                  class="hero-bullet">
                </button>
              @endforeach
            </div>
          </div>

          <div class="text-white pt-10 w-full md:w-[55%]">

            <div class="hero-tag-wrap">
              <span class="hero-tag-line"></span>
              <span data-hero-tag class="hero-tag-text">
                {{ $slides[0]['tag'] }}
              </span>
            </div>

            <h1 data-hero-title class="hero-title">
              {{ $slides[0]['title'] }}
            </h1>

            <p data-hero-subtitle class="hero-subtitle">
              {{ $slides[0]['subtitle'] }}
            </p>

            <div class="mt-7 flex flex-wrap gap-5">
              <a data-hero-primary
                 href="{{ $slides[0]['primary']['href'] }}"
                 class="hero-btn hero-btn--primary">
                <span data-hero-primary-text>
                  {{ $slides[0]['primary']['text'] }}
                </span>
                <span class="hero-arrow">→</span>
              </a>

              <a data-hero-secondary
                 href="{{ $slides[0]['secondary']['href'] }}"
                 class="hero-btn hero-btn--secondary">
                <span data-hero-secondary-text>
                  {{ $slides[0]['secondary']['text'] }}
                </span>
                <span class="hero-arrow">→</span>
              </a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full z-30">
      <svg viewBox="0 0 1440 140" class="w-full h-16 md:h-20" preserveAspectRatio="none">
        <path fill="#ffffff"
          d="M0,90 C240,140 480,40 720,80 C960,120 1200,30 1440,80 L1440,140 L0,140 Z"></path>
      </svg>
    </div>

  </div>
</section>

<style>
.hero-wrap .hero-bullet-wrap{
  padding-top: 24px;
}

.hero-wrap [data-hero-bullets]{
  transform: translateY(0px);
  transition: transform 220ms ease;
  will-change: transform;
}

.hero-wrap .hero-bullet{
  width: 16px;
  height: 16px;
  border-radius: 9999px;

  border: 0;                
  background: transparent;
  box-shadow: inset 0 0 0 2px #fff;  

  padding: 0;
  margin: 0;
  display: block;
  box-sizing: border-box;

  appearance: none;
  -webkit-appearance: none;
  outline: none;
}

.hero-wrap .hero-bullet.is-active{
  background: #fff;      
  box-shadow: none;         
}

.hero-wrap .hero-tag-wrap{
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 20px;
}
.hero-wrap .hero-tag-line{
  width: 90px;
  height: 3px;
  background: #fff;
  border-radius: 2px;
}
.hero-wrap .hero-tag-text{
  font-size: 1rem;
  font-weight: 500;
  color: rgba(255,255,255,.9);
  line-height: 1;
}

.hero-wrap .hero-title{
  font-size: 3rem !important;
  font-weight: 600 !important;
  line-height: 1.1 !important;
  letter-spacing: -0.02em !important;
  margin: 0 0 16px 0 !important;
  max-width: 650px !important;
  text-align: left !important;
}

.hero-wrap .hero-subtitle{
  font-size: 1rem !important;
  line-height: 1.6 !important;
  margin: 0 0 24px 0 !important;
  max-width: 520px !important;
  color: rgba(255,255,255,.9) !important;
  text-align: left !important;
}

.hero-wrap .hero-btn{
  display: inline-flex !important;
  align-items: center !important;
  gap: 12px !important;
  padding: 12px 24px !important;
  border-radius: 12px !important;
  font-size: 1rem !important;
  font-weight: 500 !important;
  text-decoration: none !important;
  line-height: 1 !important;
}

.hero-wrap .hero-btn--primary{
  background: #fff !important;
  color: #2563EB !important;
  border: 2px solid #fff !important;
}

.hero-wrap .hero-btn--secondary{
  background: transparent !important;
  color: #fff !important;
  border: 2px solid rgba(255,255,255,.9) !important;
}

.hero-wrap .hero-arrow{
  font-size: 18px !important;
  line-height: 1 !important;
}
</style>

<script>
(function () {
  const root = document.getElementById(@json($heroId));
  if (!root) return;

  const slides = @json($slides);
  const dots = Array.from(root.querySelectorAll('[data-hero-dot]'));
  const bulletsCol = root.querySelector('[data-hero-bullets]');

  const elImage = root.querySelector('[data-hero-image]');
  const elTag = root.querySelector('[data-hero-tag]');
  const elTitle = root.querySelector('[data-hero-title]');
  const elSubtitle = root.querySelector('[data-hero-subtitle]');
  const elPrimary = root.querySelector('[data-hero-primary]');
  const elSecondary = root.querySelector('[data-hero-secondary]');
  const elPrimaryText = root.querySelector('[data-hero-primary-text]');
  const elSecondaryText = root.querySelector('[data-hero-secondary-text]');

  let index = 0;
  let timer = null;
  const intervalMs = 5000;

function setActive(){
  dots.forEach((d,i)=>{
    if(i === index){
      d.classList.add('is-active');
    }else{
      d.classList.remove('is-active');
    }
  });
}

  function alignBulletsToTitle() {
    if (!bulletsCol || !dots[index]) return;

    const titleRect = elTitle.getBoundingClientRect();
    const activeRect = dots[index].getBoundingClientRect();

    const fontSize = parseFloat(getComputedStyle(elTitle).fontSize) || 48;

    const targetY = titleRect.top + (fontSize * 0.58);
    const currentY = activeRect.top + (activeRect.height / 2);

    const delta = targetY - currentY;
    bulletsCol.style.transform = `translateY(${delta}px)`;
  }

  function render(i) {
    index = i;
    const s = slides[index];

    elImage.src = s.image;
    elTag.textContent = s.tag;
    elTitle.textContent = s.title;
    elSubtitle.textContent = s.subtitle;

    elPrimary.href = s.primary?.href || '#';
    elSecondary.href = s.secondary?.href || '#';
    elPrimaryText.textContent = s.primary?.text || 'Baca selengkapnya';
    elSecondaryText.textContent = s.secondary?.text || 'Hubungi kami';

    setActive();

    requestAnimationFrame(() => {
      alignBulletsToTitle();
      requestAnimationFrame(alignBulletsToTitle);
    });
  }

  function start() {
    stop();
    timer = setInterval(() => render((index + 1) % slides.length), intervalMs);
  }

  function stop() {
    if (timer) clearInterval(timer);
    timer = null;
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      render(i);
      start();
    });
  });

  window.addEventListener('resize', () => alignBulletsToTitle());

  render(0);
  start();
})();
</script>