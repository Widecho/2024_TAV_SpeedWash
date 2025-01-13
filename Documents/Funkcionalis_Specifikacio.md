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