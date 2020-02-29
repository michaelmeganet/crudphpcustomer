This is a collection of what files i've changed.

29/2/2020 (2) - ccf501 [Claudio Christyo]
customers.inc.php
---------------------------
	- Added a new function, customer_list_limit. this function is used to call data, but with limitations.


index.php
---------------------------
	- Added a line to show pagination
	- moved the function to call customer list to below pagination
	- modified the function customer_list() into customer_list_limit()

pagination.php
---------------------------
	- Added pagination.php
	- Modified pagination to omit table usage

29/2/2020 (1) - ccf501 [Claudio Christyo]
customers.inc.php
---------------------------
	- Modified update() and create() function, replaced array pointer function with array_pop
	- Removed Header() operation

variables.inc.php
---------------------------
	- Beautifies code

update-customer-info.php
---------------------------
	- Adds a link to return to index.php after editing
	- Changed the alert notification text when pressing Submit button.

create-customer-info.php
---------------------------
	- Shows a banner to notify user after creating new data.
	- Adds a link to return to index.php after creating new data

	
28/2/2020 - ccf501 [Claudio Christyo]
create-customer-info.php
---------------------------
	- Removed connection to check-customer-list.php
	- Changed object function from create-customer-info(), into create()

customers.inc.php
---------------------------
	- Modified create() function
	- Added update() function, it's now capable to automatically creates the SQL Query, based on the main query body.
	  This function needed to have $_POST['cid'] in the first part of Array, as $post_data

variables.inc.php
---------------------------
	- Added UpdateData2() function, it's now capable to automate the bindParam process.

update-customer-info.php
---------------------------
	- Changed object function from update-customer-info(), into update()
	- Added line, to unsets the $_POST['update_customer'] before go to customers.class
	- Added line, to automatically puts current date into $_POST['change_date'], this is to mark when the date is changed.
	  This line makes it there's no need to input data in the change_date input. since it'll be replaced anyway. (more info)

	  
27/2/2020 - ccf501 [Claudio Christyo]
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


