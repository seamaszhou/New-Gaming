-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2018 at 01:27 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--
CREATE DATABASE IF NOT EXISTS `accounts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `accounts`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, '213', '131', 'seamas@123.com', '$2y$10$vopwu25QrF6BSZtflv7ebejP8d.6.r9RdiD42.p3LoOQzotb/PGOO', '3a835d3215755c435ef4fe9965a3f2a0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `ezweb`
--
CREATE DATABASE IF NOT EXISTS `ezweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ezweb`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `message`) VALUES
(27, '=w='),
(28, 'oewkrlas,dmcxocvdfwe');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(1, 'Ikaruga', '2018-05-29', '2018-05-29 00:00:00', '2018-05-29 00:00:00', 1),
(2, 'Little Nightmares', '2018-05-18', '2018-05-18 00:00:00', '2018-05-18 00:00:00', 1),
(3, 'Dongkey Kong Country: Tropical Freeze', '2018-05-03', '2018-05-03 00:00:00', '2018-05-03 00:00:00', 1),
(4, 'Street Fighter 30th Anniversary Collection', '2018-05-30', '2018-05-30 00:00:00', '2018-05-30 00:00:00', 1),
(5, 'H1Z1', '2018-05-22', '2018-05-22 00:00:00', '2018-05-22 00:00:00', 1),
(6, 'Detroit: Become Human', '2018-05-25', '2018-05-25 00:00:00', '2018-05-25 00:00:00', 1),
(8, 'qeijqwelkqw', '2018-05-23', '2018-05-25 02:36:10', '2018-05-25 02:36:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Name` text NOT NULL,
  `Date` date NOT NULL,
  `short_desc` text NOT NULL,
  `Day` int(11) NOT NULL,
  `Console` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `image`, `Price`, `Description`, `Name`, `Date`, `short_desc`, `Day`, `Console`, `video`) VALUES
