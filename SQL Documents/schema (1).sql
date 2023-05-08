/*****
 * Names: Satya Shenoy & Mandy Lin
 * Program: Project Phase 3, MySQL database schema
 * Due: 4/3/2023
 * *******/


CREATE TABLE animes(

	Anime_id varchar(255) NOT NULL,
	Anime_name varchar(255) NOT NULL UNIQUE,
	Release_year int,
	Storyline LONGTEXT,
	Genres varchar(255),
	Studios varchar(255),
	PRIMARY KEY(Anime_id)

);

 

CREATE TABLE anime_list(
	Anime_list_id int,
	Share_link varchar(255),
	PRIMARY KEY(Anime_list_id)
);


	

CREATE TABLE users (

	Email varchar(255),
	Username varchar(255) NOT NULL UNIQUE,
	Password varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (Email)

);




CREATE TABLE producers (

	Producer_id int, 
	First_name varchar(255),
	Last_name varchar(255) NOT NULL,
	Birthdate date,
	PRIMARY KEY(Producer_id)

);



CREATE TABLE produced(

	Anime_id varchar(255) NOT NULL,
	Producer_id int NOT NULL,
	PRIMARY KEY(Anime_id, producer_id),
	FOREIGN KEY(Anime_id) REFERENCES animes(Anime_id),
	FOREIGN KEY(Producer_id) REFERENCES producers(Producer_id)

);




CREATE TABLE anime_award(

	Anime_award_id int NOT NULL,
	Anime_award_name varchar(255) NOT NULL,
	PRIMARY KEY(Anime_award_id)

);



CREATE TABLE anime_awarded(
	Anime_id varchar(255) NOT NULL,
	Anime_award_id int NOT NULL,
	Year int,
	PRIMARY KEY(Anime_award_id,Anime_id),
	FOREIGN KEY(Anime_award_id) REFERENCES anime_award(Anime_award_id),
	FOREIGN KEY(Anime_id) REFERENCES animes(Anime_id)

);




CREATE TABLE voice_actors(

	Voice_actor_id int NOT NULL,
	Character_voiced varchar(255) NOT NULL,
	First_Name varchar(255),
	Last_Name varchar(255) NOT NULL,
	Birthdate date,
	PRIMARY KEY(Voice_actor_id)

);


CREATE TABLE stars(

	Anime_id varchar(255) NOT NULL,
	Voice_actor_id int NOT NULL,
	PRIMARY KEY(Anime_id, Voice_actor_id),
	FOREIGN KEY(Anime_id) REFERENCES animes(Anime_id),
	FOREIGN KEY(Voice_actor_id) REFERENCES voice_actors(Voice_actor_id)

);

	
CREATE TABLE actor_award(

	Actor_award_id int NOT NULL,
	Name varchar(255) NOT NULL,
	PRIMARY KEY(Actor_award_id)

);



CREATE TABLE actor_awarded(

	Voice_actor_id int NOT NULL,
	Actor_award_id int NOT NULL,
	Year int,
	PRIMARY KEY(Actor_award_id, Voice_actor_id),
	FOREIGN KEY(Actor_award_id) REFERENCES actor_award(Actor_award_id),
	FOREIGN KEY(Voice_actor_id) REFERENCES voice_actors(Voice_actor_id)

);

	




CREATE TABLE adds(

	add_date date NOT NULL,
	Anime_list_id int NOT NULL,
	Email varchar(255) NOT NULL,
	Anime_id varchar(255) NOT NULL,
	PRIMARY KEY(Anime_list_id,Email, Anime_id),
	FOREIGN KEY(Anime_list_id) REFERENCES anime_list(Anime_list_id),
	FOREIGN KEY(Email) REFERENCES users(Email),
	FOREIGN KEY(Anime_id) REFERENCES animes(Anime_id)

);






CREATE TABLE rates_reviews(

	Rating int DEFAULT 0,
	Review LONGTEXT,
	Anime_id varchar(255) NOT NULL,
	Email varchar(255) NOT NULL,
	PRIMARY KEY(Anime_id, Email),
	FOREIGN KEY(Anime_id) REFERENCES animes(Anime_id),
	FOREIGN KEY(Email) REFERENCES users(Email)

);

	