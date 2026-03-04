@php
  $title = request('title', 'Flipbook');

  // ✅ whitelist biar aman (cuma boleh PDF ini)
  $allowed = [
    'assets/pdf/brosur.pdf',
    'assets/pdf/e-government-service-software.pdf',
    'assets/pdf/company-profile.pdf',
    'assets/pdf/software-solution.pdf',
  ];

  $file = request('file');

  abort_unless(in_array($file, $allowed, true), 404);

  $pdfUrl = asset($file);
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $title }} | Viewer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
body{ margin:0; font-family:'Poppins',sans-serif; background:#f1f5f9; }

/* TOPBAR */
.topbar{
  position:fixed; top:0; left:0; right:0; height:60px;
  background:linear-gradient(90deg,#1e3a8a,#3b82f6);
  display:flex; justify-content:space-between; align-items:center;
  padding:0 16px; color:#fff; z-index:100;
}
.title{ font-weight:600; font-size:15px; }
.btn{
  background:rgba(255,255,255,0.15);
  border:1px solid rgba(255,255,255,0.25);
  color:#fff; padding:7px 12px; border-radius:10px;
  font-weight:600; cursor:pointer; margin-left:6px;
  text-decoration:none; font-size:13px;
}
.btn:hover{ background:rgba(255,255,255,0.25); }
.btn:disabled{ opacity:.5; cursor:not-allowed; }

/* INPUT */
.page-input{
  width:120px; height:34px; border-radius:10px;
  border:1px solid rgba(255,255,255,0.35);
  background:rgba(255,255,255,0.18);
  color:#fff; padding:0 10px; outline:none;
  font-family:'Poppins',sans-serif; font-size:13px;
}
.page-input::placeholder{ color:rgba(255,255,255,.7); }

/* VIEWER */
.viewer-wrapper{
  position:fixed; top:60px; left:0; right:0; bottom:0;
  display:flex; justify-content:center; align-items:center;
  background:#e5e7eb; overflow:auto; padding:25px 15px;
}
.book{
  background:rgba(255,255,255,.55);
  border:1px solid rgba(0,0,0,.08);
  border-radius:18px; padding:18px;
  box-shadow:0 20px 60px rgba(0,0,0,.15);
}
.spread{ display:flex; gap:0; position:relative; }
.spread::after{
  content:""; position:absolute; top:10px; bottom:10px;
  left:50%; width:2px; transform:translateX(-1px);
  background:rgba(0,0,0,.10); border-radius:999px;
}
.page{
  background:#fff; border-radius:12px;
  box-shadow:0 20px 50px rgba(0,0,0,.20);
  display:block;
}
.page.left{ border-top-right-radius:6px; border-bottom-right-radius:6px; }
.page.right{ border-top-left-radius:6px; border-bottom-left-radius:6px; }

@media(max-width:900px){
  .spread{ flex-direction:column; gap:15px; }
  .spread::after{ display:none; }
}
</style>

</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
  <div>
    <a class="btn" href="{{ route('publikasi.index') }}">← Kembali</a>
    <span class="title">{{ $title }}</span>
  </div>

  <div>
    <button class="btn" id="prevBtn" onclick="prevSpread()">⟵ Prev</button>
    <button class="btn" id="nextBtn" onclick="nextSpread()">Next ⟶</button>

    <span class="btn" style="cursor:default;">
      <span id="page-left-num">1</span> - <span id="page-right-num">2</span>
      / <span id="page-count">--</span>
    </span>

    <button class="btn" onclick="zoomOut()">－</button>
    <button class="btn" onclick="zoomIn()">＋</button>
    <button class="btn" onclick="fitWidth()">Fit Width</button>

    <input class="page-input" id="pageInput" type="number" min="1" placeholder="Page..." />
    <button class="btn" onclick="goToPage()">Go</button>
  </div>
</div>

<!-- VIEWER -->
<div class="viewer-wrapper">
  <div class="book">
    <div class="spread">
      <canvas class="page left" id="pdf-left"></canvas>
      <canvas class="page right" id="pdf-right"></canvas>
    </div>
  </div>
</div>

<!-- PDF.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script>
const url = @json($pdfUrl);

pdfjsLib.GlobalWorkerOptions.workerSrc =
  "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js";

let pdfDoc = null;
let spreadIndex = 1;
let scale = 1.2;

const canvasLeft = document.getElementById("pdf-left");
const canvasRight = document.getElementById("pdf-right");
const ctxLeft = canvasLeft.getContext("2d");
const ctxRight = canvasRight.getContext("2d");

/* LOAD PDF */
pdfjsLib.getDocument(url).promise.then(function(pdf){
  pdfDoc = pdf;
  document.getElementById("page-count").innerText = pdfDoc.numPages;

  renderSpread();
  setTimeout(()=>fitWidth(), 150);
}).catch(function(error){
  alert("PDF tidak bisa dimuat: " + error.message);
});

async function renderSinglePage(pageNum, canvas, ctx){
  if(pageNum < 1 || pageNum > pdfDoc.numPages){
    canvas.width = 10;
    canvas.height = 10;
    ctx.clearRect(0,0,canvas.width,canvas.height);
    return;
  }

  const page = await pdfDoc.getPage(pageNum);
  const viewport = page.getViewport({ scale: scale });
  const outputScale = window.devicePixelRatio || 1;

  canvas.style.width = viewport.width + "px";
  canvas.style.height = viewport.height + "px";

  canvas.width = Math.floor(viewport.width * outputScale);
  canvas.height = Math.floor(viewport.height * outputScale);

  ctx.setTransform(outputScale, 0, 0, outputScale, 0, 0);

  await page.render({
    canvasContext: ctx,
    viewport: viewport
  }).promise;
}

async function renderSpread(){
  if(!pdfDoc) return;

  const leftPage = spreadIndex;
  const rightPage = spreadIndex + 1;

  await renderSinglePage(leftPage, canvasLeft, ctxLeft);
  await renderSinglePage(rightPage, canvasRight, ctxRight);

  document.getElementById("page-left-num").innerText = leftPage;
  document.getElementById("page-right-num").innerText =
    (rightPage <= pdfDoc.numPages) ? rightPage : "-";

  document.getElementById("prevBtn").disabled = (spreadIndex <= 1);
  document.getElementById("nextBtn").disabled = (spreadIndex >= pdfDoc.numPages - 1);
}

function prevSpread(){
  if(!pdfDoc) return;
  if(spreadIndex <= 1) return;

  spreadIndex -= 2;
  if(spreadIndex < 1) spreadIndex = 1;

  renderSpread();
}

function nextSpread(){
  if(!pdfDoc) return;
  if(spreadIndex >= pdfDoc.numPages - 1) return;

  spreadIndex += 2;
  renderSpread();
}

function zoomIn(){
  scale += 0.15;
  renderSpread();
}

function zoomOut(){
  if(scale <= 0.6) return;
  scale -= 0.15;
  renderSpread();
}

function fitWidth(){
  if(!pdfDoc) return;

  const book = document.querySelector(".book");
  const availableWidth = book.clientWidth - 40;
  const eachPageWidth = (availableWidth / 2) - 12;

  pdfDoc.getPage(spreadIndex).then(page=>{
    const baseViewport = page.getViewport({ scale: 1 });
    scale = eachPageWidth / baseViewport.width;
    renderSpread();
  });
}

function goToPage(){
  if(!pdfDoc) return;

  const input = document.getElementById("pageInput");
  let target = parseInt(input.value);

  if(isNaN(target)){
    alert("Masukkan nomor halaman.");
    return;
  }

  if(target < 1) target = 1;
  if(target > pdfDoc.numPages) target = pdfDoc.numPages;

  spreadIndex = (target % 2 === 0) ? target - 1 : target;
  if(spreadIndex < 1) spreadIndex = 1;

  renderSpread();
  input.value = "";
}

document.getElementById("pageInput").addEventListener("keydown", function(e){
  if(e.key === "Enter"){
    goToPage();
  }
});

document.addEventListener("keydown", (e)=>{
  if(e.key === "ArrowLeft") prevSpread();
  if(e.key === "ArrowRight") nextSpread();
});
</script>

</body>
</html>