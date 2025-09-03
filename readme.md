NAME: MFAM AGBOR AGBOR
MATRIC NUMBEER: 23/CSC/156
COURSE CODE: CSC 282
ASSIGNMENT TITLE: STUDENT REGISTRATION SYSTEM

## PROJECT DESCRIPTION
This is a *PHP* web applicaation**  for registrating students into a database.
Student can fill in their details, which are then stored in **mySQL**.

## FEATURES
Student Registration Form (Full Name, Email, Department, Matric Number)
Input Validation(all fields required, email must be valid)
Data Saved into 'student_record' table
View all Registered student in a table
Delete button to remove a student(Extra credit + 5 marks)

## SETUP INSTRUCTION
1. **Clone/Download** this repository.
2. Import of Database:
    - Open **phpMyAdmin**
    - Create a new Database named 'student_db'.
    - Import the files 'student_db.sql' inside this repo.
3. Move all '.php' files into your XAMPP 'htdocs/student_registration/' folder.
4. Start **Apache** and **mySQL** in XAMMP.
5. Open your browser and visit:
    http://localhost/student_registration/index.php