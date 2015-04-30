# Adding a basic PHP Text Counter (PHP / MySQL Scripts > Simple PHP Text Counter)

> Source: http://www.stevedawson.com/scripts/text-counter.php

> by Steve Dawson (written in PHP and JQuery)

Adding a text counter to your website can do a couple of things, one, show the world how many visitors your website receives or two, show the world how many visitors your website does not receive!

Although good for keeping numbers it does not do much good for a business website having a counter on their website which only shows a couple of extra hits per day. This will give the impression of a not very popular' website, and for a business, this is what we don't want to happen. Homepages, fun pages and general websites are OK, but if you have to go for a counter on a business website where you may not get many hits, then go for an invisible one.

So by now, you will know if you want a counter on your website. Adding a basic counter, which just displays the numbers in text format, is quite easy. It only takes a few lines in PHP so lets get started

Requirements
PHP enabled server - Most hosts support this as standard
HTML/Text Editor - Dreamweaver or Notepad etc.

Breaking down the Counter Code
The following code is the contents of the count.php file it is always worth having a quick look at the code to understand it.

PHP Text Counter Code

Above, is basically all there is to the counter code, but we need one more file, a basic text document to write and log the hits to. This will look like the following:

PHP Basic Text Counter Hit File

Of course, the screenshot shows a webpage which has had 1893 visitors. Your count_file.txt will have a different number!

Download the Text Counter Script
Please click here to download the zip file of the Basic Text Counter

The Installation of the Counter
Now you have downloaded the counter script, know what the code does and how it works, now let's install it on your webpage. Unzip the file you have downloaded into the directory where the webpage is which you want the counter to appear on. You will have 2 files:

    count.php
    count_file.txt

You probably already now this, but it is surprising how many times I get asked why the scripts/counter does not work, so I will say it again! Your webpage will need to end in the .php or an equivalent extension for your server to recognise it as a PHP script. Otherwise the counter will not work!

Find the location on your webpage where you would like to place the counter, and paste the following code:

<?php include "count.php"; ?>

Now when you upload the two files, and any pages you have added the code, to your server, make sure you chmod the count_file.txt to 755 to allow it to be written to by the count.php scrtipt. For info on chmoding a remote file, consult your FTP program. (Usually right click the remote file and select 'chmod' from the menu)

Quick Installation review

    Unzip the counter zip file into your webpage directory.
    Paste the code into your webpage where you want the counter to appear.
    Upload the two files to your web server in the same location as the page which will have the counter on.
    Chmod the count_file.txt file to 755

Visit your webpage and click refresh a few times to see if the numbers increase on your counter. If they do, success, if not, back to the drawing board by starting at the top of this page!

That's it, easy wasn't it? Now for a few customisations carry on reading ….

Extras, Hacks and Cheats!
To give your website a head start with a few visit hits, open the count_file.txt in a text editor and start the counter on a high number. This will give the impression of your website already having a good readership base.

Setting a font for the counter. This is done by simple placing the code you place on your webpage inside a font tag. This give you total control over what font-type, font-size or font-color you require to suit your existing design.
