/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  03/05/2019 15:08:47                      */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists CATEGORIE;

drop table if exists MAGASIN;

drop table if exists PRODUIT;

drop table if exists PRODUITMAGASIN;

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN
(
   IDA                  int not null auto_increment,
   USER                 char(20) not null,
   MDP                  longtext not null,
   DESCRIPTION 				TEXT,
   primary key (IDA)
);
insert into ADMIN (idA,User,Mdp) values(null,'Miora',password_hash('Miora'));

/*==============================================================*/
/* Table : CATEGORIE                                            */
/*==============================================================*/
create table CATEGORIE
(
   IDC                  int not null auto_increment,
   NOM                  char(20),
   primary key (IDC)
);
insert into Categorie (idC,Nom) values (null,'anti_brouillard');
/*==============================================================*/
/* Table : MAGASIN                                              */
/*==============================================================*/
create table MAGASIN
(
   IDM                  int not null auto_increment,
   NOMMAGASIN           char(25),
   primary key (IDM)
);

/*==============================================================*/
/* Table : PRODUIT                                              */
/*==============================================================*/
create table PRODUIT
(
   ID                   int not null auto_increment,
   IDC                  int not null,
   NOM                  char(20) not null,
   primary key (ID)
);

insert into PRODUIT (id,idC,Nom) values (null,1,'Produit1');
insert into PRODUIT (id,idC,Nom) values (null,1,'Produit2');
insert into PRODUIT (id,idC,Nom) values (null,1,'Produit3');
insert into PRODUIT (id,idC,Nom) values (null,1,'Produit4');

/*==============================================================*/
/* Table : PRODUITMAGASIN                                       */
/*==============================================================*/
create table PRODUITMAGASIN
(
   ID                   int not null,
   IDM                  int not null,
   PRIX                 decimal,
   primary key (ID, IDM)
);

alter table PRODUIT add constraint FK_RELATION_1 foreign key (IDC)
      references CATEGORIE (IDC) on delete restrict on update restrict;

alter table PRODUITMAGASIN add constraint FK_PRODUITMAGASIN foreign key (ID)
      references PRODUIT (ID) on delete restrict on update restrict;

alter table PRODUITMAGASIN add constraint FK_PRODUITMAGASIN2 foreign key (IDM)
      references MAGASIN (IDM) on delete restrict on update restrict;
	  
insert into Magasin (idM,NomMagasin) values(null,'Magasin1'); 

insert into ProduitMagasin (id,idM,prix) values (1,1,100);
insert into ProduitMagasin (id,idM,prix) values (2,1,200);
