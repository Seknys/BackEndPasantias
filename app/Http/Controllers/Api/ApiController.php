<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


class ApiController extends Controller
{
    public function index() //Permite mostrar todos los usuarios y una respuesta personalizada con el status y code
    {
        $students = $this->getJson();
        return response()->json([
            'response' => $students,
            'status' => 'success',
            'code' => 200
        ]);
    }


    public function show($id) //Muestra un usuario en especifico dependiendo del id ingresado, si no lo encuentra muestra error 400
    {
        $user = $this->parseJsonToArray();

        //Retorna la informacion de un estudiante en especifico
        foreach ($user as $student) {
            if ($student['id'] == $id) {
                return response()->json([
                    'response' => $student,
                    'status' => 'success',
                    'code' => 200
                ]);
            }
        }
        return response()->json([
            'response' => 'Student not found',
            'status' => 'error',
            'code' => 400
        ]);
    }


    public function position($position) //Muestra todos los usuarios dependiendo de la posicion ingresada, si no la encuentra muestra un array vacio y error 400
    {

        $user = $this->parseJsonToArray();
        
        $userPosition = array();
        //Retorna todos los estudiantes dependiendo de la posicion ingresada y los almacena en un array
        foreach ($user as $student) {
            if ($student['position'] == $position) {
                $userPosition[] = $student;
            }
        }


        //Verificar si el arreglo no esta vacio muestra los datos, si esta vacio muestra un error 400 y el array vacio
        if (count($userPosition) > 0) {
            return response()->json([
                'response' => $userPosition,
                'status' => 'success',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'response' => $userPosition,
                'status' => 'error',
                'code' => 400
            ]);
        }
    }


    function getJson() //Funcion para obtener todos los datos del json en el directorio storage/app/user.json
    {
        $json = json_decode(file_get_contents(storage_path() . '/app/users.json'), true);
        return $json;
    }

    function parseJsonToArray() //Funcion para convertir el json en un array  para poder manipuplarlo mas facilmente 
                                //(Nota: se modifico el archivo user.json añadiendo el valor avatar en el usuario 1 para no tener problemas con los demas usuarios)
    {
        $students = $this->getJson();
        $data = array();
        foreach ($students as $student) {
            //Revisar si el avatar es nulo o vacio, si es asi le asigna un valor por defecto
            if ($student['avatar'] == null) {
                $student['avatar'] = 'https://www.w3schools.com/howto/img_avatar.png';
            }

            $data[] = array(
                'id' => $student['id'],
                'name' => $student['name'],
                'email' => $student['email'],
                'phone' => $student['phone'],
                'address' => $student['address'],
                'position' => $student['position'],
                'avatar' => $student['avatar']

            );
        }
        
        return $data;
    }
}
