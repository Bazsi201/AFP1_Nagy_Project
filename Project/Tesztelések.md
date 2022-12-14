# Tesztjegyzőkönyv

Tesztelő: Kaponya Martin

Operációs rendszer: Windows 10

Böngészők: Google Chrome, Mozilla Firefox, Opera

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai (Alfa, Béta és Végleges verzió).

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2022.11.24. | Adatbázis működés ellenőrzése. | A táblák és a weblap mezői sikeresen összekapcsolva, adatbázis adatok tárolására kész. | Hibát nem találtam |
| Bejelentkezés | 2022.11.24. | Belépés a már létrehozott fiókkal | A fiókkal sikeresen be tudtam lépni a felületre | Hibát nem találtam |
| Regisztráció | 2022.11.24. | Regisztrálás a weboldalra. | Kért adatok megadása után sikeresen tudtam regisztrálni, de az adatok nem jelentek meg az adatbázisban | A leírt hibát találtam |
| Jogosultság | 2022.11.24. | Jogosultságok kezelése. | A jogosultság kezelés megfelelően működik. | Hibát nem találtam |
| Autentikáció | 2022.11.24. | Csak felhasználói fiók azonosítása után tudjunk kérdőívet létrehozni, törölni, módosítani | Bejelentkezve sikeresen műkődik, kijelentkezve nem lehetséges | Hibát nem találtam |


Az Alfa tesztelés során a minden pont hibátlanul működött, kivéve a regisztráció, amit a további teszteknél javítva lesz.
A következő tesztelés során a többi funkció kerül vizsgálatra, tesztelésre.


## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Bejelentkezési menüpont | 2022.11.25. | Remember me gomb megjegyzi az utolsó belépett felhasználót | Be- majd kijelentkezés után az utolsó belépett felhasználó adatai megjegyésre kerültek | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Add new question gombbal végignavigál minket az új kérdés hozzáadása folyamaton | Gombra kattintva és a lépéseket követve sikeresen létrehoztam egy kérdést | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Create Questionnaire gomb végignavigál a kérdőív létrehozása metóduson | Gombra kattintva létre tudtam hozni kérdőívet | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Az Add question gomb segítségével új kérdést vihetünk az adatbázisba | Gombra kattintva a kívánt kérés végrehajtódik | Hibát nem találtam | 
| Menüpont tesztelés | 2022.11.25. | A Delete question gomb megnyomásakor a kérdés törlődik. | A törlés megtörténik | Hibát nem találtam |
| Megosztási lehetőség tesztelése | 2022.11.25. | Megoszthatóság funkció link segítségével oldható meg. | 1-1 kérdőív a megadott linkkel osztható volt. | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Complete Survey gomb véglegesíti a kérdőívre adott válaszokat. | Gomb megnyomásakor a válaszok rögzítése nem történt meg az adatbázisban | A leírt hibát találtam|
| Frontend | 2022.11.25. | A weboldal megjelenésének vizsgálata | A weboldal designa elfogadható, átlátható. | Hibát nem találtam |
| Backend | 2022.11.25. | A backendben megírt kódok megfelelő működése | A backend kódjai a Complete Survey gomb kódján kívül működnek. | Hibát részlegesen találtam |
| Regisztráció | 2022.11.25. | Regisztrálás a weboldalra. | A gomb megnyomása után az adatok mostmár sikeresen rögzítésre kerülnek. | Hibát nem találtam |

Az Alfa tesztben hibásan működő regisztráció gomb mostmár javítva került tesztelésre.

A Béta teszt elkészült, a letesztelt funkciók megfelelően működtek a weboldalon, kivételt képez a Complete Survey gomb. 

A végleges tesztelésnél prioritást élvez a Béta teszt során még hibásnak titulált funkció, majd újra ellenőrzésre kerülnek az összes funkció.

