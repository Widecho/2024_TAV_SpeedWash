# Rendszerterv

## 1. A rendszer célja

A **SpeedWash** rendszer célja, hogy a felhasználók gyorsan és egyszerűen foglalhassanak mosógépeket egy online platformon keresztül. A rendszer célja továbbá, hogy valós idejű információkat nyújtson a szabad mosógépekről, valamint lehetőséget biztosítson a foglalások kezelésére.

---

## 2. Projekt terv

### 2.1 Projektszerepkörök és felelősségek

**Frontend fejlesztés**:

| Projektmunkás  |
| --------------- |
| Kornélia       |

| Felelősségek                                        |
| --------------------------------------------------- |
| A felhasználói felület kialakítása                  |
| Reszponzív dizájn létrehozása                       |
| Az API végpontok integrálása                        |

**Backend fejlesztés**:

| Projektmunkás  |
| --------------- |
| Krisztián      |

| Felelősségek                                        |
| --------------------------------------------------- |
| Backend szolgáltatások megvalósítása                |
| Adatbázis tervezése és implementálása               |
| Felhasználói hitelesítés és jogosultságkezelés      |

**Tesztelés**:

| Projektmunkások  |
| ---------------- |
| Kornélia         |
| Krisztián        |

| Felelősségek                                        |
| --------------------------------------------------- |
| Funkcionális és integrációs tesztek elvégzése       |
| Hibák felderítése és javítása                       |

---
### 2.2 Ütemterv

| Funkció                   | Feladat                                    |
| ------------------------- | ------------------------------------------ | 
| Követelmény specifikáció  | Követelmény specifikáció elkészítése       |
| Funkcionális specifikáció | Funkcionális specifikáció elkészítése      |
| Rendszerterv              | Rendszerterv és képernyőtervek elkészítése | 
| Adattárolás               | Adatmodell megtervezése és adatbázis létrehozása | 
| Honlap                    | Frontend és backend integráció             | 
| Tesztelés                 | Rendszer működésének ellenőrzése           |

---

### 2.3 Mérföldkövek

| Mérföldkövek                                  |
| ------------------------------------------- |
| Projektmunkák és felelősségek kiosztása     |
| Első működő prototípus bemutatása           |
| Végleges projekt tesztelése és átadása      |

---

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

- **Regisztrált felhasználók**:
  - Foglalások kezelése (új foglalás, foglalások törlése).
  - Saját foglalások megtekintése.
- **Adminisztrátor**:
  - Mosógépek adatainak kezelése.
  - Foglalások törlése.
  
### 3.2 Üzleti folyamatok

#### Foglalás kezelése

| Lépcsők                  | Leírás                                       |
| ------------------------ | -------------------------------------------- |
| Mosógép kiválasztása     | A felhasználó kiválasztja a kívánt mosógépet.|
| Időpont foglalása         | Csak szabad időpontok ajánlottak fel.       |
| Foglalás rögzítése        | Az adatbázisban tárolódik a foglalás.       |

#### Felhasználói jogosultságok

| Funkció                   | Leírás                                      |
| ------------------------- | ------------------------------------------ |
| Bejelentkezés             | Email és jelszó hitelesítésével.            |
| Foglalások lekérdezése    | A felhasználó megtekintheti saját foglalásait.|
| Foglalások törlése        | A felhasználó törölheti saját foglalását.   |

---

## 4. Követelmények

### Funkcionális követelmények

- Felhasználók regisztrációja.
- Felhasználók bejelentkezése.
- Mosógépek állapotának valós idejű megtekintése.
- Foglalások kezelése (létrehozás, törlés).

### Nemfunkcionális követelmények

- Reszponzív felület mobil és asztali eszközökre.
- Gyors adatfeldolgozás és megjelenítés.
- HTTPS protokollon keresztüli biztonságos adatátvitel.

---

## 5. Adatbázisterv

### Adattáblák

#### Felhasználók tábla

| Mezőnév    | Típus        | Megjegyzés             |
| ---------- | ------------ | ---------------------- |
| id         | INT          | Elsődleges kulcs       |
| username   | VARCHAR(50)  | Felhasználónév         |
| email      | VARCHAR(100) | Email cím              |
| password   | VARCHAR(255) | Jelszó (titkosítva)    |

#### Mosógépek tábla

| Mezőnév    | Típus        | Megjegyzés             |
| ---------- | ------------ | ---------------------- |
| id         | INT          | Elsődleges kulcs       |
| name       | VARCHAR(50)  | Mosógép neve           |
| status     | VARCHAR(20)  | Szabad vagy foglalt    |

#### Foglalások tábla

| Mezőnév    | Típus        | Megjegyzés             |
| ---------- | ------------ | ---------------------- |
| id         | INT          | Elsődleges kulcs       |
| machine_id | INT          | Hivatkozás a mosógépre |
| user_id    | INT          | Hivatkozás a felhasználóra |
| start_time | DATETIME     | Foglalás kezdete       |
| end_time   | DATETIME     | Foglalás vége          |

---

## 6. Fizikai környezet

### 6.1 Szoftverek

- **Webszerver**: Apache
- **Adatbázis-kezelő**: MySQL
- **Kliensoldali technológiák**: HTML, CSS, JavaScript

### 6.2 Hardver követelmények

- Szerver: 4 GB RAM, 2 CPU mag
- Kliens: Bármely modern böngészővel kompatibilis eszköz

---

## 7. Tesztterv

### Tesztelési lépések

1. **Bejelentkezés tesztelése**:
   - Helyes és helytelen adatokkal.
2. **Foglalás létrehozásának tesztelése**:
   - Szabad időpont kiválasztása.
   - Időpontütközések kezelése.
3. **Foglalások törlésének tesztelése**:
   - Csak a saját foglalások törölhetők.