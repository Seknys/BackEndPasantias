<p align="center">Ejercicios Pasantías (Back-End)</p>

<p align="center">

</p>

## Introduccion
Los ejercicios fueron realizados principalmente en el framework de Laravel, utilizando los lenguajes de programación Html, Css, JavaScript y Php. Se utilizo le estructura Modelo-Vista-Controlador (MVC) para los dos ejercicios.

## Instalacion de herramientas

Para las herramientas tenemos las siguientes:

- [NodeJs](https://nodejs.org/en/).
    Seguir los pasos de instalacion sugeridos por el desarrollador.
    Para verificar la correcta instalacion de node ejecutamos el siguiente comando en la terminal
     ```sh
    node -v
    ```

- [XAMPP](https://www.apachefriends.org/es/index.html).
    Seguir los pasos de instalacion sugeridos por el desarrollador.

- [Composer](https://getcomposer.org/download/) 
    Para verificar la correcta instalacion de composer ejecutamos el siguiente comando en la terminal
     ```sh
    composer -v
    ```
- Laravel.
    Para la instalacion de laravel ejecutar el siguiente comando.
     ```sh
    composer global require laravel/installer
    ```




## Preparar el entorno para el programa

Una vez installadas todas las herramientas necesarias se procede a clonar el repositorio mediante el comando.

```sh
git init
```
```sh
git clone https://github.com/Seknys/BackEndPasantias
```

Cuando termine la descarga del repositorio se procede a entrar al directorio del proyecto.

```sh
cd BackEndPasantias
```

Una vez en el respectivo directorio ejecutamos el siguiente comando para abrir visual studio code. ( O lo puede hacer manualmente)

```sh
code .
```

Antes de poder ejecutar el programa se debe instalar las dependencias.

```sh
composer install
```

Buscar el archivo de configuracion de laravel en el directorio de la aplicacion. El archivo tiene el nombre **.env.example**,   copiar toda la informacion dentro de este  y crear un nuevo archivo con el nombre **.env** y pegar la información. Al final deberia tener un archivo .env.example y otro .env .

A continuacion, correr el siguiente comando para generar la clave secreta.

```sh
php artisan key:generate
```

Por ultimo ejecutar el comando para iniciar el servidor

```sh
php artisan serve
```

## Ejecución del ejercicio 

Si todos los pasos fueron ejecutados correctamente no se presentara ningun problema y deberia abrirse una nueva pantalla con un estilo similar al de la imagen.

- Para el primer punto, sin eliminar el url actual añadir la siguiente direccion y modificar "?" por el id que desea buscar.

```sh
/api/user/?
```

- Para el segundo punto, sin eliminar el url original añadir la siguiente direccion y modificar "?" por el puesto(position) que desea buscar.

```sh
/api/users/?
```

Gracias👍.