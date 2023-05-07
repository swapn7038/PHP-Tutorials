### PHP Filter Validations Tutorials Yahoo Baba -> Video No. : 167

Suppose hamare pas ek form he, usse ham user ka name, age, email and website ka url get karna chahte he.
Aaise forms hamare websites me common hi hote he.
Ham user se expect kar rahe hote he ki wo sahi information hi dalega, par aaisa hamesha nahi hota na...
Kai bar user se jald-bazi me galti bhi ho sakti he, suppose usse age ke input box me integer value dalni thi par galti se usne float value dal di...
Email ke input box me ho sakta he ki wo `.` ki jagah par / dal de...
Website ke url me ho sakta he ki wo space dal de...

To iss tarah ki mistakes jo he wo hoti rehti he. To jab ham form ko save karane lagte he db ke andar to usse pehle ham ise validate karne lagte he.

Ab jaise ham name get kara rahe he wo ek string value he, age get kara rahe he wo ek integer value he. To iss tarah ki values ko check karne ke liye php ke andar allready kuch functions available he. Pichali video me bhi dekha tha, jaha hame is functions samje the, waha par hamne is_int, is_string functions bhi skihe the, jaha se ham integer value ko check kar sakte the.

Magar jam ham bat kare email address ki, jab email address me koi galti ho jati he to usko validate karne me koi function nahi aata, us ke liye ham regular expression use kar sakte he, par wo kafi complex ho jate he.
Jaisa upar hamne dekha ki website ke url me space aa jato he to, usko kaise ham check kr sakte he.

To iss tarah ki jitni bhi complex validations hoti he, uske liye php me special functions aate he use ham kehte
he filters...
In filters ki help se jitni bhi complex validations hoti he unhe ham badi aasani se kar sakte he.

To jabbhi php ke andar validations lagani hoti he, to ek function aata he hamare paas `filter_var()`
`filter_var(variable,filtername, options/flag)`

1st parameter -> variable, php form se ham jo bhi values get karenge, usse ham kisi na kisi variable me store karenge, ussi variable ko ham yaha pass kar denge, ham yahaa direct value bhi pass kar skte he

2nd parameter -> filter ka name, jo bhi value hamne lagai he, uske according hame filter lagana hota he yaha par, to php ke andar hamare paas alag alag tarike ke filter aate he

1. FILTER_VALIDATE_INT
2. FILTER_VALIDATE_FLOAT
3. FILTER_VALIDATE_BOOLEAN
4. FILTER_VALIFATE_EMAIL
5. FILTER_VALIFATE_URL
6. FILTER_VALIFATE_IP
7. FILTER_VALIFATE_MAC
8. FILTER_VALIFATE_REGEXP

3rd parameter -> options/flags, jo options hongi wo 2nd parameters pe depend karenge. int aaur float ke liye options alag honge, email - url wagera ke liye options alag honge...
Flags ka basically matlab kya hota he ki, man lijiye ke ham yaha ek condition laga rahe he url ki, url jo he wo user ne dala he wo proper he ya nahi, ab aap usi ke saath ek aaur information get karna chahte he ki user ne saath me query string pass ki he ya nahi, to uske liye ham yaha flas use kar sakte he...

---

### PHP Filter Functions

1. filter_has_var()
2. filter_id()
3. filter_input()
4. filter_input_array()
5. filter_var()
6. filter_var_array()

---

1. filter_has_var()
   =>Checks whether a variable of a specified input type exist

2. filter_id()
   => Returns the filter ID of a specified filter name

3. filter_input()
   => Gets an external variable (e.g. from form input) and optionally filters it

4. filter_input_array()
   => Gets external variables (e.g. from form input) and optionally filters them

5. filter_list()
   => Returns a list of all supported filter names

6. filter_var()
   => Filters a variable with a specified filter

7. filter_var_array()
   => Gets multiple variables and filter them

---

### Questions

1. var_dump()

---

PHP Predefined Filter Constants

