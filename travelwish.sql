-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2025 at 09:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelwish`
--

-- --------------------------------------------------------

--
-- Table structure for table `beach`
--

CREATE TABLE `beach` (
  `beach_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(5) NOT NULL,
  `blog_title` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `fileImg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `place_id` int(5) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`place_id`, `dest_name`, `description`, `tip1`, `tip2`, `tip3`, `tip4`, `best_time`, `fileImg`, `city`, `states`, `budget`) VALUES
(1, 'Mount Abu', 'sasdassad', 'asd', 'be secure', 'very cold', 'night cold', 'december to february', ' [\"6787d9836e853.jpg\",\"6787d9836eb93.jpeg\"]', 'mount abu', 'Rajasthan', 1000),
(3, 'Tirupati', 'Tirupati, located in the Chittoor district of Andhra Pradesh, is one of the most sacred pilgrimage destinations in India. Famous for the Tirumala Venkateswara Temple, this holy city attracts millions of devotees annually. Apart from its religious significance, Tirupati offers serene landscapes, waterfalls, and cultural heritage, making it an ideal blend of spirituality and natural beauty.', 'Book Darshan Tickets Early: Ensure you book your temple darshan tickets online through the TTD (Tirumala Tirupati Devasthanam) portal well in advance ', 'Dress Code: Wear traditional attire, as the temple has a strict dress code for devotees.', 'Explore Beyond the Temple: Visit places like Kapila Theertham, Sri Kalahasti, and Chandragiri Fort for a wholesome experience.', 'Stay Hydrated: The climb to Tirumala hills can be physically demanding, so keep yourself hydrated and carry light snacks.', 'The ideal time to visit Tirupati is September to March, when the weather is pleasant and the footfall is slightly lower than during major festivals.', '[\"67a3126137183.jpg\",\"67a3126137698.jpg\",\"67a31261378db.jpg\",\"67a3126137ab5.png\",\"67a3126137c8c.jpg\"]', 'Tirupati', 'Andhra Pradesh', 3000),
(4, 'Araku Valley', 'Nestled in the lush Eastern Ghats, Araku Valley is a pristine hill station in Andhra Pradesh, renowned for its breathtaking landscapes, coffee plantations, and tribal culture. A perfect getaway from city life, Araku boasts picturesque valleys, waterfalls, and caves. Its tranquil atmosphere and unspoiled natural beauty make it a must-visit destination for nature lovers and adventure enthusiasts.', 'Scenic Train Ride: Take the Visakhapatnam-Araku Valley train to enjoy the mesmerizing views of tunnels, bridges, and waterfalls.', 'Coffee Museum: Don’t miss the Araku Coffee Museum, where you can learn about the region’s world-famous coffee and indulge in a fresh brew.', 'Explore Local Tribes: Visit the Tribal Museum to gain insights into the traditions and lifestyle of indigenous communities.', 'Adventure Activities: Enjoy trekking, zip-lining, and camping amidst the serene hills for an adventurous experience.', 'October to March is the best time to visit Araku Valley, as the weather is cool and perfect for exploring its natural attractions.', '[\"67a313f290a0b.jpg\",\"67a313f290fde.jpg\",\"67a313f291628.jpg\",\"67a313f291943.jpg\",\"67a313f291c00.jpg\"]', 'Alluri Sitharama Raju district', 'Andhra Pradesh', 3000),
(5, 'Visakhapatnam', 'Visakhapatnam, affectionately called Vizag, is a bustling coastal city known for its pristine beaches, scenic hills, and vibrant cultural heritage. Situated along the Bay of Bengal, this city is a harmonious blend of natural beauty, modern urbanism, and historical significance. Key attractions like the Rama Krishna Beach, Kailasagiri, and INS Kurusura Submarine Museum make it a favorite among travelers. With its rich history and proximity to picturesque locations like Araku Valley, Vizag is perfect for a refreshing getaway.', 'Spend time at RK Beach, Yarada Beach, and Rushikonda Beach for stunning sunrises and water sports.', 'Museums and History: Visit the Submarine Museum and the Maritime Museum to dive into India’s naval history.', 'Local Delicacies: Don’t miss the seafood and Andhra specials like spicy prawns, fish curry, and bamboo chicken.', 'Day Trips: Plan visits to Simhachalam Temple, Borra Caves, and Araku Valley to explore Vizag’s surroundings.', 'The best time to visit Vizag is between October and February, when the weather is cool and perfect for beach outings and sightseeing.', '[\"67a3155717850.jpg\",\"67a3155717bf4.jpg\",\"67a3155717ed2.jpg\",\"67a315571814b.jpg\",\"67a3155718360.jpg\",\"67a31557185b3.jpg\"]', 'Visakhapatnam', 'Andhra Pradesh', 3000),
(6, 'Vijayawada', 'Vijayawada, the \"<b>Land of Victory</b>,\" is a vibrant city on the banks of the Krishna River. Known for its cultural heritage, ancient temples, and modern urban development, it is one of Andhra Pradesh\'s most bustling cities. Key attractions like the Kanaka Durga Temple, Prakasam Barrage, and Bhavani Island offer a mix of spirituality, natural beauty, and leisure activities. Vijayawada is also a prominent hub for shopping and delicious Andhra cuisine.', 'Temple Visits: Visit the Kanaka Durga Temple, a revered shrine situated atop Indrakeeladri Hill, for a spiritual experience.', 'Leisure Spots: Spend time at Bhavani Island for water sports, picnics, and serene views of the Krishna River.', 'Local Cuisine: Relish Andhra specialties like spicy biryani, pulihora, and Gongura dishes at local restaurants.', 'Transport: Utilize auto-rickshaws or rental cars to navigate the city easily.', 'The best time to visit Vijayawada is from October to March, as the weather is pleasant for exploring outdoor attractions.', '[\"67a316984ba36.jpg\",\"67a316984befb.jpeg\",\"67a316984c210.jpg\",\"67a316984c4f4.jpg\"]', 'NTR district', 'Andhra Pradesh', 2000),
(7, 'Anantapur', 'Anantapur, located in the Rayalaseema region of Andhra Pradesh, is known for its historical significance, temples, and beautiful landscapes. The city offers a peaceful ambiance and is home to attractions like the <b>Lepakshi Temple</b> and <b>Bhoga Nandeeshwara Temple</b>. Anantapur is also famous for its handloom industries, including the renowned <b>Madhavaram silk sarees</b>.', 'Visit <b>Lepakshi Temple</b> for historical and architectural wonders.', 'Explore the local handloom industries and buy silk sarees.', 'Don\'t miss a visit to Bhoga Nandeeshwara Temple.', 'Stay in local homestays for a cultural experience.', 'The best time to visit Anantapur is from October to March, as the weather is pleasant for exploring outdoor attractions.', '[\"67a3182577711.jpg\",\"67a3182577a69.jpg\",\"67a3182577d55.webp\"]', 'Anantapur', 'Andhra Pradesh', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `hillstation`
--

CREATE TABLE `hillstation` (
  `hill_station_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mountain`
--

CREATE TABLE `mountain` (
  `mountain_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(5) NOT NULL,
  `movie_title` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `dest_1` varchar(150) NOT NULL,
  `description1` varchar(500) NOT NULL,
  `city1` varchar(50) NOT NULL,
  `states1` varchar(50) NOT NULL,
  `dest_2` varchar(150) NOT NULL,
  `description2` varchar(500) NOT NULL,
  `city2` varchar(50) NOT NULL,
  `states2` varchar(50) NOT NULL,
  `dest_3` varchar(150) NOT NULL,
  `description3` varchar(500) NOT NULL,
  `city3` varchar(50) NOT NULL,
  `states3` varchar(50) NOT NULL,
  `dest_4` varchar(150) NOT NULL,
  `description4` varchar(500) NOT NULL,
  `city4` varchar(50) NOT NULL,
  `states4` varchar(50) NOT NULL,
  `budget` varchar(10) NOT NULL,
  `fileImg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `description`, `dest_1`, `description1`, `city1`, `states1`, `dest_2`, `description2`, `city2`, `states2`, `dest_3`, `description3`, `city3`, `states3`, `dest_4`, `description4`, `city4`, `states4`, `budget`, `fileImg`) VALUES
(1, 'Go  Goa Gone', 'asdsdsads', 'goa 1', 'sasad', 'panji', 'goa', 'goa2', 'sasda', 'panji', 'goa', 'goa3', 'assad', 'panji', 'goa', 'goa 4', 'asdasad', 'panji', 'goa', '1500', '[\"6787de30be948.jpeg\",\"6787de30beb99.jpg\",\"6787de30becf5.jpeg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `palace`
--

CREATE TABLE `palace` (
  `palace_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(5) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beach`
--
ALTER TABLE `beach`
  ADD PRIMARY KEY (`beach_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `hillstation`
--
ALTER TABLE `hillstation`
  ADD PRIMARY KEY (`hill_station_id`);

--
-- Indexes for table `mountain`
--
ALTER TABLE `mountain`
  ADD PRIMARY KEY (`mountain_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `palace`
--
ALTER TABLE `palace`
  ADD PRIMARY KEY (`palace_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beach`
--
ALTER TABLE `beach`
  MODIFY `beach_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `place_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hillstation`
--
ALTER TABLE `hillstation`
  MODIFY `hill_station_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mountain`
--
ALTER TABLE `mountain`
  MODIFY `mountain_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `palace`
--
ALTER TABLE `palace`
  MODIFY `palace_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
