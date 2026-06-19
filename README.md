# Teacher Management System

A Laravel CRUD application for managing teacher records. The project demonstrates CRUD operations, Laravel Factories, Database Seeders, and Soft Deletes.

## Features

* View all teachers on the home page
* Search teachers by name, email, age, role, or gender
* Add new teacher records
* Edit existing teacher information
* Soft delete (suspend) teachers
* View suspended teachers
* Restore suspended teachers
* Permanently delete suspended teachers
* Reusable layout with Navbar and Footer
* Fake data generation using Factories and Seeders

## Pages

### Home Page

Displays all teacher records in a table with the following fields:

* Name
* Email
* Role
* Age
* Gender
* Actions (Edit, Delete)

### Add Teacher

A form page where users can create new teacher records.

### Suspended Teachers

Displays all soft-deleted teachers with:

* Retrieve
* Permanent Delete

## Technologies Used

* Laravel
* PHP
* MySQL
* Blade Templates
* Tailwind CSS
* Eloquent ORM
* Factories & Seeders
* Soft Deletes

## Routes

| Method | Route           | Description                |
| ------ | --------------- | -------------------------- |
| GET    | /               | Show all teachers          |
| GET    | /add            | Add teacher page           |
| POST   | /add            | Create teacher             |
| GET    | /edit/{id}      | Edit teacher page          |
| POST   | /edit/{id}      | Update teacher             |
| GET    | /delete/{id}    | Soft delete teacher        |
| GET    | /suspended      | View suspended teachers    |
| GET    | /retrieve/{id}  | Restore teacher            |
| GET    | /suspended/{id} | Permanently delete teacher |

## Learning Objectives
This project was built to practice:

* Laravel CRUD Operations
* Routing and Controllers
* Blade Layouts
* Database Management
* Search Functionality
* Soft Deletes
* Factories and Seeders
* Eloquent ORM
