Estructuras de los Directorios y Archivos

    /uploads: Carpeta donde se almacenarán los archivos subidos. Debe tener permisos de escritura para el servidor web.
    /css: Carpeta opcional para almacenar archivos CSS, si decides agregar estilos a tu página.
    /js: Carpeta opcional para almacenar archivos JavaScript, si decides agregar scripts a tu página.
    /img: Carpeta opcional para almacenar imágenes, si decides agregar imágenes a tu página.
    index.php: Página de login.
    admin.php: Panel de administración.
    upload.php: Script para manejar la subida de archivos.
    reverse_shell.php: Archivo PHP de la reverse shell que se puede subir a través del panel de administración.


    Crear y Configurar los Archivos

    Crear la Estructura de Directorios


- mkdir -p tu_proyecto_web/{uploads,css,js,img}
- cd tu_proyecto_web
- touch index.php admin.php upload.php

Configurar Permisos para la Carpeta uploads

- chmod 777 uploads
