## MySQL

Installation Method 1:

1.  Installing XAMP, WAMP, MAMP
    Or
2.  MySQL Workbench

Method 2:

1.  MySQL Community Server
2.  MySQL Workbench

How to create table in MySQL?

1.  We need name of the table. Every table must have a unique name.
2.  We need nomber of columns ans their name too.
3.  We also need data type of an column's. Ex: string, numeric

Command used to create command

1.  CREATE TABLE table_name(column1 data_type,column2 data_type, column2 data_type);

Data types in SQL

1.  String
2.  Numeric
3.  Date and Time

All the data we receive, it will be in above form only.

String Data types.

1. char(size) 0 to 255
2. varchar(size) 0 to 65,535
3. binary(size)
4. varbinary(size)
5. tinytext() 255 characters, fixed
6. text(size) 65,535 bytes
7. mediumtext() 16,777,216 characters
8. longtext() 4,294,967,295 characters
9. blob(size)
10. mediumblob() 16,777,215 bytes
11. longbyte 4,294,967,295 bytes
12. enum(val1, val2, val3, ...)
13. set(val1, val2, val3, ...)

Numeric Data types in mysql or sql

1. bit
2. tinyint
3. int
4. integer
5. smallin
6. mediumint
7. bigint
8. bool
9. boolean
10. float
11. double
12. decimal
13. dec

Date & Time Datatypes

1. date '1000-01-01' to '9999-12-31'
2. datetime(fsp) yyyy-mm-dd hh:mm:ss
3. timestamp(fsp)
4. time(fsp) hh:mm:ss
5. year four-digit format: 1901

## Learn MySQL 4 : INSERT

Syntax ->
INSERT INTO table_name(col1, col2, col3, col4, col5)
VALUES (value1, value, value3, value4, value5 );

Example ->

INSERT INTO personal(id, name, birth_date, phone, gender)
VALUES (1, "swapnil shelke","2003-05-30", "9857463547", "M");
Data inserted (row inserted)

INSERT INTO personal(id, name, birth_date, phone, gender)
VALUES (2, "Ajay Kale","2002-02-10", "9852433647", "M");
Data inserted (row inserted)

## Learn MySQL 5 : INSERT Multiple Rows at a Time

Syntax ->
INSERT INTO table_name (column1, column2, column3, column4, ... )
VALUES (value1, value2, value3, value4, ...),  
VALUES (value1, value2, value3, value4, ...),  
VALUES (value1, value2, value3, value4, ...),  
VALUES (value1, value2, value3, value4, ...);

Example ->
INSERT INTO personal(id, name, birth_date, phone, gender)
VALUES (3, "Shrushti Patil", "2001-01-21", "9595959595", "F"),
VALUES (4, "Aashay Patil", "2001-01-21", "9595959595", "M"),
VALUES (5, "Riya Jadhav", "2002-05-17", "8390593821", "F"),
VALUES (6, "Akashay Autade", "2001-01-21", "9595959595", "M"),
VALUES (7, "Sahil Samrut", "1991-01-21", "9595959595", "M");

Rows inserted / Data inseted

## Learn MySQL 6 : Constraints

List of Constraints in MySQL

1. NOT NULL
2. UNIQUE
3. DEFAULT
4. CHECK

---

5. FOREIGN KEY
6. PRIMARY KEY

Constraints means restriction, restriction upon data tables in our database.

Suppose we didnt use constraints & user forget to give id, age, address then also data will get submitted, and that's not the good thing.
Data can also be dublicated, because we did not provide restrictions.

For id and gender we can use constraint NOT NULL. NOT NULL means there should be any value, these cannot be null.

Suppose in the age column we want the user should be above 18 only, there we can use CHECK() constraint.
Example ->
CHECK(age >= 18)

Now we want, our phone number, id or email should be unique, there we can use UNIQUE Constraint.

Suppose for address we want to set default value, as delhi there we use Constraint called
DEGAULT 'Delhi'.

We need to use constraints while creating the table.

Syntax to use Constraints ->
CREATE TABLE ATBLE_NAME(
id INT NOT NULL UNIQUE,
name VARCHAR(50) NOT NULL,
age INT NOT NULL CHECK (age >= 18),
gender VARCHAR(10) NOT NULL,
phone VARCHAR(10) NOT NULL UNIQUE,
city VARCHAR(10) NOT NULL DEFAULT 'Delhi',
);

