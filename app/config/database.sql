

CREATE TABLE `admin` (
  `ID_Admin` varchar(255) NOT NULL,
  `ID_User` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `category` (
  `ID_Category` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) 


INSERT INTO `category` (`ID_Category`, `Name`, `Description`) VALUES
('65958a37eb345', 'Salah El asdasd', 'Mouse , Keyboard'),
('65958c9af3653', 'helloasda', 'Veritatis iure dhhhhhhigni'),
('6595ef1cadde3', 'Ruby Keller', 'Voluptates facilis q'),
('6595ef1cade1e', 'Ruby Keller', 'Voluptates facilis q'),
('6595ef2a3694e', 'Daquan Wilson', 'Quidem anim distinct'),
('6595ef2a36aac', 'Daquan Wilson', 'Quidem anim distinct');


CREATE TABLE `client` (
  `ID_Client` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ID_User` varchar(255) DEFAULT NULL
) 


CREATE TABLE `command` (
  `ID_Command` varchar(255) NOT NULL,
  `ID_Client` varchar(255) DEFAULT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table `commandline`
--

CREATE TABLE `commandline` (
  `ID_Product` varchar(255) DEFAULT NULL,
  `ID_Command` varchar(255) DEFAULT NULL,
  `Quantity_Cmd` int(255) DEFAULT NULL,
  `ID_Facture` varchar(255) DEFAULT NULL
) 

CREATE TABLE `facture` (
  `ID_Facture` varchar(255) NOT NULL,
  `ID_Client` varchar(255) DEFAULT NULL
) 

CREATE TABLE `panierofproduct` (
  `ID_Pannier` varchar(255) DEFAULT NULL,
  `ID_Product` varchar(255) DEFAULT NULL
)

CREATE TABLE `pannier` (
  `ID_Pannier` varchar(255) NOT NULL,
  `ID_Client` varchar(255) DEFAULT NULL
) 

CREATE TABLE `product` (
  `ID_Product` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `IMG_Product` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Quantity` int(255) DEFAULT NULL,
  `Price` int(255) DEFAULT NULL,
  `ID_Category` varchar(255) DEFAULT NULL
)

CREATE TABLE `user` (
  `ID_User` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) 
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`),
  ADD KEY `ID_User` (`ID_User`);


ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_Client`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`ID_Command`),
  ADD KEY `ID_Client` (`ID_Client`);

--
-- Indexes for table `commandline`
--
ALTER TABLE `commandline`
  ADD KEY `ID_Product` (`ID_Product`),
  ADD KEY `ID_Command` (`ID_Command`),
  ADD KEY `ID_Facture` (`ID_Facture`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`ID_Facture`),
  ADD KEY `ID_Client` (`ID_Client`);

--
-- Indexes for table `panierofproduct`
--
ALTER TABLE `panierofproduct`
  ADD KEY `ID_Pannier` (`ID_Pannier`),
  ADD KEY `ID_Product` (`ID_Product`);

--
-- Indexes for table `pannier`
--
ALTER TABLE `pannier`
  ADD PRIMARY KEY (`ID_Pannier`),
  ADD KEY `ID_Client` (`ID_Client`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `ID_Category` (`ID_Category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commandline`
--
ALTER TABLE `commandline`
  ADD CONSTRAINT `commandline_ibfk_1` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`ID_Product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commandline_ibfk_2` FOREIGN KEY (`ID_Command`) REFERENCES `command` (`ID_Command`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commandline_ibfk_3` FOREIGN KEY (`ID_Facture`) REFERENCES `facture` (`ID_Facture`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panierofproduct`
--
ALTER TABLE `panierofproduct`
  ADD CONSTRAINT `panierofproduct_ibfk_1` FOREIGN KEY (`ID_Pannier`) REFERENCES `pannier` (`ID_Pannier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panierofproduct_ibfk_2` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`ID_Product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pannier`
--
ALTER TABLE `pannier`
  ADD CONSTRAINT `pannier_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;