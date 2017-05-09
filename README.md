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

### Extras

- Utilizar HyperLedger de blockchain.
- Utilizar autenticación utilizando una base de datos jerárquica como LDAP.

## Ambiente de desarrollo

- PHP para trabajar con la bases de datos
- Mysql Workbench herramienta utilizada para la creacion de la base de datos
- HTML lenguaje requerido para la creacion de la pagina web 
- CSS adicion al HTML permite agregar detalles de diseño a la pagina
- Javascript utilizado para crear funciones ajax
- AJAX medio de comunicacion entre los inputs de html y los datos de php
- Xampp herramienta utilizada para levantar un apache
- Apache Herramienta con la cual sirve el localhost

## Estructuras de datos usadas y funciones



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
  insertar datos, eliminarlos,realizar, donaciones y transfuciones; simplemente presiona en el boton ubicado debajo de cada tabla 
  y rellena los datos.
## Actividades realizadas por estudiante

Se desglosan en el formato: 

Fecha – Cantidad Horas Invertidas - Tarea - Estudiante

- `2 Abril - 1 horas - Creación del Git, inicio del README.md - Gustavo`. 
- `11 Abril - 2 horas - Creación del diseño MySql - Gustavo y Kenneth`. 
- `11 Abril - 2 horas - Arquitectura - Gustavo y Kenneth`. 
- `20 Abril - 4 horas - Creacion HTML - Kenneth`. 
- `7 Mayo - 8 horas - Remodelacion total de pagina web - Kenneth`. 
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
