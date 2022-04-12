
CREATE DATABASE University_Accommodation;

USE University_Accommodation;

CREATE TABLE Accommodation(

    Acc_ID VARCHAR(15) UNIQUE ,
    Acc_Name VARCHAR(40) NOT NULL,
    Acc_Band ENUM ('A','B','C','D','E','F') NOT NULL,
    Acc_CarPark ENUM ('YES','NO') NOT NULL,
    Acc_Postcode VARCHAR(20) NOT NULL,
    Acc_Incampus ENUM ('YES','NO') NOT NULL,

    PRIMARY KEY(Acc_ID),
    FOREIGN KEY(Acc_Band) REFERENCES Band(Band_ID));

-- Insert rows into table 'Accommodation'
INSERT INTO Accommodation
( Acc_ID,Acc_Name, Acc_CarPark, Acc_Postcode, Acc_Incampus, Acc_Band)
VALUES
( 'ACC00001','Battersea Court', 'NO', 'GU2 7JQ', 'YES', 'D'),
( 'ACC00002','Cathedral Court','NO', 'GU2 7JH', 'YES', 'D'),
( 'ACC00003','Guildford Court', 'NO', 'GU2 7JL', 'YES', 'E'),
( 'ACC00004','International House', 'NO', 'GU2 7JL', 'YES', 'E'),
( 'ACC00005','Millennium House', 'NO', 'GU2 7JN', 'YES', 'A'),
( 'ACC00006','Stag Hill Court', 'NO', 'GU2 7JG', 'YES', 'A'),
( 'ACC00007','Surrey Court', 'NO', 'GU2 7JW', 'YES', 'C'),
( 'ACC00008','Twyford Court', 'YES', 'GU2 7JP', 'YES', 'D'),
( 'ACC00009','Manor Park', 'NO' ,'GU2 7YW', 'NO', 'F'),
( 'ACC00010','Bellerby Court', 'YES', 'GU2 7XR', 'NO', 'B');

    
CREATE TABLE Band(

    
    Band_ID ENUM ('A','B','C','D','E','F') NOT NULL UNIQUE,
    Band_Name  ENUM('Shared: split level shared room','Standard Single Rooms','Standard Single Budget Rooms','En-Suite Rooms','Enhanced En-Suite Rooms','Flat Studio') NOT NULL,
    Band_Price DOUBLE NOT NULL,
    Band_RoomShare  ENUM ('YES','NO') NOT NULL,
    Band_KitchenShare ENUM ('YES','NO') NOT NULL,
    Band_ToiletShare ENUM ('YES','NO') NOT NULL,
    Band_RoomSpace  DOUBLE NOT NULL,

    PRIMARY KEY(Band_ID));

-- Insert rows into table 'Band'
INSERT INTO Band
( Band_ID, Band_Name, Band_Price, Band_RoomShare, Band_KitchenShare, Band_ToiletShare, Band_RoomSpace)
VALUES
( 'A', 'Shared: split level shared room', 72.00 ,'YES','YES' ,'YES' , 8.8),
( 'B', 'Standard Single Budget Rooms', 87.50 , 'NO' , 'YES', 'YES',  8.4),
( 'C', 'Standard Single Rooms', 99.50 , 'NO' , 'YES', 'YES',  9.3),
( 'D', 'En-Suite Rooms', 157.50, 'NO', 'YES' , 'NO',  13.5),
( 'E', 'Enhanced En-Suite Rooms', 189.00, 'NO', 'YES', 'NO',  20),
( 'F', 'Flat Studio', 231.00, 'NO', 'NO', 'NO',  20);













CREATE TABLE Booking(
  
    Guest_ID     VARCHAR(15) NOT NULL UNIQUE,
    Acc_ID    VARCHAR(15) NOT NULL,
    Payment_ID VARCHAR(20) NOT NULL UNIQUE,
    Book_Start  DATE NOT NULL,
    Book_End    DATE NOT NULL,
    Book_Duration INT NOT NULL,
    PRIMARY KEY(Guest_ID,Acc_ID,Payment_ID),
    FOREIGN KEY(Payment_ID) REFERENCES Payment(Payment_ID),
    FOREIGN KEY(Acc_ID) REFERENCES Accommodation(Acc_ID),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));





