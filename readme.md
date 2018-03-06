# eCommerce

An eCommerce App using the Laravel framework.

Features:
1.	Creating the Categories Admin Panel: List,View,Add,Delete Categories
2.	Creating the Products Admin Panel: List,View,Add,Delete Products
3.	Displaying Products By Category
4.	Searching Products
5.	Building Shopping Cart: Add/Update/Delete Cart
6.	Security, User/Admin Authentication: 
	- Only admin users can perform CRUD operation with Categories and Products
	- Normal user can add/update/delete cart to basket
7.	Pagination feature is available on home page
8.	MYSQL dump of the database named laravelecomm.sql’ is provided.
9.	Images will be stored in folder ‘public/images’ using laravel package ‘File Storage’

### Prerequisites

•	XAMPP (start MySQL, Apache service)
•	Phpmyadmin 
•	Php laravel (Laravel Framework 5.4.35)
•	Text editor

## Getting Started

Step 1: Download and add the folder inside ‘C:\xampp\htdocs’

Step 2: Open phpmyadmin http://localhost/phpmyadmin/index.php , create database ‘ecomm’ and import database dump file ‘ecomm.sql’ into it.

Step 3: Go to command prompt

c:\xampp\htdocs\ecomm>php artisan serve 

Visit http://127.0.0.1:8000/ to see the application in action.

Note: If you cannot see images (attachments) on webpage , then remove folder ‘storage’ from ‘app\public’ and then again link it using command as follows:
‘php artisan storage:link’

Home Page
![homepage](https://user-images.githubusercontent.com/14937374/37023309-c560d43e-2125-11e8-9e06-8e2b0e3cf3ce.png)

Categories Admin Panel
![categories admin panel](https://user-images.githubusercontent.com/14937374/37023317-ca1a9c80-2125-11e8-98f4-c32adda9e2ab.png)

Products Admin Panel
![products admin panel](https://user-images.githubusercontent.com/14937374/37023327-d080892c-2125-11e8-8fa1-37bc2a3dd3dc.png)

Shopping Cart
![shopping cart](https://user-images.githubusercontent.com/14937374/37023329-d3f6a942-2125-11e8-805f-ee947c9bddf5.png)



