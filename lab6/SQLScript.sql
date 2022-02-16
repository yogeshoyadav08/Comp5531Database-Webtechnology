create database UserDetails;

CREATE TABLE User 
( 
User_ID int AUTO_INCREMENT, 
User_Name varchar(50), 
User_Email varchar(50), 
User_Age varchar(20),
PRIMARY KEY (User_ID)
);

SELECT * FROM userdetails.user;