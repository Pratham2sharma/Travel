-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 12:33 PM
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
(7, 'Anantapur', 'Anantapur, located in the Rayalaseema region of Andhra Pradesh, is known for its historical significance, temples, and beautiful landscapes. The city offers a peaceful ambiance and is home to attractions like the <b>Lepakshi Temple</b> and <b>Bhoga Nandeeshwara Temple</b>. Anantapur is also famous for its handloom industries, including the renowned <b>Madhavaram silk sarees</b>.', 'Visit <b>Lepakshi Temple</b> for historical and architectural wonders.', 'Explore the local handloom industries and buy silk sarees.', 'Don\'t miss a visit to Bhoga Nandeeshwara Temple.', 'Stay in local homestays for a cultural experience.', 'The best time to visit Anantapur is from October to March, as the weather is pleasant for exploring outdoor attractions.', '[\"67a3182577711.jpg\",\"67a3182577a69.jpg\",\"67a3182577d55.webp\"]', 'Anantapur', 'Andhra Pradesh', 2000),
(8, 'Puttaparthi', 'Puttaparthi is a small town in Andhra Pradesh famous for being the birthplace of spiritual leader <b>Sri Sathya Sai Baba</b>. Known for its spiritual significance, Puttaparthi attracts visitors seeking peace, serenity, and spiritual enrichment. Key attractions include <b>Prashanti Nilayam</b>, the spiritual headquarters of Sai Baba\'s followers, and the <b>Sai Kulwant Hall</b>.', 'Attend spiritual discourses and bhajans at <b>Prashanti Nilayam</b>.', 'Explore the spiritual teachings of <b>Sri Sathya Sai Baba</b>.', 'Participate in the seva activities organized by the trust.', 'Dress conservatively while visiting spiritual sites.', 'The best time to visit Puttaparthi is from October to March, as the weather is pleasant and ideal for spiritual retreats and exploring key attractions', '[\"67a8334f59689.jpg\",\"67a8334f59ea9.jpg\",\"67a8334f5a1f1.jpg\",\"67a8334f5a511.png\"]', 'Puttaparthi', 'Andhra Pradesh', 3000),
(9, 'Basilica of Bom Jesus', 'The Basilica of Bom Jesus, a UNESCO World Heritage Site, is a magnificent example of Baroque architecture and a prominent pilgrimage site in Goa. It houses the relics of St. Francis Xavier, attracting millions of visitors annually. The intricate carvings, stunning frescoes, and rich history make it a must-visit landmark.', 'Dress modestly as it is a religious site', 'Visit early morning to avoid crowds', ' Attend the Sunday mass for a spiritual experience.', 'Explore the nearby Se Cathedral and Church of St. Francis of Assisi.', 'The best time to visit the <b>Basilica of Bom Jesus</b> in Goa is from November to February, as the weather is cool and comfortable for exploring this', '[\"67a835b7b1f4e.jpg\",\"67a835b7b2349.jpg\",\"67a835b7b25ee.jpg\",\"67a835b7b27ca.jpg\",\"67a835b7b2997.jpg\",\"67a835b7b2b60.jpg\"]', 'Goa', 'Goa', 1500),
(10, 'Chapora Fort', 'Chapora Fort, famous for its appearance in Bollywood movies, offers a stunning panoramic view of the <b>Arabian Sea</b> and the surrounding beaches. This historic fort, built by the Portuguese, is a great spot to unwind and capture mesmerizing sunsets. It’s a favorite among history buffs and couples seeking romantic moments.', 'Wear comfortable shoes for climbing the fort', 'Visit early morning or late evening for the best views.', 'Bring a camera to capture scenic landscapes.', 'Avoid visiting during the afternoon to escape the heat.', 'The best time to visit Chapora Fort in Goa is from October to March, as the weather is pleasant for exploring the fort and enjoying stunning sunset vi', '[\"67a8378fb3117.png\",\"67a8378fb357f.jpg\",\"67a8378fb386f.jpg\"]', 'Bardez', 'Goa', 2000),
(11, 'Dudhsagar Falls', 'Dudhsagar Falls, one of India’s tallest waterfalls, is a breathtaking natural wonder located amidst the lush greenery of the Western Ghats. Its cascading white waters resemble a sea of milk, making it a visual spectacle. A trek through dense forests to reach the falls is an adventure in itself. It\'s a must-visit destination for nature and photography enthusiasts.', 'Wear sturdy shoes for the trek to the falls.', 'Visit during monsoons for the most stunning views.', 'Book a jeep safari for easy access to the falls.', 'Carry snacks and water for the journey.', 'The best time to visit Dudhsagar Falls is from June to October, as the monsoon season enhances the waterfall’s beauty, making it a breathtaking sight ', '[\"67a839692ba19.jpg\",\"67a839692bdc8.jpg\",\"67a839692c056.jpg\",\"67a839692c288.jpg\"]', 'South Goa', 'Goa', 2000),
(12, 'Baga Beach', 'Baga Beach is synonymous with electrifying nightlife, thrilling water sports, and beachside parties. Known for its buzzing clubs like Tito’s and Mambo’s, it\'s a hotspot for party-goers. During the day, you can relax on the soft sands or indulge in activities like banana boat rides and parasailing. Baga is the ultimate destination for fun and relaxation in Goa.', 'Visit in the evening to experience the nightlife.', 'Book water sports in advance for better deals.', 'Try fresh seafood at beachside cafes.', 'Explore the nearby Saturday Night Market.', 'The best time to visit Baga Beach in Goa is from November to January, as the weather is ideal for enjoying beachside parties, thrilling water sports, ', '[\"67a83ac6e4e2f.jpg\",\"67a83ac6e51b3.jpg\",\"67a83ac6e53a1.jpg\",\"67a83ac6e5570.jpg\",\"67a83ac6e5731.jpg\"]', 'Bardez', 'Goa', 4000),
(13, 'Panaji', 'Panaji, the capital city of Goa, is a delightful blend of Portuguese heritage and modern charm. With its colorful houses, cobblestone streets, and serene <b>Mandovi River</b>, Panaji offers a unique cultural experience. Attractions like the Immaculate Conception Church, <b>Fontainhas Latin Quarter</b>, and <b>Miramar Beach</b> add to its allure. It\'s a hub for food lovers and history buffs alike.', 'Take a heritage walk through the <b>Fontainhas area</b>.', 'Try traditional Goan dishes at local restaurants', 'Visit the casinos along the <b>Mandovi River</b> for entertainment.', 'Rent a bike to explore the city at your own pace', 'The best time to visit Panaji in Goa is from October to February, as the pleasant weather makes it ideal for exploring its Portuguese heritage, scenic', '[\"67a84703c909f.jpg\",\"67a84703c9476.jpg\",\"67a84703c9733.jpg\",\"67a84703c9a3d.jpg\",\"67a84703c9d40.jpg\",\"67a84703ca01a.jpg\",\"67a84703ca303.jpg\"]', 'Panaji', 'Goa', 3500),
(14, 'Anjuna Beach', 'Anjuna Beach is a paradise for hippies and party enthusiasts. Famous for its flea markets, trance parties, and rocky shoreline, this beach perfectly blends natural beauty and cultural vibes. It\'s an ideal place for backpackers and solo travelers seeking adventure, yoga retreats, and local crafts. The laid-back ambiance and mesmerizing sunsets make it unforgettable.', 'Explore the <b>Wednesday Flea Market</b> for unique souvenirs and handicrafts.', 'Attend a beach party to experience the vibrant nightlife.', 'Carry a camera for stunning sunset shots.', 'Visit the nearby Chapora Fort for a panoramic view of the Arabian Sea.', 'The best time to visit <b>Anjuna Beach</b> in Goa is from November to March, as the weather is perfect for enjoying beach parties, exploring the flea ', '[\"67a84c8047b5f.jpg\",\"67a84c8047ed5.jpg\",\"67a84c8048191.jpg\",\"67a84c804845d.jpg\",\"67a84c8048767.jpg\",\"67a84c8048a5d.jpg\"]', 'North Goa', 'Goa', 3000),
(15, 'Calangute Beach', '<b>Calangute Beach</b>, often referred to as the \"Queen of Beaches,\" is one of the most famous and vibrant tourist destinations in Goa. Known for its breathtaking golden sands, crystal-clear waters, and lively atmosphere, this beach attracts travelers from all over the world. Whether you\'re looking for a peaceful retreat by the shore or an adrenaline-filled adventure, <b>Calangute Beach</b> has something for everyone.  \r\n\r\nAdventure seekers can indulge in thrilling water sports such as parasailing, jet skiing, banana boat rides, and windsurfing, while those who prefer a more laid-back experience can relax under beach umbrellas and soak in the stunning coastal views. The beach is lined with numerous shacks and restaurants serving mouthwatering Goan delicacies, fresh seafood, and exotic drinks, making it a paradise for food lovers.  \r\n\r\nIn addition to its natural beauty, <b>Calangute Beach</b> is a hub for nightlife, shopping, and cultural experiences. From bustling flea markets selling ', 'Visit early morning for a peaceful experience before the crowds arrive.', 'Don’t miss the beach shacks for authentic Goan cuisine', 'Try water sports for an adrenaline rush.', 'Shop for souvenirs at the nearby Calangute Market.', 'The best time to visit Calangute Beach in Goa is from November to February, as the pleasant weather makes it ideal for enjoying water sports, beachsid', '[\"67a84f4d61044.jpg\",\"67a84f4d6165f.jpg\",\"67a84f4d61905.jpg\",\"67a84f4d61af0.jpg\",\"67a84f4d61d13.jpg\",\"67a84f4d61fc9.jpg\",\"67a84f4d6221d.jpg\"]', 'North Goa', 'Goa', 4000),
(16, 'Chitrakot Waterfalls ', '<b>Chitrakoot Falls</b>, famously known as the \"Niagara of India,\" is one of the most breathtaking waterfalls in the country, located on the picturesque <b>Indravati River</b> in Chhattisgarh. This majestic cascade is renowned for its sheer grandeur, spanning an impressive width of nearly 300 meters, making it the widest waterfall in India.  \r\n\r\nThe beauty of <b>Chitrakoot Falls</b> is at its peak during the monsoon season when the river swells, and the falls thunder down with incredible force, creating a mesmerizing spectacle of nature. The surrounding lush greenery, misty atmosphere, and roaring waters make it a paradise for nature lovers, adventure seekers, and photographers looking to capture its awe-inspiring charm.  \r\n\r\nBesides its natural allure, <b>Chitrakoot Falls</b> holds cultural and spiritual significance, with many local legends associated with it. Visitors can also explore nearby attractions such as caves, temples, and viewpoints that enhance the overall experience. Whet', 'Visit during the monsoon for the best experience.', 'Wear waterproof shoes and carry rain gear.', 'Avoid swimming due to strong currents.', 'Explore nearby caves for spiritual enrichment.', 'The best time to visit Chitrakoot Falls in Chhattisgarh is from October to February, as the weather is pleasant and ideal for witnessing the breathtak', '[\"67a85561baf98.jpg\",\"67a85561bb4ca.jpg\",\"67a85561bb999.jpg\",\"67a85561bbbec.jpg\",\"67a85561bbf5a.png\",\"67a85561bc1d5.jpg\",\"67a85561bc469.jpg\"]', 'Bastar District', 'Chhattisgarh', 4000);

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
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `uname`, `email`, `password`) VALUES
(1, 'pratham2sharma', 'sharmapratham1208@gmail.com', '$2y$10$.YdNBU85EoGTyMx0tLzJguOcjoIZ5wm1y8xkDI9mLs9UeQR9uHv4a');

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
  MODIFY `place_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
