/*DROP TABLE Registrations;*/

/* CREATE TABLE Registrations (
	regID int NOT NULL AUTO_INCREMENT,
    firstName varchar(255),
    lastName varchar(255),
    houseNum int,
    postcode varchar(255),
    introMem varchar(255),
    phone varchar(12),
    dateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (regID)
);  */


/* INSERT INTO Registrations (firstName, lastName, houseNum, postcode, introMem, phone)
Values ("Terry", "Holmes", 44, "M12 3PY", "Donald Glover", "07514758411");
*/

/*
SET SQL_SAFE_UPDATES = 0;
DELETE FROM Registrations WHERE lastName = 'Holmes';
SET SQL_SAFE_UPDATES = 0;

*/
SELECT * FROM Registrations;