
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_date` date NOT NULL DEFAULT current_timestamp()
)


INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `admin_date`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '0379b016c455b56089cb7a123144f57fa2fed565', '2021-05-28'),
(5, 'testAd', 'testAd', 'testadmin@gmail.com', '103ff9f4b7c316e876d062987774097a6c486c0b', '2021-06-17');


CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `subscribe_date` date NOT NULL DEFAULT current_timestamp()
)


INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `country`, `community`, `subscribe_date`) VALUES
(26, 'Member', 'Member', 'user@gmail.com', '0b09dda4d60289b501d447a8846bb9bc73f0dcd1', '0758624475', 'FR', 'Visiteurs', '2021-06-17'),
(27, 'Member', 'Member', 'member@gmail.com', '$2y$10$NrxOnFxcOsjrcvmWTq8f8OYhLVowsg6TSmRwBmRdJhynt9R.kEdZW', '0758624475', 'FR', 'Visiteurs', '2021-06-17'),
(29, 'ali', 'bencheikh', 'alibencheikh@gmail.com', '$2y$10$gtmgj1pfVGtzLxyLhnzwq.GXLkkGky6pl50WkMfKxruEvaettQKXW', '0758624475', 'FR', 'Visiteurs', '2021-07-08');


CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artist_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `score` varchar(255) DEFAULT NULL,
  `price` double DEFAULT 0
)

INSERT INTO `product` (`id`, `product_type`, `product_name`, `image`, `artist_name`, `category`, `score`, `price`) VALUES
(1, 'film', 'Annabel', 'anabil.jpg', NULL, 'Action/Aventure', '8.9', 29.99),
(2, 'film', 'Fast And Furios', 'fastandfurios.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(3, 'film', 'Rush Hour 2', 'film adventure.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(4, 'film', 'Hunger Games', 'adventure.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(5, 'film', 'The conjuring 2', 'theconjuring.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(6, 'film', 'Pirate des Caraibes', 'pirate.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(7, 'film', 'Harry Potter', 'harry.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(8, 'film', 'Monsters', 'monsters.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(9, 'film', 'Mr Been', 'mrbeen.jpg', NULL, 'Comedie', NULL, 29.99),
(10, 'film', 'Dr Dolittle', 'Le Voyage du Dr Dolittle.jpg', NULL, 'Comedie', NULL, 29.99),
(11, 'film', 'Le Mask', 'the-mask-affiche.jpg', NULL, 'Comedie', NULL, 29.99),
(12, 'film', 'Intouchables', 'comique.jpg', NULL, 'Comedie', NULL, 29.99),
(13, 'film', '30 Minutes Or Less', '30minutes.jpg', NULL, 'Comedie', NULL, 29.99),
(14, 'film', 'Home Alone', 'home-alone.jpg', NULL, 'Comedie', NULL, 29.99),
(15, 'film', 'Scary Movie', 'scarymovie.jpg', NULL, 'Comedie', NULL, 29.99),
(16, 'film', 'Dumb And Dumber', 'dumb.jpg', NULL, 'Comedie', NULL, 29.99),
(17, 'film', 'A Silent voice', 'silentvoice.jpg', NULL, 'Anime', NULL, 29.99),
(18, 'film', 'Your Name', 'yournam.jpg', NULL, 'Anime', '8.9', 29.99),
(19, 'film', 'Loin de Moi,Pres de toi', 'loindemoi.jpg', NULL, 'Anime', NULL, 29.99),
(20, 'film', 'No game No life', 'nogamenolife.jpg', NULL, 'Anime', NULL, 29.99),
(21, 'film', 'la Reine Des Neiges', 'frozen.jpg', NULL, 'Anime', NULL, 29.99),
(22, 'film', 'Hotel Transylvania', 'hotel-transylvania.jpg', NULL, 'Anime', NULL, 29.99),
(23, 'film', 'Spirted Away', 'spirted-away.jpg', NULL, 'Anime', NULL, 29.99),
(24, 'film', 'Naruto The Last', 'naruto.jpg', NULL, 'Anime', NULL, 29.99),
(25, 'serie', 'The Witchers', 'THEWITCHER.jpg', NULL, 'Action/Aventure', NULL, 29.99),
(26, 'serie', 'Prison Break', '1264.jpg', NULL, 'Action/Aventure', '10.0', 29.99),
(27, 'serie', 'Breaking Bad', '3956503.jpg', NULL, 'Action/Aventure', '9.9', 29.99),
(28, 'serie', 'Peaky Blinders', 'peacky.jpg', NULL, 'Action/Aventure', '10.0', 290.99),
(29, 'serie', 'Avenue 5', 'avenue.jpg', NULL, 'Comedie', NULL, 29.99),
(30, 'serie', 'Sex Education', 'education.jpg', NULL, 'Comedie', NULL, 29.99),
(31, 'serie', 'Im Not Okey With This', 'iamnotokey.jpg', NULL, 'Comedie', NULL, 29.99),
(32, 'serie', 'Star Trek: Lower Decks', 'startrek.jpg', NULL, 'Comedie', NULL, 29.99),
(33, 'serie', 'One Piece', 'onepiece.jpg', NULL, 'Anime', '9.6', 29.99),
(34, 'serie', 'Tokyo Ghoul', 'tokyo-ghoul.jpg', NULL, 'Anime', '9.9', 29.99),
(35, 'serie', 'One Punsh Man', 'onepunsh.jpg', NULL, 'Anime', NULL, 29.99),
(36, 'serie', 'Attack on Titan', 'AOT.jpeg', NULL, 'Anime', '10.0', 29.99),
(37, 'musique', 'AC/DC', 'acdc.png', NULL, 'ROCK', NULL, 29.99),
(38, 'musique', 'Queen', 'queen.jpg', NULL, 'ROCK', NULL, 29.99),
(39, 'musique', 'Jimi Hendrix', 'jimih.jpg', NULL, 'ROCK', NULL, 29.99),
(40, 'musique', 'Van Halen', 'halen.jpg', NULL, 'ROCK', NULL, 29.99),
(41, 'musique', 'Led Zeppelin', 'zep.jpg', NULL, 'ROCK', NULL, 29.99),
(42, 'musique', 'Aerosmith', 'Aerosmith.jfif', NULL, 'ROCK', NULL, 29.99),
(43, 'musique', 'Navirana', 'navirana.jpg', NULL, 'ROCK', NULL, 29.99),
(44, 'musique', 'Black Eyes Peas', 'bep.jpg', NULL, 'POP', NULL, 29.99),
(45, 'musique', 'Micheal jackson', 'michael.jpg', NULL, 'POP', NULL, 29.99),
(46, 'musique', 'Miley Cyrus', 'mileycyrus.png', NULL, 'POP', NULL, 29.99),
(47, 'musique', 'Dua Lipa', 'dua.jpg', NULL, 'POP', NULL, 29.99),
(48, 'musique', 'Drake', 'drake.jpeg', NULL, 'POP', NULL, 29.99),
(49, 'musique', 'Billie Eilish', 'bilie.jpg', NULL, 'POP', NULL, 29.99),
(50, 'musique', 'Adele', 'adel.jpg', NULL, 'POP', NULL, 29.99),
(51, 'musique', 'Hamza', 'hamza.jpg', NULL, 'RAP', NULL, 29.99),
(52, 'musique', 'SCH', 'rooftop.jpg', NULL, 'RAP', NULL, 29.99),
(53, 'musique', 'PNL', 'pnl.jpg', NULL, 'RAP', NULL, 29.99),
(54, 'musique', 'Damso', 'damso.jpg', NULL, 'RAP', NULL, 29.99),
(55, 'musique', 'Travis Scott', 'travis.jpg', NULL, 'RAP', NULL, 29.99),
(56, 'musique', 'Niska', 'niska.png', NULL, 'RAP', NULL, 29.99),
(57, 'musique', 'Eminem', 'eminem.jpg', NULL, 'RAP', NULL, 29.99),
(64, 'serie', 'Black Clover', 'black-clover.jpg', NULL, 'Anime', '9.7', 26.99),
(66, 'serie', 'Bleach', 'bleach.jpg', NULL, 'Anime', '8.9', 69.99),
(67, 'serie', 'My hero academia', 'myhero.jpg', NULL, 'Anime', '7.9', 23.99),
(80, 'serie', 'Jujutsu kaizen', 'jujutsu.jpg', NULL, 'Anime', '10', 29.99);


CREATE TABLE `reservation` (
  `id_command` int(11) NOT NULL,
  `id_membre` int(25) NOT NULL,
  `community` varchar(255) NOT NULL,
  `amount` int(5) NOT NULL DEFAULT 1,
  `id_product` int(25) NOT NULL,
  `price_product` int(11) DEFAULT NULL
)


INSERT INTO `reservation` (`id_command`, `id_membre`, `community`, `amount`, `id_product`, `price_product`) VALUES
(20, 5, 'Visiteurs', 1, 25, 30),
(21, 5, 'Visiteurs', 1, 43, 30),
(22, 5, 'Visiteurs', 1, 20, 30),
(24, 5, 'Visiteurs', 1, 28, 291),
(37, 20, 'Visiteurs', 1, 43, 30),
(38, 20, 'Visiteurs', 1, 50, 30),
(74, 27, 'Visiteurs', 1, 66, 70),
(75, 27, 'Visiteurs', 1, 33, 30),
(76, 27, 'Visiteurs', 1, 36, 30),
(77, 27, 'Visiteurs', 1, 20, 30),
(78, 27, 'Visiteurs', 1, 3, 30);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `community` varchar(255) NOT NULL,
  `reservation` varchar(255) DEFAULT NULL,
  `priority_reservation` varchar(255) DEFAULT NULL,
  `possibility_order` varchar(255) DEFAULT NULL,
  `possibility_recommendations` varchar(255) DEFAULT NULL,
  `rental_return` varchar(255) DEFAULT NULL,
  `number_rentals` int(11) DEFAULT NULL
)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_command`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`community`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
