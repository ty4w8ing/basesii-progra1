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

Usando *MongoDB* almacenaremos los mensajes que se transmitirán a la población en general, esto ya sea vía *Telegram* o *Twitter*. Debido a que *MongoDB* almacena colecciones en formato *JSON*, se crearán 2 colecciones, una para los mensajes y la otra para manejar los traslados de stock entre las sedes u hospitales.

#### Creación de la DB

Utilizamos los siguientes comandos para crear la base de satos y las collecciones:

<pre class="prettyprint notranslate">
&gt; db.dropDatabase()
{ "ok" : 1 }
&gt; use basesii
switched to db basesii
&gt; db.createCollection("mensajes")
{ "ok" : 1 }
&gt; db.createCollection("traslados")
{ "ok" : 1 }
&gt;
</pre>

#### Colección *Mensajes*

En esta collección almacenaremos el *JSON* de los mensajes de la siguiente forma:

<pre class="prettyprint notranslate">
{
	medio: "Telegram",
	receptor: ["@Tavog14","@kmoragas","@quamtics"],
	mensaje: "Buenos dias, se le comunica que el Hospital de Alajuela ocupa recervas de sangre tipo A+, acerquese a donar y ayudenos a salvar vidas",
	fecha: new Date(2017,04,11,16,05)
}
</pre>

A continuación se muentran los datos y su respectiva información:

- Medio: medio de comunicación, ya sea *Telegram* o *Twitter*.
- Receptor: quienes reciben el mensaje (*Telegram*) o el dueño de la cuenta de *Twitter*.
- Mensaje: el mensaje que se envia a los receptores.
- fecha: fecha en la que fue emitido el mensaje.

#### Colección *Traslados*

En esta collección almacenaremos el *JSON* de los traslados de la siguiente forma:

<pre class="prettyprint notranslate">
{
	fecha: new Date(2013,11,10,2,35),
	idDonacion: 126,
	sede_emisora: "Hospital de Heredia",
	sede_receptora: "Hopital Nacional de Niños"
}
</pre>

A continuación se muentran los datos y su respectiva información:

- fecha: fecha del traslado de la sangre.
- idDonacion: llave primaria en la tabla de *MySql donacion*, esto para no perder el dato.
- sede_emisora: sede u hospital de la cual fue extraida la muestra de sangre.
- sede_receptora: sede u hospital a la cual fue trasladada la muestra de sangre.

**NOTA**: en *MongoDB* los id son autogenerables.

### Blockchain

## Diseño de la arquitectura de software

- Diagrama en que se representen los diferentes dispositivos de hardware, tecnologías de software, componentes de software de la implementación, su interconexión e interacción.
- Podrá hacer una revisión preliminar de éste diagrama.

## Diagrama de clases

- Hacer el diagrama de clases, por capas o componentes de ser necesario utilizando el estándar de UML.
- Puede hacer una revisión preliminar de éste diagrama.
