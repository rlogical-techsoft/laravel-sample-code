# laravel-sample-code

Author : Jaimin Panchal
Company : Rlogical techsoft Private limited
Description : Implemented this task with Laravel a web application which allows
users to search for Items by Item Name, Item Type and Item Maximum Price and to ask
questions about the items found.

Business requirements : 
Item Types to search for must be listed in a drop-down list input. Item names must be entered
with a text box input. Item names must be 20 symbols max length. Item Maximum Price
(dollars and cents) must be entered in a text box input and the results must contain all Items
with the price lower than the entered maximum price.

The results of the Search must be displayed on the same web-page without reloading
(refreshing) of the page after clicking on Search button. The results must be displayed in the
table and have the following columns: Item Name, Item Type and Price.
The web page must also have a button “Ask your question” below the table with search
results. After clicking the button users should be redirected to another page having a text area
for the question, an input box for the email address and Submit button. The maximum length
of the question is 100 symbols. It must be validated after submitting the form on the server-
side and an error message must be displayed for the user if the length is more that 100. Also
the email address must be validated after submitting. If the validation succeeds then a
confirmation email must be send to the email address specified by the user with the following
text: “Your asked the question [here goes the question text sent]. Our specialists will get back
to you soon” or an error message if the validation fails.

# How to Install : 

Run below commands to install the code to update laravel installation:
composer update 

run below commands for migration and database seeding : 
php artisan migrate
php artisan db:seed --class=ItemsTableSeeder
php artisan db:seed --class=TypesTableSeeder