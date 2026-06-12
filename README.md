# Arcline Studio — WordPress Theme

A clean, elegant custom WordPress theme built from scratch for Arcline Studio creative agency. No page builders, no CSS frameworks — pure PHP and mobile-first CSS.

![Theme Preview](screenshot.png)

## Features

- Custom Post Type: **Services** (with ACF icon and description fields)
- Dedicated CPT templates — `single-services.php` and `archive-services.php`
- Custom navigation menus (Primary + Footer)
- Dynamic footer with Services pulled via `WP_Query`
- **Mailchimp newsletter integration** via MC4WP plugin (double opt-in)
- Footer widget area with dedicated sidebar registration
- Mobile-first responsive CSS — no frameworks
- WordPress template hierarchy implemented correctly
- The Loop used across all templates
- Sticky header with animated mobile nav drawer
- Morphing hero shape animation
- Google Fonts: Playfair Display + DM Sans
- Proper script/style enqueuing via `functions.php`
- Widget-ready sidebar area (blog posts + footer)

## Theme Files

| File | Purpose |
|---|---|
| `style.css` | Theme registration |
| `functions.php` | Setup, enqueue, CPT, menus, widgets |
| `index.php` | Fallback template |
| `home.php` | Blog posts listing |
| `front-page.php` | Homepage template |
| `header.php` | Site header + navigation |
| `footer.php` | Site footer with 4-column layout |
| `single.php` | Single blog post with sidebar |
| `single-services.php` | Single service page (CPT) |
| `page.php` | Static pages |
| `archive.php` | Category/tag archives |
| `archive-services.php` | Services listing page (CPT) |
| `404.php` | Error page |
| `sidebar.php` | Widget area |

## Requirements

- WordPress 6.0+
- PHP 8.0+
- [Advanced Custom Fields (Free)](https://wordpress.org/plugins/advanced-custom-fields/)
- [MC4WP: Mailchimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/)

## Installation

1. Clone the repo into your WordPress themes folder:
```bash
git clone https://github.com/ItsUgesh/arcline-wp-theme.git
```
2. Go to **WP Admin → Appearance → Themes** → Activate **Arcline Studio**
3. Install & activate **ACF** plugin
4. Install & activate **MC4WP** plugin → connect your Mailchimp API key
5. Go to **WP Admin → Custom Fields** — recreate the Services field group:
   - `service_icon` (Textarea)
   - `service_description` (Textarea)
   - Location: Post Type = Services
6. Go to **Settings → Reading** — set Homepage to `Home` page, Posts page to `Blog`
7. Go to **Appearance → Menus** — assign Primary and Footer menus
8. Go to **Appearance → Widgets** — add widgets to Main Sidebar and Footer Widgets

## Color Palette

| Name | Hex |
|---|---|
| Warm White | `#FDF8F5` |
| Deep Burgundy | `#722F37` |
| Charcoal | `#1C1C1C` |
| Light Gray | `#F0EDED` |
| Mid Gray | `#8A8A8A` |

## Typography

- **Headings:** Playfair Display
- **Body:** DM Sans

## Author

Built by [Ugesh](https://ugeshsimkhada.com.np)

## License

[GNU General Public License v2](https://www.gnu.org/licenses/gpl-2.0.html)