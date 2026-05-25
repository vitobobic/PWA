CREATE TABLE Zaposlenik (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ime_zaposlenika VARCHAR(32) NOT NULL,
    prezime_zaposlenika VARCHAR(32) NOT NULL,
    OIB INT(10) NOT NULL,
    e_mail VARCHAR(32) NOT NULL
);