CREATE TABLE korisnik (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(50) NOT NULL,
    prezime VARCHAR(50) NOT NULL,
    spol CHAR(1) NOT NULL,
    telefon VARCHAR(20),
    email VARCHAR(50),
    godine INT(3),
    hobi VARCHAR(50)
);

INSERT INTO korisnik (ime, prezime, spol, telefon, email, godine, hobi) VALUES
('Bill', 'Gates', 'Ž', '5557854', 'bgates@tvz.hr', 19, 'planinarenje'),
('Bill', 'Gates', 'Ž', '5557854', 'bgates@tvz.hr', 22, 'planinarenje'),
('Bill', 'Gates', 'M', '5557854', 'bgates@tvz.hr', 21, 'planinarenje'),
('Bill', 'Gates', 'Ž', '5557854', 'bgates@tvz.hr', 32, 'planinarenje'),
('Bill', 'Gates', 'M', '5557854', 'bgates@tvz.hr', 30, 'planinarenje'),
('Bill', 'Gates', 'M', '5557854', 'bgates@tvz.hr', 29, 'planinarenje');