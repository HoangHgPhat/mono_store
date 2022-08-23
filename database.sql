create database gcs0905b;
use gcs0905b;

create table producers
(
	producerID int auto_increment primary key,
    producerName varchar(30) not null unique,
    producerCountry varchar(30) null
);


create table products
(
	productID varchar(5) not null primary key,
    productName varchar(50) not null,
    productPrice int not null,
    productDetails varchar(3000) null,
    productImage1 varchar(30) not null,
    productImage2 varchar(30) null,
    productImage3 varchar(30) null,
    producerID int not null,
    constraint foreign key (producerID) references producers(producerID)
);

-- insert data
insert into producers(producerName) values
('Apple Watch'), ('iPhone'), ('iPad'), ('Mac');



 
insert into products(productID, productName, productPrice, 
                    productImage1, producerID) values
('P001', 'Samsung Galaxy S22', 560, 'product01.jpg', 1),
('P002', 'Samsung Galaxy S22 Ultra', 950, 'product02.jpg', 1),
('P003', 'iPhone 13 Pro Max 128GB', 1350, 'product03.jpg', 2),
('P004', 'iPhone 13 Pro', 900, 'product04.jpg', 2),
('P005', 'Samsung Galaxy Fold 3 256GB', 1670, 'product05.jpg', 1);



create table customers
(
	CustomerID varchar(10) not null primary key,
    CustomerPass varchar(300) not null,
    CustomerFullname varchar(50) not null,
    CustomerEmail varchar(50) null
);

create table admins
(
	adminID varchar(10) not null primary key,
    adminPass varchar(300) not null,
    adminFullname varchar(50) not null
);
insert into admins(adminID, adminPass,adminFullname)
    value('admin','$2y$10$YiCrfp7qXxwt6nmn/9t4Euibip1Fu.ok1u3ngwiTCfADlvtaxsiKy','tiendat');

SELECT * from producers;
drop database gcs0905b;


 
