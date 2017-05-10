# Progra1 Basesii
Estudiantes:
- Kenneth Sanchez.
- Gustavo González.


## Objetivo 

Realizar una implementación de varios motores de BD que permitan al estudiante adquirir conocimientos en relación a las distintas tecnologías de administración y consulta de Bases de Datos .

## Introducción

El primer proyecto del curso de bases de datos es prácticamente en su totalidad definido por el estudiante, de tal forma que en ellos recae la responsabilidad de encontrar un tema específico o aplicación para el proyecto, su alcance incluye:

- Definición de los requerimientos.
- Diseño de la base de datos.
- Diseño de arquitectura general de software y hardware.
- Diseño de clases.
- Implementación completa de la base de datos.
- Implementación de un 30% del programa.
- Test automático.

### Definición de requerimientos

La definición debe incluir:

- Portada
- Resumen que explique en no más de 2 párrafos que es lo que va a hacer el sistema.
- Listado de módulos: se refiere a los nombres de las pantallas o páginas. o escenas que va a tener la aplicación.
- Para cada módulo debe listar las funciones que indique todo lo que va a hacer en forma concreta, no más de 3 líneas, de ser necesario puede incluir las cosas que el sistema NO va a hacer.

Para escoger el sistema a realizar éste debe cumplir:

- Ser un sistema que requiera una base de datos.
- Que suponiendo que existiera en forma extendida, en 1 año pueda llegar a tener hasta 1 millón de registros en alguna de sus tablas.
- Que requiera de interfazar alguna opción de terceros como: twitter, facebook, móviles, gps, google apps, google maps, reconocimiento de imágenes, entre otros. El profesor deberá aceptar el tipo de interfaz seleccionada.
- Que pueda ser desarrollada una al menos una parte en Java (lenguaje principal requerido, al menos el 50% del proyecto) y otra parte en cualquier otro lenguaje.
- Que la aplicación sea administrada por estados o bien que exista algún elemento dentro de su definición que se comporte por estados. Por ejemplo en un sistema de proveeduría existen los pedidos de artículos dichos pedidos llegan a proveeduría, ellos solicitan las cotizaciones, seleccionan la mejor opción, hacer la orden de compra, reciben la mercadería, la envían a quien la solicito y finalmente notifican a financiero que haga la cancelación de factura. De ello se puede decir que un pedido tiene los siguientes estados: emitido, aceptado, rechazado, en proceso, en compra, recibido, facturado, cancelado.
- Se espera que su sistema o su entidad dentro del sistema posea al menos 3 estados.
- Debe requerir al menos tres bases de datos una en MySQL, otra en MongoDB y otra en Blockchain. Támbien el diseño puede incluir otros motores de Bases de Datos, el profesor deberá de aceptar el motor seleccionado.
- Además uno de los estados debe de incluir en su flujo de aceptación un mecanimos de aprobación utilizando blockchain.

### Diseño de base de datos

- Deberá entregar el diseño de la base de datos usando el modelo entidad relación utilizando una herramienta para dicho fin, por ejemplo: workbench, Erwin o similar que soporte MySql y Oracle respectivamente según se necesite.
- Podrá realizar dos revisiones preliminares del diseño con el profesor antes de la entrega final del diseño.

### Diseño de la arquitectura de software

- Diagrama en que se representen los diferentes dispositivos de hardware, tecnologías de software, componentes de software de la implementación, su interconexión e interacción.
- Podrá hacer una revisión preliminar de éste diagrama.

### Diagrama de clases

- Hacer el diagrama de clases, por capas o componentes de ser necesario utilizando el estándar de UML.
- Puede hacer una revisión preliminar de éste diagrama.

### Implementación de la base de datos

- Deberá implementar todo el diagrama hecho en las bases de datos.
- Adicionalmente todos los stored procedures, vistas, triggers, cursores, funciones y permisos de usuarios necesarios para el uso de la base de datos.
- Hacer los scripts de llenado de datos que sean necesario para llenar tablas misceláneas que se ocupen para la operación del sistema correctamente.
- Deberá contar con:
  - Llaves foráneas y primarias debidamente establecidas.
  - Al menos 2 restricciones o checks.
  - Todos los SP necesarios.
  - El menos 2 triggers.
  - Al menos 1 vista.
  - Al menos 1 función.

