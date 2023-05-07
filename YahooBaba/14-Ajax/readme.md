# AJAX in PHP -> From (Yahoo Baba) Youtube

AJAX -> Asynchronous Javascript and XML
ajax chya help ne aapan websites, la fast ani dynamic banvu shakto.
ajax ek coding technique ahe.

fast ani dynamic manje kay -> suppose aaplyakad ek website ahe, tya madhe header, footer, navbar he common ahe, pratek page var he asanarch ahe. Mag tyala praket veles load karat basyachi garaz nahi na. Fakt je main content user la pahije aapan tech load karu. Ekadhi news website asali tar tyamadhe aapan fakt news load karun denar user la. Ekadha user news read karat asala ani admin ne new post(news) upload keli, tar user la fakt new post load karavi lagel. He aapan ajax chya help ne karu shakto.

Je kahi apan web development shi related shikat ahot te aaplyala chan ani fast websites banvyala help karnar ahe.

Prior knowledge before lerning ajax

ek server side language, example php, ek databese exmaple mysql.
client side language ex js kiva jquery. hya video series madhe jquery use keli geli ahe,
karan jquery madhe ajax lihyala easy ahe, javascript madhe ajax lihin avaghad ani complicated ahe.
Basic css pan ali pahije.

php ajax with jQuery
$.ajax(); jquery madhe he ek special function ahe, yachya help ne aapan ajax la implement karu shakto kontya pan web page madhe. Jeva pan aapan he function use karto $.ajax() teva ya madhe aalyala kahi parameters pass karave lagtatat. Tyanla aapan attribute manto. ya sathi aaplyala round braces madhe curly braces cha use karav lagto.
$.ajax({});

pahila attribute iithe aapan jo use karto to ahe, url, url manje tya particular file cha nav yeil, jith aaplya form chi kiva aaplya web page chi coding karyachi ahe.
url nantar second parameter (attribute) jo aapan use karto to ahe type. type attribute madhe jar aaplyala get value dyachi asel tar ti aaplyala lihayachi garaz nahi ahe.
Iithe aapan post ani get use karto, jeva kadhi aaplyala database sobat kam asat.
Tisra attribute ahe data, iith apan to data pass karto jo form sobat bhetla ahe. Jo data aaplyala form madhun bhetla ahe, to db madhe store karnya sathi iith pass karav lagto.
3 ways ne aapan ha data pass karu shakto. string, array nahitar js object chya form ne.
last attribute ahe, success.

$.ajax({
url: "file.php",
type: "POST",
data: String/array/object,
success: function(data){

    }

})

# lec 2 -> 147 tutorial -> insert data(records) in db
