<div class="container">
    <h1>Book store </h1>
    <h2> Here you can find a wide selection of books </h2>  

<h3>2. 5% Svaraðu eftirfarandi spurningum:</h3>
<p>a. Hver er vandinn við að útfæra MVC fyrir vef (lágmark 100 orð)?<p>
<p>b. Hvað er og hvernig virkar routing (lágmark 100 orð)? Komdu með skýringardæmi
(ekki kóða).</p>
<p>c. Hvað er Static routing?</p>
<p>d. Hvað er Dynamic routing?</p>
<p>e. Hvað er Front Controller (lágmark 100 orð)? Komdu með skýringardæmi.</p>

<p>a.
Ef ég skil spurninguna rétt, þá er helsti vandinn að útfæra það rétt. MVC patternið hentar fyrir síður sem eiga alltaf eftir að stækka með tímanum því það býður vel upp á það. En það sem MVC býður upp á er að gera kóðann töluvert auðlæsilegri fyrir utanaðkomandi. Þetta á að aðskilja síðuna frekar vel niður í parta, þar sem hver hluti hefur sitt hlutverk. Vandinn að mínu mati er sá að auðvelt er fyrir fólk að misskilja hvað á heima hvar. Þegar MVC er útfært þá er controllerarnir þeir einu sem ættu að breytast. Hitt á að vera hannað þannig það sé static.</p>

<p>b.
Routing er þegar t.d. klasi beinir beiðnum í átt að réttum controller/action.
Sem dæmi þá er venjulegur url á síðu t.d.
http://www.mbl.is/frettir/innlent/param1/param2; endurksrifaður url sem væri lílkega mikil lengri ef hann sýndi alla slóðina.
Upplögð uppsetning á þessu væri sem dæmi
Controller: FrettirController
Action method: InnlentAction
Parameterar: Param1, param2
Yfirleitt er sér klasi sem sér um bara Routes svo er Application.
Klasinn býr bara til tilvik af controllerinum, kallar á ákveðna aðferð sem er með eitthverja parametera. Þetta gerir síðuna öruggari, læsilegri og snyrtilegri
Flæðið væri þá;
BrowserRequest -> Routing -> Controller -> View</p>

<p>c. 
Static routing er þegar það er átt við t.d. database og hann inniheldur allar routes og skriftur til þess að sjá um beiðnir. 
(https://r.je/mvc-php-front-controller.html) - Skil ekki alveg 100% </p>

<p>d.
Dynamic routing er þegar miðað er við að route'ið vinnur útfrá runtime miðað við hvað það finnur sem passar best við miðað við tiltekinn tíma og hvaða klasar eða aðferðir eru í boði inn í kerfinu. Þetta býður upp á sveiganlegri URI. Þannig front controllerinn ákveður sjálfur hvað hann á að keyra miðað við hvað er í boði. </p>

<p>e.
Front controller er partur af hönnunar mynstri þar sem einn component sér um allar þær beiðnir sem eru nauðsynlegar fyrir application á vef. Dæmi um notagildi front controllers er til dæmis templates, routing, security. Hann býður upp á það að þegar það þarf að breyta eitthverju af þessum notagildum þá þarf lítið að eiga við sjálft applicationið.
Í einföldum orðum væri hægt að segja að allar þær beiðnir fyrir lénið þitt eru afgreiddar á einum stað, og það er í front controllerinum.</p>

</p>
</div>
