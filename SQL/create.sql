/*==============================================================*/
/* Nom de SGBD :  Postgres 14                                   */
/* Date de création :  27/04/2023                               */
/*==============================================================*/

DROP DATABASE if EXISTS php_florian;
CREATE DATABASE php_florian;

drop table if exists __user;

drop table if exists contact;


/*==============================================================*/
/* Table : __user                                              */
/*==============================================================*/
CREATE TABLE __user
(
    id SERIAL PRIMARY KEY NOT NULL,
    pseudo VARCHAR(255) NOT NULL,
    psw VARCHAR(255) NOT NULL
);


/*==============================================================*/
/* Table : contact                                              */
/*==============================================================*/
    CREATE TABLE contact
(
    id SERIAL PRIMARY KEY NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    mail VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(255) NOT NULL,
    birthDay VARCHAR(255) NOT NULL,
    file VARCHAR(255) NOT NULL
);