(1, 'pictures/switch/1.png', 20, '\"Ikaruga\" is a difficult shooting game. It is very different from the similar barrage shooting game, it is not famous for relying on powerful barrage, and is famous for its unique black and white design. The player can first choose the option of hitting a counterattack in the same color to experience the game, which will give you a new understanding of the game. The enemies that appear in the game are divided into black and white and two colors. The player\'s fighters and the launched bullets are also in black and white. When the same color hits, counterattack bombs will appear, which means that a large number of enemy bullets will appear. When hit with different colors, there will be no side effects.', 'Ikaruga', '2018-05-29', '\"Ikaruga\" is a difficult shooting game. It is very different from the similar barrage shooting game, it is not famous for relying on powerful barrage, and is famous for its unique black and white design. ', 29, 'Switch', ''),
(2, 'pictures/switch/2.png', 35, 'Little Nightmare is an action adventure game created by Tarsier Studios and released by Namco Bandai. The game was originally called \"Hunger.\" The theme of the game is very simple. A girl is lost in a labyrinth filled with monsters. What the player needs to do is to help her escape from this place.', 'Little Nightmares', '2018-05-18', 'Little Nightmare is an action adventure game created by Tarsier Studios and released by Namco Bandai. ', 18, 'Switch', ''),
(3, 'pictures/switch/3.png', 89, 'Dongkey Kong Country: Tropical Freeze\" is an action adventure game released by Retro Studios and produced by Nintendo. In this game, players can choose 4 characters, each character has its own characteristics. In addition to completing a wealth of levels in the game, you can also challenge BOSS and find hidden elements.', 'Dongkey Kong Country: Tropical Freeze', '2018-05-03', '\"Dongkey Kong Country: Tropical Freeze\" is an action adventure game released by Retro Studios and produced by Nintendo.', 3, 'Switch', ''),
(4, 'pictures/switch/4.png', 13, '\"Juicy Realm\" is an adventure game created by Spacecan Games and operated by the heartbeat network. The game tells the story of the world\'s strangest fruits. In this book, the boundaries between animals and plants have been broken, and a subversion of the food chain kicked off. Mankind had to set up outposts in the first area where alienation plants were found and began investigations. The military also prepared a large number of powerful weapons. You led a contingent and began a long-term tug of war. .', 'Juicy Realm', '2018-05-04', '\"Juicy Realm\" is an adventure game created by Spacecan Games and operated by the heartbeat network.', 4, 'Switch', ''),
(5, 'pictures/switch/5.png', 50, 'The Street Fighter\'s 30th Anniversary Collection is a commemorative collection created by Capcom to celebrate the 30th anniversary of the Street Fighter series. It includes 12 series of games from the first generation of Street Fighter to Street Fighter 3: Third Impact. , to make players enjoy playing once. Several of them have also added levels, random battles, rankings, and other settings to allow you to interact with other players online, which is very convenient.', 'Street Fighter 30th Anniversary Collection', '2018-05-30', 'The Street Fighter\'s 30th Anniversary Collection is a commemorative collection created by Capcom to celebrate the 30th anniversary of the Street Fighter series.', 30, 'Switch', ''),
(6, 'pictures/Ps4/1.png', 15, 'H1Z1 is an end-of-the-box survival sandbox developed by Daybreak and released on PS4 and Steam. The background of the story took place 15 years after the zombies virus broke out in the central United States. Players are randomly \"born\" somewhere in the map and then embark on a path to explore the city and the wilderness.', 'H1Z1', '0000-00-00', 'H1Z1 is an end-of-the-box survival sandbox developed by Daybreak and released on PS4 and Steam .', 22, 'PS4', ''),
(7, 'pictures/Ps4/2.png', 27, '\"“The Forest\" is a description of a protagonist of the survivors who lost their lives in the jungle because of plane crashes. They managed to escape by trying to escape through the horrors of the jungle.\r\n\r\nIn the game, the faceless humanoid creatures encountered by the players is a group action organism with primitive social organization in the jungle. Although at first glance it looks like ordinary human beings, it will attack at an astonishingly high speed. Players must use wood sticks or stones as weapons in their pursuit.\r\n\r\nAt the same time, there will be day and night changes in the jungle. As the day and night change, the temperature will change. Players must collect the branches to prevent their own body temperature from falling, or to explore the jungle in search of food. In the game, as players age in the jungle, various field survival skills will become more sophisticated (for example, seeds can be planted to produce ingredients, etc.), and they can choose suitable sites as their stronghold or erection. Trap to prevent enemy invasion, etc. At the same time, the game will also include a variety of venues including coastlines, caves, underground lakes and other stage debut, allowing players to experience the unique survival of terror adventure fun!\"', 'The Forest', '0000-00-00', '\"“The Forest\" is a description of a protagonist of the survivors who lost their lives in the jungle because of plane crashes. They managed to escape by trying to escape through the horrors of the jungle.\r\n\"', 1, 'PS4', ''),
(8, 'pictures/Ps4/3.png', 53, '\"Conan Exiles\" is a sandbox action role-playing game produced and distributed by Funcom. The main feature of this game is that the game will take place in an open world. Players will experience a struggle for survival in the game, find food in the wilderness, build shelters, and resist the invasion of wild animals. Game modes will include single mode and online mode.', 'Conan Exiles', '0000-00-00', '\"Conan Exiles\" is a sandbox action role-playing game produced and distributed by Funcom. ', 8, 'PS4', ''),
(9, 'pictures/Ps4/4.png', 11, '\"Detroit: Become Human\" is a sci-fi theme game created by Quantic Dream. The background of the game is set in the future of Detroit. The protagonist “Kara” is the same as other mass-produced robots. It is an entertainment robot that serves humans. However, this karaoke contains human emotions. She will work with other robots with emotions. Explore ways to become human.', 'Detroit: Become Human', '0000-00-00', '\"Detroit: Become Human\" is a sci-fi theme game created by Quantic Dream. ', 25, 'PS4', ''),
(10, 'pictures/Ps4/5.png', 30, '\"Agony\" is an upcoming horror survival video game developed by Madmind Studios and released by PlayWay. In the game, the player plays a soul that is tortured in the depths of hell and loses any memory of the past. The soul has special abilities to possess martyrdom and conscious demons on the way, giving the player some necessary measures to survive in extreme conditions.', 'Agony', '0000-00-00', '\"Agony\" is an upcoming horror survival video game developed by Madmind Studios and released by PlayWay.', 29, 'PS4', ''),
(12, 'pictures/Ps4/7.png', 84, 'TPersona 5: Dancing Star Night is a music game developed and distributed by Atlus. This will be landing PS4 and PSV platform.', 'Persona 5: Dancing Star Night', '0000-00-00', 'TPersona 5: Dancing Star Night is a music game developed and distributed by Atlus. ', 24, 'PS4', ''),
(13, 'pictures/Ps4/8.png', 99, '\"Full Metal Panic! Fighting Who dares Wins\" is a strategic role-playing game released by B.B.STUDIO and produced by Bandai Namamiya. The game is adapted from a comic book of the same name. The world view is basically a half-air world modeled on the real world from the end of the 20th century to the early 21st century. It tells the story of the soldier Yosuke Jangsuke who served in the Mithril, a mysterious international military organization, who was ordered to protect ordinary high school students to make thousands of birds and makeup as high school students. The two irrelevant people met each other.', 'Full Metal Panic! Fighting Who dares Wins', '0000-00-00', '\"Full Metal Panic! Fighting Who dares Wins\" is a strategic role-playing game released by B.B.STUDIO and produced by Bandai Namamiya. ', 31, 'PS4', ''),
(16, 'pictures/Xbox/4.png', 59, '\"\"Dark Souls\" was produced by the original class of \"Demon Souls\" launched in February 2009 and inherited the dark fantasy style and spirit of \"Demon Souls\" to \"explore the tense feeling of the maze\" and \"treat the terror of the enemy.\" \",\" \"Newly discovered sense of joy\" until the \"survival to the final sense of fulfillment\" as the appeal, is a highly demanding hardcore role-playing game.\r\n\r\n\"Dark Souls\" is a brand new action RPG set in the world full of dark fantasy elements. The exciting dungeons, fierce monster battles and groundbreaking online elements make up a truly unique RPG experience. \"Dark Souls\" breaks the barrier with a seamlessly connected world setting, inspiring players to explore the game world and creating a unique gaming experience. When players encounter powerful enemies and explore new places, this accurate challenge build system and reward mechanism will bring a great sense of accomplishment.\r\n\r\n\"Dark Souls: Remastered Edition\" was released on May 25, 2018, and it simultaneously landed on PC, PS4, Xbox One, and Switch. Among them, PS4 Pro and Xbox One X will support 4K/60FPS, NS TV mode is 1080P/30FPS.\"', 'Dark Souls: Prepare to Die Edition', '0000-00-00', '\"Dark Souls\" was produced by the original class of \"Demon Souls\" launched in February 2009 and inherited the dark fantasy style and spirit of \"Demon Souls\" to \"explore the tense feeling of the maze\" and \"treat the terror of the enemy.\" \",\" \"Newly discovered sense of joy\" until the \"survival to the final sense of fulfillment\" as the appeal, is a highly demanding hardcore role-playing game.', 25, 'xbox', ''),
(17, 'pictures/Xbox/3.png', 21, 'Wizard of Legend is a pixel-based action game produced and distributed by Contingent99. This fast-paced game, high-speed movements, and high-frequency magical use allow you to connect spells and deal deadly combos to the enemy. The refreshing feel of combat and varied skill elements make the game playable. And the game supports multiplayer online mode, enjoy it with your little partner.', 'Wizard of Legend', '0000-00-00', 'Wizard of Legend is a pixel-based action game produced and distributed by Contingent99.', 16, 'xbox', ''),
(19, 'pictures/Xbox/6.png', 80, 'Pierre Andre, the game designer, stated that the Tennis World Tour is the sequel to Master of Spinners 4 and that current technology can create surreal simulations that developers have always dreamed of. In the game players can play their own style and experience the career of many star players.', 'Tennis World Tour', '0000-00-00', 'Pierre Andre, the game designer, stated that the Tennis World Tour is the sequel to Master of Spinners 4 and that current technology can create surreal simulations that developers have always dreamed of. ', 22, 'xbox', ''),
(21, 'pictures/Xbox/8.png', 27, 'The City of Brass is a first-person game with an Arab style. The player will play as a sneak thief and go to the city center to search for legendary treasures. Along the way, you need to use your machete and whip to defeat the enemies who are blocking your way and avoid unknown traps and obstacles.', 'City Of Brass', '0000-00-00', 'The City of Brass is a first-person game with an Arab style. ', 4, 'xbox', ''),
(22, 'pictures/pc/16.png', 20, 'Beat Saber is a VR rhythm game where your goal is to slash the beats which perfectly fit into precisely handcrafted music.', 'Beat Saber', '0000-00-00', 'Beat Saber is a VR rhythm game where your goal is to slash the beats which perfectly fit into precisely handcrafted music.', 1, 'pc', ''),
(23, 'pictures/pc/8.png', 66, 'Welcome to the emergent open world, Wild West-themed action PVP online game featuring non stop players vs player battles, world exploration, resource gathering, and much, much more.', 'Wild West Online', '0000-00-00', 'Welcome to the emergent open world, Wild West-themed action PVP online game featuring non stop players vs player battles, world exploration, resource gathering, and much, much more.', 8, 'pc', '');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `story` int(11) NOT NULL,
  `keyword` varchar(32) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `NewsTitle` varchar(500) NOT NULL,
  `NewsDesc` varchar(5000) NOT NULL,
  `short_desc` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `Day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `NewsTitle`, `NewsDesc`, `short_desc`, `image`, `Day`) VALUES
(1, 'Destiny 2: Warmind Final Review - \"2 Steps Forward, 2 Steps Back\"', 'Second multiplayer DLC, and among its four maps and a Zombies expansion, there are more winners than losers. Its new content ranges from an excellent new standard multiplayer map and Zombies Easter egg challenge all the way down to some maps prone to miserably unbalanced spawn camping and a dogfight without enough room to spread your wings, which makes this an inconsistent but overall worthwhile expansion.\r\n\r\nOf the three new core multiplayer maps, Egypt stands out as the best and one I am always hoping for to pop up in the rotation. For all its narrow corridors through ancient ruins, Egypt still has plenty of space on the two outer lanes for long-ranged shootouts. I rarely played a game where engagements were limited to one part of the map, and I enjoyed seeing how every person made their own playstyle work here. In one game I was up against an incredible sniper who used the many pillars and entryways as cover while picking off my team. In that same game I encountered a person who was able to successfully run through most of the map with the shovel. Regardless of loadout, Egypt offers a great playground for hide and seek with plenty of options for tactical flanking and escapes thanks to its abundance of cover. Meanwhile, Call of Duty: WW2 didn\'t really need another small map, but that\'s what we get with V2. It offers plenty of flanking options that contribute to even more chaotic firefights around and in the tower in the center of the map, so it is at least an interesting map to fight on. The tower has several entrances and open areas above and below it where you can toss grenades or snipe in or out of the tower, making this map a lot less favorable to snipers, but very friendly to explosives. The main downside is that if your team gets exceptionally stomped, V2 ends up becoming a special kind of hell. Like Valkyrie from The Resistance DLC, this small map has few spawn points, and that means spawn camping is a problem. The 1.13 update that added unlimited sprinting certainly contributes to that awful cycle. I\'ve only joined one Domination match where I felt trapped in my spawn so far, but it was a frustrating problem my team couldn\'t solve. The third map, Dunkirk, is the worst of the bunch. It\'s a long, narrow map with an open beach on one side and a line of buildings on the other. It\'s okay for Domination and less interesting for Kill Confirmed or Team Deathmatch, but the limited spawn points make this an awful map for Hardpoint. More often than not, one team spawns right next to the capture point, making the match a foregone conclusion. That\'s worked to my team\'s advantage several times, and it\'s still not fun. Smart explosives paired with a coordinated team charge can help even the odds, but not enough to make it feel balanced. Tipping the scales further from fairness, Dunkirk also suffers from opportunities for spawn killing. ', '', 'pictures/News/1.jpg\r\n', 0),
(2, 'PlayStation Is Bringing Its \'Big Four\' Games to E3 2018', 'Rockstar has announced a new special edition of GTA 5, seemingly aimed at bringing in new players - but don\'t expect anything new for existing players.Grand Theft Auto V: Premium Online Edition will be available on Steam, Xbox One and PS4, and comprises the full GTA V package (including the single player game and a fully-updated GTA Online) and a Criminal Enterprise Starter Pack bonus.This pack seems to be aimed at bringing new players into the series as the Starter Pack gives GTA Online players weapons, properties, and vehicles as well $1,000,000 of in-game currency - a total of $10,000,000 of in-game item value. The Premium Online Edition costs $79.99 USD  / $99.95 AUD for a physical Xbox One or PS4 version or $84.99 USD / $110.34 AUD on Steam. While bundles including the game and Criminal Enterprise pack have existed for some time, it appears that, on console at least, the Premium Online version is intended to replace the core version of the game by offering more for your money. If this edition does mark your first entry into GTA 5 make sure to check out our wiki guide with weekly updates and cheats and secrets for GTA Online. GTA 5 holds to the mantle of making more money than any film, book, or game according to an analyst and, as it turns out, is a favourite amongst some celebrities.', '', 'pictures/News/2.png', 0),
(3, 'IS FORTNITE\'S AVENGERS MODE ACTUALLY FUN? - FORTNITE SHOW EP. 2 (FEAT. TRUEVANGUARD)', 'Santa Monica Studio has released a patch for God of War that gives players the option to increase the game\'s text size.\r\n\"We just released a new patch that focuses on text for map, goals, codex and the resources tab of the UI menus,\" the studio said in response to a fan on Twitter who noted it\'s difficult to read the on-screen text when playing on the couch.\r\nPlayers who wish to increase the text size can do so using the newly added slider found in the \"Accessibility\" menu.\r\nThat said, it appears the slider doesn\'t entirely fix the problem. A number of users, particularly those who don\'t have a 4K display and are sitting relatively far away from the screen, have found the slider doesn\'t resolve the issue. As noted by Kotaku, turning up the slider magnifies the text rather than actually increasing the font size.\r\nSanta Monica Studio intends to \"continuing to investigate more improvements\" for the game, and has plans to release a photo mode sometime in the future.Head over to IGN\'s God of War wiki guide as you make your way through Kratos\' latest journey. For our thoughts on why the game is \"nothing short of a masterpiece,\" read our glowing review and then watch creative director Cory Barlog\'s touching reaction to all the review scores.\r\n', '', 'pictures/News/3.png', 0),
(9, 'DEADPOOL 2 REVIEW', 'BY DANIEL KRUPA Deadpool was a surprise hit, breaking box office records for an R-rated movie. But more importantly it salvaged the character of Wade Wilson after he was so badly fumbled in X-Men Origins: Wolverine. Expectations might be higher this time, but Deadpool 2 comfortably satisfies them, delivering a sequel that’s, crasser, gorier, and funnier than the first. Occasionally it runs a little short in terms of plot, and doesn’t make the most of Cable but it’s a strong second outing for the Merc with a Mouth.While it may sow the seeds for an X-Force film down the line, Deadpool 2 is unmistakably Wade Wilson’s movie. He dominates every scene, steamrollering everyone around him. Even returning characters from the last film – Negasonic Teenage Warhead, Weasel – are all firmly pushed to the sidelines. Deadpool is the star here, with Ryan Reynolds effortlessly bringing him to life once again. Credited as a co-writer this time, Reynolds blurs the line even further between himself and the character over whom he clearly feels a special ownership. He’s perfect in the role.\r\n\r\nThe impulse to go bigger with a sequel is admirably kept under control. In fact, the stakes are refreshingly low for a superhero movie. Wade’s not trying to save the world – just himself. And if you were to summarise the plot, it probably wouldn’t take more than a handful of sentences. Most of the runtime is instead spent dropping Wade into potentially funny scenarios. Within the first hour, he trots the globe offing bad guys of all nationalities, attempts suicide, urinates in a bar, kicks back in his apartment, takes an obscene amount of cocaine, and hangs out with Colossus.', '', 'pictures/News/4.jpg', 14),
(10, 'DESTINY 2: WARMIND REVIEW', 'BY DESTIN LEGARIE In many ways, Warmind succeeds in bringing back the mystery of Destiny 2’s universe. There are plenty of secrets to uncover, new paths of progression to enjoy in both PVP and PVE, and there’s even a short campaign with intriguing lore sprinkled in if you’re looking for some story. However, each of these positives fails to address smaller issues Destiny 2 has been facing for some time. The grind is more confusing than ever, the story seems cobbled together, and the PVP remains a team shooting sport leaving players still asking to shine like before with moments of solo triumph over opposing teams. Still, I’ve been more motivated than ever to sign on and level up so I can take on new challenges be it the Escalation Protocol event, or Spire of Stars Raid Lair.\r\n\r\nThe actual power-level grind feels less fulfilling than ever before though. This is due to some convoluted and confused leveling mechanics that have you acquiring higher-level rewards for easier activities while more intense feuds give you nothing toward the goal of obtaining more power. When the most enticing new activities, the Escalation Protocol horde mode, and Raid Lair, are locked behind a 370 recommended level, you may find yourself wondering what new content there is to enjoy in the meantime.', '', 'pictures/News/7.jpg', 13),
(11, '\"SOLO: A STAR WARS STORY REVIEW\r\n\"', 'BY JIM VEJVODA While it never quite justifies its reason to exist, Solo: A Star Wars Story offers enough pulpy fun and galaxy far, far away entertainment value to diminish any bad feeling one may have had about it heading into release.\r\n\r\nSolo – both the movie and this new iteration of Harrison Ford’s classic character, now played by Alden Ehrenreich – skates by on charm, breezy irreverence, and a just-right degree of Star Wars fan service. But while it gets the trappings and appearances right, Solo never delivers on the promise of finding out why Han became who he was in A New Hope. It just explains how he got his stuff.\r\n\r\nOne of the most memorable aspects of the character from the original trilogy was the way in which he believably evolved from an out-for-himself scoundrel and mercenary to a hero of the Rebel Alliance worthy of Princess Leia; this origin movie delivers no such satisfying arc of redemption or fall from grace. (Imagine if Casino Royale hadn’t quite seen the evolution of James Bond all the way through to its bitter end.) Its story holds precious few surprises and the title character ends this film as pretty much the same person he was when we met him at the beginning — without quite becoming the person Luke Skywalker and Obi-Wan Kenobi found and pulled out of a wretched hive of scum and villainy on Tatooine.\r\n\r\nIt’s a good thing, then, that the movie remains at least entertaining enough to keep one engaged through all the rote story beats of learning how Han Solo acquired the Millennium Falcon or met Chewbacca and Lando Calrissian. It’s amazing how much just playing Star Wars music can make almost any roughly assembled scene work on a visceral and emotional level — and Solo seems to know that, relying on sentimentality and a shorthand understanding of this universe and its legacy characters to paper over its narrative defects.', '', 'pictures/News/8.jpg', 15),
(12, '7 REASONS JURASSIC PARK FANS SHOULD BE EXCITED FOR JURASSIC WORLD EVOLUTION', '1. Visit Each Island Known as The Five Deaths\r\nThis is a biggie because for the first time you’ll get a proper look at the other islands of Las Cinco Muertes, the chain of islands that were introduced in The Lost World. Until now all we’ve seen in the movies is Isla Sorna, where the events of The Lost World take place, but Evolution will take you to the other four islands too. You’ll be able to build a park on each island, which have their own unique problems to deal with.\r\n\r\nSo far we’ve played on Isla Matanceros, which is the first island you take control of and serves as an introduction to the challenges you’ll face. It takes its name from the Spanish word for slaughter which kind of gives you an impression about where things are going.\r\n\r\nWe’ve also played Isla Muerta (aka The Dead Island) where you’re regularly hit by tropical storms which turn your lovely park into a literal island of death as the dinosaurs inevitably escape and go on the rampage.\r\n\r\nWe’ve also seen the nighttime Isla Pena and also Isla Tacano, though we’re yet to see the familiar terrain of Isla Sorna, which game director Michael Brookes says will be the biggest playable island in the game. Thank God for Site B.\r\n\r\n2. It Preserves Hammond’s Legacy\r\nWe saw in Jurassic World that John Hammond has been remembered with a lovely statue which took pride of place in Jurassic World in front of the ‘John Hammond Creation Lab’. It’s clear that the Masrani corporation who took over InGen after Hammond’s death were keen to preserve Hammond’s memory (forget that the Hammond Creation Lab is next to something called the ‘Samsung Innovation Centre’) and Jurassic World Evolution carries on that legacy.\r\n\r\nIn the game all of our dinosaurs are created in Hammond Creation Labs, ensuring that the dreams of the great man are never far from your mind.\r\n\r\n3. Solve the Problems the Films Couldn’t\r\nThe unfortunate events of the original Jurassic Park can be put down to terrible project management, and since Jurassic World Evolution is one massive management simulation, you finally have a chance to fix the errors you’ve seen people make time and time again in the films.\r\n\r\nEver wondered why the scientists at Jurassic Park never had an infinite amount of back-up generators in order to keep power running to the fences and enclosures? Well, you can fix that because Jurassic World Evolution helps all of your logistical dreams come true.\r\n\r\n4. Stays True to the Weird Science of the Film\r\nSo much of the science behind Jurassic World doesn’t make sense. From the lack of feathers that most dinosaurs apparently had, to giant piles of poop the dinos on the island produce all the way through to the just made up state on the Dilophosaurus.  Jurassic World Evolution hasn’t moved the science into the real world – all the genetic tinkering remains true to Jurassic Park.\r\n\r\nOne of our favourite aspects is how the first Jurassic Park boffins used genes from from frogs to fill in the gaps in the genomes of the dinosaurs they had sequenced. Jurassic World took that one step further, throwing in a bunch of other species to spice things up for returning visitors. And Jurassic World Evolution lets you add a whole range of other creatures into the mix, from sharks to bats, in attempt to come up with the next big attraction.\r\n\r\n5. Developers Had Access to the Universal Archives\r\nWe know Frontier have been working extremely close with Universal Pictures on almost all aspects of Jurassic World Evolution with the movie studio ensuring that players get an authentic Jurassic Park experience. Recently we spoke to the team at Frontier about the incredible access they had with the original sound files used to make the effects for the dinosaurs.', '', 'pictures/News/12.jpg', 0),
(13, 'DEADPOOL 2 REVIEW', 'BY DANIEL KRUPA Deadpool was a surprise hit, breaking box office records for an R-rated movie. But more importantly it salvaged the character of Wade Wilson after he was so badly fumbled in X-Men Origins: Wolverine. Expectations might be higher this time, but Deadpool 2 comfortably satisfies them, delivering a sequel that’s, crasser, gorier, and funnier than the first. Occasionally it runs a little short in terms of plot, and doesn’t make the most of Cable but it’s a strong second outing for the Merc with a Mouth.While it may sow the seeds for an X-Force film down the line, Deadpool 2 is unmistakably Wade Wilson’s movie. He dominates every scene, steamrollering everyone around him. Even returning characters from the last film – Negasonic Teenage Warhead, Weasel – are all firmly pushed to the sidelines. Deadpool is the star here, with Ryan Reynolds effortlessly bringing him to life once again. Credited as a co-writer this time, Reynolds blurs the line even further between himself and the character over whom he clearly feels a special ownership. He’s perfect in the role.\r\n\r\nThe impulse to go bigger with a sequel is admirably kept under control. In fact, the stakes are refreshingly low for a superhero movie. Wade’s not trying to save the world – just himself. And if you were to summarise the plot, it probably wouldn’t take more than a handful of sentences. Most of the runtime is instead spent dropping Wade into potentially funny scenarios. Within the first hour, he trots the globe offing bad guys of all nationalities, attempts suicide, urinates in a bar, kicks back in his apartment, takes an obscene amount of cocaine, and hangs out with Colossus.', '', 'pictures/News/13.jpg', 14),
(14, 'CONAN EXILES REVIEW', '\r\nBY JOSEPH BRADFORD Author Robert E. Howard’s Conan Universe is an unforgiving place filled with dangers around every corner. Conan Exiles lives up to that reputation - almost too well. It’s not just other players and NPCs in the world that make this survival game rough; it’s the wolves and giants and other terrors stalking the world around you. And even if you manage to survive all that, a sandstorm or the brutal northern cold might lay you low. However, the most brutal part of this harsh land can be its grind, which means Conan Exiles can sometimes feel more like a chore than a game.\r\n\r\nConan Exiles captures the tone of Howard’s hard world right away by casting you as a criminal who’s crucified and left to die alongside a broken highway that saw its best days centuries ago. Conan himself makes only a brief cameo to cut you away from the corpse tree and set you loose in the Exiled Lands before you to carve your own tales of high adventure.\r\nAs with many survival games, there is a wealth of different ways to experience the adventure. You can play solo - though it’s rather dull this way - or you and a friend can take on the hardships of the Hyborian Age together either in a tethered co-op mode or playing online in one of Conan Exiles’ various servers. Some of these servers are officially run worlds offering a balanced experience – though the 40-player-per-server limit has resulted in all of these basically sitting at max capacity since launch, prompting Funcom to promise more servers in the days and weeks to come. Player-run servers are an alternative that offer varied experiences, as some of them have crazily increased leveling, abundant resources, or both, but that’s naturally inconsistent so you need to be careful which one you join.', '', 'pictures/News/14.jpg', 14),
(15, 'HOW DEADPOOL 2 FIXED X-MEN ORIGINS: WOLVERINE', 'Ryan Reynolds has always hated his first appearance as Deadpool in X-Men Origins: Wolverine. And while he got plenty of jabs at it in the first Deadpool movie, it wasn\'t until Deadpool 2 that Reynolds was able to finally terminate the mistakes of that movie. Literally.\r\n\r\nDuring one of Deadpool 2\'s end credits scenes, Deadpool disrupts the finale of X-Men Origins: Wolverine to kill that movie\'s bastardized version of Wade Wilson himself.\r\n\r\nDeadpool 2 director David Leitch recently sat down with IGN to explain how that end credits scene came about -- and who deserves full credit for it.\r\n\r\n\"I wish that was my idea. So fun and so funny,\" Leitch said. \"When we had come up with the time-travel coda, there were a lot of things thrown on the table. And Ryan, he came in big with a couple of great ones. So obviously he wanted to right the wrongs of X-Men Origins. It was so fun.\"\r\n\r\nIn a separate interview with us, Deadpool 2 co-screenwriter Paul Wernick said the Wolverine scene is the actual footage of Hugh Jackman from X-Men Origins and that the actor -- who retired from the role in 2017\'s Logan -- was not brought back to reenact the scene for Deadpool 2. The use of the footage also received the blessing of movie studio 20th Century Fox.\r\n\r\nAs Wernick\'s screenwriting partner Rhett Reese explained during that same interview, \"Hugh Jackman was very supportive. We needed his permission. But he and Ryan are frenemies, you know, online, and in the public. But they’re actually good friends, and he was very supportive, so that was awesome.\"', '', 'pictures/News/15.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `code` varchar(16) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`code`, `description`) VALUES
('news', 'The Top News Stories From Around the World'),
('sport', 'Sports Latest - All The Winners and Losers'),
('weather', 'Up To The Minute Weather Reports and Forecasts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, '213', '131', 'seamas@123.com', '$2y$10$vopwu25QrF6BSZtflv7ebejP8d.6.r9RdiD42.p3LoOQzotb/PGOO', '3a835d3215755c435ef4fe9965a3f2a0', 0),
(7, 'seamas', '123', 'test@123.com', '$2y$10$HJK.jHoY.cVRgL4kJImGpehUaXWYSkCmocNErHqgQOLJcWRK/Rss.', '5c572eca050594c7bc3c36e7e8ab9550', 0),
(8, '123', '123', '123@123456.com', '$2y$10$Qxyi/xkdsGD6hmTK8FRUveX/5UvE05n0jXQ7wB0nnT42bf60A9Uuq', '9b698eb3105bd82528f23d0c92dedfc0', 0),
(9, 'kassa', 'gao', '1015992207@qq.com', '$2y$10$BLCrEGvQ1LUKQUphm83fGujZTbvIIzcL19oG5P2sku5cQux0E.B7C', '3cef96dcc9b8035d23f69e30bb19218a', 0),
(10, '1234', '5678', '123@123.com', '$2y$10$xDHfopX7Wfz3vz5oej20DuBby6SbRn3r5v9f8VbcGzUPWFpshDDb2', '46ba9f2a6976570b0353203ec4474217', 0),
(11, 'April', 'Li', 'aprilli1119@icloud.com', '$2y$10$f6kfHSpo/tEg.G0wO.gIcuHT/MP/BWODi5X3YAlpTnx9YmijhECui', 'a1140a3d0df1c81e24ae954d935e8926', 1),
(13, 'test', 'test', '123@1234.com', '$2y$10$Z1D8EZxWme1L0p7LB/Xtr.XNvU46xXc/C9DJUA5EWiTPvlpwUtup6', '3dd48ab31d016ffcbf3314df2b3cb9ce', 0),
(14, 'Vince', 'Zheng', 'vincezheng4265@gmail.com', '$2y$10$eNsE2/5rPwtNjmkEShw8a.pfnMz9uctlVe.1vGiB36dAMHy/LctLe', 'fc490ca45c00b1249bbe3554a4fdf6fb', 1),
(15, 'ttetwt', 'ttst', 'ghdd@123.com', '$2y$10$AhD93Oee5MlXxvhT6kSoVerSQ06KNZV07s/bfOdkkFEDLfGKkKL8S', '872488f88d1b2db54d55bc8bba2fad1b', 0),
(16, 'HL', 'H', '043hhe@gmail.com', '$2y$10$n9epeGrpu3tatZjOeDc.S.JImPO1xA8S.zvvS7fhgJu4w5eCxphRe', 'e96ed478dab8595a7dbda4cbcbee168f', 0),
(19, 'Samuel', 'Yong', 'smlren9604@gmail.com', '$2y$10$bspH935bWN76/lqghplEOOqDAKbQiMEt1WSVih0.9zPt.pJltd1EO', '2dace78f80bc92e6d7493423d729448e', 0),
(20, 'amy', 'amy', 'amy@amy', '$2y$10$0XnFnnUXcE8i96uIw5VYWOrk5Fopw7PO8xMfoFRwujwwkpfEinx8a', '1afa34a7f984eeabdbb0a7d494132ee5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `writer_permissions`
--

CREATE TABLE `writer_permissions` (
  `writer` varchar(16) NOT NULL,
  `page` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writer_permissions`
--

INSERT INTO `writer_permissions` (`writer`, `page`) VALUES
('bill', 'news'),
('bill', 'weather'),
('bob', 'news'),
('bob', 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `username` varchar(16) NOT NULL,
  `password` char(40) NOT NULL,
  `full_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`username`, `password`, `full_name`) VALUES
('bill', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'William Billings'),
('bob', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Robert Bobbins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`story`,`keyword`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writer_permissions`
--
ALTER TABLE `writer_permissions`
  ADD PRIMARY KEY (`writer`,`page`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"true\",\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"ezweb\",\"table\":\"users\"},{\"db\":\"ezweb\",\"table\":\"games\"},{\"db\":\"ezweb\",\"table\":\"news\"},{\"db\":\"ezweb\",\"table\":\"pages\"},{\"db\":\"ezweb\",\"table\":\"tbl_comment\"},{\"db\":\"ezweb\",\"table\":\"writers\"},{\"db\":\"ezweb\",\"table\":\"writer_permissions\"},{\"db\":\"ezweb\",\"table\":\"events\"},{\"db\":\"ezweb\",\"table\":\"comment\"},{\"db\":\"accounts\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-05-22 21:53:35', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