## Végleges teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2022.12.05. | Adatbázis működés ellenőrzése. | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs | Hibát nem találtam |
| Regisztráció | 2022.12.05. | Regisztrálás a weboldalra. | A funkció korábban javítva lett, a regisztráció megtörténik | Hibát nem találtam |
| Bejelentkezés | 2022.12.05. | Adatbázisban szereplő fiók beléptetése | A fiókkal a belépés sikerült. | Hibát nem találtam |
| Jogosultság | 2022.12.05. | Jogosultságok kezelése vizsgálata. | Be- és be nem lépett felhasználók megfelelő jogosultságokkal jelentkeznek | Hibát nem találtam |
| Autentikáció | 2022.12.05. | Belépett felhasználók jogainak megkülönböztetése | Bejelentkezés nélkül sokkal kevesebb funkció elérhető | Hibát nem találtam |
| Menüpontok | 2022.12.05. | A menüpontok működésének tesztelése | A menüpontok megfelelően működnek. | Hibát nem találtam |
| Megoszthatóság | 2022.12.05. | Kérdőív megosztása link használatával. | Linkkel a kérdőívet meg tudtam osztani. | Hibát nem találtam |
| Frontend | 2022.12.05. | A weboldal megjelenésének tesztelése | A weboldal designa elfogadható, átlátható. | Hibát nem találtam |
| Backend | 2022.12.05. | A backendben megírt kódok megfelelő működése | A backend kódjai tökéletesen működtek. | Hibát nem találtam |
| Menüpont tesztelés | 2022.12.05. | Complete Survey gomb véglegesíti a kérdőívre adott válaszokat. | Gomb megnyomásakor a válaszok rögzítése megtörtént, hiba javítva | Hibát nem találtam |

A végleges teszt lezajlott, minden korábbi hiba javításra került, a program átadásra kész a megrendelőnek.

Tesztelést végezte és írta: Kaponya Martin

Befejezve: 2022.12.05






# Tesztjegyzőkönyv

Tesztelő: Szabó Zsolt

Operációs rendszer: Windows 10

Böngészők: Opera, Google Chrome, Mozilla Firefox

A dokumentumban fel lesz sorolva az elvégzett tesztek kimentele, illetve elvárásai. Alfa, Béta és Végleges verzió külön ki lesz fejtve.

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2022.11.26. | Adatbázis működésének vizsgálata. | Az adatbázis sikeresen eltárolja a beküldött adatokat | Nem találtam problémát. |
| Bejelentkezés | 2022.11.26. | Bejelentkezés létező felhasználóval | A belépés sikeres volt. | Nem találtam problémát. |
| Regisztráció | 2022.11.26. | Regisztrálás a felületre. | A regisztrálás leadása után a kért adatok nem kerülnek be az adatbázisba | Problémát találtam |
| Jogosultság | 2022.11.26. | Jogosultságok kezelése. | A jogosultságok és a jogok megfelően működnek | Nem találtam problémát. |
| Autentikáció | 2022.11.26. | Létrehozás, törlés és módosítás csak bejelentkezve elérhető | A három funkció csak belépés után elérhető. | Nem találtam problémát. |

Az Alfa tesztelés során a regisztráción kívül minden hibátlanul működött, ezt javítás után újboli tesztelés követi.
A következő tesztelés során tesztelésre kerül a többi funkció is.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Bejelentkezési menüpont | 2022.11.29. | A Remember me gombbal tárolhatóvá válik az utolsó belépő | Be- majd kijelentkezés után az utolsó belépés adatai megjegyzésre kerültek. | Nem találtam problémát. |
| Menüpont tesztelés | 2022.11.29. | Add new question gombbal a kérdés létrehozás felület jelenik meg | Gombrakattintás után sikeresen hoztam létre kérdést | Nem találtam problémát. |
| Menüpont tesztelés | 2022.11.29. | Create Questionnaire gombbal megjelenik a kívánt felület | Gombra kattintva létre tudtam hozni kérdőívet | Nem találtam problémát. |
| Menüpont tesztelés | 2022.11.29. | Az Add question gombbal új kérdés szúrható az adatbázisba | Gombra kattintva a feladat végrehajtódik | Nem találtam problémát. | 
| Menüpont tesztelés | 2022.11.29. | A Delete question gomb megnyomásakor a kérdés törlését várjuk. | A törlés megtörténik | Nem találtam problémát. |
| Megosztási lehetőség tesztelése | 2022.11.29. | Link segítségével a kérdőív osztható kell legyen | Linkkel sikeresen megosztottam a kvízt | Nem találtam problémát. |
| Menüpont tesztelés | 2022.11.29. | Complete Survey rögzíti az adott válaszokat | Gomb megnyomásakor a válaszok nem kerültek be az adatbázisban | Problémát találtam |
| Frontend | 2022.11.29. | A weboldal külsejének vizsgálata | A weboldal megjelenése letisztult, átlátható. | Nem találtam problémát. |
| Backend | 2022.11.29. | A backendben megírt kódok működésének vizsgálata | A backend kódjai a Complete Survey gombon kívül működnek | Problémát találtam. |
| Regisztráció | 2022.11.29. | Regisztrálás a weboldalra. | A regisztrált adatok már bekerülnek az adatbázisba | Nem találtam problémát. |

