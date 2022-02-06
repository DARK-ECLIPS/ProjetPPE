CREATE TABLE utilisateur(
	id_utilisateur varchar(15) ,
	nom varchar(25) not null,
	prenom varchar(50) not null,
	sexe varchar(15),
	tel_cel varchar(10) not null,
	pseudo varchar(20) not null, 
	mail_utilisateur varchar(50) not null,
	password varchar(15) not null,
	primary key (id_utilisateur));

CREATE TABLE receptionniste(
	id_utilisateur varchar(15),
	primary key (id_utilisateur),
    	FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur));

CREATE TABLE professeur(
	id_utilisateur varchar(15),
	primary key (id_utilisateur),
    	FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur));


CREATE TABLE equipement(
	id_equipement varchar(10),
	type_equipement varchar(20) not null,
	marque_equipement varchar(15),
	libelle_equipement varchar(20) not null, 
	statut_equipement varchar(10) not null,
	primary key (id_equipement));

CREATE TABLE enseignement(
	id_enseignement serial,
	type_classe varchar(10), // problème ici
	PRIMARY KEY (id_enseignement));

CREATE TABLE classe(
	id_enseignement int,
	libelle_classe varchar(25) not null, 
	nbr_eleve int not null, 
	PRIMARY KEY (id_enseignement, libelle_classe),
	FOREIGN KEY (id_enseignement) REFERENCES enseignement(id_enseignement));

CREATE TABLE matiere(
	id_matiere serial,
	libelle_matiere varchar(25),
	id_enseignement int,
	libelle_classe varchar(25),
	PRIMARY KEY (id_matiere),
	FOREIGN KEY (id_enseignement, libelle_classe) REFERENCES classe(id_enseignement, libelle_classe));
	
CREATE TABLE creneau(
	id_utilisateur varchar(15),
	id_enseignement int,
	libelle_classe varchar(25),
	id_matiere int, 
	edt_jour varchar(10),
	edt_heure_deb varchar(10),
	edt_heure_fin varchar(10),
	salle_de_classe varchar(15) not null,
	PRIMARY KEY (id_utilisateur, id_enseignement, libelle_classe, edt_jour, edt_heure_deb, edt_heure_fin),
	FOREIGN KEY (id_utilisateur) REFERENCES professeur(id_utilisateur),
	FOREIGN KEY (id_matiere) REFERENCES matiere(id_matiere),
	FOREIGN KEY (id_enseignement, libelle_classe) REFERENCES classe(id_enseignement, libelle_classe));



CREATE TABLE options (
	id_option serial,
	libelle_option varchar(50) not null,
	lien varchar(50) not null,
	primary key (id_option));

CREATE TABLE autorisation(
	id_utilisateur varchar(15) not null, 
	id_option serial,
	PRIMARY KEY (id_utilisateur, id_option),
	FOREIGN KEY (id_utilisateur) references utilisateur(id_utilisateur),
	FOREIGN KEY (id_option) references options(id_option));


CREATE TABLE comporte(
	id_option_m int,
	id_option_o int,
	PRIMARY KEY (id_option_m, id_option_o),
	FOREIGN KEY (id_option_m) references options(id_option),
	FOREIGN KEY (id_option_o) references options(id_option));


CREATE TABLE reservation(
	id_reservation serial,
	id_utilisateur varchar(15) not null, 
	jour_semaine varchar(8), 
	type_classe varchar(10), 
	libelle_classe varchar(25),
	date_reservation date,
	heure_reservation varchar(10),
	id_equipement varchar(10),
	PRIMARY KEY (id_reservation),
	FOREIGN KEY (type_classe, libelle_classe) REFERENCES classe(type_classe, libelle_classe),
	FOREIGN KEY (id_utilisateur) references utilisateur(id_utilisateur),
	FOREIGN KEY (id_equipement) references equipement(id_equipement));


 
insert into options (libelle_option, lien) values ('Réservation','');
insert into options (libelle_option, lien) values ('Administration','');
insert into options (libelle_option, lien) values ('Utilisateur','');
insert into options (libelle_option, lien) values ('Ajouter Utilisateur','');
insert into options (libelle_option, lien) values ('Ajouter Réceptionniste','');
insert into options (libelle_option, lien) values ('Ajouter Professeur','');
insert into options (libelle_option, lien) values ('Changer de mot de passe','');
insert into options (libelle_option, lien) values ('Octoyer des droits','');
insert into options (libelle_option, lien) values ('Ajouter équipement','');
insert into options (libelle_option, lien) values ('Réserver un équipement','');
insert into options (libelle_option, lien) values ('Rendre un équipement','');
insert into options (libelle_option, lien) values ('Historique des réservations','');
insert into options (libelle_option, lien) values ('Ajouter matière','');
insert into options (libelle_option, lien) values ('Ajouter classe','');

insert into utilisateur values ('12345678901', 'TRAINING', 'trixie', 'FEMME', '001223344', 'trixie', 'training@lesperseverants.fr', 'test');

insert into utilisateur values ('12345678902', 'BIABIANY', 'Wilfrid', 'HOMME', '001223344', 'dark', 'training@lesperseverants.fr', 'test');

insert into utilisateur values ('32345678902', 'BIABIANY', 'Wilfrid', 'NON-DEFINI', '001223344', 'darkness', 'darkness@lesperseverants.fr', 'test');

insert into professeur VALUE ('12345678902');
insert into receptionniste VALUE ('12345678901');


insert into autorisation values ('12345678901', '4');
insert into autorisation values ('12345678901', '5');
insert into autorisation values ('12345678901', '6');
insert into autorisation values ('12345678901', '7');
insert into autorisation values ('12345678901', '8');
insert into autorisation values ('12345678901', '9');
insert into autorisation values ('12345678901', '10');
insert into autorisation values ('12345678901', '11');
insert into autorisation values ('12345678901', '12');
insert into autorisation values ('12345678901', '13');
insert into autorisation values ('12345678901', '14');


insert into comporte values ('1','12');
insert into comporte values ('3','4');
insert into comporte values ('3','5');
insert into comporte values ('3','6');
insert into comporte values ('3','7');
insert into comporte values ('3','8');
insert into comporte values ('2','9'); 
insert into comporte values ('2','11');
insert into comporte values ('2','13');
insert into comporte values ('1','10');
insert into comporte values ('2','14');

insert into enseignement (type_classe) values ('COLLEGE'), ('LYCEE'), ('BTS');

INSERT INTO classe (id_enseignement, libelle_classe, nbr_eleve) VALUES ('3', 'SIO 2', 32);
INSERT INTO classe (id_enseignement, libelle_classe, nbr_eleve) VALUES ('2', 'Terminal 1', 65);
INSERT INTO classe (id_enseignement, libelle_classe, nbr_eleve) VALUES ('1', '6eme', 12);
INSERT INTO classe (id_enseignement, libelle_classe, nbr_eleve) VALUES ('1', '5eme', 20);

INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Maths', '1', '5eme');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Français', '1', '5eme');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Histoire', '1', '5eme');

INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Français', '1', '6eme');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Histoire', '1', '6eme');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Informatique', '1', '6eme');

INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Maths', '2', 'Terminal 1');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Français', '2', 'Terminal 1');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Histoire', '2', 'Terminal 1');

INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('Maths', '3', 'SIO 2');
INSERT INTO matiere (libelle_matiere, id_enseignement, libelle_classe) VALUES ('D3 BDD', '3', 'SIO 2');