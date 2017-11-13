# Project Title

Food Delivery Service

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

MYSQL and php environment


### Installing

1. Clone this repository into your MAMP/htdocs

2. Create Database accounts

```

CREATE DATABASE accounts;

```

3. Create Table

```

CREATE TABLE `accounts`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `phone_number` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
);

```

4.Make sure details in db.php matches your phpmyadmin environment
