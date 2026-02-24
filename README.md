# contao-ticker
**Einbindung von einem Laufschrift-Ticker in eine Webseite**


Dieses Modul erweitert den Inhalte-Bereich im Backend. Es können mehrere Ticker angelegt und jeweils mit mehreren Texten befüllt werden. Die veröffentlichten Texte des Tickers werden nacheinander dargestellt, wobei die Parameter jeden Tickers individuell angepasst werden können. 
Jedem Tickertext kann eine Weiterleitungsadresse zugeordnet werden. Bei Klick auf dessen Tickerbereich wird der entsprechende Link aufgerufen. Der Ticker kann als Modul dem Seitenlayout hinzugefügt werden oder über das Content-Element "Modul" verwendet werden.


**Für den Betrieb muss jQuery im Layout aktiviert sein**


Das Tickermodul unterstützt InsertTags in den Tickermeldungen. 


Für einen Ticker mit Eventdaten bringt das Modul eigene InsertTags mit:<br>
(ID ist jeweils die ID des Kalenders)
* **{{ticker::next_event::ID}}** wird durch Datum und Eventteaser des nächsten Termins ersetzt
* **{{ticker::next_event2::ID}}** wird durch Datum und Eventteaser des 2. Termins ersetzt
* **{{ticker::next_eventN::ID}}** wird durch Datum und Eventteaser des 2. bis 9. Termins (N = 2...9) ersetzt
* **{{ticker::next_event_title::ID}}** wird durch Datum und Titel des nächsten Termins ersetzt
* **{{ticker::next_event_titleN::ID}}** wird durch Datum und Titel des 2. bis 9. Termins (N = 2...9) ersetzt
                                        
                                        
Das Tickerscript basiert auf dem Projekt https://github.com/sjaakp/telex
                                        
                                        
**Version:**<br>
* 2.1.0 - 2026-02-24<br>- Ticker auch als Inhaltselement verfügbar<br>- Twig-Templates<br>- läuft auch in Contao 5.7

* 2.0.0 - 2024-08-21<br>- Bundle für Contao ab 5.3<br>- Update sjaakp/telex von 2.0.4 auf 2.0.7

* 1.2.1 - 2020-05-20<br>- Update sjaakp/telex von 2.0.1 auf 2.0.4

* 1.2.0 - 2019-04-18<br>- Einschränkung auf ausgewählte Kategorien möglich

* 1.1.0 - 2019-03-08<br>- Probleme mit Contao 4.7 beseitigt,<br>- Die Geschwindigkeit hat eine neue Skalierung,<br>- Das Startdelay ist entfallen, wird von sjaakp/telex nicht mehr unterstützt

* 1.0.0 - 2017-08-12<br>- Version für Contao ab Version 4.4 LTS


___
# contao-ticker
**Integration of a ticker line into a web page**


This module extends the content area in the backend. Several tickers can be created and each filled with several texts. The published ticker texts are displayed one after the other, whereby the parameters of each ticker can be customised individually.<br>
A forwarding address can be assigned to each ticker text. Clicking on its ticker area calls up the corresponding link. The ticker can be added to the page layout as a module or used via the ‘Module’ content element.


**JQuery must be enabled in the layout**


The module has its own insert tags for a ticker with event data:<br>
(ID is the ID of the calendar in each case)
* **{{ticker::next_event::ID}}** is replaced by the date and event teaser of the next event
* **{{ticker::next_event2::ID}}** will be replaced by date and event teaser of the 2nd event
* **{{ticker::next_eventN::ID}}** is replaced by the date and event teaser of the 2nd to 9th event (N = 2...9)
* **{{ticker::next_event_title::ID}}** is replaced by the date and title of the next event
* **{{ticker::next_event_titleN::ID}}** is replaced by the date and title of the 2nd to 9th event (N = 2...9)


The ticker script is based on project https://github.com/sjaakp/telex


___
**Problem melden | Report Problem:**<br>
https://github.com/do-while/contao-ticker/issues



___
Softleister - 2026-02-24
