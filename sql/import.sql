CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255),
  role VARCHAR(20),
  token VARCHAR(255)
);

INSERT INTO users (name, email, password, role) VALUES (
  'Super Admin',
  'danaimade41@gmail.com',
  '$2y$10$gGZfvXQWfFbDtvU14HBaEOp3AVah6rFNUCGtZL68kP9kxDGj2Abnq',
  'superadmin'
);

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  nim VARCHAR(20),
  major VARCHAR(100)
);
