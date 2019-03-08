# contao-ticker
**Einbindung von einem Laufschrift-Ticker in eine Webseite**


Dieses Modul erweitert den Inhalte-Bereich im Backend. Es können mehrere Ticker angelegt und jeweils mit mehreren Texten befüllt werden. Die veröffentlichten Texte des Tickers werden nacheinander dargestellt, wobei die Parameter jeden Tickers individuell angepasst werden können. 
Jedem Tickertext kann eine Weiterleitungsadresse zugeordnet werden. Bei Klick auf dessen Tickerbereich wird der entsprechende Link aufgerufen. Der Ticker kann als Modul dem Seitenlayout hinzugefügt werden oder über das Content-Element "Modul" verwendet werden.


**Für den Betrieb muss jQuery im Layout aktiviert sein**


Das Tickermodul unterstützt InsertTags in den Tickermeldungen. 


Für einen Ticker mit Eventdaten bringt das Modul eigene InsertTags mit:<br>
(ID ist jweils die ID des Tickers)
* **{{ticker::next_event::ID}}** wird ersetzt durch Datum und Eventteaser des nächsten Termins
* **{{ticker::next_event2::ID}}** wird ersetzt durch Datum und Eventteaser des 2. Termins
* **{{ticker::next_eventN::ID}}** wird ersetzt durch Datum und Eventteaser des 2. bis 9. Termins (N = 2...9)
* **{{ticker::next_event_title::ID}}** wird ersetzt durch Datum und Titel des nächsten Termins
* **{{ticker::next_event_titleN::ID}}** wird ersetzt durch Datum und Titel des 2. bis 9. Termins (N = 2...9)
                                        
                                        
Das Tickerscript basiert auf dem Projekt https://github.com/sjaakp/telex
                                        
                                        
**Version:**<br>
* 1.1.0 stable - 2019-03-08<br>
1) Probleme mit Contao 4.7 beseitigt,<br>
2) Die Geschwindigkeit hat eine neue Skalierung,<br>
3) Das Startdelay ist entfallen, wird von sjaakp/telex nicht mehr unterstützt
* 1.0.0 stable - 2017-08-12<br>
Version für Contao ab Version 4.4 LTS


___
# contao-ticker
**Integration of a ticker line into a web page**


This module extends the content area in the backend. Several tickers can be created, each with several texts. The published texts of the ticker The parameters one after the other, whereby the parameters of each ticker can be adapted individually.<br>
A forwarding address can be assigned to each ticker text. By clicking on its ticker area the corresponding link is called. The ticker can be added as a module to the page layout or used via the content module "Module".


**JQuery must be enabled in the layout**


For a ticker with event data, the module has its own InsertTags:
(ID is the ID of the ticker)
* **{{ticker::next_event::ID}}** will be replaced by the date and eventteaser of the next event
* **{{ticker::next_event2::ID}}** will be replaced by date and eventteaser of the 2nd date
* **{{ticker::next_eventN::ID}}** will be replaced by the date and eventteaser of the second to ninth date (N = 2 to 9)
* **{{ticker::next_event_title::ID}}** will be replaced by the date and title of the next event
* **{{ticker::next_event_titleN::ID}}** will be replaced by the date and title of the second to ninth date (N = 2 to 9)


The ticker script is based on project https://github.com/sjaakp/telex


___
**Problem melden | Report Problem:**<br>
https://github.com/do-while/contao-ticker/issues



___
Softleister - 2019-03-08
