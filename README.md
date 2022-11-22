# Student-Management-Website

A very basic dynamic HTML website using HTML, Bootstrap and PHP for managing student grades.

In _crud_op_ database, every subject code has a seperate table for recording marks and the student data is stored in a seperate table.
The student ID _sid_ is a foreign key to all the subjet tables.

There is an option to print the list of students directly from the webpage on the _Student List_ page.

Check this link out https://rupava.github.io/studentm.github.io/

**Note:PHP files won't run and will simply be downloaded**

## Getting started
* Install XAMPP and copy the project files to the _C:\xampp\htdocs_ folder assuming you've installed everything as default.
* On your browser, open *localhost/phpmyadmin* and create a database with the name _crud_op_ and import the _crud_op.sql_ file to the newly created database.
* Once imported, all the tables should be automatically created along with some dummy data.
* Finally, type _localhost_ on your url bar and explore the project and its functionalities.

Feel free to clone and make changes and improve on this simple project.
