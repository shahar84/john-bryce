-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 18, 2017 at 09:36 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

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
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) unsigned NOT NULL,
  `name` char(200) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` text,
  `image_url` text,
  `imdb_id` char(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `year`, `description`, `image_url`, `imdb_id`) VALUES
(4, 'The Shawshank Redemption', 1994, 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'https://image.tmdb.org/t/p/w640/9O7gLzmreU0nGkIB6K3BsJbzvNv.jpg', 'tt0111161'),
(5, 'The Godfather', 1972, 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'https://image.tmdb.org/t/p/w640/rPdtLWNsZmAtoZl9PK7S2wE3qiS.jpg', 'tt0068646'),
(6, 'The Godfather: Part II', 1974, 'The early life and career of Vito Corleone in 1920s New York is portrayed while his son, Michael, expands and tightens his grip on the family crime syndicate.', 'https://image.tmdb.org/t/p/w640/bVq65huQ8vHDd1a4Z37QtuyEvpA.jpg', 'tt0071562'),
(7, 'The Good, the Bad and the Ugly', 1966, 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.', 'https://image.tmdb.org/t/p/w640/s8PZ3sZ8E0vnPub3I9w1hFbbBWj.jpg', 'tt0060196'),
(8, 'The Dark Knight', 2008, 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the Dark Knight must come to terms with one of the greatest psychological tests of his ability to fight injustice.', 'https://image.tmdb.org/t/p/w640/1hRoyzDtpgMU7Dz4JF22RANzQO7.jpg', 'tt0468569'),
(9, '12 Angry Men', 1957, 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.', 'https://image.tmdb.org/t/p/w640/3W0v956XxSG5xgm7LB6qu8ExYJ2.jpg', 'tt0050083'),
(10, 'Fight Club', 1999, 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soap maker, forming an underground fight club that evolves into something much, much more.', 'https://image.tmdb.org/t/p/w640/adw6Lq9FiC9zjYEpOqfq03ituwp.jpg', 'tt0137523'),
(11, 'Star Wars: Episode V - The Empire Strikes Back', 1980, 'After the rebels have been brutally overpowered by the Empire on their newly established base, Luke Skywalker takes advanced Jedi training with Master Yoda, while his friends are pursued by Darth Vader as part of his plan to capture Luke.', 'https://image.tmdb.org/t/p/w640/6u1fYtxG5eqjhtCPDx04pJphQRW.jpg', 'tt0080684'),
(12, 'The Lord of the Rings: The Fellowship of the Ring', 2001, 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle Earth from the Dark Lord Sauron.', 'https://image.tmdb.org/t/p/w640/6oom5QYQ2yQTMJIbnvbkBL9cHo6.jpg', 'tt0120737'),
(13, 'Inception', 2010, 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.', 'https://image.tmdb.org/t/p/w640/qmDpIHrmpJINaRKAfWQfftjCdyi.jpg', 'tt1375666'),
(14, 'Goodfellas', 1990, 'The story of Henry Hill and his life through the teen years into the years of mafia, covering his relationship with wife Karen Hill and his Mob partners Jimmy Conway and Tommy DeVitto in the Italian-American crime syndicate.', 'https://image.tmdb.org/t/p/w640/hAPeXBdGDGmXRPj4OZZ0poH65Iu.jpg', 'tt0099685'),
(15, 'Seven Samurai', 1954, 'A poor village under attack by bandits recruits seven unemployed samurai to help them defend themselves.', 'https://image.tmdb.org/t/p/w640/5hqbJSmtAimbaP3XcYshCixuUtk.jpg', 'tt0047478'),
(16, 'Forrest Gump', 1994, 'While not intelligent, Forrest Gump has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.', 'https://image.tmdb.org/t/p/w640/yE5d3BUhE8hCnkMUJOo1QDoOGNz.jpg', 'tt0109830'),
(17, 'The Matrix', 1999, 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', 'https://image.tmdb.org/t/p/w640/lZpWprJqbIFpEV5uoHfoK0KCnTW.jpg', 'tt0133093'),
(18, 'City of God', 2002, 'Two boys growing up in a violent neighborhood of Rio de Janeiro take different paths: one becomes a photographer, the other a drug dealer.', 'https://image.tmdb.org/t/p/w640/snQQlZFUHFIffxEgf518wcFv43P.jpg', 'tt0317248'),
(19, 'Se7en', 1995, 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his modus operandi.', 'https://image.tmdb.org/t/p/w640/8zw8IL4zEPjkh8Aysdcd0FwGMb0.jpg', 'tt0114369'),
(20, 'The Silence of the Lambs', 1991, 'A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.', 'https://image.tmdb.org/t/p/w640/qjAyTj2BSth1EQ89vNfo0JYVPFN.jpg', 'tt0102926'),
(21, 'Once Upon a Time in the West', 1968, 'A mysterious stranger with a harmonica joins forces with a notorious desperado to protect a beautiful widow from a ruthless assassin working for the railroad.', 'https://image.tmdb.org/t/p/w640/oApkNIlBAA65aQsQM2b1uMOA946.jpg', 'tt0064116'),
(22, 'Casablanca', 1942, 'In Casablanca in December 1941, a cynical American expatriate encounters a former lover, with unforeseen complications.', 'https://image.tmdb.org/t/p/w640/wOBKAoUJZb5qTsWv5XXvVV2vUzz.jpg', 'tt0034583'),
(23, 'The Usual Suspects', 1995, 'A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a seemingly random police lineup.', 'https://image.tmdb.org/t/p/w640/jgJoRWltoS17nD5MAQ1yK2Ztefw.jpg', 'tt0114814'),
(24, 'Raiders of the Lost Ark', 1981, 'Archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before the Nazis.', 'https://image.tmdb.org/t/p/w640/44sKJOGP3fTm4QXBcIuqu0RkdP7.jpg', 'tt0082971'),
(25, 'Rear Window', 1954, 'A wheelchair-bound photographer spies on his neighbours from his apartment window and becomes convinced one of them has committed murder.', 'https://image.tmdb.org/t/p/w640/fjIVHiAaBUEtBbHgRLoTgeY8Ter.jpg', 'tt0047396'),
(26, 'American History X', 1998, 'A former neo-nazi skinhead tries to prevent his younger brother from going down the same wrong path that he did.', 'https://image.tmdb.org/t/p/w640/fXepRAYOx1qC3wju7XdDGx60775.jpg', 'tt0120586'),
(27, 'Apocalypse Now', 1979, 'During the Vietnam War, Captain Willard is sent on a dangerous mission into Cambodia to assassinate a renegade colonel who has set himself up as a god among a local tribe.', 'https://image.tmdb.org/t/p/w640/jcvJ2xcVWU9Wh0hZAxcs103s8nN.jpg', 'tt0078788'),
(28, 'Terminator 2: Judgment Day', 1991, 'A cyborg, identical to the one who failed to kill Sarah Connor, must now protect her teenage son, John Connor, from a more advanced cyborg.', 'https://image.tmdb.org/t/p/w640/2y4dmgWYRMYXdD1UyJVcn2HSd1D.jpg', 'tt0103064'),
(29, 'Saving Private Ryan', 1998, 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.', 'https://image.tmdb.org/t/p/w640/miDoEMlYDJhOCvxlzI0wZqBs9Yt.jpg', 'tt0120815'),
(30, 'City Lights', 1931, 'With the aid of a wealthy erratic tippler, a dewy-eyed tramp who has fallen in love with a sightless flower girl accumulates money to be able to help her medically.', 'https://image.tmdb.org/t/p/w640/ofU1xs4t001F5tK5pZ1usWCHrnS.jpg', 'tt0021749'),
(31, 'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 1964, 'An insane general triggers a path to nuclear holocaust that a war room full of politicians and generals frantically try to stop.', 'https://image.tmdb.org/t/p/w640/tviJ68Wj4glQk3CPMvdvExYHxX.jpg', 'tt0057012'),
(32, 'Alien', 1979, 'After a space merchant vessel perceives an unknown transmission as distress call, their landing on the source moon finds one of the crew attacked by a mysterious life-form, and soon realize that its life cycle has merely begun.', 'https://image.tmdb.org/t/p/w640/2h00HrZs89SL3tXB4nbkiM7BKHs.jpg', 'tt0078748'),
(33, 'Modern Times', 1936, 'The Tramp struggles to live in modern industrial society with the help of a young homeless woman.', 'https://image.tmdb.org/t/p/w640/m4ZCx2Iwr418IGPxRfoKnpumz9X.jpg', 'tt0027977'),
(34, 'North by Northwest', 1959, 'A hapless New York advertising executive is mistaken for a government agent by a group of foreign spies, and is pursued across the country while he looks for a way to survive.', 'https://image.tmdb.org/t/p/w640/aNV789h3oHm2pTHK5Bdq5RuiumZ.jpg', 'tt0053125'),
(35, 'Back to the Future', 1985, 'Marty McFly, a 17-year-old high school student, is accidentally sent 30 years into the past in a time-traveling DeLorean invented by his close friend, the maverick scientist Doc Brown.', 'https://image.tmdb.org/t/p/w640/pTpxQB1N0waaSc3OSn0e9oc8kx9.jpg', 'tt0088763'),
(36, 'Life Is Beautiful', 1997, 'When an open-minded Jewish librarian and his son become victims of the Holocaust, he uses a perfect mixture of will, humor and imagination to protect his son from the dangers around their camp.', 'https://image.tmdb.org/t/p/w640/fvErNua19XLmERmQHmVOtFkVWTz.jpg', 'tt0118799'),
(37, 'The Shining', 1980, 'A family heads to an isolated hotel for the winter where an evil and spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from the past and of the future.', 'https://image.tmdb.org/t/p/w640/9fgh3Ns1iRzlQNYuJyK0ARQZU7w.jpg', 'tt0081505'),
(38, 'The Pianist', 2002, 'A Polish Jewish musician struggles to survive the destruction of the Warsaw ghetto of World War II.', 'https://image.tmdb.org/t/p/w640/iunmxWkOi7Vk17Ob3G2HwwjgHsr.jpg', 'tt0253474'),
(39, 'Citizen Kane', 1941, 'Following the death of a publishing tycoon, news reporters scramble to discover the meaning of his final utterance.', 'https://image.tmdb.org/t/p/w640/n8wfFsQ5vtm6dM8vdgXb6OLv2GY.jpg', 'tt0033467'),
(40, 'The Departed', 2006, 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.', 'https://image.tmdb.org/t/p/w640/tGLO9zw5ZtCeyyEWgbYGgsFxC6i.jpg', 'tt0407887'),
(41, 'M', 1931, 'When the police in a German city are unable to catch a child-murderer, other criminals join in the manhunt.', 'https://image.tmdb.org/t/p/w640/cvLmJp8AhaddlDxoYrU3TN8uXPm.jpg', 'tt0022100'),
(42, 'Paths of Glory', 1957, 'After refusing to attack an enemy position, a general accuses the soldiers of cowardice and their commanding officer must defend them.', 'https://image.tmdb.org/t/p/w640/f3DEXseCs3WBtvCv9pVPCtoluuG.jpg', 'tt0050825'),
(43, 'Django Unchained', 2012, 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.', 'https://image.tmdb.org/t/p/w640/5WJnxuw41sddupf8cwOxYftuvJG.jpg', 'tt1853728'),
(44, 'Aliens', 1986, 'The moon from Alien (1979) has been colonized, but contact is lost. This time, the rescue team has impressive firepower, but will it be enough?', 'https://image.tmdb.org/t/p/w640/nORMXEkYEbzkU5WkMWMgRDJwjSZ.jpg', 'tt0090605'),
(45, 'Taxi Driver', 1976, 'A mentally unstable Vietnam War veteran works as a night-time taxi driver in New York City where the perceived decadence and sleaze feeds his urge for violent action, attempting to save a preadolescent prostitute in the process.', 'https://image.tmdb.org/t/p/w640/yxq4pk1xGmro8tQABuQIrWrvdaE.jpg', 'tt0075314'),
(46, 'The Green Mile', 1999, 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.', 'https://image.tmdb.org/t/p/w640/3yJUlOtVa09CYJocwBU8eAryja0.jpg', 'tt0120689'),
(47, 'The Intouchables', 2011, 'After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.', 'https://image.tmdb.org/t/p/w640/4mFsNQwbD0F237Tx7gAPotd0nbJ.jpg', 'tt1675434'),
(48, 'WALLÂ·E', 2008, 'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.', 'https://image.tmdb.org/t/p/w640/9cJETuLMc6R0bTWRA5i7ctY9bxk.jpg', 'tt0910970'),
(49, 'The Lives of Others', 2006, 'In 1984 East Berlin, an agent of the secret police, conducting surveillance on a writer and his lover, finds himself becoming increasingly absorbed by their lives.', 'https://image.tmdb.org/t/p/w640/mlMO9JjltSNOHZO0HRXVZP5eV0d.jpg', 'tt0405094'),
(50, 'The Prestige', 2006, 'Two stage magicians engage in competitive one-upmanship in an attempt to create the ultimate stage illusion.', 'https://image.tmdb.org/t/p/w640/5MXyQfz8xUP3dIFPTubhTsbFY6N.jpg', 'tt0482571'),
(51, 'Lawrence of Arabia', 1962, 'The story of T.E. Lawrence, the English officer who successfully united and led the diverse, often warring, Arab tribes during World War I in order to fight the Turks.', 'https://image.tmdb.org/t/p/w640/AixWVPdfcHZtBtRGUKNXGDn4TXM.jpg', 'tt0056172'),
(52, 'AmÃ©lie', 2001, 'AmÃ©lie is an innocent and naive girl in Paris with her own sense of justice. She decides to help those around her and, along the way, discovers love.', 'https://image.tmdb.org/t/p/w640', 'tt0211915'),
(53, 'To Kill a Mockingbird', 1962, 'Atticus Finch, a lawyer in the Depression-era South, defends a black man against an undeserved rape charge, and his children against prejudice.', 'https://image.tmdb.org/t/p/w640/gQg6sPYfNTUlf8wEtydzWl09RyR.jpg', 'tt0056592'),
(54, 'Reservoir Dogs', 1992, 'After a simple jewelry heist goes terribly wrong, the surviving criminals begin to suspect that one of them is a police informant.', 'https://image.tmdb.org/t/p/w640/jX94vnfcuJ8rTnFbsoriY6dlHrC.jpg', 'tt0105236'),
(55, 'Das Boot', 1981, 'The claustrophobic world of a WWII German U-boat; boredom, filth, and sheer terror.', 'https://image.tmdb.org/t/p/w640/2ihZcNYqdypALB5x6w5K5uYGLPF.jpg', 'tt0082096'),
(56, 'The Lion King', 1994, 'Lion cub and future king Simba searches for his identity. His eagerness to please others and penchant for testing his boundaries sometimes gets him into trouble.', 'https://image.tmdb.org/t/p/w640/bKPtXn9n4M4s8vvZrbw40mYsefB.jpg', 'tt0110357'),
(57, 'Star Wars: Episode VI - Return of the Jedi', 1983, 'After rescuing Han Solo from the palace of Jabba the Hutt, the rebels attempt to destroy the second Death Star, while Luke struggles to make Vader return from the dark side of the Force.', 'https://image.tmdb.org/t/p/w640/jx5p0aHlbPXqe3AH9G15NvmWaqQ.jpg', 'tt0086190'),
(58, 'The Treasure of the Sierra Madre', 1948, 'Fred Dobbs and Bob Curtin, two Americans searching for work in Mexico, convince an old prospector to help them mine for gold in the Sierra Madre Mountains.', 'https://image.tmdb.org/t/p/w640/e3lYTRwiDVPQv07xKldwlLAXikN.jpg', 'tt0040897'),
(59, 'The Third Man', 1949, 'Pulp novelist Holly Martins travels to shadowy, postwar Vienna, only to find himself investigating the mysterious death of an old friend, Harry Lime.', 'https://image.tmdb.org/t/p/w640/zPoBmloyH0CAc8EVhz6ar89cCl9.jpg', 'tt0041959'),
(60, 'Once Upon a Time in America', 1984, 'A former Prohibition-era Jewish gangster returns to the Lower East Side of Manhattan over thirty years later, where he once again must confront the ghosts and regrets of his old life.', 'https://image.tmdb.org/t/p/w640/fqP3Q7DWMFqW7mh11hWXbNwN9rz.jpg', 'tt0087843'),
(61, 'Requiem for a Dream', 2000, 'The drug-induced utopias of four Coney Island people are shattered when their addictions run deep.', 'https://image.tmdb.org/t/p/w640/muym4jTjdLx7E6as09d1wlC3sOB.jpg', 'tt0180093'),
(62, 'Eternal Sunshine of the Spotless Mind', 2004, 'When their relationship turns sour, a couple undergoes a procedure to have each other erased from their memories. But it is only through the process of loss that they discover what they had to begin with.', 'https://image.tmdb.org/t/p/w640/7y3eYvTsGjxPYDtSnumCLIMDkrV.jpg', 'tt0338013'),
(63, 'Full Metal Jacket', 1987, 'A pragmatic U.S. Marine observes the dehumanizing effects the Vietnam War has on his fellow recruits from their brutal boot camp training to the bloody street fighting in Hue.', 'https://image.tmdb.org/t/p/w640/zoiGcNlYBR0r2fO2uP44XQF6S1W.jpg', 'tt0093058'),
(64, 'Oldboy', 2003, 'After being kidnapped and imprisoned for fifteen years, Oh Dae-Su is released, only to find that he must find his captor in five days.', 'https://image.tmdb.org/t/p/w640/cmspwpe1usgG5hYijfEcTrueKRC.jpg', 'tt0364569'),
(65, 'Braveheart', 1995, 'When his secret bride is executed for assaulting an English soldier who tried to rape her, Sir William Wallace begins a revolt against King Edward I of England.', 'https://image.tmdb.org/t/p/w640/2qAgGeYdLjelOEqjW9FYvPHpplC.jpg', 'tt0112573'),
(66, 'L.A. Confidential', 1997, 'As corruption grows in 1950s LA, three policemen - one strait-laced, one brutal, and one sleazy - investigate a series of murders with their own brand of justice.', 'https://image.tmdb.org/t/p/w640/rIXzJCAvyd3Ci8ipylDQ5wUKqwh.jpg', 'tt0119488'),
(67, 'Chinatown', 1974, 'A private detective hired to expose an adulterer finds himself caught up in a web of deceit, corruption and murder.', 'https://image.tmdb.org/t/p/w640/iIHO6FzF6lL4mA90rrmk3Y705XS.jpg', 'tt0071315'),
(68, 'Monty Python and the Holy Grail', 1975, 'King Arthur and his knights embark on a low-budget search for the Grail, encountering many, very silly obstacles.', 'https://image.tmdb.org/t/p/w640/jRx1nDUA4sb2NEKQaukXKBz6pCf.jpg', 'tt0071853'),
(69, 'Rashomon', 1950, 'A heinous crime and its aftermath are recalled from differing points of view.', 'https://image.tmdb.org/t/p/w640/mwWJuktWk8z5OY4og0z48Jg4u3n.jpg', 'tt0042876'),
(70, 'Some Like It Hot', 1959, 'When two male musicians witness a mob hit, they flee the state in an all-female band disguised as women, but further complications set in.', 'https://image.tmdb.org/t/p/w640/pxc9EFCMYkItESpqqrI783yl8Gh.jpg', 'tt0053291'),
(71, 'Amadeus', 1984, 'The incredible story of Wolfgang Amadeus Mozart, told by his peer and secret rival Antonio Salieri - now confined to an insane asylum.', 'https://image.tmdb.org/t/p/w640/flnoqdC38mbaulAeptjynOFO7yi.jpg', 'tt0086879'),
(72, '2001: A Space Odyssey', 1968, 'Humanity finds a mysterious, obviously artificial object buried beneath the Lunar surface and, with the intelligent computer H.A.L. 9000, sets off on a quest.', 'https://image.tmdb.org/t/p/w640/90T7b2LIrL07ndYQBmSm09yqVEH.jpg', 'tt0062622'),
(73, 'All About Eve', 1950, 'An ingenue insinuates herself into the company of an established but aging stage actress and her circle of theater friends.', 'https://image.tmdb.org/t/p/w640', 'tt0042192'),
(74, 'Witness for the Prosecution', 1957, 'A veteran British barrister must defend his client in a murder trial that has surprise after surprise.', 'https://image.tmdb.org/t/p/w640/heY0CCUqN4DY3X30thssZkvWZwx.jpg', 'tt0051201'),
(75, 'The Sting', 1973, 'In Chicago in September 1936, a young con man seeking revenge for his murdered partner teams up with a master of the big con to win a fortune from a criminal banker.', 'https://image.tmdb.org/t/p/w640/eVEY2WRxXjkEE6ClZenLYGHWnxp.jpg', 'tt0070735'),
(76, 'The Apartment', 1960, 'A man tries to rise in his company by letting its executives use his apartment for trysts, but complications and a romance of his own ensue.', 'https://image.tmdb.org/t/p/w640/8nrQKQjD6z0SJouKHQapXzmjFc6.jpg', 'tt0053604'),
(77, 'Grave of the Fireflies', 1988, 'A young boy and his little sister struggle to survive in Japan during World War II.', 'https://image.tmdb.org/t/p/w640/bwVhmPpydv8P7mWfrmL3XVw0MV5.jpg', 'tt0095327');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
