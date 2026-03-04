# WC Nice — Thème bloc FSE

Thème bloc minimal pour WordPress, conçu comme **support de la conférence WordCamp Nice 2026** :

**Les compositions WordPress au-delà du copier-coller**  
*Présenté par Thierry Pigot — 6 mars 2026, 17h15 CET — Salle Massena*

---

## La conférence en bref

On connaît tous les compositions : créer un groupe de blocs, copier le markup, coller dans un fichier. Pratique, mais on reste en surface. Cette conférence plonge dans les fonctionnalités méconnues qui font des compositions un outil de développement professionnel.

**Au programme :**

1. **Le PHP comme super-pouvoir** (Partie 1) — Internationalisation native, assets dynamiques liés au thème, logique PHP (boucles, conditions), contexte d’exécution et limites.
2. **Industrialiser sa pratique** (Partie 2) — Organisation du dossier `/patterns`, headers (Keywords, Viewport Width, Block Types…), bibliothèque réutilisable, contrôle programmatique (désactiver les patterns Core, enregistrement conditionnel).
3. **Curater l’expérience d’édition** (Partie 3) — Block Locking API (3 niveaux de verrouillage), mode contentOnly, starter compositions pour un onboarding fluide.

Ce dépôt contient les exemples du thème utilisés ou évoqués pendant la conférence. Certains exemples détaillés dans les supports (ex. patterns « Événement » avec `templateLock`) figurent dans la doc de la conférence ; le thème se concentre sur les patterns effectivement présents dans le repo.

---

## Déroulé de la présentation → Fichiers du thème

Correspondance entre les parties de la conférence et les fichiers de ce thème. Les intitulés renvoient au contenu des supports.

| Partie | Sujet | Fichiers du thème concernés |
|--------|--------|-----------------------------|
| **Introduction** (5 min) | Illusion du pattern simple, 3 dimensions | — (cadre général) |
| **Partie 1 — PHP** (12 min) | i18n, assets, boucles, contexte `init` | `hero-i18n.php`, `hero-avec-image-i18n.php`, `hero-avec-image-assets.php`, `hero-static-loop.php`, `wordcamp-team-speakers.php`, **`hero-complet.php`** (démo « Hero Complet ») |
| **Partie 2 — Industrialiser** (10 min) | Organisation `/patterns`, headers, contrôle programmatique | Tous les patterns (conventions `hero-`, `cta-`, `query-`, `hidden-`…) ; **`wordcamp-team-speakers.php`** (Keywords, Viewport Width, Description) ; **`functions.php`** (désactivation patterns Core / distants, catégories, `wc_nice_conditional_patterns`) ; **`woocommerce-product-grid.php`** + enregistrement conditionnel WooCommerce |
| **Partie 3 — Curation** (10 min) | Block Locking (block level), starter patterns, template pattern | **`hero-event-lock-move.php`**, **`cover-cta-lock-remove.php`**, **`hero-static-lock-full.php`** (3 ex. block level) ; **`starter-page-about.php`**, **`starter-page-contact.php`** (Block Types: core/post-content) ; **`hidden-template-home.php`** (Template Types, Inserter: false) ; **`starter-page-about.php`** (ex. `templateLock: contentOnly` sur le Cover) |
| **Conclusion** (3 min) | Checklist, ressources | — |

*Les patterns « Événement » avec `templateLock: "all"` / `"contentOnly"` (event-normal, event-locked, event-content-only) sont détaillés dans les supports; ils ne sont pas dupliqués dans ce thème.*

---

## À propos du conférencier