INSERT INTO Booking
(Guest_ID, Acc_ID , Payment_ID , Book_Start , Book_End ,Book_Duration)
VALUES
('GUEST00001','ACC00009','PAY00001','2020-09-27','2021-06-06',Book_End-Book_Start),
('GUEST00002','ACC00008','PAY00002','2020-09-27','2020-10-27',Book_End-Book_Start),
('GUEST00003','ACC00007','PAY00003','2020-09-27','2021-06-06',Book_End-Book_Start),
('GUEST00004','ACC00006','PAY00004','2020-09-27','2021-06-06',Book_End-Book_Start),
('GUEST00005','ACC00008','PAY00005','2020-09-27','2021-06-06',Book_End-Book_Start),
('GUEST00006','ACC00002','PAY00006','2020-09-27','2021-06-06',Book_End-Book_Start),
('GUEST00007','ACC00005','PAY00007','2020-10-27','2021-10-30',Book_End-Book_Start),
('GUEST00008','ACC00004','PAY00008','2020-09-27','2021-06-06',Book_End-Book_Start),
('GUEST00009','ACC00009','PAY00009','2020-09-27','2021-06-06',Book_End-Book_Start);












CREATE TABLE Guest(
    Guest_ID VARCHAR(15) UNIQUE,
    Guest_Fname VARCHAR(255) NOT NULL,
    Guest_Lname VARCHAR(255) NOT NULL,
    Guest_Gender ENUM('MALE','FEMALE'),
    Guest_DOB   DATE,
    Guest_Age   INT,
    Guest_Type  ENUM ('Visitor','Academic')NOT NULL,
    
    PRIMARY KEY(Guest_ID));

INSERT INTO Guest
(Guest_ID,Guest_Fname, Guest_Lname, Guest_Gender, Guest_DOB,Guest_Age,Guest_Type)
VALUES
('GUEST00001','Wish', 'Suharitdamrong', 'MALE','2001-09-23',Datediff(curdate(),Guest_DOB)/365 ,'Academic'),

('GUEST00002','Bunjarat', 'Suharitdamrong' , 'FEMALE', '2001-10-05',Datediff(curdate(),Guest_DOB)/365 ,'Visitor'),

('GUEST00003','Mariam', 'Cirovic', 'FEMALE', '1985-10-05',Datediff(curdate(),Guest_DOB)/365 ,'Academic'),

('GUEST00004','Harris', 'Sippakorn', 'MALE','1999-10-05',Datediff(curdate(),Guest_DOB)/365 ,'Academic'),

('GUEST00005','Yongxin','Yang', 'MALE', '1991-02-15',Datediff(curdate(),Guest_DOB)/365 ,'Academic'),

('GUEST00006','Justin','Read','MALE','1960-04-01',Datediff(curdate(),Guest_DOB)/365 ,'Academic'),

('GUEST00007','Apipu','Srimonthol','MALE','1984-07-13',Datediff(curdate(),Guest_DOB)/365 ,'Visitor'),

('GUEST00008','Brijesh','Dongol','MALE','1984-07-13',Datediff(curdate(),Guest_DOB)/365 ,'Academic'),

('GUEST00009','Sirinya','Somkaew','FEMALE','1998-10-11',Datediff(curdate(),Guest_DOB)/365 ,'Academic');

CREATE TABLE Email(
    Guest_ID VARCHAR(15) ,
    Guest_Email VARCHAR(255) UNIQUE NOT NULL,
    
    PRIMARY KEY (Guest_ID, Guest_Email),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));

INSERT INTO Email
(Guest_ID,Guest_Email)
VALUES
('GUEST00001','ws00372@surrey.ac.uk'),
('GUEST00002','sdd@gmail.com'),
('GUEST00003','m.cirovic@surrey.ac.uk'),
('GUEST00004','hs0021@surrey.ac.uk'),
('GUEST00005','yongxin.yang@surrey.ac.uk'),
('GUEST00006','j.read@surrey.ac.uk'),
('GUEST00007','wandee@gmail.com'),
('GUEST00008','b.dongol@surrey.ac.uk'),
('GUEST00009','ss02491@surrey.ac.uk'),
('GUEST00001','peterwisu@gmail.com');

