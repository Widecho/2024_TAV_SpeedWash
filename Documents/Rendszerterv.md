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

### **4. Követelmények**

#### **Regisztrált felhasználók lehetőségei**
- Regisztrációs adatok módosítása  
- Regisztráció törlése  
- Új foglalás rögzítése  
- Korábban rögzített foglalás módosítása  
- Korábban rögzített foglalás törlése  
- Foglalások lekérdezése, szűrése (dátum, időpont, mosógép alapján)  

#### **Adminisztrátorok lehetőségei**
- Bejelentkezési adatok módosítása (e-mail és jelszó)  
- Új mosógépek hozzáadása  
- Mosógépek állapotának módosítása  
- Adminisztrátor hozzáadása  
- Adminisztrátorok és felhasználók törlése  
- Felhasználók listájának megtekintése  
- Statisztikai adatok megtekintése a mosógépek kihasználtságáról és a foglalások alakulásáról  

---

### **Funkcionális követelmények**
- A rendszer használatához kötelező az előzetes regisztráció.  
- Regisztrált felhasználók számára elérhető a bejelentkezés után:  
  - Foglalások kezelése (létrehozás, módosítás, törlés).  
  - Saját foglalások megtekintése és szűrése.  
- Adminisztrátor jogosultságokkal elérhető funkciók:  
  - Mosógépek adminisztrációja (hozzáadás, állapotmódosítás).  
  - Felhasználói adatkezelés (listázás, törlés).  
  - Foglalási statisztikák és kihasználtsági adatok megtekintése.  

---

### **Nemfunkcionális követelmények**
- **Egyszerű használat**: A rendszer felhasználóbarát kialakítású, gyorsan és könnyen elsajátítható.  
- **Képzettség**: Felhasználói szintű informatikai ismeretek elegendőek a használathoz.  
- **Oktatásmentes bevezetés**: A rendszer használata nem igényel előzetes oktatást.  
- **Telepítési környezet**:  
  - A rendszer egy szerver számítógépen kerül üzembe helyezésre.  
  - A futtatáshoz az alábbiak szükségesek:  
    - **XAMPP környezet**, amely tartalmazza az alábbiakat:  
      - Apache webszerver  
      - MySQL adatbázis szerver  
      - PHP futtatókörnyezet  
  - **Beállítások a XAMPP-ban**:  
    - A projektfájlokat a `htdocs` mappában kell elhelyezni.  
    - A MySQL adatbázis konfigurációja elérhető a `phpMyAdmin` felületen keresztül.  
    - A rendszer működésének ellenőrzéséhez a böngészőben a `http://localhost/<projekt_mappa>` URL használható.  
    - A `config.inc.php` fájlban szükség szerint megadható az adatbázis jelszava és egyéb paraméterei.  

### Európai uniós rendeletek, irányelvek, ajánlások

1. **AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.)**
   - Más néven: Általános Adatvédelmi Rendelet (GDPR).
   - A természetes személyek személyes adatainak védelme, valamint az ilyen adatok szabad áramlásának biztosítása.
   - Az adatkezelés során biztosítani kell az adatkezelés jogalapját, az adatok célhoz kötöttségét, valamint az érintettek jogainak érvényesülését (hozzáférés, helyesbítés, törlés, adathordozhatóság).

2. **A Bizottság 2011/711/EU ajánlása (2011. október 27.)**
   - Kulturális anyagok digitalizálásáról és online hozzáférhetőségéről, valamint a digitális megőrzésről szóló irányelv.
   - Az elektronikus dokumentumok és adatok megőrzésére, valamint a digitális platformokon való elérhetőségük biztosítására vonatkozó ajánlások.

3. **98/34/EK európai parlamenti és tanácsi irányelv**
   - A műszaki szabványok és szabályok, valamint az információs társadalom szolgáltatásaira vonatkozó szabályok egységesítése érdekében létrehozott információszolgáltatási eljárásokról.

4. **96/9/EK irányelv (1996. március 11.)**
   - Az adatbázisok jogi védelméről.
   - Az adatbázisokat készítők szellemi tulajdonának védelme érdekében kialakított jogi keretrendszer.

### Magyarországi jogszabályok

1. **2011. évi CXII. törvény - Az információs önrendelkezési jogról és az információszabadságról (Infotv.)**
   - Az érintettek adatainak védelmét szabályozza Magyarországon.
   - Az adatkezelők számára előírja az adatkezelési tevékenységek átláthatóságát, valamint az érintettek jogainak biztosítását.

2. **2018. évi LIII. törvény az adózás rendjéről**
   - Előírja az elektronikus nyilvántartások és adatszolgáltatások szabályozását az adóhatóság irányába.
   - Az adatbiztonság és a naplózás kötelező előírásait fogalmazza meg.

3. **2013. évi V. törvény - A Polgári Törvénykönyv**
   - Tartalmazza a szerzői jogok és a szellemi tulajdon védelmére vonatkozó szabályokat.

4. **2001. évi CVIII. törvény - Az elektronikus kereskedelmi szolgáltatások, valamint az információs társadalommal összefüggő szolgáltatások egyes kérdéseiről**
   - Meghatározza az elektronikus kereskedelmi tevékenységekre vonatkozó szabályokat.
   - Tartalmazza a szolgáltatók adatkezelési és információszolgáltatási kötelezettségeit.

5. **2018. évi LIV. törvény az üzleti titok védelméről**
   - Biztosítja a gazdasági tevékenység során keletkező üzleti titkok védelmét.

### További előírások

1. **ISO/IEC 27001 szabvány**
   - Az információbiztonsági irányítási rendszerek követelményeit meghatározó nemzetközi szabvány.
   - Az adatvédelem és biztonság érdekében javasolt alkalmazni.

2. **ISO/IEC 12207 szabvány**
   - A szoftver életciklusára vonatkozó szabvány, amely az alkalmazás fejlesztési és üzemeltetési szakaszaira vonatkozik.

3. **NIS irányelv**
   - Az Európai Unió kiberbiztonsági irányelve, amely a hálózati és információs rendszerek biztonságának fokozását célozza.

A fent említett rendeletek és irányelvek biztosítják, hogy a rendszer megfeleljen a jogszabályi követelményeknek és szabványoknak, miközben garantálja a felhasználók adatainak biztonságát és a szolgáltatások megbízhatóságát.

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