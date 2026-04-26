# Raiz Consulting - WordPress FSE Theme

Professional WordPress Full Site Editing (FSE) project for **Raiz Consulting V1**, a boutique hotel consulting brand focused on organic growth, identity, and operational expertise.

## Project Overview

This repository contains:
- A Docker-based local WordPress environment.
- A custom block theme located at `wp-content/themes/raiz-v1`.
- FSE structure files (template parts, templates, and block patterns).

## Tech Stack

- WordPress (Block Theme / FSE)
- Docker Compose
- Native WordPress blocks and block pattern files (`.html` and `.php`)

## Repository Structure

```text
.
├── docker-compose.yaml
└── wp-content/
    └── themes/
        └── raiz-v1/
            ├── parts/
            │   ├── header.html
            │   └── footer.html
            ├── templates/
            │   ├── index.html
            │   └── page.html
            ├── patterns/
            │   ├── hero-home.php
            │   ├── services-grid.php
            │   └── about-founders.php
            ├── pattern/
            │   └── hero-inicio.php
            ├── style.css
            └── theme.json
```

## Theme Highlights

- **FSE-first architecture** with template parts and templates.
- **Custom design tokens** in `theme.json`:
  - Color palette (`base`, `contrast`, `primary`, `secondary`, `tertiary`)
  - Fluid typography enabled
  - Constrained content and wide layout sizes
- **Spanish content patterns** for homepage and key business sections.
- **Polylang-ready header** with language switcher block support.

## Local Development

### 1. Start containers

```bash
docker compose up -d
```

### 2. Open WordPress

Open your configured local WordPress URL (depends on your Docker setup).

### 3. Work on the theme

Main theme path:

```text
wp-content/themes/raiz-v1
```

## Block Patterns Registration

Pattern files in `wp-content/themes/raiz-v1/patterns/` include WordPress headers with:
- `Title`
- `Slug`
- `Categories`

This allows them to appear in the Site Editor inserter.

## Git Notes

The root `.gitignore` is configured to:
- Ignore WordPress core and unrelated content by default.
- Keep this custom theme tracked:
  - `wp-content/themes/raiz-v1/**`
- Keep Docker compose file tracked.

## Recommended Next Steps

- Add screenshots/GIFs of key templates.
- Document exact Docker service names and ports.
- Add deployment notes (staging/production workflow).
