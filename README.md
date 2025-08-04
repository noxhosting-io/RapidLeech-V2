# 🚀 RapidLeech BootStrap Edition — PHP 8 Compatible



## Overview

**RapidLeech BootStrap Edition** is a modernized fork of the classic RapidLeech script, now fully compatible with **PHP 8** and featuring a responsive **Bootstrap-powered UI**. It allows fast, direct downloading from a wide range of file hosting services straight to your server, while offering a sleek interface and enhanced performance.

---

## ✨ What's New

### 🔧 PHP 8 Compatibility
- Resolved nested ternary operator issues
- Improved error handling and exception management
- Modernized codebase following current PHP standards

### 🎨 Bootstrap UI Overhaul
- Fully responsive Bootstrap-based theme
- Light/Dark mode toggle
- Mobile-optimized layout
- Font Awesome icon integration
- Enhanced navigation and styling

### 🛠️ Template System
- Consistent layout via shared header/footer
- Integrated Bootstrap into all major modules:
  - `video.php` — Online video playback
  - `mtn.php` — Movie Thumbnailer
  - `dirLIST.php` — Directory listing
  - `auul.php` — Auto Upload
  - `audl.php` — Auto Download

### ⚙️ Smart Configuration
- Auto-generates secure secret key with `NOXRL8` prefix
- Bootstrap set as default template
- Simplified install and config flow

---

## 🖥️ Server Compatibility

Tested and working seamlessly with:

- ✅ cPanel / Plesk / DirectAdmin
- ✅ LAMP & LEMP Stacks
- ✅ Shared Hosting
- ✅ VPS & Dedicated Servers
- ✅ Cloud Platforms: AWS, DigitalOcean, Google Cloud

---

## 📋 Requirements

- **PHP**: 8.0+
- **Web Server**: Apache / Nginx
- **PHP Extensions**:
  - cURL
  - OpenSSL
  - Zip
  - GD (optional for thumbnails)
- **File Permissions**: Writable access to `/configs`, `/files`, `/templates`

---

## 🚀 Installation Guide

1. **Upload Files**
   ```bash
   # Upload all project files to your server
   ```

2. **Set Permissions**
   ```bash
   chmod 755 configs/
   chmod 644 configs/*
   chmod 755 files/
   chmod 755 templates/
   ```

3. **Run Setup**
   - Navigate to `http://yourdomain.com/configs/setup.php`
   - Complete configuration steps
   - Secret key and template are auto-set

4. **Start Using**
   - Access: `http://yourdomain.com/index.php`
   - Login with configured credentials

---

## 🎯 Features

### Core
- Multi-host download support (100+ services)
- Batch auto-download & upload
- Integrated video player & thumbnail generator
- Directory file browser
- File link checker

### UI/UX
- Mobile-friendly responsive design
- Bootstrap theme with Light/Dark mode
- Touch-optimized interface
- Clean and fast modern UI

---

## 🔧 Configuration Details

### `configs/setup.php`
- Choose download directory
- Set preferred template (Bootstrap is default)
- Manage login and premium accounts

### Template Editing
- Files: `templates/bootstrap/`
- Customize: `styles/modern-theme.css`, `main.php`

---

## 🎨 Custom Theme Support

Bootstrap theme allows:
- CSS variables for color customization
- Grid-based responsive layout
- JavaScript toggle for Light/Dark mode

```css
/* Example - modern-theme.css */
:root {
  --primary-color: #007bff;
  --secondary-color: #6c757d;
  --success-color: #28a745;
}
```

---

## 🛡️ Security Features

- Secure, auto-generated secret keys
- Session-based login
- File type and path validation
- Directory protection via `.htaccess`

---

## 📱 Mobile Support

- Responsive layout adapts to all screen sizes
- Touch-optimized UI components
- Optimized for low-bandwidth networks
- Swipe/gesture support for navigation

---

## 🔍 Troubleshooting

### Common Fixes

- **PHP 8 Errors**: Check ternary syntax and deprecated functions
- **Template Issues**: Ensure `TEMPLATE_DIR` is correctly defined and permissions are set
- **Permissions**:
  ```bash
  chmod -R 755 configs/ files/ templates/
  chown -R www-data:www-data *
  ```

---

## 🤝 Contributing

1. Fork the repo
2. Create a new branch
3. Make your changes
4. Test thoroughly
5. Open a Pull Request (PR)

---

## 📄 License

Licensed under [GNU General Public License v2.0](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html) — based on the original RapidLeech license.

---

## 🙏 Credits

- **Original Project**: RapidLeech Team
- **Bootstrap Template**: NLMG.inc
- **PHP 8 Migration**: Community Contributors
- **UI/UX Enhancements**: Open-source devs

---

## 📞 Support

- Review the "Troubleshooting" section
- Check config and permission settings
- Verify server meets all requirements

---

**Made with ❤️ for the RapidLeech Community**  
*Bringing classic utility into the modern web with PHP 8 and Bootstrap.*
