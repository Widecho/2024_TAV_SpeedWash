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