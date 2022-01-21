function primeraMayuscula($dato){
    //retorna el dato con la primera en mayusculas.
    return ucfirst($dato);
}

function reemplazar($valorBuscado,$valorReemplazar){
    //le das que buscas una a, y que muestre una e
    $valorBuscado = 'Bienvenidos a manuales tareas PHP';
    $valorReemplazar = str_replace('manuales', ' ', $valorBuscado);
    echo $valorReemplazar; //Bienvenidos a tareas PHP
}

function mostrarMes($fecha){
    //envias la fecha y retornas el mes en castellano
    $fecha = date("d M,Y");
    echo $fecha;

    setlocale(LC_ALL,"es_ES");
    echo strftime("El mes es %B");
}

function phpinfo(){
    //muestre la version de php y la version del servidor
    phpinfo();
}

function numeroPrimo($numero){
    //retorna si el numero introducido es primo o no

    if($numero == 1 || $numero == 2 || $numero == 3 || $numero == 5 || $numero == 7){
	    return true;
    }
    if($numero >= 8 ){
		if ($numero%2==0 || $numero%3==0 || $numero%5==0) {
		return false;
		}
		}
    if($numero >= 8 ){
		if ($numero%2>=1 || $numero%3>=1 || $numero%5>=1) {
		return true;
		}
}
}

function bisiesto($año){
    //retorna si el año es bisiesto o no
    return date('L',mktime(1,1,1,1,1,$año));
}
