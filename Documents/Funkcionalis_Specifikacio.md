# Funkcionális Specifikáció

## 1. A rendszer céljai és nem céljai

A fejlesztés célja egy online mosó-és szárítógép foglalási rendszer készítése egy meglévő SpeedWash nevű mosodának. A mosoda megfelelő vendégkörrel és múlttal rendelkezik, 
de komoly problémákat okoz számukra, hogy gyakorta érkeznek a vendégek olyan időpontban, amikor nincs szabad mosógép. Az általuk küldött érdeklődő emailekre, vagy telefonhívásokra
már macerás válaszolni. A rendszer bevezetése után a felhasználóknak elegendő regisztrálniuk az oldalra és így valós időben nyomonkövethetik, hogy mikor és melyik gép szabad. Kedvük szerint választhatnak a szabad időpontok közül, illetve nyomonkövethetik foglalásaikat. Természetesen lehetőségük van törölni a foglalásukat, vagy átrakni egy másik szabad időpontra. 
A leendő felhasználói emailes visszaigazolást kapnak foglalásaikról, illetve hírlevelek által kapnak értesülést a jövőbeli akciókról, új gépekről és sok egyéb másról. 
A rendszer különböző szintű jogosultságot képes kezelni (admin és felhasználó), így az egyes jogosultságokhoz tartozó műveletek is eltérőek. A felhasználók lesznek a rendszerben többségben, ezért fontos, hogy az általuk használt funkciók ergonómiája minél jobb legyen, a lehető legjobban támogassa a programunk hatékony kezelését.
A fejlesztés első ütemében a fő funkciók ( felhasználük regisztrációja és kezelése, gépek helyzetének és leírásának megtekintése, felhasználói foglalások létrehozása és törlése) megbízható működésének megvalósítása a célja. Nem cél a rendszer további szolgáltatásokkal, például fizetési rendszerekkel vagy összetett analitikai funkciókkal való bővítése az első fázisban.

A rendszer legfőbb céljai:

- Egyszerű és hatékony foglalási folyamat biztosítása.
- Valós idejű információk megjelenítése a szabad mosógépekről.
- Felhasználói jogosultságok kezelése (felhasználó és adminisztrátor).
- Költséghatékony és platformfüggetlen üzemeltetés.

## 2. Jelenlegi helyzet

SpeedWash mosoda jelenleg 5 db kombinált mosó- és szárítógéppel funkcionál. Egy tisztítási szolgáltatást nyújtó vállalkozás önkiszolgálói formában. Jelenleg 1 helyszínen üzemel. Alapvetően jól menő vállalkozásról van szó. A foglalásokat egy kockás füzetben vezették eddig, ami valljuk be tarthatatlan korunkban. Problémaként merült fel, hogy kialakultak túltelített és pangó időszakok. A vendégek nem tudják otthonról elindulva, hogy találnak e szabad mosógépet, hacsak nem érdeklődnek telefonon, ami kényelmetlen a mai világban és pénzbe kerül nem utolsó sorban. A vállalkozás így vevőktől és pénztől esik el, ha egy ügyfél potyára érkezik a helyszínre. Ráadásul a vezetőség az online foglalás bevezetése után készül még két új mosodát nyitni, ezeknek az adminisztrációja egy megfelelő szoftver nélkül eléggé kaotikus állapotoknak terítene meg. 

## 3. Vágyálom rendszer leírása

A cél egy olyan online mosógép-foglalási rendszer létrehozása, amely leegyszerűsíti és átláthatóvá teszi a mosodai időpontfoglalások folyamatát mind a felhasználók, mind a mosodák számára. A jelenlegi megoldások általában manuálisak, vagy korlátozott digitális lehetőségekkel rendelkeznek, így a rendszer bevezetésével egy olyan platform jönne létre, amely biztosítja a valós idejű foglalási lehetőségeket és az adminisztráció egyszerű kezelését.

A rendszer lehetővé teszi, hogy a felhasználók könnyedén böngésszék a szabad időpontokat, regisztráljanak, bejelentkezzenek, és a saját foglalásaikat átláthatóan kezeljék. Az adminisztrátorok számára biztosítja a mosógépek állapotának és foglalási adatainak kezelését. Mindezek mellett a rendszer egyszerűen kezelhető, reszponzív felhasználói felülettel rendelkezik, amelyet bármilyen eszközön könnyedén el lehet érni, legyen az PC, mobil, vagy tablet. 

A rendszer alapvető céljai:
- **Valós idejű foglalások kezelése**: Azonnali visszajelzés a szabad és foglalt időpontokról, hogy a felhasználók gyorsan döntést hozhassanak.
- **Felhasználóbarát felület**: Könnyen kezelhető, modern felület, amely megkönnyíti az időpontfoglalási folyamatot.
- **Adatbiztonság**: A felhasználói és foglalási adatok biztonságos kezelése.
- **Platformfüggetlen működés**: Az alkalmazás webböngészőn keresztül érhető el, függetlenül attól, hogy az felhasználó mobilról vagy asztali eszközről csatlakozik.

