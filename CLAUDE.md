# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Laravel 12 company website and internship application portal for PT Piramida Teknologi Informasi (Piramidasoft). The site is primarily static view-based pages with Blade templating and Tailwind CSS v4.

## Commands

| Task | Command |
|------|---------|
| Full setup (deps, env, migrations, build) | `composer setup` |
| Local dev (server + queue + logs + vite) | `composer dev` |
| Vite dev server only | `npm run dev` |
| Build production assets | `npm run build` |
| Run test suite | `composer test` |
| Run single test | `php artisan test --filter=TestClassName` |
| Apply migrations | `php artisan migrate` |
| Format PHP | `./vendor/bin/pint` |

## Architecture

**Routing:** All routes are in `routes/web.php` using `Route::view()` — most pages are static Blade views with no controller logic. The only controller is `PublikasiController` for PDF flipbook handling.

**Views structure (`resources/views/`):**
- `layouts/app.blade.php` — master layout (all pages extend this)
- `components/` — reusable partials (navbar, footer, hero, flipbook)
- `pages/` — individual page views (home, tentang, layanan, produk, magang, lowongan, kontak, publikasi)

**Frontend stack:**
- Tailwind CSS v4 with `@tailwindcss/vite` plugin (configured in `resources/css/app.css`)
- Poppins font as `--font-sans` override
- Vanilla JS for interactivity (hero carousel, sticky nav) — no frontend framework
- Vite bundles `resources/css/app.css` and `resources/js/app.js`

**Database:** MySQL in production, in-memory SQLite for tests (`phpunit.xml`). Sessions, cache, and queue all use the database driver.

## Conventions

- PHP formatting: run `./vendor/bin/pint` before PRs
- Blade filenames: kebab-case (e.g., `detail-lowongan.blade.php`)
- Controllers: PSR-4, StudlyCase, `*Controller` suffix
- Commits: imperative, optional Conventional Commit prefixes (`feat:`, `fix:`, etc.)
- Tests: `*Test.php` in `tests/Feature/` (HTTP behavior) or `tests/Unit/` (pure logic)
- Keep `.env.example` updated when adding new environment variables
