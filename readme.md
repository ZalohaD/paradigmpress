# PARADIGMPRESS 🧱

**A Modern, Object-Oriented (OOP) WordPress Theme Framework.**

[![License: GPL v2](https://img.shields.io/badge/License-GPL_v2-blue.svg)](https://opensource.org/licenses/GPL-2.0)
[![Minimum PHP Version](https://img.shields.io/badge/PHP-8.1%2B-8892BF.svg)](https://php.net/)
[![WordPress Compatibility](https://img.shields.io/badge/WordPress-6.0%2B-0074A9.svg)](https://wordpress.org/)

---

## 💡 Project Overview

**PARADIGMPRESS** is designed to shift the architecture of WordPress theme development. It is built from the ground up using **strict Object-Oriented Programming (OOP) principles** to create highly scalable, maintainable, and testable codebases.

This project serves as a robust foundation for developers and agencies tackling large-scale or long-term WordPress solutions. By minimizing reliance on global functions and emphasizing encapsulation, we ensure a clean separation of concerns throughout the theme's lifecycle.

## ✨ Key Features

* **Pure OOP Architecture:** Leveraging PHP Classes, Interfaces, and Traits for managing all theme logic (hooks, admin pages, custom post types, etc.).
* **PSR-4 Autoloading:** Dependencies are handled via **Composer**, ensuring modern and reliable class loading.
* **Clean Code Standards:** Focus on **S.O.L.I.D.** principles for maximum code clarity and maintainability.
* **Modern PHP:** Utilizes advanced features from **PHP 8.1+** (type hinting, strict types, etc.).
* **Gutenberg Ready:** Full integration and styling support for the Block Editor.
* **Minimalist Core:** No unnecessary bloat, providing a fast and efficient starting point for custom development.

---

## 🚀 Getting Started (Installation)

Follow these steps to set up the theme for development:

### 1. Clone the Repository

Clone the project directly into your WordPress themes directory:

```bash
git clone git@github.com:your_username/paradigmpress.git wp-content/themes/paradigmpress
(Replace your_username/paradigmpress.git with your actual repository path.)
```

2. Install Dependencies
   Navigate to the theme directory and run Composer to install project dependencies and set up the autoloader:

```php
cd wp-content/themes/paradigmpress
composer install
```
3. Theme Activation
   Log into your WordPress admin panel.

Go to Appearance > Themes.

Locate "PARADIGMPRESS" and click Activate.

📂 Project Structure
The core logic resides within the src/ directory, adhering to the ParadigmPress namespace.
```bash
paradigmpress/
├── assets/          # Compiled CSS/JS, Fonts, Images
├── src/             # Core OOP Logic (The ParadigmPress\ Namespace)
│   ├── Core/        # Application Bootstrapping, Main Loader, and Kernel
│   ├── Features/    # Classes for specific features (CPTs, Taxonomies, Customizer)
│   ├── Admin/       # Logic for the WordPress Admin area
│   ├── Interfaces/  # Shared interfaces for consistency
│   └── Integrations/ # Integration with third-party plugins
├── vendor/          # Composer dependencies (autoloaded)
├── templates/       # Theme template files (e.g., header.php, single.php)
├── functions.php    # Theme entry point (initializes the main Application class)
└── composer.json    # Composer configuration file
```
### Key Files:

* **`functions.php`**: The entry point that instantiates and runs the main Application class.
* **`src/Core/Application.php`**: The central controller where all feature classes and services are registered and initialized.


## 🤝 Contribution

We welcome contributions! If you have suggestions, feature requests, or find a bug, please feel free to:

1.  **Open an Issue:** Describe the bug or suggest a feature.
2.  **Submit a Pull Request (PR):** For code contributions, please branch from `develop` and ensure your code adheres to our coding standards.

### 📝 Coding Standards

* All PHP code must follow the **PSR-12 Extended Coding Style Guide**.
* Use type hints and return type declarations wherever possible.
* New classes must be placed under the `ParadigmPress\` namespace and reside in the `src/` folder.

---

## 📜 License

This theme is licensed under the **GNU General Public License v2 or later**.

See the `LICENSE` file for full details.

---

**Built with love for clean code.**