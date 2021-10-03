CREATE TABLE users (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  firstName varchar(150) NOT NULL,
  lastName varchar(150) NOT NULL,
  email varchar(150) NOT NULL,
  -- attendence int(10) DEFAULT 0,
  createdAt timestamp NOT NULL DEFAULT current_timestamp()
);