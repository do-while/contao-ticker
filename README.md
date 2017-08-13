# contao-ticker
**Einbindung von einem Laufschrift-Ticker in eine Webseite**


Dieses Modul erweitert den Inhalte-Bereich im Backend. Es k�nnen mehrere Ticker angelegt und 
jeweils mit mehreren Texten bef�llt werden. Die ver�ffentlichten Texte des Tickers werden 
nacheinander dargestellt, wobei die Parameter jeden Tickers individuell angepasst werden k�nnen. 
Jedem Tickertext kann eine Weiterleitungsadresse zugeordnet werden. Bei Klick auf dessen 
Tickerbereich wird der entsprechende Link aufgerufen. Der Ticker kann als Modul dem Seitenlayout 
hinzugef�gt werden oder �ber das Content-Element "Modul" verwendet werden.


**F�r den Betrieb muss jQuery im Layout aktiviert sein**


Das Tickermodul unterst�tzt InsertTags in den Tickermeldungen. 


F�r einen Ticker mit Eventdaten bringt das Modul eigene InsertTags mit:<br>
(ID ist jweils die ID des Tickers)
* **{{ticker::next_event::ID}}** wird ersetzt durch Datum und Eventteaser des n�chsten Termins
* **{{ticker::next_event2::ID}}** wird ersetzt durch Datum und Eventteaser des 2. Termins
* **{{ticker::next_eventN::ID}}** wird ersetzt durch Datum und Eventteaser des 2. bis 9. Termins (N = 2...9)
* **{{ticker::next_event_title::ID}}** wird ersetzt durch Datum und Titel des n�chsten Termins
* **{{ticker::next_event_titleN::ID}}** wird ersetzt durch Datum und Titel des 2. bis 9. Termins (N = 2...9)
                                        
                                        
Das Tickerscript basiert auf dem Projekt https://github.com/sjaakp/telex
                                        
                                        
**Version:**<br>
* 1.0.0 stable - 2017-08-12<br>
Version f�r Contao ab Version 4.4 LTS


___
# contao-ticker
**Integration of a ticker line into a web page**


This module extends the content area in the backend. Several tickers can be created, 
each with several texts. The published texts of the ticker The parameters one after 
the other, whereby the parameters of each ticker can be adapted individually.<br>
A forwarding address can be assigned to each ticker text. By clicking on its ticker 
area the corresponding link is called. The ticker can be added as a module to the 
page layout or used via the content module "Module".


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
Softleister - 2017-08-12
