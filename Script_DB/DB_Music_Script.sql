/*create database */
CREATE DATABASE music_web CHARACTER SET utf8 COLLATE utf8_unicode_ci;

/*table users*/
CREATE TABLE User (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(500) NOT NULL,
    password VARCHAR(255) NOT NULL
);

/*table Genre*/
CREATE TABLE Category(
    id_category INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    status boolean DEFAULT 1
)

/*table Artist*/
CREATE TABLE Artist (
    id_artist INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birth_date DATE,
    nationality VARCHAR(100),
    bio TEXT,
    website VARCHAR(255),
    image_url VARCHAR(255),
    status boolean DEFAULT 1
);

/*table songs*/
CREATE TABLE Song (
    id_song INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(300) NOT NULL,
    album VARCHAR(255),
    id_category INT,
    duration TIME,
    audio_file VARCHAR(255) NOT NULL,
    release_year INT,
    composer VARCHAR(255),
    lyrics TEXT,
    entry_date DATE NOT NULL,
    views INT DEFAULT 0,
    status boolean DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*table artist*/




/*inserts initials*/
INSERT INTO Category (name, status)
VALUES 
('Rock', 1),
('Pop', 1),
('Jazz', 1),
('Reggae', 1),
('Electrónica', 1);
/*artist list of insert initiaal*/
INSERT INTO Artist (name, birth_date, nationality, bio, website, image_url) 
VALUES 
('Bob Dylan', '1941-05-24', 'Estadounidense', 'Bob Dylan es un músico, cantautor y poeta estadounidense. Ha sido una figura influyente en la música popular y la cultura durante más de cinco décadas.', 'https://bobdylan.com/', 'https://example.com/bob_dylan.jpg'),

('Beyoncé', '1981-09-04', 'Estadounidense', 'Beyoncé es una cantante, compositora y actriz estadounidense. Es una de las artistas musicales más influyentes y exitosas de la historia.', 'https://www.beyonce.com/', 'https://example.com/beyonce.jpg'),

('Freddie Mercury', '1946-09-05', 'Británica', 'Freddie Mercury fue un cantante, compositor y músico británico, conocido como el líder de la banda Queen. Es considerado uno de los mejores vocalistas de la historia del rock.', 'https://www.queenonline.com/', 'https://example.com/freddie_mercury.jpg'),

('Adele', '1988-05-05', 'Británica', 'Adele es una cantante y compositora británica conocida por su poderosa voz y sus exitosos álbumes. Ha ganado múltiples premios Grammy.', 'https://www.adele.com/', 'https://example.com/adele.jpg'),

('Michael Jackson', '1958-08-29', 'Estadounidense', 'Michael Jackson fue un cantante, compositor y bailarín estadounidense, conocido como el "Rey del Pop". Es uno de los artistas musicales más exitosos de todos los tiempos.', 'https://www.michaeljackson.com/', 'https://example.com/michael_jackson.jpg');
/*songs initial inserts*/
INSERT INTO Song (title, album, id_category, duration, audio_file, release_year, composer, lyrics, entry_date)
VALUES 
('Bohemian Rhapsody', 'A Night at the Opera', 1, '00:05:55', 'bohemian_rhapsody.mp3', 1975, 'Freddie Mercury', 'Is this the real life? Is this just fantasy?', '2024-04-30'),

('Hello', '25', 2, '00:04:55', 'hello.mp3', 2015, 'Adele Adkins', 'Hello, it''s me. I was wondering if after all these years you''d like to meet', '2024-04-30'),

('Like a Rolling Stone', 'Highway 61 Revisited', 3, '00:06:13', 'like_a_rolling_stone.mp3', 1965, 'Bob Dylan', 'Once upon a time you dressed so fine. You threw the bums a dime in your prime', '2024-04-30'),

('Single Ladies (Put a Ring on It)', 'I Am... Sasha Fierce', 2, '00:03:13', 'single_ladies.mp3', 2008, 'Beyoncé Knowles', 'All the single ladies (All the single ladies). All the single ladies (All the single ladies)', '2024-04-30'),

('Billie Jean', 'Thriller', 1, '00:04:54', 'billie_jean.mp3', 1982, 'Michael Jackson', 'She was more like a beauty queen from a movie scene. I said don''t mind, but what do you mean', '2024-04-30'),

('Rolling in the Deep', '21', 2, '00:03:48', 'rolling_in_the_deep.mp3', 2010, 'Adele Adkins', 'There''s a fire starting in my heart. Reaching a fever pitch and it''s bringing me out the dark', '2024-04-30'),

('Bohemian Rhapsody', 'A Night at the Opera', 1, '00:05:55', 'bohemian_rhapsody.mp3', 1975, 'Freddie Mercury', 'Is this the real life? Is this just fantasy?', '2024-04-30'),

('Smells Like Teen Spirit', 'Nevermind', 4, '00:05:01', 'smells_like_teen_spirit.mp3', 1991, 'Kurt Cobain', 'Load up on guns, bring your friends. It''s fun to lose and to pretend', '2024-04-30'),

('Hotel California', 'Hotel California', 5, '00:06:30', 'hotel_california.mp3', 1976, 'Don Henley, Glenn Frey, Don Felder', 'On a dark desert highway, cool wind in my hair. Warm smell of colitas, rising up through the air', '2024-04-30'),

('Hey Jude', 'The Beatles (White Album)', 6, '00:07:11', 'hey_jude.mp3', 1968, 'John Lennon, Paul McCartney', 'Hey Jude, don''t make it bad. Take a sad song and make it better', '2024-04-30');