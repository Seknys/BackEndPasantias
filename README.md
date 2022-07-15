

#Ejercicios Pasantías (Back-End)




## Introduccion
Los ejercicios fueron realizados principalmente en el framework de Laravel, utilizando los lenguajes de programación Html, Css, JavaScript y Php. Se utilizo le estructura Modelo-Vista-Controlador (MVC) para los dos ejercicios.

## Instalacion de herramientas

Para las herramientas tenemos las siguientes:

- [NodeJs link descarga](https://nodejs.org/en/).
    Seguir los pasos de instalacion sugeridos por el desarrollador.
    Para verificar la correcta instalacion de node ejecutamos el siguiente comando en la terminal
     ```sh
    node -v
    ```


- [XAMPP link descarga](https://www.apachefriends.org/es/index.html).
    Seguir los pasos de instalacion sugeridos por el desarrollador.
    
    

- [Composer link descarga](https://getcomposer.org/download/) 
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
git clone https://github.com/Seknys/BackEndPasantias.git
```

Cuando termine la descarga del repositorio se procede a entrar al directorio del proyecto.

```sh
cd BackEndPasantias
```


Una vez en el respectivo directorio ejecutamos el siguiente comando para abrir visual studio code. ( O lo puede hacer manualmente)

```sh
code .
```



Por ultimo ejecutar el comando para iniciar el servidor

```sh
php artisan serve
```

## Ejecución del ejercicio 

Si todos los pasos fueron ejecutados correctamente no se presentara ningun problema y deberia abrirse una nueva pantalla con un estilo similar al de la imagen.(Nota: el servidor siempre debe estar habilitado para que cualquier funcion pueda ejercutarse)
![image](https://user-images.githubusercontent.com/74793607/179316570-0c3343af-0796-4589-a33c-fac522f143a6.png)

- EN el caso que desee mostrar todos los datos mediante la api solo vaya a la siguiente direccion. 

[api](http://127.0.0.1:8000/api/user)


- Para el primer punto, sin eliminar el url actual añadir la siguiente direccion y modificar "?" por el id que desea buscar.

```sh
/api/user/?
```

- Para el segundo punto, sin eliminar el url original añadir la siguiente direccion y modificar "?" por el puesto(position) que desea buscar.

```sh
/api/users/?
```

Gracias👍.

###### Aspectos importantes.
En el caso de querer revisar las funciones principales y sus respectivas funciones con comentarios porfavor acceder a las siguientes rutas en las carpetas del proyecto.

**App/Http/Controllers/Api/ApiController.php** Programación de todos los endpoint y de la api (Controlador)
**Routes/api.php** Las rutas que se utilizan para acceder a las diferentes apis (Vista)
**Resources/Views** Todas las visatas generadas para el proyecto (HTML)
