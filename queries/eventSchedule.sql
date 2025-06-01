/*SET GLOBAL event_scheduler = ON;*/

/*SHOW VARIABLES LIKE 'event_scheduler';*/

/*DROP EVENT IF EXISTS auto_expire;*/

/*CREATE EVENT auto_expire
ON schedule EVERY 20 second
DO DELETE FROM Registrations WHERE lastName = 'Holmes';
*/

CREATE EVENT auto_expire
ON schedule EVERY 1 day
DO DELETE FROM Registrations WHERE dateTime < NOW() - interval 13 month;
