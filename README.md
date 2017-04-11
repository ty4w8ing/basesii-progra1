# Progra1 Basesii
Estudiantes:
- Kenneth Arias.
- Gustavo González.
- áéíóúñ para copy paste - quitar

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
## Estructuras de datos usadas y funciones
## Instrucciones para ejecutar el programa
## Actividades realizadas por estudiante

Se desglosan en el formato: 

Fecha – Cantidad Horas Invertidas - Tarea - Estudiante

- `2 Abril - 1 hora - Creación del Git, inicio del README.md - Gustavo`. 

## Comentarios finales (estado del programa)
## Conclusiones
## Bibliografía

- Markdown Cheatsheet. (2016, Febrero 26). Obtenido de https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet .
