# WordPress Custom Theme and Plugin Development Task

This repository contains a WordPress project that was sent to me through email for the job post of WordPress Backend Developer. The goal of this project is to showcase the ability to create a custom theme, develop plugins, and integrate advanced features into a WordPress website.


## Table of Contents

- [Requirements](#requirements)
- [Project Structure](#project-structure)
- [Setup](#setup)
- [Custom Theme](#custom-theme)
- [Custom Plugins](#custom-plugins)
- [Shortcodes](#shortcodes)
- [Advanced Custom Fields](#advanced-custom-fields)
- [Global Settings](#global-settings)
- [FAQ Plugin](#faq-plugin)
- [GitHub Repository](#github-repository)

## Requirements

Before you begin, ensure you have the following software and tools installed:

- [WordPress](https://wordpress.org/) (latest version)
- [Git](https://git-scm.com/)
- [Advanced Custom Fields (ACF) Plugin](https://www.advancedcustomfields.com/)
- A code editor (e.g., Visual Studio Code, Sublime Text)

## Project Structure

The project directory structure is organized as follows:

your-wordpress-project/

│

├── custom-theme/

│ ├── ... (custom theme files)

│

├── custom-plugins/

│ ├── ... (custom plugin files)

│

└── README.md


## Setup

1. **WordPress Installation**: Ensure you have a WordPress installation up and running on your local server.

2. **Plugin Installation**:
   - Install and activate the ACF plugin.
   - Clone this repository into your WordPress project's `wp-content/plugins` directory.
   - Activate the "FAQ Plugin" via the WordPress admin panel.

3. **Theme Installation**:
   - Copy the contents of the `custom-theme` directory to your WordPress theme directory.
   - Activate the custom theme via the WordPress admin panel.

## Custom Theme

- The custom theme is organized according to best practices for a WordPress theme.
- It includes a custom style file for basic homepage design.
- Custom navigation and footer items are registered to dynamically pull navbar and footer.

## Custom Plugins

- The "FAQ Plugin" is included, which allows you to create FAQs using custom post types and meta fields.
- FAQs are displayed using shortcodes.

## Shortcodes

- A custom shortcode is provided to call an API and display countries' names and their flags.

## Advanced Custom Fields

- The ACF plugin is used to create content section groups.
- A shortcode is added to display countries' names and flags within the content section.

## Global Settings

- A global settings page is created using ACF options to store site logo, address, and contact number.

## FAQ Plugin

- The FAQ Plugin is organized with separate admin-side and frontend folders.
- It allows you to create, manage, and display FAQs on your WordPress site.
- FAQ content and headings can be shown by default.

## GitHub Repository

- The project is version-controlled using Git.
- A [GitHub repository](https://github.com/yourusername/your-repo-name) is set up for this project, with a `development` branch.

---

Please follow the instructions in this README to set up and explore the custom theme, plugins, and other features developed as part of this task.

For any questions or issues, feel free to reach out to the developer, [Abubakar Sabir](abubakarsabir47@gmail.com).