Az Alfa tesztben nem funkcionáló regisztráció gomb javítása megtörtént, tesztelve is lett.

A Béta teszt elkészült, a letesztelt funkciók egy kivétellel (Complete Survey) sikeresen lefutottak.

A végleges tesztelésnél minden funkciót újra letsztelek, illetve megvizsgáljom, hogy az előzőben hibásan működő funkció javítása sikerült-e.

## Végleges teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2022.12.03. | Adatbázis működés ellenőrzése. | A tűblák minden kívánt adatot rögzítenek, kezelnek | Nem találtam problémát. |
| Regisztráció | 2022.12.03. | Regisztrálás a weboldalra. | A funkció javítása sikeres volt, lefut | Nem találtam problémát. |
| Bejelentkezés | 2022.12.03. | Létező fiók beléptetése | A fiókkal a belépés sikerült. | Nem találtam problémát. |
| Jogosultság | 2022.12.03. | Jogosultságok kezelése vizsgálata. | Bejelentkezett felhasználók több funkciót érnek el | Nem találtam problémát. |
| Autentikáció | 2022.12.03. | Belépett felhasználók felismerése | A bejelentkezett felhasználó autentikálása sikeres | Nem találtam problémát. |
| Menüpontok | 2022.12.03. | A menüpontok tesztelése | A menüpontok megfelelően működnek. | Nem találtam problémát. |
| Megoszthatóság | 2022.12.03. | Kérdőív megosztása linkkel | A kérdőív link segítségével megosztható | Nem találtam problémát. |
| Frontend | 2022.12.03. | A weboldal megjelenésének vizsgálata | A weboldal megjelenése letisztult, átlátható. | Nem találtam problémát. |
| Menüpont tesztelés | 2022.12.03. | Complete Survey gomb véglegesíti a kérdőívre adott válaszokat. | A rögzítés megtörténik, a korábbi hiba sikeresen kijavításra került. | Nem találtam problémát. |
| Backend | 2022.12.03. | A backendben megírt kódok megfelelő működése | A backend kódjai tökéletesen működtek. | Nem találtam problémát. |

A végleges teszt lezajlott, koráábbi hibák javításra kerültek, a minden funkció használatra kész.

Tesztelést végezte és írta: Szabó Zsolt

Befejezve: 2022.12.03






# Tesztjegyzőkönyv

Tesztelő: Mihály Balázs

Operációs rendszer: Windows 10

Böngészők: Opera, Google Chrome, Mozilla Firefox

A dokumentumban fel lesz sorolva az elvégzett tesztek kimentele, illetve elvárásai. Alfa, Béta és Végleges verzió külön ki lesz fejtve.

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2022.11.24. | Adatbázis működés ellenőrzése. | A táblák és a weblap mezői sikeresen összekapcsolva, adatbázis adatok tárolására kész. | Hibát nem találtam |
| Bejelentkezés | 2022.11.24. | Belépés a már létrehozott fiókkal | A fiókkal sikeresen be tudtam lépni a felületre | Hibát nem találtam |
| Regisztráció | 2022.11.24. | Regisztrálás a weboldalra. | Kért adatok megadása után sikeresen tudtam regisztrálni, de az adatok nem jelentek meg az adatbázisban | A leírt hibát észleltem |
| Jogosultság | 2022.11.24. | Jogosultságok kezelése. | A jogosultság kezelés megfelelően működik. | Hibát nem találtam |
| Autentikáció | 2022.11.24. | Csak felhasználói fiók azonosítása után tudjunk kérdőívet létrehozni, törölni, módosítani | Bejelentkezve sikeresen műkődik, kijelentkezve nem lehetséges | Hibát nem találtam |

