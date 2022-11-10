# Követelmény specifikáció

## 1. Áttekintés

A Top G's nevű csapat feladata egy olyan felület fejlesztése, ami széleskörben elérhető, egyszerű megoldást nyújt különböző felmérések elvégzésére. Az alkalmazás feladatai közé tartozik kérdőívek létrehozása, kitölthetősége, kezelése, esetleg ezek törlése. Szükség van még a kérdőívek kiértékelésére, az ehhez tartozó felület létrehozására is. A Kérdőív létrehozásakor kötetlen számú kérdés hozzáadásához kell lehetőséget biztosítani, illetve vázat kell adni, hogy a felhasználó könnyen, előképzettség nélkül tudjon önállóan kérdőívet létrehozni. Mindenképpen szükséges még egy bejelentkező felület is, amiben a be nem lépett felhaználók korlátozott jogokat kapnak (nem hozhatnak létre, vagy törölhetnek kérést/kérdőívet, csak kitölteni tudják ezeket. Az felület fontosságához hozzájáruk az is, hogy ezzel megszabadulhatnak a felesleges papír pazarlástól (papír alapú kérdőívek), senkinek sem kell egy fix helyen lenni a kitöltéshez és még a hatékonyság is nőni fog

## 2. A jelenlegi helyzet leírása

Jelenleg a megrendelő minden felmérést papíralapon végez, ezzel feleslegesen sok hulladékot termel. Arról nem is beszélve, hogy nagyban megnehezíti az adatok gyors, hatékony kiértékelését. Esetenként megtörténik az is, hogy a kérdőívek egy része, vagy akár egésze elveszik/megsérül. Ezen felmerülő problémákat szeretnénk megoldani, illetve megkönnyteni. A megrendelő mindeképpen online felületet szeretne, amit bárhonnan elérhetnek, könnyen kitölthetnek a felhasználók.

## 3. Vágyálomrendszer

A megrendelő olyan felületet szeretne, ami lehetővé teszi kérdőívek létrehozását, kezelését, kiértékelését és ezeknek eltárolását, anélkül hogy ezekhez személyesen meg kelljen jelenni a felhasználónak. Jelenleg minden korábbi kérdőív eredményét a lefűzött mappákban kell keresni sok évre visszamenőleg, amit programunkban könnyebben megtalálhat. A kérdőív létrehozásakor meg kell tudnunk adni a kérdéseket, illetve a hozzátartozó választási lehetőségeket. Tudnunk kell módosítani a meglévő kérdéseket és választási lehetőségeit, az esetleges elírások gyors megoldása érdekében. Implentálni kell egy belépőrendszert is, ehhez tartozni fog egy jogusultáság rendszer is. A be nem lépett felhasználók csak kitölteni tudják majd a kérdőíveket. A belépett, felhasználói profillal rendelkező felhasználók pedig létrehozni, módosítani, kitölteni és megosztani is tudni fognak. Ezek mellett lehetőségük lesz saját kérdőíveket teljesen, vagy csak néhány kérdés szintjén törölni. Az oldalra bárki regisztrálhat, de a kitöltéshez nem lesz kötelező. A megrendelő továbbá azt szeretné, hogy az alkalmazás alkalmazkodjon az adott eszközön lévő kijelző méretéhez, vagyis reszponzív legyen a felület!

## 4. Jelenlegi üzleti folyamatok modellje

A jelenlegi renszerben minden kérdőív folyamata úgy kezdődik, hogy létrehoznak egy általános kérdőív sémát. Ezt sokszorosítják és köztereken, plázákban, vagy nagy közönséget megmozgató helyeken osztani kezdik. A kérdőívek nagy része nem kerül vissza, használhatatlan állapotban(ezt a felületen a fix, előremegadott válaszokkal küszöböljük ki) jut vissza. Minden manuális folyamatot automatizálunk, így a kérdőív létrehozásától kezdve a kiértékelésen keresztül minden online fog történni.

## 5. Igényelt üzleti folyamatok modellje

A megrendelő és a felhasználók akár otthon ülve is képes kezelni a kérdőíveket, illetve jogosultságtól függően műveleteket végezni velük. Bárhonnan lekérhetőek az eredmények, statisztikák. Ezzel növelve a kényelmet, illetve a hatékonyságot, hiszen nem kell megvárni az adatok manuális kezelését, illetve nem kell kikeresni a lefűzött mappában ezeket.

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület | Remember me | Tick-box a belépési adatok tárolásának eldöntésére |
| K2 | Felület | Login | A megadott felhasunálónév és jelszó kombináció beléptetése a felületre |
| K3 | Felület | Add new question | Új kérdés hozzáadása a kérdőívhez  |
| K4 | Felület | Register | Új felhasználó hozzáadása a felület adatbázisához |

## 7. Fogalomtár

HTML (Hypertext Markup Language) : A HTML egy olyan nyelv, melyet weboldalak elkészítésére használhatunk. Minden weboldal mögött HTML található.

PHP : egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére.
