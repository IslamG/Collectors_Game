# Collectors_Game
Hidden Object, point and click web game


How to use:

1- Pull repository into your local storage
2- Place your newly downloaded folder in your web server root directory; for example If you installed WAMP to c:\wamp then your webserver root directory would be c:\wamp\www, however this might vary depending on version.
This is where you would put your site files to access them through a browser.
Notice: if you downloaded the repository compressed, you will have to extract it first.
3- Run your server.
4- Import the database (collectors_db.sql) into your server. 
5- To use the pages, open your browser and enter your 'localhost' in the address bar. (typing localhost will often suffice) then navigate to forementioned filelocation.
	ex: localhost/collectors_game/homeIndex.php
6- Enjoy!

How to import database:

1- After running your server, navigate to phpMyAdmin
2- you will find a list of of your databases, start by creating a new one, and name it "collectors_db"
3- Open the newly created database, then click on "import"
4- in the "File to import" click on the brows button.
5- brows your computer and locate the 'collectors_db.sql' file included here, and select it.
6- Once you have the file selected, scroll to the bottom of the page and click on the "Go" button.
7- E' Viola, you have successfully imported the database.