Az Alfa tesztelés során a minden pont hibátlanul működött, kivéve a regisztráció, amit a további teszteknél javítva lesz.
A következő tesztelés során a többi funkció kerül vizsgálatra, tesztelésre.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Bejelentkezési menüpont | 2022.11.25. | Remember me gomb megjegyzi az utolsó belépett felhasználót | Be- majd kijelentkezés után az utolsó belépett felhasználó adatai megjegyésre kerültek | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Add new question gombbal végignavigál minket az új kérdés hozzáadása folyamaton | Gombra kattintva és a lépéseket követve sikeresen létrehoztam egy kérdést | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Create Questionnaire gomb végignavigál a kérdőív létrehozása metóduson | Gombra kattintva létre tudtam hozni kérdőívet | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Az Add question gomb segítségével új kérdést vihetünk az adatbázisba | Gombra kattintva a kívánt kérés végrehajtódik | Hibát nem találtam | 
| Menüpont tesztelés | 2022.11.25. | A Delete question gomb megnyomásakor a kérdés törlődik. | A törlés megtörténik | Hibát nem találtam |
| Megosztási lehetőség teszteése | 2022.11.25. | Megoszthatóság funkció link segítségével oldható meg. | 1-1 kérdőív a megadott linkkel osztható volt. | Hibát nem találtam |
| Menüpont tesztelés | 2022.11.25. | Complete Survey gomb véglegesíti a kérdőívre adott válaszokat. | Gomb megnyomásakor a válaszok rögzítése nem történt meg az adatbázisban | A leírt hibát tapasztaltam|
| Frontend | 2022.11.25. | A weboldal megjelenésének vizsgálata | A weboldal designa elfogadható, átlátható. | Hibát nem találtam |
| Backend | 2022.11.25. | A backendben megírt kódok megfelelő működése | A backend kódjai a Complete Survey gomb kódján kívül működnek. | Hibát részlegesen találtam |
| Regisztráció | 2022.11.25. | Regisztrálás a weboldalra. | A gomb megnyomása után az adatok mostmár sikeresen rögzítésre kerülnek. | Hibát nem találtam |

Az Alfa tesztben hibásan működő regisztráció gomb mostmár javítva került tesztelésre.

A Béta teszt elkészült, a letesztelt funkciók megfelelően működtek a weboldalon, kivételt képez a Complete Survey gomb. 

A végleges tesztelésnél prioritást élvez a Béta teszt során még hibásnak titulált funkció, majd újra ellenőrzésre kerülnek az összes funkció.

## Végleges teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2022.12.07. | Adatbázis működés ellenőrzése. | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs | Hibát nem találtam |
| Regisztráció | 2022.12.07. | Regisztrálás a weboldalra. | A funkció korábban javítva lett, a regisztráció megtörténik | Hibát nem találtam |
| Bejelentkezés | 2022.12.07. | Adatbázisban szereplő fiók beléptetése | A fiókkal a belépés sikerült. | Hibát nem találtam |
| Jogosultság | 2022.12.07. | Jogosultságok kezelése vizsgálata. | Be- és be nem lépett felhasználók megfelelő jogosultságokkal jelentkeznek | Hibát nem találtam |
| Autentikáció | 2022.12.07. | Belépett felhasználók jogainak megkülönböztetése | Bejelentkezés nélkül sokkal kevesebb funkció elérhető | Hibát nem találtam |
| Menüpontok | 2022.12.07. | A menüpontok működésének tesztelése | A menüpontok megfelelően működnek. | Hibát nem találtam |
| Megoszthatóság | 2022.12.07. | Kérdőív megosztása link használatával. | Linkkel a kérdőívet meg tudtam osztani. | Hibát nem találtam |
| Frontend | 2022.12.07. | A weboldal megjelenésének tesztelése | A weboldal designa elfogadható, átlátható. | Hibát nem találtam |
| Backend | 2022.12.07. | A backendben megírt kódok megfelelő működése | A backend kódjai tökéletesen működtek. | Hibát nem találtam |
| Menüpont tesztelés | 2022.12.07. | Complete Survey gomb véglegesíti a kérdőívre adott válaszokat. | Gomb megnyomásakor a válaszok rögzítése megtörtént, hiba javítva | Hibát nem találtam |

A végleges teszt lezajlott, a program átadásra kész a megrendelőnek.

Tesztelést végezte és írta: Mihály Balázs

Befejezve: 2022.12.07
