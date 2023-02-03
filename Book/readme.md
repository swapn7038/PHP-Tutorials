Book name => PHP, MySQL, Javascript & HTML5 For dummies

## Book 6 -> Web Applications

Chapter 1 : Improving Your PHP Programs
-> Automatically Inclusing Helper Functions
-> Reusing Code

This chapter is about making our PHP Programs better & easy to read. Improve and extend our php, create and use helper functions automatically. We'll also see ways to reuse code rather than reinventing it every time we need it.

### Automatically Including Helper Functions

Once our program reach certain level of complexity and length, we find that there are a lot of includes and require_once() functions.

Each time we make new file or try to make something into a common function, we also need to go back through all the programs and add a new require_once().

That can quickly become monotonous. Luckily, there's a way around it.

#### Using auto_prepend_file

auto_prepend_file function is part of our php.ini file, but it's more common to set it in Apache configuration using php_value directive, like so:

<Directory "/my/documentroot/path">
php_value auto_prepend_file "/my/documentroot/path/prependfile.php"
<Directory>

File included with auto_prepend_file is included as if require() function was used.
The practical implication of that means that, if the file being prepended is not found, an error will occur and the program won't continue.

#### Starting sessions with a prepended file

In order to use sessions, we have to call `session_start()` function on every page that will use sessions.
Well, this can be cumbersome, especially if we're trying to tack sessions onto several php programs.
We can use `auto_prepend_file` to call `session_start` and in doing so we don't have to change any other files!

In following exercise, you create two files : one that will be the main file and another containing prepended function to start a session. Prior to performing this exercise, you should ensure that .htaccess files work or that you can alter your Apache web server configuration.

Reatart Apache if you make any change to configuration.

Within the .htaccess file for your document root, place following code:
`php_value auto_prepend_file "prepend.file"`

### Reusing code

### Chapter 2 -> Creating and Using a Web Service

---

What is mean by prepended file ?
What is htaccess.shtml ?

## Book 7 -> PHP & Templates

Index of this book -->

### Chapter 1 -> Configuring PHP

-> understandinf php.ini
-> understanding common configuration changes

### Chapter 2 -> Building template system

-> Template sysetms
-> Building PHP template
-> Extending the Template

#### Understanding the php.ini

-> Behaviour of php is controlled through an initialization file called php.ini
-> Settings such as how sessions are handled, how errors are diaplayed, what modules are available are all controlled through php.ini file.

-> Location of php.ini file varies based on OS & how php was installed. Read book one for location of ini file.

#### Working with php.ini file

-> php.ini file is plain text file and should be edited with plain text editor such as Notepad, Textpad or Vi.

-> php.ini file ki ek copy bana ke rakho usme kuvh edit karne se pehle, badme kuch problem ho gayi to lode lag jayenge.

-> php.ini file me changes karne ka baad apache server ko refresh karna padta he, changes ko activate karne ke liye.

Making changes outside php.ini file
-> Jab bhi ham php.ini file me changes karte unka effect server ke sites pe lag jata he.
Par hame kabhi kabhi changes sirf kuch specific sites par ya infividual page par hi apply karne hote hote he. Isko karne ke 2 tarike he...

Using .htaccess or Apache configuration

---

Notes banate time pe, jo padha he, usko apne words me likhana he.