**Thierry Pigot** — [WeAreWP](https://www.wearewp.pro) - [WP Assistance](https://www.wp-assistance.fr/)

Consultant WordPress depuis plus de 20 ans, Thierry accompagne entreprises et collectivités en développement, maintenance et sécurisation. Figure active de la communauté WordPress francophone depuis 2005, co-fondateur de la communauté WP Paris, organisateur de WordCamps et contributeur régulier au partage de bonnes pratiques. Basé en Mayenne, il allie expertise technique et vision pragmatique du développement WordPress moderne (sécurité, performance, Full Site Editing, thèmes sur mesure).

---

## Structure du thème

```
wc-nice/
├── assets/           # Images et ressources (ex. hero, speakers)
├── languages/        # Fichier .pot pour les traductions
├── parts/            # header.html, footer.html
├── patterns/         # Compositions (voir ci-dessous)
├── templates/        # index, front-page, single, page, archive…
├── theme.json        # Styles et paramètres globaux
├── functions.php     # Setup, catégories de patterns, enregistrement conditionnel
├── style.css         # Métadonnées du thème
└── README.md         # Ce fichier
```

---

## Compositions et contenu de la conférence

### Partie 1 — PHP comme super-pouvoir

**Internationalisation (i18n)**  
- **`hero-i18n.php`** — Hero simple avec textes en `esc_html_e()` (réutilisé dans `hidden-template-home.php`).  
- **`hero-avec-image-i18n.php`** — Hero avec image et textes/attributs traduisibles (`esc_html_e()`, `esc_attr_e()`).  
- **`hero-static-loop.php`** — Variables PHP, `sprintf()`, boucle `foreach` pour les boutons.  
- **`wordcamp-team-speakers.php`** — Tableau de données, `get_theme_file_uri()` pour les images, chaînes i18n.

**Assets dynamiques**  
- **`hero-avec-image-assets.php`** — Image hero via `get_theme_file_uri( 'assets/images/…' )` pour rester liée au thème.

**Démo « Hero Complet » (3 techniques combinées)**  
- **`hero-complet.php`** — Asset dynamique, boutons en boucle PHP, textes i18n ; équivalent du pattern « Hero Complet » du guide et de la Partie 1.

### Partie 2 — Industrialiser se pratique

**Organisation et headers**  
- **Dossier `patterns/`** — Conventions de nommage : `hero-`, `cta-`, `team-`, `query-`, `hidden-` (cf. guide).  
- **Headers** — `Title`, `Slug`, `Categories`, `Keywords`, `Description`, `Block Types`, `Viewport Width` ; ex. **`wordcamp-team-speakers.php`** (Keywords, Viewport Width: 1200, Description).  
- **Catégories** — Déclarées dans **`functions.php`** : Contenu de départ (page), WordCamp (Sponsors, Schedule, Team, Speakers, Practical info, CTA, Hero), WooCommerce.

**Contrôle programmatique**  
- **`functions.php`** — `remove_theme_support( 'core-block-patterns' )`, `should_load_remote_block_patterns` à `false`.  
- **`wc_nice_conditional_patterns()`** — Désactivation de `woocommerce-product-grid` si WooCommerce absent ; enregistrement de `woocommerce-product-featured` si WooCommerce actif (priorité 999).

**Query et grilles**  
- **`query-grid.php`**, **`query-cards.php`** — Bloc Query (posts), template en grille.  
- **`woocommerce-product-grid.php`** — Query `postType: "product"`, grille 3 colonnes, pagination (visible si WooCommerce actif).

### Partie 3 — Contrôler l’expérience d’édition

**Block Locking (niveau bloc)**  
- **`hero-event-lock-move.php`** — Image : `lock: { move: true, remove: false }` (Exemple 1 de la conférence).  
- **`cover-cta-lock-remove.php`** — Bouton CTA : `lock: { move: false, remove: true }` (Exemple 2).  
- **`hero-static-lock-full.php`** — Titre : `lock: { move: true, remove: true }` (Exemple 3).

**Starter patterns**  
- **`starter-page-about.php`**, **`starter-page-contact.php`** — `Block Types: core/post-content`, `Post Types: page` ; about utilise aussi `templateLock: contentOnly` sur le Cover.  
- **`hidden-template-home.php`** — `Template Types: front-page, home`, `Inserter: false` (template pattern).

*Les variantes « Événement » avec `templateLock: "all"` ou `"contentOnly"` (event-normal, event-locked, event-content-only) sont dans `05-exemples-code.md` et ne sont pas incluses dans ce thème.*

---

## Principales compositions incluses

| Fichier | Description |
|--------|-------------|
| **Hero** | hero.php, hero-i18n.php, hero-static.php, hero-complet.php, hero-avec-image.php, hero-avec-image-i18n.php, hero-avec-image-assets.php, hero-static-loop.php, hero-event-lock-move.php, hero-static-lock-full.php |
| **WordCamp** | wordcamp-hero-event.php, wordcamp-hero-minimal.php, wordcamp-team-speakers.php, wordcamp-speakers-list.php, wordcamp-team-organisers.php, wordcamp-sponsor-grid.php, wordcamp-sponsor-tiers.php, wordcamp-programme-timeline.php, wordcamp-cta-tickets.php, wordcamp-practical-venue.php, wordcamp-practical-getting-there.php |
| **Headers / Footer** | header-centered.php, header-split.php, header-with-button.php, footer-minimal.php |
| **CTA & Bannières** | cover-cta.php, cover-cta-lock-remove.php, cover-testimonial.php, cta-newsletter.php |
| **Query** | query-grid.php, query-cards.php, query-schedule.php |
| **Pages starter** | starter-page-about.php, starter-page-contact.php |
| **WooCommerce** | woocommerce-product-grid.php (+ woocommerce-product-featured enregistré en PHP si WooCommerce actif) |
| **Lock (démo)** | hero-event-lock-move.php, cover-cta-lock-remove.php, hero-static-lock-full.php |

---

## Prérequis

- **WordPress** 6.4+
- **PHP** 8.1+
- Optionnel : **WooCommerce** pour les compositions boutique (grille produits, produit en vedette).

---

## Installation

1. Copier le dossier `wc-nice` dans `wp-content/themes/`.
2. Activer le thème dans **Apparence → Thèmes**.
3. Les compositions sont disponibles dans l’éditeur (bloc ou page) via l’inserter → onglet **Patterns** (catégories du thème).
4. Pour les traductions : utiliser le fichier `languages/wc-nice.pot` avec Poedit ou votre outil de traduction.

---

## Licence

GPL v2 ou ultérieure. Voir [License URI](https://www.gnu.org/licenses/gpl-2.0.html).

---

*Thème réalisé par [WeAre[WP]](https://www.wearewp.pro) pour le WordCamp Nice 2026.*