Example ->
CREATE TABLE personal(
id INT NOT NULL UNIQUE,
name VARCHAR(50) NOT NULL,
age INT NOT NULL CHECK (age >= 18),
gender VARCHAR(10) NOT NULL,
phone VARCHAR(10) NOT NULL UNIQUE,
city VARCHAR(15) NOTN NULL DEFAULT 'Delhi',
);

This will create the table named personal, with id, name, age, gender, phone and city columns.

Now insert data into this table.

INSERT INTO personal (id, name, age, gender, phone, city)
VALUES (8, "name surname", 20, "M", "9595955959", "Agra");

## Learn MySQL 7 : SELECT

Until now we learn to create table and to insert data into table.

In this chapter we are going to learn about how to show the data with the help of SQL
We use SELECT Command to show the data.

Syntax ->
SELECT column1, column2, column3, ...
FROM table_name;

Here we specified only col1, col2 and col3. This will show data only from three columns.
But what if we want to see data from all columns, we will use \* .

Syntax to show all data ->

SELECT \* (use only asteric here)
FROM table_name;

Example ->
SELECT \*(only asteric) FROM personal;

Example ->
SELECT id, name, age, phone
FROM personal;

How to use AS
AS Id, AS Student, AS Phone

SELECT id AS Id, name AS Student, age, phone AS Phone
FROM personal;

We use double quotes here ->
SELECT id AS Id, name AS "Student Name", age, phone AS Phone
FROM personal;

SELECT Data with WHERE Clause

This helps us to see data with particular condition.
Exmaple from our database we just want to see students above age of 20, or we just want to see students with gender female only. We can use WHERE clause with SELECT

Syntax to use -> SELECT with WHERE Clause
SELECT col1, col2, col3, ...
FROM table_name
WHERE condition;

or

SELECT asteric(\*)
FROM table_name
WHERE condition;

WHERE Comparison Operators
(Google it)

Example ->

1.  SELECT \* FROM personal
    WHERE gender = "F";

This will show data with only female gender.

Example -> 2.
SELECT \* FROM personal
WHERE gender = "M";

This will show data with only male gender.

Example -> 3.
SELECT \* FROM personal
WHERE age = 20;

This will show data with age of 20.

Example -> 4.
SELECT \* FROM personal
WHERE city = 'Agra';

This will show data with city Agra only.

Example -> 5.
SELECT \* FROM personal
WHERE city <> 'Agra';

This will show data with exception of Agra, data which not have Agra in it.

## Learn MySQL 8 : MySQL AND, OR, NOT Operators

SELECT with AND or OR Operator Syntax ->

1.  SELECT col1, col2, col3, ...
    FROM table_name
    WHERE condition1 AND condition2 AND consition3, ...

2.  SELECT col1, col2, col3, ...
    FROM table_name
    WHERE condition1 OR condition2 OR consition3, ...

SELECT with AND or OR Operator Example ->

1.  SELECT \* FROM personal
    WHERE age >= 10 AND <= age <= 21;

2.  SELECT \* FROM personal
    WHERE age <= 20 AND gender = "M";

3.  SELECT \* FROM personal
    WHERE age <= 20 AND gender = "M" AND city = "Agra";

4.  SELECT \* FROM personal
    WHERE age = 20 OR city = "Agra";

5.  SELECT \* FROM personal
    WHERE (city = "Delhi" OR city = "Agra") AND gender = "M";

6.  SELECT \* FROM personal
    WHERE NOT age >= 20;

Records less than 20.
Not operator condition ko ulta bana deta he.

---

---

## Learn MySQL 9 : MySQL IN Operators

SELECT Data with IN Operator

WHERE Age = 18 OR Age = 21
or
WHERE Age IN(18, 21)

SELECT with IN Operator Syntax

1.  SELECT col1, col2, col3, ...
    FROM table_name
    WHERE column_name IN (value1, value2, value3, ...);

2.  SELECT col1, col2, col3, ...
    FROM table_name
    WHERE column_name NOT IN (value1, value2, value3, ...);

Example ->

1.  SELECT \* FROM personal
    WHERE age IN (18, 21);

This will show us the results which have age values of 18 and 21.

2.  SELECT \* FROM personal
    WHERE age IN (18, 19, 21);
    This will show us the results which have age values of 18, 19 and 21.

