Utvärdering av webbplatsers laddningstid och användarbarhet
==============================================

Syfte
---
Att undersöka ett antal webbsidor med avseende på nedladdningstid och optimering.

Metod
---
För att samla mätresultat om sidornas prestanda gällande nedladdningssnabbhet använde jag mig dels av Google PageSpeed Tools och dels av nätverksverktyget bland Firefox webbutvecklarverktyg. Det sistanämnda användes tre gånger för varje sida för att få ett medelvärde på nedladdningstiden.

Urval
---
Denna gång har jag främst riktat in mig på någon form av sökmotorer. Jag valde Wikipedia, Google-translate och Wolfram Alpha. Det två första lär inte behöva någon närmre presentation, men alla kanske inte känner till Wolfram Alpha, som är ett verktyg, främst för matematik, där man både kan söka efter fakta samt få diverse anavcerade beräkningar utförda.

De ovan tre sidorna ligger förstås bland världstopparna gällande teknologi och / eller populäritet och de har väldigt speciella användningsområden. För att få en kontrast mot detta valde jag även en fjärde "vanlig" sida att titta på. Valet föll på Gislaveds turistbyrås hemsida. Att det blev just den är kanske mest en slump, men den dök upp bland sökresultaten när jag försökte googla på ointressanta industrier i Småland. När jag sen såg att webbadressen började med "www2" fastnade jag för den.

Följ denna länk för att se mina [mätvärden](https://docs.google.com/spreadsheets/d/1xnkEWDTN6g8pGsYg4tSvtcgPY7NTlB_FpXXPwsugZxM/edit?usp=sharing).

Resultat
---

###Gislaveds turistbyrå

Denna sida tar 5,07 MB i anspråk och har en genomsnittlig laddningstid på 5,07s. "Needs Work" enligt PageSpeed för såväl mobil- som datorversionen och listade hela 8 möjliga förbättringsområden. 65 respektive 68 av 100 fick sidan i betyg. Den sidan jag var inte på är inte "huvudsidan" men den dök upp i en söklänk högt upp.



[https://www2.visit-gislaved.se/sv](https://www2.visit-gislaved.se/sv)

<img src="img/gislaved.jpg" style="width: 600px;" >


###Google translate

Här laddas 31 resurser på 1,64 MB under 2,57 sekunder. Datorvesionen av sidan anses "Good" med betyget 86/100 medan mobilversionen hamnade på 65/100 och "needs work". I båda fallen föreslogs att JS och CSS som blockerar rendering av innehåll ovanför mitten skulle elimineras, att synligt innehåll skulle prioriteras, samt att cachelagring i webbläsaren skulle utnyttjas. Att mobilversionen får sämre betyg kanske kan förklaras med att google har en egen app för mobiler i stället.

[https://translate.google.se/?hl=sv](https://translate.google.se/?hl=sv)

<img src="img/googletranslate.jpg" style="width: 600px;" >





###Wikipedia

Här undersökte jag egentligen inte huvudsidan utan skickade med ett sökord "diskmaskin". Detta därför att huvudsidan visade MER innehåll än vad som visas vid typiska sökresultat (som f.ö. oftast torde tillänkats från google och inte från wikipedias egen söksida). På 2,41 sekunder laddades 17 resurser av en sammalagd storlek på 1,79 MB. "Good" i båda versionerna enligt PageSpeed med 85 respektive 89 av 100 i betyg. Som optimeringsmöjligheter föreslogs att eliminera JS och CSS och att utnyttja cachelagring på samma sätt som vid Google Translate. Vidare föreslogs att man skulle optimera bilder. För datorversionen föreslogs dessutom att man skulle komprimera JS-kod.



[https://sv.wikipedia.org/wiki/Diskmaskin](https://sv.wikipedia.org/wiki/Diskmaskin)


<img src="img/wikipedia.jpg" style="width: 600px;" >





###Wolfram Alpha

Denna webbplats fick relativt dåligt betyg av PageSpeed. 76/100 i datorversionen som "needs work". Mobilversionen var rent av "poor" med sina 54/100. Hela 5,38 sekunder behövdes för att ladda 51 resurser om 3,14 MB. Det är i sammanhanget viktigt att nämna att jag inte skickade med något utan bara kollade en tom söksida. Det är givetvis så att en medskickad avancerad matematisk beräkning kan ta tid att utföra oavsett hur själva webbsidan optimerats. PageSpeed föreslår att aktviera komprimering, ta bort JS och CSS-kod som blockerar renderingen från innehåll ovanför mitten, prioritera synligt innehåll, utnyttja cashelagring, optimera bilder samt komprimera JavaScript.


[https://www.wolframalpha.com/](https://www.wolframalpha.com/)

<img src="img/wolframalpha.jpg" style="width: 600px;" >

Sammanfattning
---
De vanligaste förbättringsåtgärderna för mina undersökta webbplatser tycks vara att "Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten", "Prioritera synligt innehåll" och "Optimera bilder". Intressant men kanske också begripligt att just dessa utseenderelaterade punkter inte tycks ha setts över lika mycket som det andra, eftersom webbsidornas huvudfunktionalitet inte har så mycket att göra med hur de ser ut. Turistbyrån är undantaget.

Av mina undersökta webbplatser låg i Wikipedia bäst till, tättföljt av Google Translate. Med drygt dubbelt så lång nedladdningstid kom Wolfram Alpha och ännu senare Gislaveds turistbyrå. En gissning är att om dessa rangordnats efter antal besökare skulle rangordningen bli densamma, men för den skull är inte sidornas nedladdningstider proportionella med antalet besökare de har eller med den "tekniska service" de erbjuder.

Under tre sekunder i nedladdningstid skall en webbsida hålla sig för att jag skall uppfatta den som snabb. Där klarar sig Wikipedia och Google Translate, sidor som jag ofta besöker. Wolfram Alpha tar tid på sig och naturligtvis ännu mera tid om man ber den utföra någon avancerad matematisk beräkning. Å andra sidan kan man acceptera att det som man vet tar mycket datorkraft i anspråk och används relativt sällan tillåts ta lite längre tid. I datorkraftavseende är Google Translate, som jag anser tekniskt och vetenskapligt mycket intressantare än månfärder, fantastiskt snabbt när det kommer till själva den interna funktionaliteten, som dock inte låter sig mätas med dessa verktyg. Att Gislaveds turistbyrå är långsam spelar kanske mindre roll, då den kanske inte besöks av så många dagligdags. Sannolikt laddas hela kommunens hemsida ner på en gång mer eller mindre så om man vill navigera runt när man väl hamnat där går det snabbare.
