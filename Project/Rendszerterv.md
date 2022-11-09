# Rendszerterv
## 1. A rendszer célja

A Top G's nevű csapat feladata egy olyan felület fejlesztése, ami széleskörben elérhető, egyszerű megoldást nyújt különböző felmérések elvégzésére. Az alkalmazás feladatai közé tartozik kérdőívek létrehozása, kitölthetősége, kezelése, esetleg ezek törlése. Szükség van még a kérdőívek kiértékelésére, az ehhez tartozó felület létrehozására is. A Kérdőív létrehozásakor kötetlen számú kérdés hozzáadásához kell lehetőséget biztosítani, illetve vázat kell adni, hogy a felhasználó könnyen, előképzettség nélkül tudjon önállóan kérdőívet létrehozni. Mindenképpen szükséges még egy bejelentkező felület is, amiben a be nem lépett felhaználók korlátozott jogokat kapnak (nem hozhatnak létre, vagy törölhetnek kérést/kérdőívet, csak kitölteni tudják ezeket. A felület fontosságához hozzájárul az is, hogy ezzel megszabadulhatnak a felesleges papír pazarlástól (papír alapú kérdőívek), senkinek sem kell egy fix helyen lenni a kitöltéshez és még a hatékonyság is nőni fog.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Szabó Gergő
   * Product owner: Szabó Gergő
   * Üzleti szereplő: Tajti Tibor

### 2.2 Projektmunkások és felelőségek:
   * Frontend: Mihály Balázs, Kaponya Martin, Szabó Zsolt, Négyesi Imre
   * Backend: Mihály Balázs, Kaponya Martin, Szabó Zsolt, Négyesi Imre
   * Tesztelés: Mihály Balázs, Kaponya Martin, Szabó Zsolt, Négyesi Imre

### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             2 |                      2 |                2 |                   2 |       |Funkcionális specifikáció|Megírás                                 |         1 |             2 |                      2 |                2 |                   2 |
|Rendszerterv             |Megírás                                 |         1 |             2 |                      2 |                2 |                   2 |
|Program                  |Képernyőtervek elkészítése              |         2 |             2 |                      2 |                2 |                   2 | 
|Program                  |Prototípus elkészítése                  |         3 |             17 |                      17 |                17 |                   17 |
|Program                  |Alapfunkciók elkészítése                |         3 |             17 |                      17 |                17 |                   17 |
|Program                  |Tesztelés                               |         4 |             5 |                      5 |                5 |                   5 |

### 2.4 Mérföldkövek:


## 3. Üzleti folyamatok modellje



## 4. Követelmények

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

### Támogatott eszközök

Mivel egy webes felületet készítünk, ezért elegendő egy számítógép vagy bármilyen okos eszköz amin van internetkapcsolat.

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

- belépett felhasználó (aki készíti a kérdőívet)
- felhasználó (aki közvetve, a linken keresztül, belépés nélkül éri el a kérdőívet)

### 5.2 Menühierarchiák

  - Belépett felhasználó
    - Kérdőívet hozhat létre
    - Kérdőívet tölthet ki
    - Kérdéseket adhat a kérdőívéhez
    - Kérdéseket törölhet a kérdőívéből
    - Láthatja a kérdőív statisztikáit
    - Ki- és bejelentkezhet a felületre
    - Megoszthat kérdőíveket
  - Felhasználó
    - Kérdőívet tölthet ki
    - Továbbadhatja a már megkapott linket a kérdőívhez

## 6. Fizikai környezet

- **Az alkalmazás csak web platformra készül, MySQL adatbázissal lesz futtatva.**
  - **Nincsenek megvásárolt komponensek.**
  - **Fejlesztői eszközök:**
    - **Visual Studio Code**
    - **XAMPP**
    - **Laravel**

## 7. Architekturális terv

A rendszer tökéletes működéséhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk. A bootstrap felel a reszponzív webdesign-ért. A backend php alapon nyugszik, laravel keretrendszerrel.

## 8. Adatbázis terv

### *Tábla*
- *users:* Regisztrált felhasználók
  - *id:* Azonosító szám, a felhasználó egyedi azonosítója
  - *name:* A felhasználó neve
  - *email:* A felhasználó email címe
  - *email_verified_at:* Az email cím hitelesíési időpontja
  - *password:* A felhasználó jelszava
  - *remember_token:*
  - *created_at: A felhasználó regisztráció dátuma*
  - *updated_at:* A felhasználó utoljára szerkesztett adatai esetén eltárolt időpont

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Szabó László Zsolt', 'zsoltisw@gmail.com', NULL, '$2y$10$yq2vQkYDb6p/oAWky5sOcuVIMurAY23pfkitMkZIYfjxU5mIDkSem', NULL, '2022-11-02 17:30:35', '2022-11-02 17:30:35');
COMMIT;

- *surveys:* Regisztrált felhasználók által készített kérdőívek
  - *id:* Azonosító szám, a kérdőív egyedi azonosítója
  - *questionnaire_id:* A kérdőívet készítő felhasználó azonosítója
  - *name:* A kérdőívet készítő felhasználó neve címe
  - *email:* A kérdőívet készítő felhaszánó email címe
  - *created_at:* A kérdőív létrejöttének dátuma
  - *updated_at:* A kérdőív utoljára szerkesztett adatai esetén eltárolt időpont

*Szerkezet*

-------------------------------------

*DSL*

CREATE TABLE IF NOT EXISTS `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `questionnaire_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `surveys` (`id`, `questionnaire_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 9, 'zsolt', 'zsolt@gmail.com', '2022-11-03 06:22:40', '2022-11-03 06:22:40'),
(2, 9, 'zsolt', 'zsolt@gmail.com', '2022-11-03 06:23:13', '2022-11-03 06:23:13'),
(3, 9, 'zsolt', 'zsolt@gmail.com', '2022-11-03 06:23:22', '2022-11-03 06:23:22'),
(4, 9, 'zsolt', 'zsolt@gmail.com', '2022-11-03 06:23:25', '2022-11-03 06:23:25');
COMMIT;

- *surveys_responses:* A kérdőívek kitöltött statisztikája
  - *id:* Azonosító szám, a kitöltött kérdőív egyedi azonosítója
  - *survey_id:* A kérdőív  azonosítója
  - *question_id:* A kérdőív egyedi azonosítója
  - *answer_id:* A kérdőívet készítő felhaszánó email címe
  - *created_at:* A kérdőív létrejöttének dátuma
  - *updated_at:* A kérdőív utoljára szerkesztett adatai esetén eltárolt időpont

*Szerkezet*

*DSL*
CREATE TABLE IF NOT EXISTS `survey_responses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `survey_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `survey_responses` (`id`, `survey_id`, `question_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 32, '2022-11-03 06:22:40', '2022-11-03 06:22:40'),
(2, 2, 8, 29, '2022-11-03 06:23:13', '2022-11-03 06:23:13'),
(3, 3, 8, 31, '2022-11-03 06:23:22', '2022-11-03 06:23:22'),
(4, 4, 8, 31, '2022-11-03 06:23:25', '2022-11-03 06:23:25');
COMMIT;



