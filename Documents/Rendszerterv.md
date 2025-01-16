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

A rendszert nem lehet regisztrálás nélkül használni. A látogató a kezdőoldalt képes elérni és azon keresztül bejelentkezni, vagy regisztrálni a rendszerbe. A bejelentkezett felhasználó képes mosó- és szárítógépeket foglalni, listázni, hogy ezek mikor elérhetőek és a saját foglalásait áttekinteni és törölni.

### **3.1 Üzleti szereplők**

A bejelentkezés minden felhasználó számára egységesen az alábbiak szerint történik:  
A kezdőoldalra lépve megjelenik egy beviteli űrlap, amely tartalmazza az „Email” és a „Jelszó” mezőket. A felhasználónak ki kell töltenie ezeket a mezőket, majd a **„Belépés”** gombra kattintva tud bejelentkezni.  
- **Sikeres azonosítás** esetén a felhasználó belép a rendszerbe, ahol a jogosultsági szintjének megfelelő felület jelenik meg.  
- **Sikertelen azonosítás** esetén hibaüzenet figyelmezteti a felhasználót a probléma pontos okára, például hibás email cím vagy jelszó esetén.

A rendszer két fő szereplőt különböztet meg:  

- **Felhasználók**:  
  Ők regisztrálnak a rendszerbe, foglalásokat hoznak létre, illetve megtekintik és kezelik azokat.  

- **Adminisztrátorok**:  
  Ők felelnek a rendszer zavartalan működéséért, például:  
  - Mosógépek adatainak karbantartása,  
  - Statisztikák megtekintése,  
  - Felhasználók és foglalások kezeléséhez kapcsolódó műveletek elvégzése.

---

### **3.2 Üzleti folyamatok**

#### **Felhasználói adatok megjelenítése**
| **Megnevezés**           |
|--------------------------|
| A felhasználó neve       |
| A felhasználó jelszava   |
| A felhasználó email címe |
| A felhasználó telefonszáma |

#### **Foglalások megtekintése és szűrése**
| **Megnevezés**                        |
|---------------------------------------|
| Foglalás szűrése ettől a dátumtól     |
| Foglalás szűrése eddig a dátumig      |
| Foglalt mosógép azonosítója           |
| Foglalás kezdete                      |
| Foglalás vége                         |

#### **Új foglalás rögzítése**
| **Megnevezés**           |
|--------------------------|
| Mosógép azonosítója      |
| Foglalás kezdő időpontja |

#### **Meglévő foglalások módosítása vagy törlése**
| **Megnevezés**           |
|--------------------------|
| Mosógép azonosítója      |
| Foglalás kezdő időpontja |
| Foglalás befejező időpontja |

---

### **3.3 Üzleti entitások**

| **Entitások**     |
|-------------------|
| Foglalás          |
| Mosógép           |
| Felhasználó       |

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