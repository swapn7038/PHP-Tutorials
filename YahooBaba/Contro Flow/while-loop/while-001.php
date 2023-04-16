<?php

// man lijiye ki hamari program ki requirement he 
// ki hame ek hi statement bar-bar print karani he
// jab aaaise requirement ho to ham use karte he loops ka
// loops sari programming languages me available hote he

// simple syntax for the loop ->
// loop(5 Times) {
//     echo "Our statements";
//     each "Our code";
// }

// loop is divided in three parts
// 1. Initialization -> Loop ko start karna, 
// loop ko start karne ke liye ham ek variable ko value assign karte he, 
// jahase hame loop chalana he

// 2. Condition -> loop ki initialization kiye jis variable se, 
// us variable ke upar ham ek condition lagate he, har condition ke 2 hi result ho sakte he, 
// ya to wo true hoga ya false, agar condition false ho gayi to wo out of the loop chala jayega, 
// agar condition ho jati he true, to wo loop ke andar aayega

// 3. Increment/ Decrement -> Increment matlab loop ko aayege chalana, 
// to loop dubara se condition ke side pe aayega, 
// agar condition true ho jati he to loop firse se chalega, 
// firse se statemnt ko print karega, firse increment karega, 
// firse condition check karega, aaise hi loop tabtak chalta rahega, 
// jabtak condition false nahi ho jati

// php ke andar 4 type ke loop hote he
// 1. while loop
// 2. do/while loop
// 3. for loop
// 4. forEach loop

$a = 1; // initialization
while($a <= 10){ // condition
    echo "Swapnil shelke" . "<br>";
    $a = $a + 1; // increment
}

?>