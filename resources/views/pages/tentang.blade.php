@extends('layouts.app')

@section('title', 'Tentang Kami - Piramidasoft')

@section('content')
{{-- Hero Section --}}
<section class="relative w-full h-[253px] bg-gradient-to-r from-blue-600/80 to-blue-400/80 overflow-hidden">
  <img 
    src="{{ asset('assets/images/hero.png') }}" 
    alt="Hero Background" 
    class="absolute inset-0 w-full h-full object-cover -z-10"
  >
  
  <div class="relative max-w-6xl mx-auto px-6 h-full flex flex-col items-center justify-center text-white">
    <h1 class="text-5xl md:text-[68px] font-bold text-shadow-lg mb-4">
      Tentang kami
    </h1>
    
    <div class="flex items-center gap-2 text-lg md:text-[21px] font-semibold">
      <span>Home</span>
      <div class="w-3 h-[3px] bg-white"></div>
      <span>Tentang kami</span>
    </div>
  </div>
</section>

{{-- Main Content --}}
<div class="max-w-6xl mx-auto px-6 py-12">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
    
    {{-- Left Column: Content --}}
    <div class="space-y-8">
      
      {{-- Section Header --}}
      <div class="flex items-center gap-5">
        <div class="w-[70px] h-[5px] bg-blue-400"></div>
        <p class="text-2xl md:text-[22px] font-medium text-slate-500">
          Professional Solution for Your Business
        </p>
      </div>

      {{-- Deskripsi --}}
      <div class="space-y-4">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-950">
          DESKRIPSI
        </h2>
        
        <div class="text-[15px] text-[#5e5b5b] space-y-4 leading-relaxed">
          <p>
           Piramidasoft adalah perusahaan teknologi informasi yang berfokus pada pengembangan solusi digital yang inovatif, efisien, dan sesuai kebutuhan bisnis modern. Kami membantu perusahaan dalam membangun sistem, mengembangkan aplikasi, serta mengoptimalkan proses bisnis melalui teknologi yang tepat guna. Dengan tim profesional yang berpengalaman, kami berkomitmen memberikan layanan terbaik untuk mendukung pertumbuhan dan transformasi digital klien.
          </p>
          
          <p>
            Kami memahami bahwa setiap bisnis memiliki kebutuhan dan tantangan yang berbeda dalam penerapan teknologi. Oleh karena itu, Piramidasoft berusaha menghadirkan solusi digital yang praktis, relevan, dan dapat digunakan secara efektif sesuai kebutuhan klien. Dengan pendekatan yang komunikatif dan berorientasi pada solusi, kami berkomitmen memberikan layanan yang membantu perusahaan beradaptasi dan berkembang di tengah perubahan teknologi yang terus berlangsung.
          </p>
        </div>
      </div>

      {{-- Visi Kami --}}
      <div class="space-y-4">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-950">
          VISI KAMI
        </h2>
        
        <p class="text-[15px] text-[#5e5b5b] leading-relaxed">
          Menjadi perusahaan teknologi informasi terpercaya yang menghadirkan solusi digital inovatif, berkualitas tinggi, dan berkelanjutan untuk membantu bisnis berkembang serta beradaptasi di era transformasi digital.
        </p>
      </div>
    </div>

    {{-- Right Column: Image --}}
    <div class="flex items-center justify-center">
      <div class="w-full max-w-[612px] h-[407px] rounded-[15px] overflow-hidden shadow-lg">
        <img 
          src="{{ asset('assets/images/About me.png') }}" 
          alt="About Us" 
          class="w-full h-full object-cover"
        >
      </div>
    </div>

  </div>
</div>

{{-- Footer Component --}}
@include('components.footer')
@endsection