3.  SELECT \* FROM personal
    WHERE age NOT IN (18, 19, 21);
    Now, suppose we want the result to show the values of students who dont have age of 18, 19 and 21.
    Means those students have 18, 19 and 21 age values they will not show to us.

4.  SELECT \* FROM personal
    WHERE city IN ("Delhi", "Bhopal");
    These will show the records which only have city values of delhi and bhopal.
5.  SELECT \* FROM personal
    WHERE id IN (1, 5, 8);

## Learn MySQL 10 : MySQL Between Operators

SELECT Data with BETWEEN Operator

WHERE Age BETWEEN 18 AND 20
These will show data (age) detween 18 to 20 range.

WHERE DOB BETWEEN 1998-01-01 AND 1998-06-30

Syntax for BETWEEN Operator With Syntax

1. ->
   SELECT col1, col2, col3, ...
   FROM table_name
   WHERE col_name BETWEEN value1 AND value2;

2. ->
   SELECT col1, col2, col3, ...
   FROM table_name
   WHERE col_name NOT BETWEEN value1 AND value2;

Example ->

1. -> SELECT `*` FROM personal
   WHERE age BETWEEN 18 AND 20;

   These will show age between 18 to 20.

2. -> SELECT `*` FROM personal
   WHERE age NOT BETWEEN 18 AND 20;

   These will not show age between 18 to 20.

3. -> SELECT `*` FROM personal
   WHERE id BETWEEN 2 AND 5;

   These will show data of students from id 2 to 5.

4. -> SELECT `*` FROM personal
   WHERE id NOT BETWEEN 2 AND 5;

   These will not show data of students from id 2 to 5. And show all other data.

   We can use here strings also. Ex below ->

5. ->
   SELECT `*` FROM personal
   WHERE name BETWEEN "a" AND "k";

   Show records between a and k .

6. ->
   SELECT `*` FROM personal
   WHERE name BETWEEN "anil" AND "kamal";
   Show records between a and k .

7. ->
   SELECT `*` FROM personal
   WHERE DOB BETWEEN 1995-01-01 AND 2001-01-01;

Show records between 1995 to 2001.

## Learn MySQL 11 : MySQL LIKE Operators

SELECT Data with LIKE Operator.

Syntax ->

1. ->
   SELECT col1, col2, col3, ...
   FROM tble_name
   WHERE column_name LIKE pattern;

2. ->
   SELECT col1, col2, col3, ...
   FROM table_name
   WHERE column_name NOT LIKE pattern;

Example ->

1. ->
   SELECT \* FROM personal
   WHERE name LIKE "s%";

Names starting from "s" will be printed.

2. ->
   SELECT \* FROM personal
   WHERE name LIKE "a%";

Names starting from "a" will be printed.

3. ->
   SELECT \* FROM personal
   WHERE name LIKE "ram%";

Names with "ram" will be printed.

4. ->
   SELECT \* FROM personal
   WHERE name LIKE "%am%";

These will print names containing rm anywhere in the word.

5. ->
   SELECT \* FROM personal
   WHERE name LIKE "r%" OR name LIKE "s%";

These will print names starting from r and s.

6. ->
   SELECT \* FROM personal
   WHERE name NOT LIKE "r%" OR name LIKE "s%";

These will print names which does not contain r and s.

7. ->
   SELECT \* FROM personal
   WHERE BINARY name LIKE "r%";

These is case sensitive.
Only show result if the name starts from small r.
These will print names which.

8. ->
   SELECT \* FROM personal
   WHERE name LIKE "%r";

Show result if name ends with small r.

## Learn MySQL 12 : MySQL Regular Expression

## ![alt text](../Image%2Bnotes/Reg%20Ex-1.jpeg)

## ![alt text](../Image%2Bnotes/Reg%20Ex-2.jpeg)

## ![alt text](../Image%2Bnotes/Reg%20Ex-3.jpeg)

## ![alt text](../Image%2Bnotes/Reg%20Ex-4.jpeg)

## ![alt text](../Image%2Bnotes/Reg%20Ex-5.jpeg)

## ![alt text](../Image%2Bnotes/Reg%20Ex-6.jpeg)

## Add images here from phone, written in book.

## Progress

28-01-23
(Yahoo Baba -> Learn MySQL -> Youtube )
Lectures complete 4, 5, 6, 7, 8, 9, 10, 11, 12