CREATE TABLE Phone(
    Guest_ID VARCHAR(15) ,
    Guest_Phone VARCHAR(10) UNIQUE NOT NULL,
    PRIMARY KEY(Guest_ID, Guest_Phone),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));

INSERT INTO Phone
(Guest_ID,Guest_Phone)
VALUES
('GUEST00001','6543234565'),
('GUEST00001','1234567899'),
('GUEST00002','2345678999'),
('GUEST00003','3456789999'),
('GUEST00004','4567899999'),
('GUEST00005','5678999999'),
('GUEST00006','6789999999'),
('GUEST00007','7899999999'),
('GUEST00008','8999999992'),
('GUEST00009','8999112292'),
('GUEST00009','1119999992'),
('GUEST00001','9876543211');




CREATE TABLE Visitor(
    Guest_ID VARCHAR(20) NOT NULL UNIQUE,
    Visitor_ID INT NOT NULL AUTO_INCREMENT UNIQUE ,
    Stu_ID  VARCHAR(20) NOT NULL,
    PRIMARY KEY(Guest_ID,Visitor_ID),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));

INSERT INTO Visitor
(Guest_ID,Stu_ID)
VALUES

('GUEST00002','6608795'),
('GUEST00007','6608794');





CREATE TABLE Academic(
    Guest_ID VARCHAR(20) NOT NULL UNIQUE,
    Acad_Department VARCHAR(50) NOT NULL,
    Acad_Type ENUM('Student','Staff')NOT NULL,
    PRIMARY KEY(Guest_ID),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));

INSERT INTO Academic
(Guest_ID,Acad_Department,Acad_Type)
VALUES

('GUEST00001','Department of Computer Science','Student'),
('GUEST00003','Department of Computer Science','Staff'),
('GUEST00004','School of Econimics','Student'),
('GUEST00005','Department of Computer Science','Staff'),
('GUEST00006','Department of Computer Science','Staff'),
('GUEST00008','Department of Computer Science','Staff'),
('GUEST00009','School of Hospitality and Tourism Management','Student');





CREATE TABLE Student(
    Guest_ID VARCHAR(20) NOT NULL UNIQUE,
    Stu_ID VARCHAR(20) NOT NULL UNIQUE,
    Stu_Course VARCHAR(20) NOT NULL,
    Stu_Type ENUM('UG','PG')NOT NULL,
    PRIMARY KEY(Stu_ID),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));


INSERT INTO Student
(Guest_ID,Stu_ID ,Stu_Course,Stu_Type)
VALUES

('GUEST00001','6608795','Computer Science Bsc','UG'),
('GUEST00004','6675849','Economics MSc','PG'),
('GUEST00009','6608794','Hospitality Management','UG');


CREATE TABLE Staff(
    Guest_ID VARCHAR(20) NOT NULL UNIQUE,
    Staff_ID VARCHAR(20) NOT NULL UNIQUE,
    Staff_Title VARCHAR(15) NOT NULL,
    Staff_Position VARCHAR(20) NOT NULL,
    Staff_Salary DECIMAL NOT NULL,
    PRIMARY KEY(Staff_ID),
    FOREIGN KEY(Guest_ID) REFERENCES Guest(Guest_ID));    


INSERT INTO Staff
(Guest_ID,Staff_ID ,Staff_Title,Staff_Position,Staff_Salary)
VALUES


('GUEST00003','114432','Dr','Teaching Fellow',40000.00),
('GUEST00005','334523','Dr','Lecturer',45000.00),
('GUEST00006','123456','Prof','Professor',120000.00),
('GUEST00008','999323','Dr','Senior Lecturer',60000.00);













