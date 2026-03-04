use App\Http\Controllers\PublikasiController;

Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi.index');
Route::get('/publikasi/flipbook', [PublikasiController::class, 'flipbook'])->name('publikasi.flipbook');