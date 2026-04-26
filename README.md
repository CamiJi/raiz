# Raiz Consulting V1 - WordPress FSE

Projet WordPress local (Docker) pour le site Raiz Consulting V1, basé sur un thème bloc Full Site Editing (FSE) personnalisé.

## Objectif du repository

Ce dépôt conserve uniquement les éléments utiles au projet :

- La stack locale Docker WordPress + MariaDB.
- Le thème personnalisé `raiz-v1`.
- Les exports SQL validés du projet.

Le core WordPress, les plugins et les uploads sont volontairement non versionnés (sauf exceptions définies dans `.gitignore`).

## Stack technique

- WordPress (thème bloc / FSE)
- MariaDB 10.11
- Docker Compose
- Patterns blocs WordPress (`.php`) et templates/parts (`.html`)

## Démarrage local

### 1) Lancer l'environnement

```bash
docker compose up -d
```

### 2) Accéder au site

- Front/Back Office WordPress : http://localhost:8080

### 3) Arrêter l'environnement

```bash
docker compose down
```

## Structure versionnée

```text
.
├── docker-compose.yaml
├── README.md
└── wp-content/
    ├── raiz_backup.sql
    ├── raiz_v1_servicios_ready.sql
    └── themes/
        └── raiz-v1/
            ├── assets/
            ├── parts/
            ├── pattern/
            ├── patterns/
            ├── templates/
            ├── style.css
            └── theme.json
```

## État actuel du thème

Le thème `wp-content/themes/raiz-v1` inclut notamment :

- Un système de design dans `theme.json` :
-   Palette couleurs (base, contrast, primary, secondary, tertiary)
-   Typographie fluide activée
-   Familles locales déclarées (Playfair Display, Inter)
-   Échelle d'espacement responsive (`clamp`)
-   Layout contenu (`contentSize: 800px`, `wideSize: 1200px`)
- Une architecture FSE standard : `parts`, `templates`, `patterns`.
- Un header avec logo natif et navigation.
- Un style dédié au switcher de langue Polylang dans `style.css`.

## Base de données SQL (export/import)

Deux dumps SQL sont suivis dans le dépôt :

- `wp-content/raiz_backup.sql` : sauvegarde de référence.
- `wp-content/raiz_v1_servicios_ready.sql` : export mis à jour avec la page Servicios finalisée.

### Importer un dump SQL dans la base locale

Depuis la racine du projet :

```bash
docker compose exec -T db mysql -uuser -ppassword wordpress < wp-content/raiz_v1_servicios_ready.sql
```

Si besoin de repartir proprement avant import :

```bash
docker compose exec -T db mysql -uuser -ppassword -e "DROP DATABASE IF EXISTS wordpress; CREATE DATABASE wordpress;"
docker compose exec -T db mysql -uuser -ppassword wordpress < wp-content/raiz_v1_servicios_ready.sql
```

### Exporter la base SQL courante

```bash
docker compose exec -T db mysqldump -uuser -ppassword wordpress > wp-content/raiz_v1_servicios_ready.sql
```

Vérification rapide du fichier exporté :

```bash
ls -lh wp-content/*.sql
```

## Convention Git du projet

Le `.gitignore` est configuré en mode "deny-all puis exceptions" :

- Ignore tout par défaut.
- Garde `README.md`, `.gitignore`, `docker-compose.yaml`.
- Ignore les dumps SQL par défaut mais autorise explicitement :
-   `wp-content/raiz_backup.sql`
-   `wp-content/raiz_v1_servicios_ready.sql`
- Garde uniquement le thème custom : `wp-content/themes/raiz-v1/**`.

## Historique récent (résumé)

Dernières avancées intégrées :

- Typographie fluide et polices locales.
- Système d'espacement/layout dans `theme.json`.
- Pattern détaillé pour les services.
- Intégration et fiabilisation du logo natif dans le header.
- Ajout et suivi Git de l'export SQL "servicios ready".

## Commandes utiles

```bash
# Logs WordPress
docker compose logs -f wordpress

# Logs DB
docker compose logs -f db

# Statut des conteneurs
docker compose ps
```
