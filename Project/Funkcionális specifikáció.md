# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

Jelenleg a megrendelő minden felmérést papíralapon végez, ezzel feleslegesen sok hulladékot termel. Arról nem is beszélve, hogy nagyban megnehezíti az adatok gyors, hatékony kiértékelését. Esetenként megtörténik az is, hogy a kérdőívek egy része, vagy akár egésze elveszik/megsérül. Ezen felmerülő problémákat szeretnénk megoldani, illetve megkönnyteni. A megrendelő mindeképpen online felületet szeretne, amit bárhonnan elérhetnek, könnyen kitölthetnek a felhasználók.

## 2. Vágyálomrendszer leírása

A megrendelő olyan felületet szeretne, ami lehetővé teszi kérdőívek létrehozását, kezelését, kiértékelését és ezeknek eltárolását, anélkül hogy ezekhez személyesen meg kelljen jelenni a felhasználónak. Jelenleg minden korábbi kérdőív eredményét a lefűzött mappákban kell keresni sok évre visszamenőleg, amit programunkban könnyebben megtalálhat. A kérdőív létrehozásakor meg kell tudnunk adni a kérdéseket, illetve a hozzátartozó választási lehetőségeket. Tudnunk kell módosítani a meglévő kérdéseket és választási lehetőségeit, az esetleges elírások gyors megoldása érdekében. Implentálni kell egy belépőrendszert is, ehhez tartozni fog egy jogusultáság rendszer is. A be nem lépett felhasználók csak kitölteni tudják majd a kérdőíveket. A belépett, felhasználói profillal rendelkező felhasználók pedig létrehozni, módosítani, kitölteni és megosztani is tudni fognak. Ezek mellett lehetőségük lesz saját kérdőíveket teljesen, vagy csak néhány kérdés szintjén törölni. Az oldalra bárki regisztrálhat, de a kitöltéshez nem lesz kötelező. A megrendelő továbbá azt szeretné, hogy az alkalmazás alkalmazkodjon az adott eszközön lévő kijelző méretéhez, vagyis reszponzív legyen a felület!

## 3. Jelenlegi üzleti folyamatok modellje

A jelenlegi renszerben minden kérdőív folyamata úgy kezdődik, hogy létrehoznak egy általános kérdőív sémát. Ezt sokszorosítják és köztereken, plázákban, vagy nagy közönséget megmozgató helyeken osztani kezdik. A kérdőívek nagy része nem kerül vissza, használhatatlan állapotban(ezt a felületen a fix, előremegadott válaszokkal küszöböljük ki) jut vissza. Minden manuális folyamatot automatizálunk, így a kérdőív létrehozásától kezdve a kiértékelésen keresztül minden online fog történni.

## 4. Igényelt üzleti folyamatok modellje

A megrendelő és a felhasználók akár otthon ülve is képes kezelni a kérdőíveket, illetve jogosultságtól függően műveleteket végezni velük. Bárhonnan lekérhetőek az eredmények, statisztikák. Ezzel növelve a kényelmet, illetve a hatékonyságot, hiszen nem kell megvárni az adatok manuális kezelését, illetve nem kell kikeresni a lefűzött mappában ezeket.

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület | Remember me | Tick-box a belépési adatok tárolásának eldöntésére |
| K2 | Felület | Login | A megadott felhasunálónév és jelszó kombináció beléptetése a felületre |
| K3 | Felület | Add new question | Új kérdés hozzáadása a kérdőívhez  |
| K4 | Felület | Register | Új felhasználó hozzáadása a felület adatbázisához |
| K5 | Felület | Create Questionnaire | Új kérdőív hozzáadása a felület adatbázisához |
| K6 | Felület | Add question | Új kérdés hozzáadása a kérdőívhez |
| K7 | Felület | Add new question | Elnavigál a K6 funkció felületéhez |
| K8 | Felület | Delete question | Törli a kiválasztott/akkor szerkesztett kérdést |
| K9 | Felület | Megoszthatóság | Link, amellyel bárki a kérdőívhez navigálhatx  |
| K10 | Felület | Complete Survey | A kérdőív kitöltésének véglegesítése, válaszok leadása |

## 6. Használati esetek

A regisztrált felhasználó kérdőívet hoz létre, kérdéseket ad hozzá, szerekesztheti ezeket. Szükség esetén törölheti is. Láthatja a kérdőív statisztikáit is. Lehetősége lesz megosztani is ezt a be nem regisztrált felhasználókkal. 
A be nem regisztrált felhasználó kitöltheti a kérdőíveket, illetve megoszthatja ezeket ismerőseivel.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

K1, K2, K4: Belépőrendszer kezelése, felhasználó megjegyzése, regisztrálás, belépés
K3, K5, K6, K7, K8, K9: A kérdőív műveletei. Létrehozása, módosítása, törlése, megosztása.
K10: Kérdőív eredményeinek leadása, véglegesítése.

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek

Megrendelőnk cégében fejlesztéseket infrastruktúrális fejlesztéseket terveznek, amihez szükség lenne az ott dolgozók véleményére. Mivel az eredményekre szűkös határidőn belül van szükség, ezért az automatizált online forma sokkal produktív, mint az eddig használt papíralapú.

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |

## 11 Fogalomszótár