A rendszer rugalmassága lehetővé teszi, hogy a jövőben további funkciókkal bővüljön. Például bevezethetők lennének extra lehetőségek, mint statisztikai kimutatások a mosógépek kihasználtságáról, vagy akár a fizetési integráció, amely a foglalási díjak kezelését tenné lehetővé. Az alkalmazás skálázhatóságának köszönhetően a kezelt adatbázis mérete egyszerűen növelhető, így a rendszer nagyobb mosodák, vagy több mosoda nyitása esetén is alkalmas lehet.

A felhasználói élmény kiemelt fontosságú, ezért a folyamatokat a megszokott munkamenetekhez hasonlóan terveztük meg. A regisztrált felhasználók a következő műveleteket végezhetik:
1. Új foglalások létrehozása egy egyszerű időpontválasztó segítségével.
2. Saját foglalásaik megtekintése, módosítása és törlése.
3. A szabad mosógépek és időpontok valós idejű megtekintése.

Az adminisztrátorok további jogosultságokkal rendelkeznek, például:
- Mosógépek adatainak hozzáadása, módosítása vagy törlése.
- Foglalási adatok kezelése.

A fejlesztés során alkalmazott technológiák között szerepel a PHP a backend logika kezelésére, a MySQL az adatbázis tárolására, valamint a HTML, CSS és JavaScript a frontend kialakításához. A webszerver az Apache lesz, amely biztosítja a megbízható és gyors működést. Az alkalmazás reszponzív kialakítású, így mobil- és asztali eszközökön egyaránt jól használható lesz.

A rendszer célja, hogy a mosodák és a felhasználók közötti kommunikációt és foglalási folyamatot egyetlen központosított platformon kezelje, miközben biztosítja a költséghatékony üzemeltetést és a felhasználói elégedettséget. A megvalósított informatikai megoldás egyszerű és hatékony alternatívát kínál a jelenlegi manuális és időigényes foglalási rendszerekkel szemben.

## 4. A rendszerre vonatkozó külső megszorítások

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

## 5. Jelenlegi üzleti folyamatok modellje

### Felhasználók (mosodai ügyfelek)

A rendszer fő célcsoportját azok az ügyfelek képezik, akik mosodai szolgáltatásokat szeretnének igénybe venni gyorsan és kényelmesen, anélkül hogy a helyszínen kellene időpontot egyeztetniük. A felhasználók az online platformon keresztül foglalhatnak időpontot, megtekinthetik a szabad mosógépeket, és kezelhetik saját foglalásaikat.

### Mosodai online szolgáltatás nyújtói

A mosodák adminisztrátorai, akik felügyelik a mosógépek állapotát, karbantartják az adatbázist, és szükség esetén manuálisan módosíthatják a foglalási adatokat.

### Üzleti entitások

- **Mosógépek**: Az elérhető mosógépek, melyek foglalhatók a rendszerben.
- **Foglalások**: Az ügyfelek által rögzített időpontok, amelyek a mosógépek kihasználtságát mutatják.
- **Felhasználók**: A regisztrált ügyfelek, akik hozzáférnek a foglalási rendszerhez.
- **Időpontok**: Az egyes mosógépek foglalható időintervallumai.

### Üzleti folyamatok

#### Új foglalás létrehozása

Az ügyfél a mosodai szolgáltatást igénybe veszi, és online időpontot foglal egy elérhető mosógépre. Az üzleti folyamat lépései:
1. Az ügyfél kiválaszt egy mosógépet az aktuálisan elérhető gépek listájáról.
2. Kiválaszt egy szabad időpontot az időpontválasztó segítségével.
3. A rendszer ellenőrzi, hogy az időpont valóban szabad-e, és nem ütközik más foglalásokkal.
4. Az időpontot a rendszer rögzíti az adatbázisban, és a mosógép állapotát „foglalt”-ra állítja az adott időszakra.
5. Az ügyfél visszaigazolást kap a sikeres foglalásról.

#### Foglalások megtekintése

Az ügyfél megtekintheti a már meglévő foglalásait. Ez az alábbi lépéseket foglalja magában:
1. Az ügyfél bejelentkezik a rendszerbe.
2. A „Saját foglalások” nézetben megtekintheti az összes rögzített foglalását, beleértve a foglalások kezdő- és végidőpontját, valamint a mosógép nevét.
3. Az adatok valós időben frissülnek, hogy az aktuális állapotot tükrözzék.

#### Foglalások törlése

Az ügyfél törölheti meglévő foglalását, például ha már nincs szüksége az időpontra. Az üzleti folyamat lépései:
1. Az ügyfél kiválasztja a törölni kívánt foglalást a „Saját foglalások” nézetből.
2. A rendszer ellenőrzi, hogy a foglalás törölhető-e (például az időpont nem múlt-e már el).
3. A foglalás törlése után a mosógép állapota automatikusan „szabad”-ra áll vissza az adott időszakra vonatkozóan.

#### Mosógépek állapotának kezelése

