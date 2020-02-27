This is a collection of what files i've changed.


create-customer-info.php 
---------------------------
	- Changed a typo of "telehpone_acc" into "telephone_acc"

check-customer-list.php
---------------------------
	- Added line, to unsets the $_POST['create_customer'] before go to customers.class

customers.inc.php
---------------------------
	- Changed "function create()". it's now using BindParam() function, and extends to 'SQLBINDPARAM.class' instead of 'SQL.class' .
	- Changed "function create()". it's now automatically creates the SQL Query, based on the main query body.

variables.inc.php
---------------------------
	- Make minor changes to the code, now is capable to automate the bindParam process.