/*****
 * Names: Satya Shenoy & Mandy Lin
 * Program: Project Phase 3, MySQL database instances
 * Due: 4/3/2023
 * *******/ 


-- ANIME TABLE INSERT SCRIPTS
 	INSERT INTO animes VALUES('AOT', 'Attack on Titan', 2013, 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.', 'Action, Adventure, Drama', 'Wit Studio, MAPPA');
 
 	INSERT INTO animes VALUES('OPM', 'One Punch Man', 2015, 'The story of Saitama, a hero that does it just for fun & can defeat his enemies with a single punch.', 'Action, Comedy', 'Madhouse');
 
 	INSERT INTO animes VALUES('DSL', 'Demon Slayer', 2019, 'A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.', 'Action, Adventure', 'Ufotable');
 
 	INSERT INTO animes VALUES('Naruto', 'Naruto', 2009, 'It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.', 'Adventure, Fantasy, Comedy, Shonen', 'Studio Pierrot');
 
 	INSERT INTO animes VALUES('TenSura', 'That Time I Got Reincarnated as a Slime', 2018, 'The story is about a salaryman who is murdered and reincarnates in a sword and sorcery world as a slime with unique powers and gathers allies to build his own nation of monsters.', 'Anime, Isekai, Fantasy', 'Eight Bit');

 	INSERT INTO animes VALUES('Bleach', 'Bleach', 2004, 'High school student Ichigo Kurosaki, who has the ability to see ghosts, gains soul reaper powers from Rukia Kuchiki and sets out to save the world from "Hollows".', 'Action, Adventure', 'Studio Pierrot');


-- ANIME_LIST INSERT SCRIPTS
	INSERT INTO anime_list VALUES(1, 'www.An-IMDB.com/AnimeLover999_List/');

	INSERT INTO anime_list VALUES(2, 'www.An-IMDB.com/MMaria_List/');

	INSERT INTO anime_list VALUES(3, 'www.An-IMDB.com/LukaSushi_List/');

	INSERT INTO anime_list VALUES(4, 'www.An-IMDB.com/LukaSushi_List/');

	INSERT INTO anime_list VALUES(5, 'www.An-IMDB.com/ACano_List/');

	INSERT INTO anime_list VALUES(6, 'www.An-IMDB.com/JDoe_List/');


-- USERS TABLE INSERT SCRIPTS
	INSERT INTO users VALUES('shenoysl@gmail.com', 'AnimeLover999', 'shenoy-password');

	INSERT INTO users VALUES('mandylin@gmail.com', 'LukaSushi', 'lin-password');

	INSERT INTO users VALUES('albertocano@gmail.com', 'ACano', 'cano-password');

	INSERT INTO users VALUES('johndoe@gmail.com', 'JDoe', 'doe-password');

	INSERT INTO users VALUES('mandymaria2002@gmail.com', 'MMaria', 'linm9');


-- PRODUCERS TABLE INSERT SCRIPTS
	
	-- AOT PRODUCERS:
	INSERT INTO producers (Producer_id, First_Name, Last_Name) VALUES(1, 'Jouji', 'Wada');
	INSERT INTO producers (Producer_id, First_Name, Last_Name) VALUES(2, 'Tetsuya', 'Nakatake'); 
	INSERT INTO producers VALUES(3, 'Makoto', 'Furukawa', '1989/09/29'); 

	
	-- OPM PRODUCERS:
	INSERT INTO producers (Producer_id, First_Name, Last_Name) VALUES(4, 'Nobuyuki', 'Hosoya'); 
	INSERT INTO producers (Producer_id, First_Name, Last_Name) VALUES(5, 'Yuichiro', 'Fukushi'); 
	
	
	-- DSL PRODUCERS:
	INSERT INTO producers VALUES(6, 'Hikaru', 'Kondou', '1969/12/02'); 
	INSERT INTO producers(Producer_id, First_Name, Last_Name) VALUES(7, 'Masanori', 'Miyake');  
	

	-- NARUTO PRODUCERS:
	INSERT INTO producers VALUES(8, 'Masashi', 'Kishimoto', '1974/11/08'); 

	
	-- TENSURA PRODUCERS:
	INSERT INTO producers (Producer_id, First_Name, Last_Name) VALUES (9,'Itō', 'Yōhei'); 
	INSERT INTO producers (First_Name, Last_Name) VALUES (10, 'Shigeto', 'Sugimoto'); 

	-- BLEACH PRODUCERS:
	INSERT INTO producers VALUES(11, 'Jamie', 'Simone', '1961/12/28');



-- PRODUCED TABLE INSERT SCRIPTS
	INSERT INTO produced VALUES('AOT', 1);

	INSERT INTO produced VALUES('AOT', 2);

	INSERT INTO produced VALUES('AOT', 3);

	INSERT INTO produced VALUES('OPM', 4);

	INSERT INTO produced VALUES('OPM', 5);

	INSERT INTO produced VALUES('DSL', 6);

	INSERT INTO produced VALUES('DSL', 7);

	INSERT INTO produced VALUES('Naruto', 8);

	INSERT INTO produced VALUES('TenSura', 9);

	INSERT INTO produced VALUES('TenSura', 10);

	INSERT INTO produced VALUES('Bleach', 11);


-- ANIME_AWARD TABLE INSERT SCRIPTS
	INSERT INTO anime_award VALUES(1, 'Crunchyroll Anime Awards: Best Score'); -- AOT award (2023)

	INSERT INTO anime_award VALUES(2, 'Crunchyroll Anime Awards: Best Drama'); -- AOT award (2023)

	INSERT INTO anime_award VALUES(3, 'Crunchyroll Anime Awards: Best Antagonist'); -- AOT award (2023)

	INSERT INTO anime_award VALUES(4, 'INOCA Awards: Best Animated Program'); -- OPM award (2022)

	INSERT INTO anime_award VALUES(5, 'Crunchyroll Anime Awards: Best Animation'); -- DSL award (2023)


-- ANIME_AWARDED TABLE INSERT SCRIPTS
	INSERT INTO anime_awarded VALUES('AOT', 1, 2023);

	INSERT INTO anime_awarded VALUES('AOT', 2, 2023);

	INSERT INTO anime_awarded VALUES('AOT', 3, 2023);

	INSERT INTO anime_awarded VALUES('OPM', 4, 2022);

	INSERT INTO anime_awarded VALUES('DSL', 5, 2023);


-- VOICE ACTORS TABLE INSERT SCRIPTS	
	
	-- AOT VOICE ACTORS:
	INSERT INTO voice_actors VALUES(1, 'Mikasa Ackermann', 'Trina', 'Nishimura', '1983/08/08');
	INSERT INTO voice_actors VALUES(2, 'Levi', 'Matthew', 'Mercer', '1982/06/29');

	-- ONE PUNCH MAN VOICE ACTORS:
	INSERT INTO voice_actors VALUES(3, 'Saitama', 'Makoto', 'Furukawa', '1989/09/29');

	-- DEMON SLAYER VOICE ACTORS:
	INSERT INTO voice_actors VALUES(4, 'Tanjiro Kamado', 'Natsuki', 'Hanae', '1991/06/26');

	-- NARUTO VOICE ACTORS:
	INSERT INTO voice_actors VALUES(5, 'Naruto Uzumaki', 'Junko', 'Takeuchi', '1972/04/05');
	INSERT INTO voice_actors VALUES(6, 'Sasuke Uchiha', 'Yuri', 'Lowenthal', '1971/03/05');

	-- TENSURA VOICE ACTORS:
	INSERT INTO voice_actors VALUES(7, 'Rimuru Tempest', 'Brittney', 'Karbowski', '1986/06/26');


	-- BLEACH VOICE ACTORS;
	INSERT INTO voice_actors VALUES(8, 'Ichigo Kurosaki', 'Masakazu', 'Morita', '1972/10/21');
	INSERT INTO voice_actors VALUES(9, 'Rukia Kuchiki', 'Fumiko', 'Orikasa', '1974/12/27');	


-- STARS TABLE INSERT SCRIPTS
	INSERT INTO stars VALUES('AOT', 1);
	
	INSERT INTO stars VALUES('AOT', 2);
	
	INSERT INTO stars VALUES('OPM', 3);
	
	INSERT INTO stars VALUES('DSL', 4);

	INSERT INTO stars VALUES('Naruto', 5);

	INSERT INTO stars VALUES('Naruto', 6);

	INSERT INTO stars VALUES('TenSura', 7);

	INSERT INTO stars VALUES('Bleach', 8);

	INSERT INTO stars VALUES('Bleach', 9);


-- ACTOR_AWARD TABLE INSERT SCRIPTS
	INSERT INTO actor_award VALUES(1, 'BTVA: Best Female Lead Vocal Performance'); -- Trina's award (2015)
	
	INSERT INTO actor_award VALUES(2, 'BTVA: Best Male Lead Vocal Performance'); -- Matthew's award (2015)
	
	INSERT INTO actor_award VALUES(3, 'Anime Trending Awards: Best Male Voice Acting Performance'); -- Natsuki's award (2022)

	INSERT INTO actor_award VALUES(4, 'BTVA Best Male Lead Vocal Performance in an Anime Feature Film/Special'); -- Lowenthal’s award (2015)

	INSERT INTO actor_award VALUES(5, 'BTA Best Male Lead Vocal Performance in an Anime Television Series/OVA'); -- Lowenthal’s award (2011)


-- ACTOR_AWARDED TABLE INSERT SCRIPTS	
	INSERT INTO actor_awarded VALUES(1, 1, 2015);
	
	INSERT INTO actor_awarded VALUES(2, 2, 2015);
	
	INSERT INTO actor_awarded VALUES(4, 3, 2022);

	INSERT INTO actor_awarded VALUES(6, 4, 2015);
	
	INSERT INTO actor_awarded VALUES(6, 5, 2011);


-- ADDS TABLE INSERT SCRIPTS
	INSERT INTO adds VALUES('2022/08/23', 1, 'shenoysl@gmail.com', 'AOT');

	INSERT INTO adds VALUES('2023/04/02', 2, 'mandymaria2002@gmail.com', 'DSL');

	INSERT INTO adds VALUES('2023/04/02', 3, 'mandylin@gmail.com', 'OPM');

	INSERT INTO adds VALUES('2023/04/02', 4, 'mandylin@gmail.com', 'TenSura');

	INSERT INTO adds VALUES('2023/04/03', 5, 'albertocano@gmail.com', 'Naruto');

	INSERT INTO adds VALUES('2023/04/03', 6, 'johndoe@gmail.com', 'Bleach');

	
-- RATES_REVIEWS TABLE INSERT SCRIPTS
	INSERT INTO rates_reviews VALUES(5,'What an incredible show, truly my favorite.', 'AOT', 'shenoysl@gmail.com');
	
	INSERT INTO rates_reviews VALUES(3, 'Good show but has some flaws.', 'OPM', 'mandylin@gmail.com');
	
	INSERT INTO rates_reviews VALUES(4, 'Absolutely incredible animation and the story is also very solid.', 'DSL', 'shenoysl@gmail.com');
	
	INSERT INTO rates_reviews VALUES(2, 'Do not understand the high praise this anime recieves, very subpar.','Naruto', 'albertocano@gmail.com');

	INSERT INTO rates_reviews VALUES(5, 'Wonderful Anime, I truly recommend anyone who has not seen it, to go see it ASAP.', 'TenSura', 'johndoe@gmail.com');

	INSERT INTO rates_reviews VALUES(5, 'I have no idea what ACano is talking about, this is a spectacular show that everyone needs to watch!', 'Naruto', 'johndoe@gmail.com');




