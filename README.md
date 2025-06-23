
---

# SMDigital - Tema WordPress Personalizado

Este es un tema de WordPress personalizado llamado **SMDigital**, creado desde cero y utilizando **Tailwind CSS** para el diseño visual.

---

## 🚀 Tecnologías utilizadas

- WordPress
- PHP
- Tailwind CSS v4.1 (usando PostCSS)
- JavaScript

---

## 📦 Instalación del proyecto

1. Clona o descarga este repositorio dentro de la carpeta `/wp-content/themes/` de tu instalación de WordPress:
```bash
git clone https://github.com/tu-usuario/smdigital-wp.git
```
2. Desde la terminal, accede a la carpeta del tema:
```bash
cd smdigital-wp
```
3. Instala las dependencias de desarrollo:
```bash
npm install
```
## 🧵 Compilar los estilos con Tailwind
Para compilar los estilos de Tailwind CSS en modo desarrollo con watch:
```bash
npm run watch:css
```
> Este comando compila desde assets/css/style.css hacia assets/css/main.css.

## 📁 Estructura del tema
```bash
gymfitness/
├── assets/
│   ├── css/
│   └── js/
├── includes/
├── template-parts/
├── functions.php
├── style.css
└── ...
```
## 📝 Notas
* No se incluye node_modules/ en este repositorio.

* Recordá activar el tema desde el administrador de WordPress.

* Requiere una instalación local de WordPress (por ejemplo, con Laragon o LocalWP).


