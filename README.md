# Orobianco WordPress Theme

Este documento proporciona una guía para futuros desarrolladores sobre cómo modificar y trabajar con el tema de WordPress creado para el restaurante Orobianco.

## Requisitos Previos

Asegúrate de tener instalados los siguientes programas:

- Node.js
- PNPM (Gestor de paquetes)
- WordPress

## Instalación

1. Clona el repositorio del tema a tu directorio de temas de WordPress:

   ```sh
   git clone <URL_DEL_REPOSITORIO> wp-content/themes/orobianco

   ```

Navega al directorio del tema:

cd wp-content/themes/orobianco

Instala las dependencias:

```sh
 pnpm install
```

Scripts Disponibles
Desarrollo

    Desarrollo de CSS:

    ```sh

pnpm run dev:css

```
sh

```

Este comando compila los archivos CSS usando Tailwind CSS, genera un archivo bundle.css y observa los cambios en los archivos para recompilar automáticamente.

Desarrollo de JS:

````sh

pnpm run dev:js

```sh

Este comando utiliza Rollup junto con el plugin de TypeScript para compilar los archivos JavaScript y observa los cambios para recompilar automáticamente.

Modo de Desarrollo:

```sh

 pnpm run dev

```sh

 Este comando ejecuta en paralelo los comandos de desarrollo de CSS y JS mencionados anteriormente.

Construcción

 Construcción de la Aplicación:

 ```sh

 pnpm run build

```sh


 Este comando compila los archivos CSS y JS para producción, optimizando los resultados.

Estructura del Proyecto

 main.css: Archivo principal de estilos CSS que utiliza Tailwind CSS.
 bundle.css: Archivo generado que contiene los estilos compilados.
 src/: Directorio que contiene los archivos fuente de JavaScript/TypeScript.

PostCSS

Este proyecto utiliza PostCSS para procesar los archivos CSS. La configuración de PostCSS se encuentra en el archivo package.json bajo la sección postcss. Aquí se utilizan los siguientes plugins:

 postcss-import: Para importar archivos CSS.
 tailwindcss: Para utilizar Tailwind CSS.
 autoprefixer: Para agregar prefijos específicos del navegador.
 cssnano: Para optimizar y minimizar el CSS.

Rollup

Rollup se utiliza como el empaquetador de módulos JavaScript, junto con los siguientes plugins:

 @rollup/plugin-node-resolve: Para resolver módulos desde node_modules.
 @rollup/plugin-terser: Para minimizar los archivos JS.
 @rollup/plugin-typescript: Para compilar archivos TypeScript.

La configuración de Rollup se encuentra en un archivo llamado rollup.config.js.
Modificación del Tema
Estilos

Para modificar los estilos del tema, edita el archivo main.css. Si necesitas agregar más estilos personalizados, puedes hacerlo directamente en este archivo o crear nuevos archivos CSS e importarlos en main.css.
JavaScript/TypeScript

Para modificar el comportamiento del tema, edita los archivos dentro del directorio src/. Asegúrate de que cualquier cambio en los archivos JavaScript/TypeScript esté compilado ejecutando el comando de desarrollo correspondiente.
Contribución

Si deseas contribuir al desarrollo de este tema, por favor sigue los siguientes pasos:

 Haz un fork del repositorio.
 Crea una nueva rama para tu funcionalidad (git checkout -b nueva-funcionalidad).
 Realiza tus cambios y haz commit (git commit -m 'Añadir nueva funcionalidad').
 Sube tus cambios a tu fork (git push origin nueva-funcionalidad).
 Abre un Pull Request.

Soporte

Si tienes alguna pregunta o necesitas soporte, por favor abre un issue en el repositorio o contacta al desarrollador principal del tema.
````
