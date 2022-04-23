-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 07:26 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT 'a@gmail.com',
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'admiin', 'admin', NULL, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `associated_movies`
--

CREATE TABLE `associated_movies` (
  `id` int(11) NOT NULL,
  `sequel` varchar(50) DEFAULT NULL,
  `prequel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associated_movies`
--

INSERT INTO `associated_movies` (`id`, `sequel`, `prequel`) VALUES
(1, 'The Matrix Reloaded', NULL),
(2, 'The Matrix Revolution', 'The Matrix'),
(3, NULL, 'The Matrix Reloaded'),
(4, NULL, NULL),
(5, NULL, NULL),
(6, 'The Dark Knight', NULL),
(7, 'The Dark Knight Rises', 'Batman Begins'),
(8, NULL, 'The Dark Knight'),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL),
(25, NULL, NULL),
(26, NULL, NULL),
(27, 'Age of Ultron', NULL),
(28, NULL, 'The Avengers'),
(29, 'The Winter Soldier', NULL),
(30, NULL, 'Captain America'),
(31, 'The Meltdown', NULL),
(32, 'Dawn of the Dinosaurs', 'Ice Age'),
(33, 'Continental Drift', 'The Meltdown'),
(34, NULL, 'Dawn of the Dinosaurs'),
(35, NULL, NULL),
(36, NULL, NULL),
(37, NULL, NULL),
(38, NULL, NULL),
(39, NULL, NULL),
(40, NULL, NULL),
(41, 'Spiderman 2', NULL),
(42, 'Spiderman 3', 'Spiderman 1'),
(43, NULL, 'Spiderman 2'),
(44, 'Iron Man 2', NULL),
(45, 'Iron Man 3', 'Iron Man 1'),
(46, NULL, 'Iron Man 2'),
(47, NULL, NULL),
(48, NULL, NULL),
(49, NULL, NULL),
(50, 'Pyaar Ka Punchnaam2', NULL),
(51, NULL, 'Pyaar Ka Punchnaama'),
(52, 'Don2', NULL),
(53, NULL, 'Don1'),
(54, NULL, NULL),
(55, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `box_office`
--

CREATE TABLE `box_office` (
  `id` int(11) NOT NULL,
  `weekend_gross` int(11) DEFAULT NULL,
  `opening_weekend` int(11) DEFAULT NULL,
  `gross` int(11) DEFAULT NULL,
  `earning_in_country` int(11) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `box_office`
--

INSERT INTO `box_office` (`id`, `weekend_gross`, `opening_weekend`, `gross`, `earning_in_country`, `budget`) VALUES
(1, 27788331, 27788331, 464000000, 171383253, 63000000),
(2, 87241362, 87241362, 742128461, 281492479, 150000000),
(3, 93823290, 93823290, 427343298, 139259759, 110000000),
(4, 28638131, 28638131, 2147483647, 600788188, 200000000),
(5, 727327, 727327, 58500000, 28341469, 25000000),
(6, 48745440, 48745440, 374218673, 205343774, 150000000),
(7, 158411483, 158411483, 1004558444, 533316061, 185000000),
(8, 160887295, 160887295, 1084939099, 448130642, 250000000),
(9, 26541709, 26541709, 307077295, 162586036, 55000000),
(10, 62785337, 62785337, 825532764, 292568851, 160000000),
(11, 36089972, 36089972, 553709788, 201573391, 140000000),
(12, 85734045, 85734045, 484592874, 242829261, 81000000),
(13, 47510360, 47510360, 675020017, 187991439, 165000000),
(14, 28760246, 28760246, 369206256, 100189501, 178000000),
(15, 50200000, 50200000, 817400891, 306169268, 75000000),
(16, 75177654, 75177654, 449220945, 198539855, 140000000),
(17, 235488, 235488, 39723096, 25530884, 9000000),
(18, 1965737, 1965737, 356830601, 176781728, 15000000),
(19, 94320883, 94320883, 773312399, 333130696, 170000000),
(20, 11035485, 11035485, 100853753, 37023395, 63000000),
(21, 34819017, 34819017, 457640427, 187705427, 103000000),
(22, 18510000, 18510000, 392000694, 116866727, 100000000),
(23, 201096, 2501096, 313542341, 170708996, 60000000),
(24, 26681262, 26681262, 672806292, 293501675, 40000000),
(25, 37513109, 37513109, 369330363, 167735396, 61000000),
(26, 31542121, 31542121, 263966701, 125466701, 60000000),
(27, 207438708, 207438708, 1519557910, 623279547, 220000000),
(28, 191271109, 191271109, 1405035767, 458991599, 250000000),
(29, 65058524, 65058524, 370569774, 176636816, 140000000),
(30, 95023721, 95023721, 714421503, 259746958, 170000000),
(31, 46312454, 46312454, 383257136, 176387405, 59000000),
(32, 1176639, 1176639, 660940780, 195329763, 80000000),
(33, 41690382, 41690382, 886686817, 196573705, 90000000),
(34, 46629259, 46629259, 877244782, 161317423, 95000000),
(35, 63087526, 63087526, 521311860, 223806889, 180000000),
(36, 360018, 360018, 377910544, 141319195, 15000000),
(37, 18907302, 18907302, 161849455, 79235468, 27000000),
(38, 55785112, 55785112, 723192705, 274084951, 100000000),
(39, 54308575, 54308575, 477875939, 207407616, 108000000),
(40, 208763, 208763, 122873310, 35887263, 15000000),
(41, 11444116, 114844116, 821708551, 403706375, 139000000),
(42, 115817364, 115817364, 783766341, 373377893, 200000000),
(43, 151116516, 151116516, 890871626, 336530303, 258000000),
(44, 98618668, 98618668, 585174222, 318298180, 140000000),
(45, 128122480, 128122480, 623933331, 312057433, 200000000),
(46, 174144585, 174144585, 1215439994, 408992272, 200000000),
(47, 116619362, 116619362, 668045518, 291021565, 225000000),
(48, 77025481, 77025481, 2147483647, 760505847, 237000000),
(49, 1645502, 1645502, 10741063, 6532874, 12000000),
(50, 1234008, 1234008, 30861009, 3000824, 7561235),
(51, 1545603, 1545603, 75001829, 5045226, 9853778),
(52, 3470490, 3470490, 72681005, 6017848, 8596940),
(53, 531620, 531620, 83651699, 5092766, 16700000),
(54, 285368, 285368, 909043, 909043, 6000000),
(55, 1405000, 1405000, 40000000, 10084659, 40000000);

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `id` int(11) NOT NULL,
  `male` varchar(50) DEFAULT NULL,
  `female` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`id`, `male`, `female`) VALUES
(1, 'Keanu Reeves', 'Carrie Anne Moss'),
(2, 'Keanu Reeves', 'Carrie Anne Moss'),
(3, 'Keanu Reeves', 'Carrie Anne Moss'),
(4, 'Leanardo Di Caprio', 'Kate Winslet'),
(5, 'Tim Burton', NULL),
(6, 'Christian Bale', 'Katie Holmes'),
(7, 'Christian Bale', 'Maggie Gyllenhaal'),
(8, 'Christian Bale', 'Anne Hathaway'),
(9, 'Will Smith', NULL),
(10, 'Leanardo Di Caprio', 'Ellen Page'),
(11, 'Bruce Willis', 'Liv Taylor'),
(12, 'Jim Carrey', 'Jennifer Aniston'),
(13, 'Matthew McConaughey', 'Jessica Chastain'),
(14, 'Tom Cruise', 'Emily Blunt'),
(15, 'Will Smith', NULL),
(16, 'Ben Affleck', 'Kate Beckinsale'),
(17, 'Guy Pierce', 'Carrie Anne Moss'),
(18, 'Tom Cruise', 'Kelly McGillis'),
(19, 'Chriss Pratt', 'Zoe Saldana'),
(20, 'Edward Norton', 'Helena Bonham Carter'),
(21, 'Russell Crowe', 'Connie Nielsen'),
(22, 'Leanardo Di Caprio', 'Margot Robbie'),
(23, 'Russell Crowe', 'Jennifer Connelly'),
(24, 'Bruce Willis', 'Toni Collette'),
(25, 'Ben Affleck', 'Rosamund Pike'),
(26, 'Jim Carrey', 'Laura Linney'),
(27, 'Robert Downey Jr.', 'Scarlett Johansson'),
(28, 'Robert Downey Jr.', 'Scarlett Johansson'),
(29, 'Chris Evans', 'Hayley Atwell'),
(30, 'Chris Evans', 'Scarlett Johansson'),
(31, 'Roy Romano', NULL),
(32, 'Roy Romano', 'Queen Latifah'),
(33, 'Roy Romano', 'Queen Latifah'),
(34, 'Roy Romano', 'Jennifer lopez'),
(35, 'Ben Burtt', 'Elissa Knight'),
(36, 'Dev Patel', 'Freida Pinto'),
(37, 'Bradley Cooper', 'Abby Cornish'),
(38, 'George Clooney', 'Sandra Bullock'),
(39, 'Matt Damon', 'Jessica Chastain'),
(40, 'Eddie Redmayne', 'Felicity Jones'),
(41, 'Tobey Maguire', 'Kirsten Dunst'),
(42, 'Tobey Maguire', 'Kirsten Dunst'),
(43, 'Tobey Maguire', 'Kirsten Dunst'),
(44, 'Robert Downey Jr', 'Gwyneth Paltrow'),
(45, 'Robert Downey Jr', 'Gwyneth Paltrow'),
(46, 'Robert Downey Jr', 'Gwyneth Paltrow'),
(47, 'Henry Cavill', 'Amy Adams'),
(48, 'Sam Worthington', 'Zoe Saldana'),
(49, 'Aamir Khan', 'Kareena Kapoor'),
(50, 'Kartik Tiwari', 'Nashrat Bharucha'),
(51, 'Kartik Tiwari', 'Nashrat Bharucha'),
(52, 'Shahrukh Khan', 'Priyanka Chopra'),
(53, 'Shahrukh Khan', 'Priyanka Chopra'),
(54, 'Aamir Khan', 'Gracy Singh'),
(55, 'Prabhas', 'Anushka Shetty');

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id` int(11) NOT NULL,
  `director` varchar(50) DEFAULT NULL,
  `producer` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`id`, `director`, `producer`, `company`) VALUES
(1, 'The Wachowski Brothers', 'Joel Silver', 'Warner Bros'),
(2, 'The Wachowski Brothers', 'Joel Silver', 'Warner Bros'),
(3, 'The Wachowski Brothers', 'Joel Silver', 'Warner Bros'),
(4, 'James Cameron', 'James Cameron', 'Paramount Pictures'),
(5, 'Frank Darabont', 'Niki Marvin', 'Castle Rock'),
(6, 'Christopher Nolan', 'Charles Rovin', 'Warner Bros.'),
(7, 'Christopher Nolan', 'Charles Rovin', 'Warner Bros.'),
(8, 'Christopher Nolan', 'Charles Rovin', 'Warner Bros.'),
(9, 'Gabriele Muccino', 'Will Smith', 'Relative Media'),
(10, 'Christopher Nolan', 'Emma Thomas', 'Warner Bros.'),
(11, 'Michael Bay', 'Jerry Bruckheimer', 'Touchstone Pictures'),
(12, 'Tom Shadyac', 'Jim Carrey', 'Spyglass Entertainment'),
(13, 'Christopher Nolan', 'Emma Thomas', 'Paramount Pictures'),
(14, 'Doug Liman', 'Erwin Stoff', 'Village Roadshow'),
(15, 'Roland Emmerich', 'Dean Devlin', 'Centropolis Entertainment'),
(16, 'Michael Bay', 'Jerry Bruckheimer', 'Touchstone Pictures'),
(17, 'Christopher Nolan', 'Suzanne Todd', 'Summit Entertainment'),
(18, 'Tony Scott', 'Don Simpson', 'Simpson'),
(19, 'James Gunn', 'Kevin Feige', 'Marvel Studios'),
(20, 'David Fincher', 'Art Linson', 'Fox Pictures'),
(21, 'Ridley Scott', 'Douglas Wick', 'Scott Free Productions'),
(22, 'Martin Scorsese', 'Martin Scorsese', 'Red Granite Pictures'),
(23, 'Ron Howard', 'Brian Grazer', 'Imagine Entertainment'),
(24, 'M.Night Shyamalan', 'Frank Marshall', 'Hollywood Pictures'),
(25, 'David Fincher', 'Reese Witherspoon', 'Regency Enterprises'),
(26, 'Peter Weir', 'Scott Rudin', 'Scott Rudin Productions'),
(27, 'Joss Whedon', 'Kevin Feige', 'Marvel Studios'),
(28, 'Joss Whedon', 'Kevin Feige', 'Marvel Studios'),
(29, 'Joe Johnston', 'Kevin Feige', 'Marvel Studios'),
(30, 'Joe Russo', 'Kevin Feige', 'Marvel Studios'),
(31, 'Chris Vedge', 'Lori Forte', 'Blue Sky Studios'),
(32, 'Carlos Saldanha', 'Lori Forte', 'Blue Sky Studios'),
(33, 'Carlos Saldanha', 'Lori Forte', 'Blue Sky Studios'),
(34, 'Steve Martino', 'Lori Forte', 'Blue Sky Studios'),
(35, 'Andrew Stanton', 'Jim Morris', 'Walt Disney Pictures'),
(36, 'Danny Boyle', 'Christian Colson', 'Celador Films'),
(37, 'Neil Burger', 'Leslie Dixon', 'Virgin Produced Rogue'),
(38, 'Alfonso Cuaron', 'David Heyman', 'Heyday Films'),
(39, 'Ridley Scott', 'Simon Kinberg', 'Scott Free Productions'),
(40, 'James Marsh', 'Tim Bevan', 'Working Title Films'),
(41, 'Sam Raimi', 'Laura Ziskin', 'Marvel Enterprises'),
(42, 'Sam Raimi', 'Laura Ziskin', 'Marvel Enterprises'),
(43, 'Sam Raimi', 'Laura Ziskin', 'Marvel Enterprises'),
(44, 'Jon Favreu', 'Kevin Feige', 'Marvel Studios'),
(45, 'Jon Favreu', 'Kevin Feige', 'Marvel Studios'),
(46, 'Shane Black', 'Kevin Feige', 'Marvel Studios'),
(47, 'ZacK Snyder', 'Christopher Nolan', 'DC Entetainment'),
(48, 'James Cameron', 'Jon Landou', 'Lightstorm Entertainment'),
(49, 'Raju Hirani', 'Vidhu Chopra', 'Vinod Chopra Films'),
(50, 'Luv Ranjan', 'Abhishek Pathak', 'Panaroma Studios'),
(51, 'Luv Ranjan', 'Abhishek Pathak', 'Panaroma Studios'),
(52, 'Farhan Akhtar', 'Ritesh Sidhwani', 'Excel Entertainment'),
(53, 'Farhan Akhtar', 'Ritesh Sidhwani', 'Excel Entertainment'),
(54, 'Ashutosh Gawariker', 'Aamir Khan', 'Aamir Khan Productions'),
(55, 'S. S. Rajamouli', 'Shobu Yarlagadda', 'Arka Media Works');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `date`) VALUES
(1, 'The Matrix', '1999-03-31'),
(2, 'The Matrix Reloaded', '2003-05-15'),
(3, 'The Matrix Revolution', '2003-11-05'),
(4, 'Titanic', '1997-11-18'),
(5, 'The Shawshank Redemption', '1994-09-23'),
(6, 'Batman Begins', '2005-06-15'),
(7, 'The Dark Knight', '2008-07-18'),
(8, 'The Dark Knight Rises', '2012-07-20'),
(9, 'The Pursuit of Happiness', '2006-12-10'),
(10, 'Inception', '2010-07-16'),
(11, 'Armageddon', '1998-07-01'),
(12, 'Bruce Almighty', '2003-05-23'),
(13, 'Interstellar', '2014-11-05'),
(14, 'Edge of Tomorrow', '2014-06-06'),
(15, 'Independence Day', '1996-07-02'),
(16, 'Pearl Harbour', '2001-05-25'),
(17, 'Momento', '2001-03-16'),
(18, 'Top Gun', '1986-05-16'),
(19, 'Guardians of Galaxy', '2014-08-01'),
(20, 'Fight Club', '1999-10-15'),
(21, 'Gladiator', '2000-05-05'),
(22, 'The Wolf of Wall Street', '2013-12-25'),
(23, 'A Beautiful Mind', '2001-12-21'),
(24, 'The Sixth Sense', '1999-08-06'),
(25, 'Gone Girl', '2014-10-03'),
(26, 'The Truman Show', '1998-06-05'),
(27, 'The Avengers', '2012-05-04'),
(28, 'Age of Ultron', '2015-05-01'),
(29, 'Captain America', '2012-07-22'),
(30, 'The Winter Soldier', '2014-07-23'),
(31, 'Ice Age', '2001-07-24'),
(32, 'The Meltdown', '2003-07-25'),
(33, 'Dawn of the Dinosaurs', '2005-07-26'),
(34, 'Continental Drift', '2007-07-27'),
(35, 'Wall E', '2009-07-28'),
(36, 'Slumdog Millionaire', '2008-07-29'),
(37, 'Limitless', '2001-07-30'),
(38, 'Gravity', '2013-07-31'),
(39, 'The Martian', '2015-08-01'),
(40, 'The Theory of Everything', '2015-08-02'),
(41, 'Spiderman 1', '2001-08-03'),
(42, 'Spiderman 2', '2003-08-04'),
(43, 'Spiderman 3', '2005-08-05'),
(44, 'Iron Man 1', '2008-08-06'),
(45, 'Iron Man 2', '2011-08-07'),
(46, 'Iron Man 3', '2014-08-08'),
(47, 'Man of Steel', '2013-08-09'),
(48, 'Avatar', '2009-10-08'),
(49, '3 idiots', '2009-12-25'),
(50, 'Pyaar Ka Punchnaama', '2011-05-20'),
(51, 'Pyaar Ka Punchnaama2', '2015-10-16'),
(52, 'Don', '2006-10-20'),
(53, 'Don2', '2011-12-23'),
(54, 'Lagaan', '2001-06-23'),
(55, 'Bahubali', '2015-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL DEFAULT '0',
  `country` varchar(50) DEFAULT NULL,
  `persons_voted` float DEFAULT NULL,
  `total_votes` decimal(10,2) DEFAULT NULL,
  `rating` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `country`, `persons_voted`, `total_votes`, `rating`) VALUES
(1, 'U.S.A', 17, '147.90', '8.70'),
(2, 'U.S.A', 15, '108.00', '7.20'),
(3, 'U.S.A', 14, '94.00', '6.70'),
(4, 'U.S.A', 16, '123.00', '7.69'),
(5, 'U.S.A', 13, '121.00', '9.30'),
(6, 'U.S.A', 15, '125.00', '8.30'),
(7, 'U.S.A', 15, '145.00', '9.00'),
(8, 'U.S.A', 16, '136.00', '8.50'),
(9, 'U.S.A', 14, '111.00', '7.90'),
(10, 'U.S.A', 17, '149.00', '8.76'),
(11, 'U.S.A', 13, '86.00', '6.60'),
(12, 'U.S.A', 14, '95.00', '6.79'),
(13, 'U.S.A', 16, '139.00', '8.69'),
(14, 'U.S.A', 14, '111.00', '7.90'),
(15, 'U.S.A', 14, '97.00', '6.90'),
(16, 'U.S.A', 15, '90.00', '6.00'),
(17, 'U.S.A', 14, '119.00', '8.50'),
(18, 'U.S.A', 14, '97.00', '6.90'),
(19, 'U.S.A', 15, '122.00', '8.10'),
(20, 'U.S.A', 15, '130.00', '8.67'),
(21, 'U.S.A', 14, '119.00', '8.50'),
(22, 'U.S.A', 15, '97.00', '8.20'),
(23, 'U.S.A', 14, '122.00', '8.20'),
(24, 'U.S.A', 14, '125.00', '8.20'),
(25, 'U.S.A', 14, '119.00', '8.20'),
(26, 'U.S.A', 15, '123.00', '8.10'),
(27, 'U.S.A', 15, '113.00', '8.10'),
(28, 'U.S.A', 14, '113.00', '7.60'),
(29, 'U.S.A', 17, '119.00', '7.00'),
(30, 'U.S.A', 14, '102.00', '7.80'),
(31, 'U.S.A', 14, '117.00', '7.60'),
(32, 'U.S.A', 15, '106.00', '6.90'),
(33, 'U.S.A', 15, '104.00', '7.00'),
(34, 'U.S.A', 14, '98.00', '6.70'),
(35, 'U.S.A', 14, '90.00', '8.40'),
(36, 'U.S.A', 15, '126.00', '8.00'),
(37, 'U.K', 14, '125.00', '7.40'),
(38, 'U.S.A', 16, '110.00', '6.88'),
(39, 'U.S.A', 15, '111.00', '8.20'),
(40, 'U.S.A', 15, '123.00', '7.70'),
(41, 'U.K', 15, '114.00', '7.60'),
(42, 'U.S.A', 15, '110.00', '7.30'),
(43, 'U.S.A', 15, '110.00', '6.20'),
(44, 'U.S.A', 16, '93.00', '7.90'),
(45, 'U.S.A', 14, '111.00', '7.00'),
(46, 'U.S.A', 14, '105.00', '7.30'),
(47, 'U.S.A', 16, '110.00', '7.20'),
(48, 'U.S.A', 14, '115.00', '7.90'),
(49, 'India', 15, '127.50', '8.50'),
(50, 'India', 14, '109.20', '7.80'),
(51, 'India', 15, '123.00', '8.20'),
(52, 'India', 14, '110.60', '7.90'),
(53, 'India', 15, '106.50', '7.10'),
(54, 'India', 14, '114.80', '8.20'),
(55, 'India', 15, '130.50', '8.70');

-- --------------------------------------------------------

--
-- Table structure for table `runtime`
--

CREATE TABLE `runtime` (
  `id` int(11) NOT NULL DEFAULT '0',
  `hours` int(11) DEFAULT NULL,
  `minutes` int(11) DEFAULT NULL,
  `totaltime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `runtime`
--

INSERT INTO `runtime` (`id`, `hours`, `minutes`, `totaltime`) VALUES
(1, 2, 16, 136),
(2, 2, 18, 138),
(3, 2, 9, 129),
(4, 3, 15, 195),
(5, 2, 22, 142),
(6, 2, 20, 140),
(7, 2, 32, 152),
(8, 2, 45, 165),
(9, 1, 57, 117),
(10, 2, 28, 148),
(11, 2, 30, 150),
(12, 1, 41, 101),
(13, 2, 49, 169),
(14, 1, 53, 113),
(15, 2, 25, 145),
(16, 3, 3, 183),
(17, 1, 53, 113),
(18, 1, 50, 110),
(19, 2, 2, 122),
(20, 2, 19, 139),
(21, 2, 38, 158),
(22, 3, 0, 180),
(23, 2, 15, 135),
(24, 1, 47, 107),
(25, 2, 29, 149),
(26, 1, 43, 103),
(27, 2, 23, 143),
(28, 2, 21, 141),
(29, 2, 4, 124),
(30, 2, 16, 136),
(31, 1, 21, 81),
(32, 1, 31, 91),
(33, 1, 34, 94),
(34, 1, 28, 88),
(35, 1, 38, 98),
(36, 2, 0, 120),
(37, 1, 45, 105),
(38, 1, 31, 91),
(39, 2, 21, 141),
(40, 2, 10, 130),
(41, 2, 1, 121),
(42, 2, 7, 127),
(43, 2, 19, 139),
(44, 2, 6, 126),
(45, 2, 5, 125),
(46, 2, 10, 130),
(47, 2, 14, 134),
(48, 2, 41, 161),
(49, 2, 51, 171),
(50, 2, 29, 149),
(51, 2, 16, 136),
(52, 2, 49, 169),
(53, 2, 28, 148),
(54, 3, 54, 234),
(55, 2, 38, 158);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT '0',
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT 'a@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `password`, `email`) VALUES
(1, 'arjun', 'arjun', 'gupta', 'arjun', 'sai@gmail.com'),
(2, '14103145', 'akansh', 'akansh', '12345', 'akansh97531@gmail.com'),
(3, '12345', 'sanyam', 'sanyam', '12345', 'sanyam.j@sakshamkapapa.com'),
(4, 'S', 'S', 'S', 'asytss', 'SJ@GMAIL.COM'),
(5, 'ark', 'ar', 'ar', 'arkark', 'saii@gmail.com'),
(29, 'v', 'v', 'v', 'vvvvvv', 'v@g.c'),
(30, 'a', 'adi', 'adi', 'adididi', 'a@g.com'),
(31, 'gau', 'gau', 'gau', 'gau', 'gau@gmail.com'),
(32, 'k', 'a', 'a', 'k', 'saiiii@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userrating`
--

CREATE TABLE `userrating` (
  `username` varchar(50) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrating`
--

INSERT INTO `userrating` (`username`, `mid`, `rate`) VALUES
('arjun', 1, 6),
('arjun', 2, 6),
('arjun', 3, 5),
('arjun', 10, 10),
('S', 1, 6),
('S', 3, 5),
('arjun', 55, 3),
('arjun', 6, 0),
('arjun', 5, 4),
('arjun', 27, 3),
('arjun', 23, 4),
('arjun', 30, 5),
('arjun', 13, 8),
('v', 50, 6),
('arjun', 15, 6),
('arjun', 11, 7),
('arjun', 47, 7),
('arjun', 4, 7),
('arjun', 41, 6),
('arjun', 29, 7),
('gau', 29, 7),
('arjun', 20, 5),
('k', 10, 7),
('k', 13, 8),
('arjun', 12, 8),
('arjun', 38, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `associated_movies`
--
ALTER TABLE `associated_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_office`
--
ALTER TABLE `box_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `runtime`
--
ALTER TABLE `runtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
