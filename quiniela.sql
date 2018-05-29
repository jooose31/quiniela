CREATE TABLE equipos(
  ide integer,
  puntos integer,
  pais char(20),
  grupo char(1),
  bandera varchar(100),
  primary key (id)
);

CREATE TABLE partidos(
  idp varchar(100),
  lugar varchar(100),
  fechahora datetime,
  ideu integer,
  goleu integer,
  ided integer,
  goled integer,
  fase varchar(100),
  primary key(idp),
  foreign key(ideu) references equipos,
  foreign key(ided) references equipos,
);

CREATE TABLE participantes(
  email varchar(100),
  pass varchar(100),
  puntos integer,
  nombre varchar(100),
  primary key (emailp)
);

CREATE TABLE quiniela(
  ge1 integer,
  ge2 integer,
  idp varchar(100),
  email varchar(100),
  primary key(email,idp),
  foreign key(email) references participantes,
  foreign key (idp) references partidos
);
