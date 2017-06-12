# OTP-using-Twilio
This Web-app uses Twilio to send OTP and saves the history in a database

/include contains db_connection and db_function
-db_connection manages the connection with your database, change this file to add your own database configuration

-db_function contains all the queries that this web-app needs to perform. Change the queries if you change the database in any way.

/js includes functions to retrieve and display the data from the database and to post data to them.

list.php calls appropriate function from db_function to get the list of saved contacts
details.php calls the function to display a particular contact using ID passed from the webpage
send.php calls the function to send the OTP using TWILIO and also to save it to the database
history.php calls the function to fetch the sent OTP history from the database.
