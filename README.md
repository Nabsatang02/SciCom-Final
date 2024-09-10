# SciCom-Final: Online Shopping Website

This repository contains the final project for my major at Potisarnpittayakorn School, which is an **online shopping website** built using **PHP** and **AppServ**. The project aims to provide a functional and user-friendly platform for online shopping with basic e-commerce features.

## Table of Contents
- [Project Overview](#project-overview)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies](#technologies)
- [Contributing](#contributing)
- [License](#license)

## Project Overview
The online shopping website project is a web application that allows users to browse products, add them to a cart, and place orders. It is built using **PHP** and runs on **AppServ**, which provides an integrated development environment with Apache, MySQL, and PHP.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Nabsatang02/SciCom-Final.git
    ```
2. Install **AppServ** from the official website: [AppServ](https://www.appserv.org/).
3. Move the project files to the AppServ `www` directory:
    ```bash
    C:\AppServ\www\SciCom-Final
    ```
4. Start the AppServ services (Apache and MySQL).
5. Import the database:
    - Open phpMyAdmin (`http://localhost/phpMyAdmin/`).
    - Create a new database and import the SQL file located in the `database/` folder.

## Usage

1. Access the website by navigating to `http://localhost/SciCom-Final/` in your browser.
2. Browse products, add them to the shopping cart, and proceed to checkout.
3. Admin users can log in to manage products, orders, and customers.

## Technologies

- PHP
- AppServ (Apache, MySQL, PHP)
- HTML, CSS, JavaScript
- Bootstrap (for responsive design)

## Contributing

Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.