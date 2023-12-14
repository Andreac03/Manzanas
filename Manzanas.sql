
-- Active: 1698622805286@@127.0.0.1@3306
CREATE DATABASE Manzanas2 DEFAULT CHARACTER SET = 'utf8mb4';
USE Manzanas2;
  CREATE TABLE Beneficiarios (
        Id_Beneficiario INT(10) PRIMARY KEY,
        Tipo_Documento VARCHAR(20),
        Numero_Documento INT(10),
        Nombres BIGINT(20),
        Apellidos BIGINT(20),
        Telefono INT(10),
        E_meil VARCHAR(30),
        Ciudad VARCHAR(70),
        Direccion VARCHAR(50),
        Ocupacion VARCHAR(20),
        ManzanasId_Manzana INT(10)
    );
    CREATE TABLE Manzanas(
        Id_Manzana INT(10) PRIMARY KEY,
        Nombre VARCHAR(35),
        Localidad VARCHAR(35),
        Direccion VARCHAR(90),
        Municipio VARCHAR(15)
    );
    CREATE TABLE Manzanas_Servicio(
        Dia DATE ,
        Hora TIME,
        Manzanas_Id INT(10),
        ServicioCod_Servicio INT(10)
       );
    

    CREATE TABLE Servicios(
        Id_Servicio  INT(10) PRIMARY KEY,
        Nombre VARCHAR(20),
        Descripcion VARCHAR(35),
        Categoria_de_Servicio VARCHAR(30),
        Tipo_de_Servico VARCHAR(20),
        EstablecimientoId_Establecimiento INT(10)
    ); 
    
    CREATE TABLE EstablecimientoS(
        Id_Establecimiento INT(10) PRIMARY KEY,
        Nombre VARCHAR(20),
        Responsalble VARCHAR(20),
        Direccion VARCHAR(30)    
     ); 
     ALTER TABLE Beneficiarios
     ADD CONSTRAINT FKManzana_2 FOREIGN KEY ( ManzanasId_Manzana) REFERENCES manzanas (Id_Manzana);

     
    ALTER TABLE Manzanas_Servicio 
       ADD CONSTRAINT FKManzana_0 FOREIGN KEY (Manzanas_Id) REFERENCES manzanas (Id_Manzana),
       ADD CONSTRAINT FKManzana_1 FOREIGN KEY (ServicioCod_Servicio) REFERENCES Servicios (Id_Servicio);

    ALTER TABLE Servicios
      ADD CONSTRAINT FKServicio_3 FOREIGN KEY (EstablecimientoId_Establecimiento) REFERENCES EstablecimientoS (Id_Establecimiento);