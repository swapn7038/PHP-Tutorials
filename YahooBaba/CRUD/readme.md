# PHP CRUD (yahoo baba)

## PHP MySQL CRUD - Read Data // Yahoo baba (youtube) // lec-1

Jab bhi ham php ke saath db pe kam karte he, to badicall hum 4 kam karte he.
DB ke andar ham data ko create kr sakte he, uske andar ham sql ki INSERT command ka use kr sakte.
DB me ham data ko read kr sakte, sql me hamare paas SELECT command hoti he data read karne ke liye.
Ham data to update ya delete bhi kr sakte.
Ya data ko update karna.

Inho 4 operations ka first letter utha lo
C => Create
R => Read
U => Update
D => Delete

Jab bhi ham php or mysql ke saath kam kar rahe hote he, hame 3 steps ko follow karna hota he.

1. Connection : Sabse pehle hame php and mysql ka connection banana hota he. Connection successful hone ke baad, ham 2nd step par jate he.
2. Run SQL Query : isme vahi sari sql ki queries aa jayengi jo abhi hamne dekhi. CRUD vale operations.
3. Connection close : 3rd step me ham karte he connection ko close. Jo connection php & mysql ke bich banaya tha usko kam karenge close.

Ye tine steps karne ke liye, php me 3 alag-alag functions aate he.

1. Connection
   For connection we use
   `mysqli_connect(Server Name, User Name, Password, Database Name);`

or

Yaha par hamne jo `i` likha he `mysqli_connect()` me, ham usko hata kar likh sakte.
Matlab ham sirf `mysql_connect()` ko bhi use kr sakte, par problem ye he ki wo thoda slow kam karta he. `mysqli_connect()` function se. `mysqli_connect()` ye updated function he `mysql_connect()` ka.

Ab is function ke andar ham 4 parameters pass karenge.

1st parameter is server name -> yaha par server ka nam, agar website lovally (apne system pe run kr rahe ho) to nam hoga localhost, aaur agar ham ise online server par run kr rahe to yaha pe aayeha website ka naam.

2nd paramter is username.

3rd parameter is password.

4th parameter is database ka naam.

2. Is function ko run karne ke baad ham apne 2nd step ko follow karenge.
   Jo he Run SQL Query

Uske liye function use karenge -> `mysqli_query(Connection name, SQL Query)`

Is function me ham 2 parameters pass karenge.

1. connection name -> first step me jo connection kiya tha, usko ek na, dena hota he. Wahi isme as a name pass kar dena.

2. SQL Query -> isme ham sql ki koi bhi query likhenge. Update, insert, delete ya select ki.

---

3. Second step ke baad, 3rd step -> Close connection.
   `mysqli_close(Connection name)`

Isme bas connection name ka nam pas kar dena.

---

PHP & MySQL ke andar kaam karne ke liye hamare paas 3 alag alag method hote he.

1. MySQLi Procedural -> Jo function hamne upar dekhe wo ise method ke andar aate he.
2. MySQLi Object-oriented -> Ye unke liye he kino php ka oop aata he.
3. PDO -> this is latest method, jo 2 methods upar diye he ye uknse advance or more secure he.

---

CRUD Lec 3 -> Yahoo Baba -> Update Data

Data ko update karne ke liye bhi hame wahi 3 steps follow karne he.
Pehle db connection, uske baad sql ki query, is baar ab query me update query likhenge.
Aaur last step me db close kr denge.

CRUD Lec 4 -> Yahoo Baba -> Update Data
I completed 4 lectures of CRUD, but the last part is not working...

CRUD Lec 5 -> Yahoo Baba -> Delete Data

Now I am not able to see output from echo statement.

---

Small note =>
While using database, dont make any mistake. If you keep db half completed them it will not open another time.

Why I am learning this things.
=> In future I can earn money from these skills. Can get job, and its also a fun to learn this things.