Az adminisztrátorok ellenőrizhetik és szükség esetén manuálisan módosíthatják a mosógépek állapotát. Ez a következő lépéseket tartalmazza:
1. Az adminisztrátor belép az adminisztrátori felületre.
2. Kiválasztja a kívánt mosógépet a listából.
3. Szükség esetén módosíthatja a gép állapotát (például karbantartás alatt állapotra).

### Jelenlegi kihívások

1. **Szabad időpontok kiválasztása**:
   - A rendszernek biztosítania kell, hogy mindig csak a valós szabad időpontok jelenjenek meg az ügyfél számára.
2. **Adatpontosság**:
   - A foglalások és mosógépek állapotának folyamatos szinkronizálása szükséges a valós idejű frissítések érdekében.
3. **Ütközések elkerülése**:
   - Több ügyfél egyidejű foglalása esetén biztosítani kell, hogy ne alakuljanak ki időpontütközések.

A jelenlegi üzleti folyamatok modellje biztosítja, hogy az ügyfelek kényelmesen és gyorsan használhassák a rendszert, miközben az adminisztrátorok számára egyszerűvé teszi a mosógépek állapotának és foglalásainak kezelését.

## 6. Igényelt üzleti folyamatok modellje

| Verzió | Üzleti folyamat                        | Modell                                                        |
|--------|----------------------------------------|-------------------------------------------------------------- |
| 1.0v   | Regisztráció                           | A felhasználók regisztrálásának lehetősége a rendszerbe.      |
| 1.0v   | Bejelentkezés                          | A felhasználók bejelentkezésének lehetősége a rendszerbe.     |
| 1.0v   | Foglalások rögzítése és módosítása     | Új foglalások rögzítése és meglévő foglalások módosítása.     |
| 1.0v   | Foglalások törlése                     | Meglévő foglalások törlése a rendszerből.                     |
| 1.0v   | Szabad mosógépek megtekintése          | Az aktuálisan elérhető mosógépek valós idejű megjelenítése.   |
| 1.0v   | Saját foglalások megtekintése          | A bejelentkezett felhasználó saját foglalásainak listázása.   |
| 1.0v   | Adminisztrációs felület                | Mosógépek állapotának kezelése és foglalási adatok karbantartása. |

## 7. Use cases

### 7.1. Szereplők
- **Felhasználó**
- **Adminisztrátor**

### 7.2. Felhasználó használati esetei

#### Regisztráció
A felhasználó regisztrál a honlapon. A regisztráció során megadja az e-mail címét (mely később azonosítóként fog szolgálni), nevét és jelszavát. A szolgáltatás feltétele a regisztráció.

#### Bejelentkezés
A felhasználó a regisztrációt követően bejelentkezik, és megkezdi a program használatát. Az azonosításhoz meg kell adni az e-mail cím és jelszó párost, amellyel regisztrált a rendszerbe.

#### Foglalások létrehozása
A felhasználó új időpontot foglalhat egy szabad mosógépre. A foglalás során ki kell választania:
- a mosógépet,
- a dátumot,
- a kezdési időpontot.

#### Foglalások megtekintése
A felhasználó a rendszerben megtekintheti az összes korábbi és aktuális foglalását, beleértve a következő adatokat:
- foglalás dátuma,
- kezdési és befejezési időpont,
- mosógép azonosítója.

#### Foglalások törlése
A felhasználó törölheti meglévő foglalását, ha az adott időpont még nem telt el.

#### Saját adatok módosítása
A felhasználó módosíthatja a regisztráció során megadott adatait, beleértve az e-mail címet és jelszót.

#### Regisztráció törlése
A felhasználó véglegesen törölheti regisztrációját és az összes kapcsolódó adatot a rendszerből.

### 7.3. Adminisztrátor használati esetei

#### Bejelentkezés
Az adminisztrátor bejelentkezik a számára kialakított felületre. Az azonosításhoz meg kell adnia az e-mail címét és jelszavát, amit a telepítőtől kapott.

#### Mosógépek kezelése
Az adminisztrátor hozzáadhat, módosíthat vagy törölhet mosógépeket a rendszerből. Ezek a műveletek biztosítják a rendszer naprakész állapotát.

#### Foglalási adatok kezelése
Az adminisztrátor megtekintheti és szükség esetén törölheti vagy módosíthatja a felhasználók foglalásait.

#### Felhasználók listájának megtekintése
Az adminisztrátor megtekintheti a regisztrált felhasználók listáját, beleértve az alábbi adatokat:
- felhasználónév,
- e-mail cím,
- regisztráció dátuma.

#### Felhasználók törlése
Az adminisztrátor törölheti a felhasználók hozzáférését a rendszerhez.

#### Adminisztrátor hozzáadása
Az adminisztrátor jogosult új adminisztrátorokat regisztrálni a rendszerbe.

#### Adminisztrátor törlése
Az adminisztrátor más adminisztrátorok hozzáférését törölheti.

#### Jelszó módosítása
Az adminisztrátor megváltoztathatja saját jelszavát.

#### Statisztikák megtekintése
Az adminisztrátor automatikusan generált statisztikai adatokat tekinthet meg, például:
- a mosógépek kihasználtságát,
- a foglalások számát adott időszakokra lebontva.