### Implementación del 30% del programa
 
 - El estudiante deberá proponer al profesor que partes del sistema va a implementar, en la negociación se podrá decrementar o incrementar lo propuesto, dicho acuerdo deberá quedar documentado en al menos un correo.
- Se hace la implementación en el o los lenguajes requeridos.

### Test Automático

- De la implementación hecha de la aplicación deberá hacer al menos 8 pruebas de caja blanca automáticas utilizando ya sea JUnit o Nunit.
- Deberá hacer al menos 3 pruebas de caja negra automáticas utilizando Test Complete.

### Blockchain

- Deberá de hacer una implementación completa de Blockchain. Esto implica manejo de hash de bloque, menería, distribuir el bloque, tokens, y transacciones.

### Otras consideraciones

Además de las definiciones anteriores tome en cuenta:

- Se evaluará aspectos de diseño, calidad de código, optimización de código.
- Deberá seguir las pautas de calidad de código y el estándar de código adjunto a este enunciado.
- Las revisiones preliminares pueden ser por correo o presenciales.
- Cualquier otra propuesta hecha por el estudiante debe de consultarla con el profesor.

## Ambiente de desarrollo

- PHP para trabajar con la bases de datos
- Mysql Workbench herramienta utilizada para la creacion de la base de datos
- HTML lenguaje requerido para la creacion de la pagina web 
- CSS adicion al HTML permite agregar detalles de diseño a la pagina
- Javascript utilizado para crear funciones ajax
- AJAX medio de comunicacion entre los inputs de html y los datos de php
- Xampp herramienta utilizada para levantar un apache
- Apache Herramienta con la cual sirve el localhost
- Python para GNU/Linux
- PIP para Python

## Estructuras de datos usadas y funciones

### Diseño de la Base de Datos

#### MySql

Debido a sus características relacionales, la base de datos MySql es ideal para la solución de este problema. La base de datos está construida de la siguiente manera:

##### Tabla *persona*

En esta tabla aparecen los datos principales de las personas añadidas a la base de datos. Entre estos datos se encuentran: 

- Nombre.
- Apellidos.
- Cédula.
- Tipo de sangre (A, B, AB, O).
- Rh de la sangre (positivo o negativo).
- Usuario de *Telegram*.
- Fecha de la última donación.

##### Tabla *sedeBanco*

En esta tabla se encuentran solamente las sedes del banco de sangre. Entre los datos de esta se encuentran:

- Nombre de la sede u hospital sede.
- Ubicación geográfica de la misma.

##### Tabla *donacion*

En esta tabla se encuentran los datos de una donación de una persona, efectuada en cierta sede u hospital, aca se encuentran llaves foráneas a otras tablas. Entre los datos de esta tabla se encuentran: 

- Llave foránea a la persona donadora.
- Llave foránea a la sede receptora y almacenadora de dicha donación.
- Fecha de donación.
- Bandera la cual me dice si dicha sangre aún se encuentra en stock o si ya fue sujeto de una transfusión. 

En tabla existe un trigger que después de insertar en esta tabla modifica la fecha de la última donación de la persona asociada (*idPersona*) en la tabla de *persona.*

##### Tabla *listaEspera*

En esta tabla se encuentran los datos de una persona que se encuentra esperando para recibir una tranfución de sangre en cierto banco de sangre u hospital, aca se encuentran llaves foráneas a otras tablas. Entre los datos de esta tabla se encuentran: 

- Llave foránea a la persona receptora.
- Llave foránea a la sede encargada de administrar dicha transfusión.
- Fecha de inscripción en lista de espera. 

##### Tabla *transfucion*

En esta tabla se encuentran los datos de una transfusión de sangre, efectuada en cierta sede u hospital, aca se encuentran llaves foráneas a otras tablas. Entre los datos de esta tabla se encuentran: 

- Identificador de la donación y sus datos.
- Identificador de la lista de espera y sus datos.
- Fecha de la transfusión.

En tabla existe un trigger que después de insertar en esta tabla modifica el estado de *enStock* de la tabla *donación*, marcando así como que la sangre ya no se encuentra disponible. Y también modifica el *esperando* de la tabla *listaEspera* marcando asi que esa persona no necesita mas de la transfusión. 

**NOTA:** Todas las tablas tienen sus llaves primarias identificadoras, las cuales son únicas y  autoincrementables. 


