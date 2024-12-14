# URL Shortener Project  

This project implements a URL shortening service. Users can shorten their long URLs and be redirected to the original URL when they click the shortened link. It is built using the Laravel framework.  

### Turkish_ReadMe: [link](./README_tr.md)

## Screenshots  
![](/screenshots/screenshot.png)
![](/screenshots/url-shortener-screenrec.gif)


## Features  
- Users can shorten long URLs.
- The shortened URL is displayed to the user and redirects correctly.
- URLs are stored in a database, and a unique code is generated for each shortened URL.  

## Getting Started  

To run this project, follow the instructions below.  

### Prerequisites  
- **PHP** (Version 8.x or higher)  
- **Composer** (Dependency manager for PHP)  
- **MySQL** (For the database)  
- **Laravel** (Framework)  
- **Git** (To clone the project)  

---

### Step 1: Clone the Repository  

First, clone this repository from GitHub:  

```bash  
git clone https://github.com/ahmetcotul/url-shortener.git  
cd url-shortener  
```  

---

### Step 2: Install Dependencies  

Use **Composer** to install the required dependencies for the project:  

```bash  
composer install  
```  

---

### Step 3: Configure the Database  

Open the **.env** file and configure the database settings:  

- If you are using **MySQL**, set up the database configuration as follows:  
  ```env  
  DB_CONNECTION=mysql  
  DB_HOST=127.0.0.1  
  DB_PORT=3306  
  DB_DATABASE=url_shortener  
  DB_USERNAME=root  
  DB_PASSWORD=secret  
  ```  

- If you prefer **SQLite**, change **DB_CONNECTION=sqlite** and set the **DB_DATABASE** path appropriately:  
  ```env  
  DB_CONNECTION=sqlite  
  DB_DATABASE=/path/to/database/database.sqlite  
  ```  

---

### Step 4: Run Database Migrations  

Create the necessary database tables using the following command:  

```bash  
php artisan migrate  
```  

This command will set up the required database structure.  

---

### Step 5: Start the Application  

Run the following command to start the Laravel application:  

```bash  
php artisan serve  
```  

This will serve the project at **http://localhost:8000**.  

If you encounter issues, you can also try the alternative commands below:  

```bash  
# Run this in one terminal:  
php -S localhost:8000 -t public/  

# In another terminal, run:  
composer run dev  
```  

---

### Step 6: Test in Browser  

Open **http://localhost:8000** in your browser. Enter a long URL, click the **Shorten** button, and your shortened URL will be displayed. Test the shortened URL by clicking it to confirm redirection to the original URL.  

---

## Contributing  

To contribute to this project, follow these steps:  

1. Fork the repository.  
2. Create a new branch: `git checkout -b new-feature`.  
3. Make your changes and commit them: `git commit -am 'Added a new feature'`.  
4. Push your changes: `git push origin new-feature`.  
5. Open a Pull Request.  

---

## License  

This project is licensed under the **MIT License**. See the [LICENSE]() file for more details.  

---

**Note**: Ensure that PHP 8.x and Composer are installed on your system. Additionally, make sure the MySQL or SQLite database setup is configured correctly.  

--- 
