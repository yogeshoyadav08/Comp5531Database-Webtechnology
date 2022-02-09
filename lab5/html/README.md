# HTML basics

> Before we begin
This is a beginners html scripting
Little to no CSS 
Focus on HTML scripting

## What is HTML

```bash
1. Hyper Text Markup Languade
2. Not a Programming Language
3. Markup language for creating webpages/documents
4. Building blocks of Web

Note : HTML is used strictly for presentation of your content like text paragraph, header, bubllet list, image or many other things. There is no logic or actual programming.

Programming Language could be Javascript,PHP are responsible for connecting to a backend database, implementing dynamic funcationality etc for your html webpage
```

On Windows - https://www.qualitestgroup.com/resources/knowledge-center/how-to-guide/add-mysql-path-windows/

## Login

```bash
mysql -u root -p
```

## Show Users

```sql
SELECT User, Host FROM mysql.user;
```

## Create User

```sql
CREATE USER 'someuser'@'localhost' IDENTIFIED BY 'somepassword';
```

## Grant All Priveleges On All Databases

```sql
GRANT ALL PRIVILEGES ON * . * TO 'someuser'@'localhost';
FLUSH PRIVILEGES;
```

## Show Grants

```sql
SHOW GRANTS FOR 'someuser'@'localhost';
```

## Remove Grants

```sql
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'someuser'@'localhost';
```

## Delete User

```sql
DROP USER 'someuser'@'localhost';
```

## Exit

```sql
exit;
```

## Show Databases

```sql
SHOW DATABASES
```

## Create Database

```sql
CREATE DATABASE acme;
```

## Delete Database

```sql
DROP DATABASE acme;
```

## Select Database

```sql
USE acme;
```
