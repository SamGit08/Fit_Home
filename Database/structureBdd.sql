drop table if exists Utilisateur;
drop table if exists Programme;
drop table if exists Exercice;
drop table if exists UtilisateurProgramme;
drop table if exists ProgrammeExercice;


create table Utilisateur (
  id int not null unique primary key auto_increment,
  nom varchar(20) not null,
  prenom varchar(50) not null,
  email varchar (50) not null,
  mdp varchar (50) not null,
  rôle boolean not null
)engine=innodb character set utf8 collate utf8_unicode_ci;


create table Programme (
  id int not null primary key auto_increment,
  nomProgramme text not null,
  conseils text not null,
  utilisateurId int not null,
  foreign key (utilisateurId) references Utilisateur(id)
)engine=innodb character set utf8 collate utf8_unicode_ci;


create table Exercice (
  id int not null primary key auto_increment,
  nomExercice varchar(100) not null,
  details text not null,
  video varchar (200) not null,
  utilisateurId int not null,
  foreign key (utilisateurId) references Utilisateur(id)
)engine=innodb character set utf8 collate utf8_unicode_ci;

create table UtilisateurProgramme (
  utilisateurId int not null unique,
  programmeId int not null,
  foreign key (utilisateurId) references Utilisateur(id),
  foreign key (programmeId) references Programme(id)
)engine=innodb character set utf8 collate utf8_unicode_ci;

create table ProgrammeExercice (
  programmeId int not null,
  exerciceId int not null,
  foreign key (programmeId) references Programme(id),
  foreign key (exerciceId) references Exercice(id)
)engine=innodb character set utf8 collate utf8_unicode_ci;
