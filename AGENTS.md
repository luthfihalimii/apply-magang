# Repository Guidelines

## Project Structure & Module Organization
This repository is a Laravel 12 web app.
- `app/`: application logic (models, controllers, providers).
- `routes/web.php`: HTTP routes for pages and features.
- `resources/views/`: Blade templates, split into `layouts/`, `components/`, and `pages/`.
- `resources/js` and `resources/css`: frontend entrypoints bundled by Vite.
- `public/assets/`: static files (images, icons, PDFs).
- `database/migrations`, `database/seeders`, `database/factories`: database schema and seed data.
- `tests/Feature` and `tests/Unit`: PHPUnit test suites.

## Build, Test, and Development Commands
- `composer setup`: install PHP/Node deps, create `.env`, generate app key, run migrations, build assets.
- `composer dev`: run full local stack (Laravel server, queue worker, logs, and Vite) via `concurrently`.
- `npm run dev`: run Vite in watch mode for frontend work only.
- `npm run build`: build production frontend assets.
- `composer test`: clear config and run the full test suite (`php artisan test`).
- `php artisan migrate`: apply new migrations during local development.

## Coding Style & Naming Conventions
- Follow `.editorconfig`: UTF-8, LF, 4 spaces, trim trailing whitespace (except Markdown).
- Format PHP with `./vendor/bin/pint` before opening a PR.
- Use PSR-4 class naming (`App\...`), `StudlyCase` class names, and `*Controller` suffix for controllers.
- Keep Blade filenames descriptive and kebab-case where possible (example: `detail-lowongan.blade.php`).
- Use clear route names and keep route/controller naming aligned.

## Testing Guidelines
- Testing uses PHPUnit (`phpunit.xml`) with in-memory SQLite for speed.
- Put HTTP/integration behavior in `tests/Feature`; pure logic in `tests/Unit`.
- Name test files `*Test.php` and use descriptive test method names.
- Add or update tests for every behavior change, especially new routes, controllers, and form flows.

## Commit & Pull Request Guidelines
- Keep commits focused and descriptive. Prefer imperative messages; optional Conventional Commit prefixes are welcome (example: `feat: add lowongan detail page`).
- Avoid bundling unrelated refactors with feature work.
- PRs should include:
  - short summary of what changed and why,
  - linked issue/task (if available),
  - verification steps (`composer test`, manual page checks),
  - screenshots for UI/Blade changes.

## Security & Configuration Tips
- Never commit secrets from `.env`; keep `.env.example` updated when adding new variables.
- Validate all user input in controllers/requests, especially form endpoints.
