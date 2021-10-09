CREATE TABLE student(
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  firstName varchar(60),
  lastName varchar(60),
  email varchar(150) NOT NULL,
  createdAt timestamp NOT NULL DEFAULT current_timestamp()
);

INSERT INTO student (firstName, lastName, email) VALUES
('Krutik', 'Gadhiya', '19IT035@charusat.edu.in'),
('Jay', 'Akbari', '19IT001@charusat.edu.in'),
('Pragnen', 'Amdavadi', '19IT002@charusat.edu.in'),
('Shahil', 'Kanjariya', '19IT053@charusat.edu.in'),
('Manan', 'Patel', '19IT103@charusat.edu.in'),
('Parimal', 'Tank', '19IT141@charusat.edu.in'),
('Darshan', 'Tarsariya', '19IT143@charusat.edu.in'),
('Jay', 'Vekariya', '19IT149@charusat.edu.in');