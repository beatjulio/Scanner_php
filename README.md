# Scanner-PHP

DESCRIPCION
Esta es la página Web que funge como la pagina administradora, es bastante simple de usar y muy intuitivo y simple de usar, en esta pagina se crearan los boletos que con la aplicacion móvil se complementa, tambien puedes crear nuevos eventos, y poder ver las tablas consultando los eventos,los boletos registrados,los boletos creados y aparte se ingluye un juego para pasar el tiempo

PROBLEMA
Se necesiataba uan forma para crear los boletos QR segun los eventos requeridos, asi como una forma de poder visualiza el registro de los boltos por todos los eventos y el registro de accesos creados 

SOLUCION
Se creo esta aplicacion la cual cumple con las necesidades de escanear los codigos QR y ademas devuelve un resultado mostrando el Nombre del Evento, El nombre del lugar del evento, el tipo de boleto y la fecha del evento

ARQUITECTURA

Página Principal

Descripcion:
http://portaljulio.com/Scanner/Admin/
En esta seccion se podrá acceder a todas las paginas del sitio web como lo son:

•	Nuevo Evento
•	Generar Boletos
•	Consultar Boletos
•	Consultar Boletos por Persona
•	Consultar Registro de Accesos
•	Pasar el rato


Generar Boletos

Descripcion:
http://portaljulio.com/Scanner/Admin/nuevoEvento.php
Esta sección integrada por una tabla y un Formulario usado para registrar nuevos eventos 

Formulario:
•	Nombre (El nombre del evento a registrar)
•	Fecha Inicio (La fecha de inicio de cada evento)
•	Fecha Fin (Fecha Fin de cada evento)
•	Lugar (Lugar en donde se llevará acabo el Evento)
Tabla:
Representa todos los eventos registrados esto para evitar que el cliente registre un evento repetido

Generar Eventos

Descripción:
http://portaljulio.com/Scanner/Admin/generarQR.php
En esta sección integrada por una tabla la cual representa los eventos Registrados y así mismo se puede exportar en un archivo de Excel

Formulario:
•	Numero de Impresiones(El numero de boletos deseados)
•	Evento(El nombre del Evento)
•	Común(Tipo de Servicio)

Consultar Boletos por Evento

Descripción:
http://portaljulio.com/Scanner/Admin/consultaEvento.php
En esta sección integrada por una tabla la cual representa los Boletos Creados y así mismo se puede exportar en un archivo de Excel


Consultar Boletos por Persona

Descripción:
http://portaljulio.com/Scanner/Admin/consultaRegistroBoleto.php
En esta sección integrada por una tabla la cual representa los Boletos Creados y así mismo se puede exportar en un archivo de Excel


Consultar Registro de Accesos

Descripción:
http://portaljulio.com/Scanner/Admin/consultaRegistroUsuario.php
En esta sección integrada por una tabla la cual representa los Boletos que accesaron a los eventos y así mismo se puede exportar en un archivo de Excel


Pasar el rato

Descripción:
http://portaljulio.com/Scanner/Admin/Juego.php
Esta sección es integrada por un videojuego desarrollado en Action Script

  
REQUERMIENTOS

Navegador con Flash Actualizado:
-Acceso a Internet
-Servidor con base Linux
-Base de datos MySQL

INSTALACION

-Descargar el proyecto
-Cambiar variables de acceso a base de datos

EJECTAR PRUBAS RAPIDAS:

-Accesar a la pagina http://portaljulio.com/Scanner/Admin/index.php


EJECUTAR PRUEBAS MANUALES:

-Descargar el proyecto
-cambiar las variables las cuales apuntan a la base de datos
-Cargar los archivos en el servidor
-Acceder a la direccion donde alojaste los archivos

CONFIGURACION

-Modificar las variables de acceso a la base de datos 

SECCION DE REFERENCIA PARA USUARIO Y ADMINISTRADOR:

1. Crear eventos

2. Crear Boletos

3.Consultar las bases
3.1 Consultar base de Eventos
3.2 Consultar base de Boletos impresos
3.3 Consultar base de Registro de Accesos

4. Jugar Videojuego


REQUERIMIENTOS FUTUROS:
-Detalles Visuales