CREATE TABLE Payment(
   
    Payment_ID VARCHAR(20) NOT NULL UNIQUE,
    
    Payment_Price  INT NOT  NULL,
    Payment_Type  ENUM('UK-Bank-Transfer','E-PAYMENT','FaceToFace')   NOT NULL,

    PRIMARY KEY(Payment_ID));


INSERT INTO Payment
(Payment_ID,Payment_Price,Payment_Type)
VALUES
('PAY00001',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00001'))),'UK-Bank-Transfer'),
('PAY00002',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00002'))),'E-PAYMENT'),
('PAY00003',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00003'))),'FaceToFace'),
('PAY00004',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00004'))),'UK-Bank-Transfer'),
('PAY00005',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00005'))),'E-PAYMENT'),
('PAY00006',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00006'))),'E-PAYMENT'),
('PAY00007',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00007'))),'E-PAYMENT'),
('PAY00008',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00008'))),'UK-Bank-Transfer'),
('PAY00009',(SELECT Band_price from band where  Band_ID in (Select Acc_Band from Accommodation where Acc_ID in (Select Acc_ID from Booking where Payment_ID = 'PAY00008'))),'UK-Bank-Transfer');



CREATE TABLE UK_Bank_Transfer(
   
    Payment_ID VARCHAR(20) NOT NULL UNIQUE,
    Payment_TransferNo VARCHAR(10) NOT NULL ,

    PRIMARY KEY(Payment_ID),
    FOREIGN KEY(Payment_ID) REFERENCES Payment(Payment_ID));


INSERT INTO UK_Bank_Transfer
(Payment_ID,Payment_TransferNo)
VALUES
('PAY00001','1QAZWSX23E'),
('PAY00004','AJS12SSO88'),
('PAY00008','AAQE2SSO88'),
('PAY00009','AADDDDSO88');


CREATE TABLE E_Payment(
   
    Payment_ID VARCHAR(20) NOT NULL UNIQUE,
    Payment_CreditCard VARCHAR(13) NOT NULL ,

    
    PRIMARY KEY(Payment_ID),
    FOREIGN KEY(Payment_ID) REFERENCES Payment(Payment_ID));

INSERT INTO E_Payment
(Payment_ID,Payment_CreditCard)
VALUES
('PAY00002','1112-3213-4321'),
('PAY00005','4133-3323-6666'),
('PAY00006','2221-5553-5433'),
('PAY00007','2221-5555-5003');



CREATE TABLE FaceToFace(
   
    Payment_ID VARCHAR(20) NOT NULL UNIQUE,
    Payment_Date DATE,
    

    
    PRIMARY KEY(Payment_ID),
    FOREIGN KEY(Payment_ID) REFERENCES Payment(Payment_ID));


INSERT INTO FaceToFace
(Payment_ID,Payment_Date)
VALUES

('PAY00003','2020-08-01');





/* SELECT statement using GROUP BY or/and an aggregate function or an operator*/
/* Count a number of each Band in University Accommodation  */
SELECT Acc_Band as 'Band Type', Count(Acc_Band) as 'Band Count' FROM Accommodation GROUP BY Acc_Band;




/* statement with a subquery*/
/*Retrive a name of an Academic who are in Department of Computer Science*/
SELECT CONCAT(Guest_Fname,' ',Guest_Lname) as 'Name of an Academic in Department of Computer Science' FROM Guest WHERE Guest_Type ='Academic' AND Guest_ID IN (SELECT Guest_ID from Academic WHERE Acad_Department = 'Department of Computer Science' );


/*statement with a JOIN or linking two tables*/
/*Retrive a name of a guest that are not Student of a university**/
Select CONCAT(Guest_Fname,' ',Guest_Lname) as 'Name of name of a guest that are not Student of a university' from guest where Guest_ID not in  (Select Guest_Id from Student);



/*Specifying any other constraints and/or more complicated queries*/
/* Select a name of a student who have parent living as a guest in a University accomodation*/

SELECT CONCAT(Guest_Fname,' ',Guest_Lname) as 'Name of Student' from guest WHERE Guest_Id in (
Select Guest_ID from Student WHERE stu_id in(select stu_ID FROM Visitor));




 