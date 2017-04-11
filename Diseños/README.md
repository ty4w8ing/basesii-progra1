# Diseños
## Diseño de la Base de Datos

### MySql

Debido a sus características relacionales, la base de datos MySql es ideal para la solución de este problema. La base de datos está construida de la siguiente manera:

#### Tabla *persona*

En esta tabla aparecen los datos principales de las personas añadidas a la base de datos. Entre estos datos se encuentran: 

- Nombre.
- Apellidos.
- Cédula.
- Tipo de sangre (A, B, AB, O).
- Rh de la sangre (positivo o negativo).
- Usuario de *Telegram*.
- Fecha de la última donación.

#### Tabla *sedeBanco*

En esta tabla se encuentran solamente las sedes del banco de sangre. Entre los datos de esta se encuentran:

- Nombre de la sede u hospital sede.
- Ubicación geográfica de la misma.

#### Tabla *donacion*

En esta tabla se encuentran los datos de una donación de una persona, efectuada en cierta sede u hospital, aca se encuentran llaves foráneas a otras tablas. Entre los datos de esta tabla se encuentran: 

- Llave foránea a la persona donadora.
- Llave foránea a la sede receptora y almacenadora de dicha donación.
- Fecha de donación.
- Bandera la cual me dice si dicha sangre aún se encuentra en stock o si ya fue sujeto de una transfusión. 

#### Tabla *listaEspera*

En esta tabla se encuentran los datos de una persona que se encuentra esperando para recibir una tranfución de sangre en cierto banco de sangre u hospital, aca se encuentran llaves foráneas a otras tablas. Entre los datos de esta tabla se encuentran: 

- Llave foránea a la persona receptora.
- Llave foránea a la sede encargada de administrar dicha transfusión.
- Fecha de inscripción en lista de espera. 

#### Tabla *transfucion*

En esta tabla se encuentran los datos de una transfusión de sangre, efectuada en cierta sede u hospital, aca se encuentran llaves foráneas a otras tablas. Entre los datos de esta tabla se encuentran: 

- Identificador de la donación y sus datos.
- Identificador de la lista de espera y sus datos.
- Fecha de la transfusión.

**NOTA:** Todas las tablas tienen sus llaves primarias identificadoras, las cuales son únicas y  autoincrementables. 


#### Imagen del diseño de la base de datos

![alt text](http://i.imgur.com/Qd4JRMO.png "Diseño")

### MongoDB


### Blockchain

## Diseño de la arquitectura de software

- Diagrama en que se representen los diferentes dispositivos de hardware, tecnologías de software, componentes de software de la implementación, su interconexión e interacción.
- Podrá hacer una revisión preliminar de éste diagrama.

## Diagrama de clases

- Hacer el diagrama de clases, por capas o componentes de ser necesario utilizando el estándar de UML.
- Puede hacer una revisión preliminar de éste diagrama.