INPUT_POST -> POST variables
INPUT_GET -> GET variables
INPUT_COOKIE -> COOKIE variables
INPUT_ENV -> ENV variables
INPUT_SERVER -> SERVER variables
FILTER_DEFAULT Do nothing, optionally strip/encode special characters. Equivalent to FILTER_UNSAFE_RAW
FILTER_FLAG_NONE Allows no flags
FILTER_FLAG_ALLOW_OCTAL Only for inputs that starts with a zero (0) as octal numbers. This only allows the succeeding digits to be 0-7
FILTER_FLAG_ALLOW_HEX Only for inputs that starts with 0x/0X as hexadecimal numbers. This only allows succeeding characters to be a-fA-F0-9
FILTER_FLAG_STRIP_LOW Strip characters with ASCII value lower than 32
FILTER_FLAG_STRIP_HIGH Strip characters with ASCII value greater than 127
FILTER_FLAG_ENCODE_LOW Encode characters with ASCII value lower than 32
FILTER_FLAG_ENCODE_HIGH Encode characters with ASCII value greater than 127
FILTER_FLAG_ENCODE_AMP Encode &
FILTER_FLAG_NO_ENCODE_QUOTES Do not encode ' and "
FILTER_FLAG_EMPTY_STRING_NULL Not in use
FILTER_FLAG_ALLOW_FRACTION Allows a period (.) as a fractional separator in numbers
FILTER_FLAG_ALLOW_THOUSAND Allows a comma (,) as a thousands separator in numbers
FILTER_FLAG_ALLOW_SCIENTIFIC Allows an e or E for scientific notation in numbers
FILTER_FLAG_PATH_REQUIRED The URL must contain a path part
FILTER_FLAG_QUERY_REQUIRED The URL must contain a query string
FILTER_FLAG_IPV4 Allows the IP address to be in IPv4 format
FILTER_FLAG_IPV6 Allows the IP address to be in IPv6 format
FILTER_FLAG_NO_RES_RANGE Fails validation for the reserved IPv4 ranges: 0.0.0.0/8, 169.254.0.0/16, 127.0.0.0/8 and 240.0.0.0/4, and for the reserved IPv6 ranges: ::1/128, ::/128, ::ffff:0:0/96 and fe80::/10
FILTER_FLAG_NO_PRIV_RANGE Fails validation for the private IPv4 ranges: 10.0.0.0/8, 172.16.0.0/12 and 192.168.0.0/16, and for the IPv6 addresses starting with FD or FC
FILTER_FLAG_EMAIL_UNICODE Allows the local part of the email address to contain Unicode characters
FILTER_REQUIRE_SCALAR The value must be a scalar
FILTER_REQUIRE_ARRAY The value must be an array
FILTER_FORCE_ARRAY Treats a scalar value as array with the scalar value as only element
FILTER_NULL_ON_FAILURE Return NULL on failure for unrecognized boolean values
FILTER_VALIDATE_BOOLEAN Validates a boolean
FILTER_VALIDATE_EMAIL Validates value as a valid e-mail address
FILTER_VALIDATE_FLOAT Validates value as float
FILTER_VALIDATE_INT Validates value as integer
FILTER_VALIDATE_IP Validates value as IP address
FILTER_VALIDATE_MAC Validates value as MAC address
FILTER_VALIDATE_REGEXP Validates value against a regular expression
FILTER_VALIDATE_URL Validates value as URL
FILTER_SANITIZE_EMAIL Removes all illegal characters from an e-mail address
FILTER_SANITIZE_ENCODED Removes/Encodes special characters
FILTER_SANITIZE_MAGIC_QUOTES Apply addslashes()
FILTER_SANITIZE_NUMBER_FLOAT Remove all characters, except digits, +- signs, and optionally .,eE
FILTER_SANITIZE_NUMBER_INT Removes all characters except digits and + - signs
FILTER_SANITIZE_SPECIAL_CHARS Removes special characters
FILTER_SANITIZE_STRING Removes tags/special characters from a string
FILTER_SANITIZE_STRIPPED Alias of FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL Removes all illegal character from a URL
FILTER_UNSAFE_RAW Do nothing, optionally strip/encode special characters
FILTER_CALLBACK Call a user-defined function to filter data

---

how to use INPUT_POST in php

In PHP, `$_POST` is a superglobal variable that is used to collect data that is submitted through an HTML form using the HTTP POST method. You can use the INPUT_POST constant with the filter_input() function to access specific POST variables. Here's an example:

.php
// Get the value of the 'username' input field
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

// Get the value of the 'email' input field
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
In the example above, filter_input() function takes three arguments:

INPUT_POST specifies that we want to retrieve the value from the POST request.
'username' and 'email' are the names of the input fields in the HTML form.
FILTER_SANITIZE_STRING and FILTER_SANITIZE_EMAIL are filters that sanitize the input values.
You can use various other filters to sanitize and validate input values. You can learn more about the filter_input() function and the available filters in the PHP documentation.

What is mean by santize in php

In PHP, sanitization refers to the process of cleaning and validating user input data to ensure that it is safe to use and free from any malicious or unexpected characters or code. Sanitization is important because user input can be unpredictable and can contain harmful code, which can lead to security vulnerabilities such as SQL injection attacks, cross-site scripting (XSS) attacks, and other types of vulnerabilities.

PHP provides a range of functions and filters that you can use to sanitize user input data. These functions and filters can remove unwanted characters, escape special characters, and validate input values against expected formats. For example, the FILTER_SANITIZE_STRING filter can remove any tags and special characters from a string, while the FILTER_SANITIZE_EMAIL filter can remove any non-email characters from an email address.

Sanitizing user input data is an essential security measure that helps prevent security vulnerabilities and ensure the safety of your application and its users.
