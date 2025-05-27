/* CREATE TABLE Registrations (
	regID int NOT NULL AUTO_INCREMENT,
    firstName varchar(255),
    lastName varchar(255),
    houseNum int,
    postcode varchar(255),
    introMem varchar(255),
    dateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (regID)
);  */

/*
INSERT INTO Registrations (firstName, lastName, houseNum, postcode, introMem)
Values ("Terry", "Wogan", 44, "M12 3PY", "Donald Glover");
*/


SELECT * FROM Registrations;