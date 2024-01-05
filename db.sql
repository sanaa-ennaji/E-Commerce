CREATE DATABASE IF NOT EXISTS Ecommerce;
USE Ecommerce;

 CREATE TABLE IF NOT EXISTS User (
    ID_User VARCHAR(255) PRIMARY KEY,
    Name VARCHAR(255),
    Email VARCHAR(255),
    Password VARCHAR(255)
 );

  CREATE TABLE IF NOT EXISTS Admin (
    ID_Admin VARCHAR(255) PRIMARY KEY,
    ID_User VARCHAR(255),
    FOREIGN KEY (ID_User) REFERENCES User(ID_User) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS Client (
    ID_Client VARCHAR(255) PRIMARY KEY,
    Address VARCHAR(255),
    ID_User VARCHAR(255),
    FOREIGN KEY (ID_User) REFERENCES User(ID_User) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS Command (
    ID_Command VARCHAR(255) PRIMARY KEY,
    ID_Client VARCHAR(255),
    FOREIGN KEY (ID_Client) REFERENCES Client(ID_Client) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS Pannier (
    ID_Pannier VARCHAR(255) PRIMARY KEY,
    ID_Client VARCHAR(255),
    FOREIGN KEY (ID_Client) REFERENCES Client(ID_Client) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS Facture (
    ID_Facture VARCHAR(255) PRIMARY KEY,
    ID_Client VARCHAR(255),
    FOREIGN KEY (ID_Client) REFERENCES Client(ID_Client) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS Category (
    ID_Category VARCHAR(255) PRIMARY KEY,
    Name VARCHAR(255),
    Description VARCHAR(255)
);

  CREATE TABLE IF NOT EXISTS Product (
    ID_Product VARCHAR(255) PRIMARY KEY,
    Name VARCHAR(255),
    Description VARCHAR(255),
    img VARCHAR(255),
    Quantity INT(255),
    Price INT(255),
    ID_Category VARCHAR(255),
    FOREIGN KEY (ID_Category) REFERENCES Category(ID_Category) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS CommandLine (
    ID_Product VARCHAR(255),
    ID_Command VARCHAR(255),
    Quantity_Cmd INT(255),
    ID_Facture VARCHAR(255),
    FOREIGN KEY (ID_Product) REFERENCES Product(ID_Product) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (ID_Command) REFERENCES Command(ID_Command) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (ID_Facture) REFERENCES Facture(ID_Facture) ON DELETE CASCADE ON UPDATE CASCADE

);

  CREATE TABLE IF NOT EXISTS PanierOFProduct (
    ID_Pannier VARCHAR(255),
    ID_Product VARCHAR(255),
    FOREIGN KEY (ID_Pannier) REFERENCES Pannier(ID_Pannier) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (ID_Product) REFERENCES Product(ID_Product) ON DELETE CASCADE ON UPDATE CASCADE

);