drop database if exists restoran;

create database restoran default character set utf8;

#"c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < c:\Users\ivink\Downloads\restoran.sql"

use restoran;

create table narucitelj(
sifra int not null primary key auto_increment,
ime varchar(20) not null,
prezime varchar(30) not null,
oib varchar(11),
email varchar(30) not null
);

create table narudzba(
sifra int not null primary key auto_increment,
narucitelj int,
datum datetime not null,
brojstolica int not null,
napomena varchar(50)
);

create table jelo(
sifra int not null primary key auto_increment,
naziv varchar(20) not null,
opis varchar(30) not null,
cijena decimal(18,2) not null
);

create table jeloartikl(
jelo int,
artikl int,
kolicina int not null
);

create table artikl(
sifra int not null primary key auto_increment,
naziv varchar(20) not null,
kategorija int,
opis varchar(30) not null,
cijena decimal(18,2) not null
);

create table kategorija(
sifra int not null primary key auto_increment,
naziv varchar(20) not null
);


create table narudzbajela(
narudzba int,
jelo int
);

alter table narudzba add foreign key (narucitelj) references narucitelj(sifra);
alter table jeloartikl add foreign key (jelo) references jelo(sifra);
alter table jeloartikl add foreign key (artikl) references artikl(sifra);
alter table artikl add foreign key (kategorija) references kategorija(sifra);
alter table narudzbajela add foreign key (narudzba) references narudzba(sifra);
alter table narudzbajela add foreign key (jelo) references jelo(sifra);

insert into narucitelj(sifra, ime, prezime, oib, email) values
(null,'Kara','Marko','09823176399','karamarko@gmail.com'),
(null,'Ko','Linda','34272689103','kolinda1@gmail.com'),
(null,'Vesna','Pisarović','63589201924','vpisarovic@net.hr'),
(null,'Da','Bar','37652901239','dabar007@hotmail.com');

insert into jelo(sifra, naziv, opis, cijena) values 
(null,'Ćevapi','10 ćevapa,domaća lepinja, luk',25.00),
(null,'Punjena pljeskavica','pljeskavica punjena sa sirom, pommes',40.00),
(null,'Pileća prsa','file pilećih prsa, pekarski krumpir, umak',55.00),
(null,'Pileća krilca','pileća krilca 500g, curry umak, grill umak, lepinjice sa sirom',65.00);

insert into narudzba(sifra, narucitelj,datum, brojstolica, napomena) values
(null,1,'2018-08-10',50,'Imam svoju rakiju'),
(null,2,'2018-07-17',20,'Puno luka'),
(null,3,'2018-06-22',35,'Tortu donosim');

insert into kategorija(sifra,naziv)values
(null,'hrana'),
(null,'piće'),
(null,'salata'),
(null,'kolač'),
(null,'torta'),
(null,'juha');


insert into artikl(sifra, naziv, kategorija, opis,cijena)values
(null,'Fanta',2,'gazirani sok',11.00),
(null,'Juha s gljivama',6,'gljive, luk, češnjak, vrhnje za kuhanj',15.00),
(null,'Slavonska',1,'rajčica, sir, gljive, šunka, slanina, kobasica, luk, feferoni',55.00);

insert into narudzbajela(narudzba, jelo)values
(2,1),(3,4),(1,2);

select * from narucitelj;
select * from jelo;
select * from narudzba;
select * from kategorija;
select * from artikl;
select * from narudzbajela;