<p align="center"><a href="https://leantime.posenlinea.net" target="_blank"><img src="./logo_grupo_7_proyecto.webp" width="400" alt="Grupo Logo"></a></p>


## Descripción de proyecto
El proyecto se basa en realizar un punto de venta (POS point of sale).

Este proyecto se realiza utilizando los siguientes aspectos:
 - **Framework:** [Página de Laravel](https://laravel.com)
 - **Librería 1:** [Página de Bootstrap](https://getbootstrap.com)

 ### Para una correcta instalación de desarrollo (Windows)
Partiendo del hecho de tener instalado PHP (Puede ser con XAMPP, pero deben poseer el path configurado), Composer, NPM, MySQL (Puede ser con XAMPP), se deben serguir los siguientes pasos:
 
 - Recordar iniciar sesión en una cuenta GitHub ó emplear una llave SSH
 - **SSH PASO 1:** Si la opción es por SSH KEY, se deben ir a C:/users/<usuario que ustedes emplean>/.ssh
 - **SSH PASO 2:** Abren la terminal en esa carpeta y corren los comandos de la [GUIA SSH](https://docs.github.com/es/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)
 - **SSH PASO 3:** Crean un archivo "sin extensión" llamado "config" y agregan el siguiente código
 
    Host <nombre de la instancia SSH> github.com
        HostName github.com
        PreferredAuthentications publickey
        IdentityFile ~/.ssh/<Nombre establecido en el paso 2)

 - **SSH PASO 4:** Luego realizan el clon con el siguiente comando: git clone git@<Nombre de la instancia SSH>proyecto-dinamita/proyecto_pos.git
    
 - Crear el archivo .env y configurar el entorno, para ello copiar el ejemplo que se posee en el repositorio y a la copia realizarle los cambios requeridos.
 
Recordar realizar la instalación de los componentes requeridos con:
 - composer install
 - npm install
 - npm run dev
 - npm run build
 - php artisan key:generate
 - php artisan migrate

## Enlaces del proyecto
 - [Sistema](https://posenlinea.net)
 - [Repositorio](https://github.com/proyecto-dinamita/proyecto_pos)
 - [Archivos adjuntos en drive](https://drive.google.com/drive/folders/1e172nlWz9hjF8upkPouIMqvHJYhtvtiG?usp=share_link)
 - [Control con leantime](https://leantime.posenlinea.net)
 - **Bajo revisión => **[Diagramación con PlantUML](https://plantuml.com/es/)

## Licencias

- **Laravel emplea la licencia [MIT licence](https://opensource.org/licenses/MIT)**

## Anexos

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
