-- Database: `smss_db`

-- Table structure for table `tbl_customers`

CREATE TABLE `tbl_customers` (
  `CustomerID` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Middlename` varchar(30) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `EmailAddress` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `tbl_customers`

INSERT INTO `tbl_customers` (`CustomerID`, `Username`, `PASSWORD`, `Role`, `Firstname`, `Middlename`, `Lastname`, `Address`, `EmailAddress`) VALUES
('$CustomerID', '$Username', '$PASSWORD', '$Role', '$Firstname', NULL, '$Lastname', '$Adderss', '$EmailAddress');

-- Table structure for admin login

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL
);

INSERT INTO `admin` (`AdminID`, `Username`, `PASSWORD`, `Role`) VALUES (1, 'admin', 'admin', 'Admin');

-- Table structure for table `tbl_orders`

CREATE TABLE `tbl_orders` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Size` varchar(30) DEFAULT NULL,
  `Color` varchar(30) DEFAULT NULL,
  `DateOrdered` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for table `tbl_products`

CREATE TABLE `tbl_products` (
  `ProductID` int(11) NOT NULL,
  `Productname` varchar(30) DEFAULT NULL,
  `ProductBrand` varchar(30) DEFAULT NULL,
  `ProductSize` varchar(30) DEFAULT NULL,
  `ProductColor` varchar(30) DEFAULT NULL,
  `ProductPrice` varchar(30) DEFAULT NULL,
  `ProductCategory` varchar(30) DEFAULT NULL,
  `ProductImageName` varchar(50) DEFAULT NULL,
  `ProductImage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `tbl_products`

INSERT INTO `tbl_products` (`ProductID`, `Productname`, `ProductBrand`, `ProductSize`, `ProductColor`, `ProductPrice`, `ProductCategory`, `ProductImageName`, `ProductImage`) VALUES
('ProductID', 'Productname', 'ProductBrand', 'ProductSize', 'ProductColor', 'ProductPrice', 'ProductCategory', 'ProductImageName', 'ProductImage');

-- Indexes for dumped tables

-- Indexes for table `tbl_customers`

ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`CustomerID`);

-- Indexes for table `tbl_orders`

ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `CustomerID` (`CustomerID`);

-- Indexes for table `tbl_products`

ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`ProductID`);

-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for table `tbl_customers`

ALTER TABLE `tbl_customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- AUTO_INCREMENT for table `tbl_orders`

ALTER TABLE `tbl_orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `tbl_products`

ALTER TABLE `tbl_products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- Constraints for dumped tables

-- Constraints for table `tbl_orders`

ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `tbl_products` (`ProductID`),
  ADD CONSTRAINT `tbl_orders_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `tbl_customers` (`CustomerID`);
COMMIT;
