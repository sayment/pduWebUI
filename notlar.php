<?php

global değişkenleri fonksiyon içerisinde kullanmak için başına global ifadesi eklenir. 
sabit değerli değişkenler için statik ifadesi kullanılır. 

var_dump() ile değişkenin türünü öğrenebiliriz.

dizileri array() ile tanımlayabilirsin. 
    * $test = array("test", "deneme", 123, true)

strlen()
    string uzunluğu

str_word_count()
    kelime sayar

strrev()
    stringi ters çevirir

strpos("metin", "aranan")
    string içerisinde arama yapma

str_replace("degistirilecek", "istenen", "ana metin")

addcslashes()
addslashes()
    slash \ atayan bir fonksiyon ihtiyaç olursa bakarsın 

chop()
    en sağdaki istenen değeri siler

chunk_split("full string", 1, ".")
    her 1 karakterden sonra nokta bırakır. 
chunk_split("full string", 3, "!")
    her 3 karakterden sonra ! bırakır

print_r(explode(" ", "full string"))
    stringi her biri karakterini diziye çevirir explode metodu
    sonuna rakam parametresi vererek kaç tanesini istediğimizi de belirtebiliriz. 





?>