# Backend Tesztelési Jegyzőkönyv

| ID  | Megnevezés             | Tesztelő neve  | Funkció leírása                                          | Elvárt eredmény                                        | Eredmény | Megfelelősségi státusz | Javítva |
|-----|------------------------|----------------|---------------------------------------------------------|-------------------------------------------------------|----------|------------------------|---------|
| 1   | GET "/"                |  Krisztián | A kezdőlap elérése a Home kontroller Start metódusával.  | A kezdőlap megjelenik vagy bejelentkezés szükséges.   | siker    | Megfelelt              | -       |
| 2   | GET "/machines"        |  Krisztián | A mosógépek listázása.                                   | A mosógépek listája helyesen megjelenik.              | siker    | Megfelelt              | -       |
| 3   | POST "/machines"       |  Krisztián | Új mosógép hozzáadása.                                   | Az új mosógép bekerül az adatbázisba.                 | siker    | Megfelelt              | -       |
| 4   | GET "/reservations"    |  Krisztián | Foglalások lekérdezése.                                  | A foglalások helyesen jelennek meg.                   | siker    | Megfelelt              | -       |
| 5   | POST "/reservations"   |  Krisztián | Új foglalás rögzítése.                                   | A foglalás bekerül az adatbázisba.                    | sikertelen/javítva    | Megfelelt a javítás után             | -       |
| 6   | DELETE "/reservations" |  Krisztián | Foglalás törlése.                                        | A foglalás törlődik az adatbázisból.                  | siker    | Megfelelt              | -       |
| 7   | POST "/users/register" |  Krisztián | Felhasználó regisztrálása.                               | A regisztráció sikeres és az adatbázis frissül.       | siker    | Megfelelt              | -       |
| 8  | POST "/users/login"    |  Krisztián | Felhasználói bejelentkezés.                              | Sikeres bejelentkezés és jogosultság érvényesítése.   | siker    | Megfelelt              | -       |

---

## Tesztesetek Részletei

### 1. GET "/"
- **Rövid leírás**: A kezdőlapot a felhasználó eléri a webböngészőjéből.
- **Elvárt működés**: A kezdőlapot megjeleníti a rendszer, ha a felhasználó be van jelentkezve, vagy a bejelentkezési oldalra irányítja.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

### 2. GET "/machines"
- **Rövid leírás**: A mosógépek listájának megtekintése.
- **Elvárt működés**: Az adatbázisból a mosógépek adatai betöltődnek és megjelennek a felületen.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

### 3. POST "/machines"
- **Rövid leírás**: Új mosógép hozzáadása adminisztrátor által.
- **Elvárt működés**: Az új mosógép adatai bekerülnek az adatbázisba.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

### 4. GET "/reservations"
- **Rövid leírás**: Foglalások listázása a kiválasztott mosógépre.
- **Elvárt működés**: Az adatbázisból betöltődnek a foglalási adatok, és azok időrendben megjelennek.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

### 5. POST "/reservations"
- **Rövid leírás**: Új foglalás rögzítése felhasználó által.
- **Elvárt működés**: A foglalás adatai az adatbázisban rögzülnek, és a felület visszajelzést ad.
- **Jelenlegi működés**: Hiba a foglalás során. 
- **Megfelelősségi státusz**: Javítva a forráskód a hibakeresésben, ezután megfelelt.

### 6. DELETE "/reservations"
- **Rövid leírás**: Foglalás törlése felhasználó által.
- **Elvárt működés**: A kiválasztott foglalás törlődik az adatbázisból.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

### 7. POST "/users/register"
- **Rövid leírás**: Felhasználói regisztráció.
- **Elvárt működés**: Az új felhasználó adatai bekerülnek az adatbázisba, és visszajelzés jelenik meg.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

### 8. POST "/users/login"
- **Rövid leírás**: Felhasználói bejelentkezés.
- **Elvárt működés**: A rendszer ellenőrzi a bejelentkezési adatokat, és a jogosultságnak megfelelő felületre irányít.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt