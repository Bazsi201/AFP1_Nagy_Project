# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

Jelenleg a megrendelő minden felmérést papíralapon végez, ezzel feleslegesen sok hulladékot termel. Arról nem is beszélve, hogy nagyban megnehezíti az adatok gyors, hatékony kiértékelését. Esetenként megtörténik az is, hogy a kérdőívek egy része, vagy akár egésze elveszik/megsérül. Ezen felmerülő problémákat szeretnénk megoldani, illetve megkönnyteni. A megrendelő mindeképpen online felületet szeretne, amit bárhonnan elérhetnek, könnyen kitölthetnek a felhasználók.

## 2. Vágyálomrendszer leírása

A megrendelő olyan felületet szeretne, ami lehetővé teszi kérdőívek létrehozását, kezelését, kiértékelését és ezeknek eltárolását, anélkül hogy ezekhez személyesen meg kelljen jelenni a felhasználónak. Jelenleg minden korábbi kérdőív eredményét a lefűzött mappákban kell keresni sok évre visszamenőleg, amit programunkban könnyebben megtalálhat. A kérdőív létrehozásakor meg kell tudnunk adni a kérdéseket, illetve a hozzátartozó választási lehetőségeket. Tudnunk kell módosítani a meglévő kérdéseket és választási lehetőségeit, az esetleges elírások gyors megoldása érdekében. Implentálni kell egy belépőrendszert is, ehhez tartozni fog egy jogusultáság rendszer is. A be nem lépett felhasználók csak kitölteni tudják majd a kérdőíveket. A belépett, felhasználói profillal rendelkező felhasználók pedig létrehozni, módosítani, kitölteni és megosztani is tudni fognak. Ezek mellett lehetőségük lesz saját kérdőíveket teljesen, vagy csak néhány kérdés szintjén törölni. Az oldalra bárki regisztrálhat, de a kitöltéshez nem lesz kötelező. A megrendelő továbbá azt szeretné, hogy az alkalmazás alkalmazkodjon az adott eszközön lévő kijelző méretéhez, vagyis reszponzív legyen a felület!

## 3. Jelenlegi üzleti folyamatok modellje

## 4. Igényelt üzleti folyamatok modellje

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 |Jogosultság| Regisztráció |Amennyiben új felhasználó szeretne bejelentkezni, akkor először regisztrálni kell magát! A felhasználó megadja a nevét, e-mail címét és lehetőleg egy erős jelszót, amit a hagyomány szerint kétszer kell megadni. Ha valamelyik hiányzik, vagy az e-mail címmel problémák vannak, akkor a rendszer egy üzenettel értesíti a felhasználót az adott problémáról! |
| K2 | Jogosultság| Bejelentkezés | Amennyiben regisztrált a felhasználó, előbb be kell jelentkeznie, hogy kérdőívet szerkesszen! Ha az e-mail cím, vagy a jelszó nem megfelelő, vagy hiányos valamelyik adat, akkor hibaüzenetet kap a felhasználó! |
| K3| Felület | Kérdőív létrehozás | Ez egy olyan felület, ahol kérdőívet lehet létrehozni! Itt meg kell adni a címet és a célközönséget is! A helyes célközönség kiválasztása növeli a válaszok számát!|
| K4 | Felület | Kérdések felvitele | A kérdőív létrehozása után az adott kérdőívhez a kérdéseket és a lehetséges válaszokat is meg kell adni! |
| K5| Felület | Kitöltő felület | A felhasználó itt tudja a kérdőívet kitölteni és utána megadva a nevét és az e-mail címét eltudja küldeni a válaszokat! |
## 6. Használati esetek

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek
Amennyiben a felhasználó új, akkor beregisztrálja magát! Regisztrációt követően bejelentkezik és amennyiben sikerült, akkor tud a felhasználó kérdőívet létrehozni! A felhasználó megadja a címet és, hogy kiknek van szánva a kérdőív, vagyis a célközönséget! A kérdőív megadása után felviszi a kérdéseket és a hozzátartozó lehetséges válaszokat is!
## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |

## 11 Fogalomszótár
