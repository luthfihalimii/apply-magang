<footer class="text-white">
  <div class="bg-gradient-to-r from-blue-800 via-blue-600 to-blue-400 px-6 py-10">
    <div class="max-w-6xl mx-auto">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        {{-- KIRI --}}
        <div>
          <div class="inline-flex items-center gap-3 bg-white/95 text-gray-800 rounded-lg px-4 py-3">
            <img src="{{ asset('assets/logo/logo.svg') }}" alt="Logo" class="h-9 w-auto">
            <span class="font-semibold tracking-wide">PIRAMIDA TEKNOLOGI INFORMASI</span>
          </div>

          <p class="mt-5 text-sm leading-relaxed text-white/90 max-w-md">
            Lorem ipsum dolor sit amet, consectetur <br class="hidden md:block">
            adipiscing elit, sed do eiusmod tempor
          </p>

          <ul class="mt-8 space-y-3 text-sm text-white/95">
            <li class="flex items-start gap-3">
              <img src="{{ asset('assets/icons/place.svg') }}" class="w-5 h-5 mt-0.5" alt="">
              <span class="opacity-90">:</span>
              <span class="leading-relaxed">
                Jl. Gayung Kebonsari Timur 29, Ketintang, Kec. Gayungan, Surabaya, Indonesia
              </span>
            </li>

            <li class="flex items-center gap-3">
              <img src="{{ asset('assets/icons/mail.svg') }}" class="w-5 h-5" alt="">
              <span class="opacity-90">:</span>
              <span>marketing@piramidati.com</span>
            </li>

            <li class="flex items-center gap-3">
              <img src="{{ asset('assets/icons/telp.svg') }}" class="w-5 h-5" alt="">
              <span class="opacity-90">:</span>
              <span>031 - 5828 3512</span>
            </li>

            <li class="flex items-center gap-3">
              <img src="{{ asset('assets/icons/whatsapp.svg') }}" class="w-5 h-5" alt="">
              <span class="opacity-90">:</span>
              <span>085954320729</span>
            </li>

            <li class="flex items-center gap-3">
              <img src="{{ asset('assets/icons/linkedin.svg') }}" class="w-5 h-5" alt="">
              <span class="opacity-90">:</span>
              <span>Piramida Teknologi Informasi</span>
            </li>
          </ul>
        </div>

        {{-- TENGAH --}}
        <div class="md:pt-2">
          <h4 class="font-semibold text-lg">Layanan</h4>
          <ul class="mt-4 space-y-2 text-sm text-white/95 list-disc list-inside">
            <li>E-Procurement</li>
            <li>IT Consultant</li>
            <li>Business System</li>
            <li>E-Government &amp; Smart City</li>
          </ul>
        </div>

        {{-- KANAN --}}
        <div class="md:pt-2 flex flex-col">
          <div>
            <h4 class="font-semibold text-lg">Perusahaan</h4>
            <ul class="mt-4 space-y-2 text-sm text-white/95 list-disc list-inside">
              <li>Tentang kami</li>
              <li>Produk</li>
              <li>Karir</li>
              <li>Kontak</li>
            </ul>
          </div>

          <div class="flex-1"></div>

          <div class="mt-8 md:mt-0 md:flex md:justify-end">
            <div class="bg-white rounded-lg text-blue-600 shadow-md overflow-hidden w-full md:w-[360px]">
              <div class="grid grid-cols-3">
                <div class="col-span-1 flex items-center gap-2 px-4 py-4 border-r border-gray-200">
                  <img src="{{ asset('assets/icons/jam.svg') }}" class="w-5 h-5" alt="">
                  <div class="leading-tight">
                    <div class="font-semibold">Business</div>
                    <div class="font-semibold">Hours</div>
                  </div>
                </div>

                <div class="col-span-1 px-4 py-4 border-r border-gray-200 text-xs text-blue-600/90">
                  <div>Weekday - Open</div>
                  <div class="mt-2">Weekend - Close</div>
                </div>

                <div class="col-span-1 px-4 py-4 flex items-center justify-center font-semibold">
                  <div class="text-center leading-tight">
                    <div>8 AM -</div>
                    <div>9 PM</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="mt-10 border-t border-white/30"></div>

      <div class="mt-6 text-sm text-white/95">
        © Copyright 2026 Piramida Teknologi Informasi, All Rights Reserved
      </div>

    </div>
  </div>
</footer>