##### Imagen del diseño de la base de datos

![alt text](http://i.imgur.com/Qd4JRMO.png "Diseño")

#### MongoDB

Para *MongoDB* usamos una database generado desde *Python* llamada **basesii**, y en esta se crean 2 colecciones:

##### db.stock

En esta colección guardamos un estado actual de todas las sedes y la cantidad de sangre de cada tipo encontradas en ellas. Acá les queda un ejemplo del *JSON*:

```javascrip
{
 u'_id': ObjectId('59121d084257911be187679f'),
 u'stock': [
            {u'O-': 0, u'O+': 0, u'B-': 0, u'A+': 0, u'AB+': 0, u'A-': 0, u'AB-': 0, u'B+': 0, u'id_hospital': 1, u'nombre': u'Hospital San Vicente de Paul'},
            {u'O-': 0, u'O+': 2, u'B-': 0, u'A+': 0, u'AB+': 0, u'A-': 0, u'AB-': 0, u'B+': 0, u'id_hospital': 2, u'nombre': u'Hospital Mexico'},
            {u'O-': 0, u'O+': 1, u'B-': 0, u'A+': 1, u'AB+': 0, u'A-': 0, u'AB-': 0, u'B+': 0, u'id_hospital': 3, u'nombre': u'Clinica Marcial Fallas'}, 
            {u'O-': 0, u'O+': 0, u'B-': 0, u'A+': 1, u'AB+': 0, u'A-': 0, u'AB-': 0, u'B+': 1, u'id_hospital': 4, u'nombre': u'Hospital San Rafael'}]
}
```
##### db.blockchain

Para la implementación del *blockchain* se uso el *JSON* de la colección **db.stock**. Este se transformó un string el cual se le aplicó un algoritmo de hash y se usó un nounce para que iniciara en *000*. Luego se almacena el hash, el hash del elemento anterior, la fecha con su timestamp actual y el elemento *JSON* del stock. Acá les queda un ejemplo del *JSON*:

```javascrip
{ 
  "_id" : ObjectId("59121cf74257911bc78b07d6"), 
  "anterior" : "000d3edbaeaec1e0e4529c3704fa95f3222e1021f3684671cbfff7dd041ffb60", 
  "hash" : "00043567d97e08232d3ad91f955e4b4ad52774ed9cc44d681b7e6b49a88c28e8", 
  "nounce" : "97", "fecha" : ISODate("2017-05-09T19:48:07.796Z"), 
  "stock" = [ 
    { "O-" : 0, "O+" : 0, "B-" : 0, "A+" : 0, "AB+" : 0, "A-" : 0, "AB-" : 0, "B+" : 0, "id_hospital" : 1, "nombre" : "Hospital San Vicente de Paul" },
    { "O-" : 0, "O+" : 2, "B-" : 0, "A+" : 0, "AB+" : 0, "A-" : 0, "AB-" : 0, "B+" : 0, "id_hospital" : 2, "nombre" : "Hospital Mexico" }, 
    { "O-" : 0, "O+" : 1, "B-" : 0, "A+" : 1, "AB+" : 0, "A-" : 0, "AB-" : 0, "B+" : 0, "id_hospital" : 3, "nombre" : "Clinica Marcial Fallas" }, 
    { "O-" : 0, "O+" : 0, "B-" : 0, "A+" : 1, "AB+" : 0, "A-" : 0, "AB-" : 0, "B+" : 1, "id_hospital" : 4, "nombre" : "Hospital San Rafael" } ] }
```
### Python

Nuestro scrip de *Python* realiza las siguientes tareas:

1. Generamos un scheduler para correr cada cierto tiempo el algoritmo.  
2. Nos conectamos a la base de datos *Mysql*.
3. De los datos extraídos, genero un *Json* para *db.stock* y el mensaje que posteamos en *Twitter*.
4. Salvamos los datos en *MongoDB*.
5. Posteamos el mensaje en *Twitter*.



## Instrucciones para ejecutar el programa
- Primero debera tener instalado xampp para ello puede seguir los siguientes pasos en linux
  wget https://www.apachefriends.org/xampp-files/5.6.30/xampp-linux-x64-5.6.30-1-installer.run
  chmod 755 xampp-linux-*-installer.run
  sudo ./xampp-linux-*-installer.run
  sudo apt-get install php5-mysqlnd

- Una vez instalado al correr el program este abre una ventana, presionar MANAGE SERVERS en la parte superior 
  de la ventana, luego poner "Running" el Apache, con el Apache corriendo regresamos a la ventana inicial y presionamos 
  sobre **** ahi entramos a la carpeta htdocs en la cual se debe copiar y extraer el archivo zip que contiene todo
  el codigo necesario para el programa.
  
- Luego basta con escribir en su navegador localhost/usuariolocal.php para ingresar al sitio principal desde el cual
  debido a su facil menu es muy intuitivo ya que en este podra visualizar los datos de la base y poder realizar consultas,
  insertar datos, eliminarlos,realizar, donaciones y transfuciones; simplemente presiona en el boton ubicado debajo de cada tabla  y rellena los datos.
  
- Para Python solamente completamos los archivos de configuración y corremos el scrip.

`$ wget https://bootstrap.pypa.io/get-pip.py`

`$ python get-pip.py`

`$ wget https://pypi.python.org/packages/27/45/79618f80704497f74f2de1ca62216a5c3ffdbd49f43047c81c30e126a055/setuptools-35.0.2-py2.py3-none-any.whl#md5=54a3dac8fe9b912bb884a485d9a2e9cb`

`$ pip setuptools-35.0.2-py2.py3-none-any.whl`

`$ easy_install twitter`

`$ python -m pip install pymongo`

`$ apt-get install python-pip python-dev libmysqlclient-dev`
  
## Actividades realizadas por estudiante

Se desglosan en el formato: 

Fecha – Cantidad Horas Invertidas - Tarea - Estudiante

- `2 Abril - 1 horas - Creación del Git, inicio del README.md - Gustavo`. 
- `11 Abril - 2 horas - Creación del diseño MySql - Gustavo y Kenneth`. 
- `11 Abril - 2 horas - Arquitectura - Gustavo y Kenneth`. 
- `20 Abril - 4 horas - Creacion HTML - Kenneth`. 
- `6 Mayo - 4 horas - Uso de la API de Twitter - Gustavo`. 
- `7 Mayo - 8 horas - Remodelacion total de pagina web - Kenneth`. 
- `7 Mayo - 6 horas - Modelado he implementación de MongoDB y scrips Python - Gustavo`. 
- `8 Mayo - 8 horas - Implementacion de nuevos codigos php -  Kenneth`.
- `9 Mayo - 5 horas - Update final de la pagina web - Gustavo y Kenneth`.
- `9 Mayo - 2 horas - Update del README.md - Gustavo y Kenneth`. 
- 
## Comentarios finales (estado del programa)

- El programa logra mediante consultas web de momento con caracter local, substraer informacion clave para
  la creacion de un sistema adecuado para las necesidades sobre manejo de donaciones para Costa Rica, en este se 
  puede agregar personas a una lista de donacion, agregar sedes y/o hospitales, tener una lista de donaciones, transfuciones,
  personas en espera y el almacen de sangre que posee cada sede. Mediante el uso de twitter se logro realizar un blockchain que 
  muestra el estado actual en el banco de sangre a todos los involucrados, ademas por medio de blockchain se asegura la credibildiad
  e integridad de los datos en el almacen de las sedes por lo cual todos los cuidadanos pueden conocer cuales son las necesidades
  que sufren hospitales para brindar una ayuda a otros.
  
  Por ultimo el estado del programa se ve y responde de manera bastante robusta pero no se logra comprobar de manera
  explicita ya que no se realizaron los test de caja blanca y negra, sin embargo todos los otros sectores funcionan
  de manera correcta.

## Conclusiones

- Durante el desarrolo del trabajo logramos ver la importancia social de una correcta implementacion 
  para manejo de datos medicos en nuestro pais. Mediante las funciones del programa se logra ver como
  un indivuo puede influenciar sobre una poblacion ayudando muchas vidas. Desde el punto de vista tecnico
  quedamos rezagados en terminos de detalles importantes como rastreo de hospitales con una mayor cantidad 
  de pacientes por lo tanto mayor necesidad, busqueda del tipo de sangre mas solicitado y el mayor escasez,
  entre muchos otros puntos. 

## Bibliografía

- Markdown Cheatsheet. (2016, Febrero 26). Obtenido de https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet .
- Blockchain. By Anders Brownworth. Obtenido de https://anders.com/blockchain/ .
