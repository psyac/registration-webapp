# registration-webapp - version 1.1

## Overview
The LSC sign in system was developed for the Ladybarn Social Club to replace the current paper sign in system
Utilises simple html and php pages to allow the user to fill out a form and store the data in a MySql database
System allows detection of more than 3 entries for one person which triggers staff intervention as they have violated the rules that they agreed to in the sign in form
Hosted locally on an apache server via XAMPP and ngrok

## Changes Since Previous Version
- Now included phone number ont the sign in form - database and php edited to reflect this
- Extended sanitisation and standardisation on postcode data value so all characters are stored in uppercase

## Key Contents
- form.html = Main landing page for the sign in system, houses the main sign in form and redirects to form.php
- form.php = Main php processing page for the system, deals with connecting and querying with the database, aswell as a confirmation apperance with the option to a "seek assistance" screen depending on the result of the sql select query, auto redirects to either form.html or maxVisit.html
- maxVisit.html - A secondary page which is accessed when there are more than 3 recorded entries for a name, redirects back to form.html if the correct staff password is enetered
- style.css = Contains the general css stylings for all html code, housed in the mycss folder
- CreationQuery.sql = Contains the sql code for the creation of the table aswell as viewing all contents
- db.php = A testing page for sql connection and querys, current outputs a list off all names in the db table and their regID's

## Key Features
- Data entry to sql database from html form via php
- Multiple entry recognition via database query
- Auto delayed redirect on various pages
- Password locked redirect on maxVisit.html
