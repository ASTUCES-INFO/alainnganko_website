/*==============================================================*/
/* Nom de SGBD :  PostgreSQL 8                                  */
/* Date de création :  28/05/2022 21:42:02                      */
/*==============================================================*/


/*==============================================================*/
/* Table : administrateur                                       */
/*==============================================================*/
create table administrateur (
   idadmin              serial                 not null,
   iddemande            int4                 null,
   pseudo               varchar(254)         not null,
   pass                 varchar(254)         not null,
   constraint pk_administrateur primary key (idadmin)
);

/*==============================================================*/
/* Index : administrateur_pk                                    */
/*==============================================================*/
create unique index administrateur_pk on administrateur (
idadmin
);

/*==============================================================*/
/* Table : demande                                              */
/*==============================================================*/
create table demande (
   iddemande            serial                not null,
   nomprenom            varchar(254)         not null,
   email                varchar(254)         not null,
   telephone            int4                 not null,
   details              varchar(254)         not null,
   constraint pk_demande primary key (iddemande)
);

/*==============================================================*/
/* Index : demande_pk                                           */
/*==============================================================*/
create unique index demande_pk on demande (
iddemande
);

alter table administrateur
   add constraint fk_administ_gerer_demande foreign key (iddemande)
      references demande (iddemande)
      on delete restrict on update restrict;

