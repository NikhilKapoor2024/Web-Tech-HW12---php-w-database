# Web-Tech-HW12---php-w-database
This repository is for my website code, transforming it from a html-based website to a php-based website. Basically, this is the final form of my website.

First, my website has made a full transition from html to php (version 8.2 to be precise). All of my html files have become php files, and so use php functions and syntax (basically, a lot of "echo 'yadayada';").

Secondly, I overhauled the navigation function of my webpage by creating a navigation.php file, where a switch case handles all instances of switching to different parts of the site.
This allowed for easy accessibility across the different pages while also improving readability for other people looking at my code.

Next, this webpage also features dyanmic use of an online database. The "Contact" page has completely changed from including my contact info (phone number, email, etc.) to being an
interactive questionarre. The "validation.js" file in the js folder is a JavaScript file designed to take in the responses from the contact page and determine whether or not they are
valid responses (for example, the "email" category must have a @ and then a valid email site). After checking the responses, the results are then sent to an online database where they are
added to a database. The database is then connected to an Entries page and are shown. The page itself is refreshing its connection to the phpMyAdmin database every
half second, so it'll show on the page it updating in real time.

This is the result of an instance in AWS that I worked on as part of my Web Technologies class. Throughout the whole semester, we were constantly updating it and making
changes that fit the lessons we were learning that week. After about three months of that, this is the end result.
