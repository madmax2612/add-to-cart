

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apwd`) VALUES
(1, 'abc', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `pbrand` varchar(50) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `pcost` int(11) NOT NULL,
  `pimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `ptype`, `pbrand`, `pdesc`, `pcost`, `pimg`) VALUES
(1, 'Galaxy S4', 'Mobile', 'Samsung', 'Galaxy S4, 16 GB', 29990, 'images/mob1.jpeg'),
(2, 'Galaxy S3', 'Mobile', 'Samsung', 'Galaxy S3, 16 GB', 12689, 'images/mob2.jpeg'),
(3, 'Nokia Lumia 630', 'Mobile', 'Nokia', 'Nokia Lumia 630, 8 GB', 9650, 'images/mob3.jpeg'),
(4, 'Lenovo K8 Plus', 'Mobile', 'Lenovo', 'Lenovo K8 Plus, 32 GB', 10999, 'images/mob4.jpeg'),
(5, 'Xolo Q800', 'Mobile', 'Xolo', 'Xolo Q800, 4 GB', 9556, 'images/mob5.jpeg'),
(6, 'Sony Xperia XA1', 'Mobile', 'Sony', 'Sony Xperia XA1, 32 GB', 16990, 'images/mob6.jpeg'),
(7, 'BB Z10', 'Mobile', 'Blackberry', 'Blackberry Z10, 16 GB', 8200, 'images/mob7.jpg'),
(8, 'Nikon A900', 'Camera', 'Nikon', 'Nikon A900 Point And Shoot, 20 MP', 20400, 'images/cam1.jpeg'),
(9, 'Sony DSC-W830', 'Camera', 'Sony', 'Sony DSC-W830 Point and Shoot, 20.1 MP', 7990, 'images/cam2.jpeg'),
(10, 'Nikon Coolpix B700', 'Camera', 'Nikon', 'Nikon Coolpix B700, 20.3 MP', 23026, 'images/cam3.jpg'),
(11, 'Canon PowerShot SX430B', 'Camera', 'Canon', 'Canon PowerShot SX430B, 20 MP', 14435, 'images/cam4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;


