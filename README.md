# start1
 https://juliu51.github.io/start1/
Duomenų persiuntimas ir Formos

Duomenys į PHP skriptą gali būti perduodami dviem pagrindiniais būdais.

GET metodas

Metodas naudojamas kaip norime gauti informaciją.
Šį metodą mes naudojame visada kreipdamiesi į internetinį puslapį.
Duomenys siunčiami URI eilutėje
http://localhost/index.php?var=value&var2=v2
Duomenys gaunami specifiniame PHP kintamąjame $_GET kaip masyvo elementai,  pvz.:
$_GET['var'];

POST metodas

Metodas naudojamas kaip norime išsiųsti informaciją.
Duomenys siunčiami užklausos antraštėje 
Duomenys gaunami specifiniame PHP kintamajame $_POST kaip masyvo elementai,  pvz.:
$_POST['var'];


UŽDUOTIS

Susikurkite du kintamuosius:
$vardas ir $elpastas

Sukurkite PHP programą kuri išvestų:
<p>Jūsų vardas: <b> (vardo kintamasis) </b></p>
<p>Jūsų el. paštas <b> (el. pašto kintamasis) </b></p>

Naudokite formą:

<form action="" method="get">
Jūsų vardas
<input type="text" name="vardas" value="">
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<input type="submit" value="Išsiųsti">
</form>

Pakeiskite metodą iš GET į POST



Savarankiškos užduotys

1.
Sukurkite žemiau pateikiamą formą:

Suprogramuokite taip, kad duomenys būtų siunčiami į PHP programą ir apskaičiuojama jų sudėtis.
Scriptas turi išvesti: 
Atsiųstų skaičių (x) ir (y) suma lygi  (rezultatas).

2.
Sukurkite formą sudarytą iš pasirinkimų. Paveiksliuką ir klausimus pasirinkite kokius norite.

Pasirinkus teisingą variantą ir paspaudus mygtuką Spėti, apklausos apačioje turėtų atsirasti  vienas iš užrašų:
Jūsų atsakymas neteisingas
arba
Jūsų atsakymas teisingas, tai yra Elnias

3.
Padarykime apklausą sudarytą iš trijų klausimų.



Atsakius į klausimus apklausos viršuje turėtų rodyti:
Jūs atsakėte teisingai į ... klausimus iš 3 ir surinkote ....%.

Šalia paveiksliukų, jei atsakymas pasirinktas teisingai būtų užrašyta: 
Jūs atsakėte teisingai
 jei pasirinktas atsakymas buvo neteisingas, tuomet užrašyta:
Jūs atsakėte neteisingai

4. Komandinis darbas
Sukurkite paveiksliukų principu veikiančią captchą. 
Paveiksliukai kiekvieną kartą perkrovus puslapį turėtų keisti savo poziciją.
Dėl paprastumo naudokite tik dviejų “tipų” paveikslėlius, pvz šunis ir kates arba automobilius ir dviračius ar panašiai
Visi vienu metu rodomi 10 paveiksliukų turi būti skirtingi.
“Robotas” iš generuojamo front end kodo neturi turėti galimybės “atspėti” teisingą variantą 
Mygtuko “Verify” paspaudimo rezultatas -  turėtų būti atsakymas:
Tu esi robotas arba Tu žmogus
