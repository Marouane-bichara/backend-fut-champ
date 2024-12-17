CREATE TABLE players(
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(50) not null,
    photo varchar(100) not null ,
    position varchar(50) not null,
    status ENUM(reserve, field) DEFAULT NULL,
    deleted date DEFAULT Null
);


INSERT INTO players (id, name, photo, position, status, deleted) VALUES
(1, Lionel Messi, https://cdn.sofifa.net/players/158/023/25_120.png, RW, reserve, NULL),
(2, Cristiano Ronaldo, https://cdn.sofifa.net/players/020/801/25_120.png, ST, field, NULL),
(3, Kevin De Bruyne, https://cdn.sofifa.net/players/192/985/25_120.png, CM, field, NULL),
(4, Kylian Mbappé, https://cdn.sofifa.net/players/231/747/25_120.png, ST, NULL, NULL),
(5, Virgil van Dijk, https://cdn.sofifa.net/players/203/376/25_120.png, CB, NULL, NULL),
(6, Antonio Rudiger, https://cdn.sofifa.net/players/205/452/25_120.png, CB, NULL, NULL),
(7, Neymar Jr, https://cdn.sofifa.net/players/190/871/25_120.png, LW, NULL, NULL),
(8, Mohamed Salah, https://cdn.sofifa.net/players/192/985/25_120.png, RW, field, NULL),
(9, Joshua Kimmich, https://cdn.sofifa.net/players/212/622/25_120.png, CM, NULL, NULL),
(10, Jan Oblak, https://cdn.sofifa.net/players/200/389/25_120.png, GK, reserve, NULL),
(11, Luka Modrić, https://cdn.sofifa.net/players/177/003/25_120.png, CM, NULL, NULL),
(12, Vinicius Junior, https://cdn.sofifa.net/players/238/794/25_120.png, LW, NULL, NULL),
(13, Brahim Diáz, https://cdn.sofifa.net/players/231/410/25_120.png, LW, NULL, NULL),
(14, Karim Benzema, https://cdn.sofifa.net/players/165/153/25_120.png, ST, NULL, NULL),
(15, Erling Haaland, https://cdn.sofifa.net/players/239/085/25_120.png, ST, NULL, NULL),
(16, N\Golo Kanté, https://cdn.sofifa.net/players/215/914/25_120.png, CDM, NULL, NULL),
(17, Alphonso Davies, https://cdn.sofifa.net/players/234/396/25_120.png, LB, NULL, NULL),
(18, Yassine Bounou, https://cdn.sofifa.net/players/209/981/25_120.png, GK, field, NULL),
(19, Bruno Fernandes, https://cdn.sofifa.net/players/212/198/25_120.png, CM, NULL, NULL),
(20, Jadon Sancho, https://cdn.sofifa.net/players/233/049/25_120.png, LW, NULL, NULL),
(21, Trent Alexander-Arnold, https://cdn.sofifa.net/players/231/281/25_120.png, RB, NULL, NULL),
(22, Achraf Hakimi, https://cdn.sofifa.net/players/235/212/25_120.png, RB, NULL, NULL),
(23, Youssef En-Nesyri, https://cdn.sofifa.net/players/235/410/25_120.png, ST, NULL, NULL),
(24, Noussair Mazraoui, https://cdn.sofifa.net/players/236/401/25_120.png, LB, NULL, NULL),
(25, Ismael Saibari, https://cdn.sofifa.net/players/259/480/25_120.png, CM, NULL, NULL),
(26, Gianluigi Donnarumma, https://cdn.sofifa.net/players/230/621/25_120.png, GK, NULL, NULL);


CREATE TABLE otherplayers(
	id int PRIMARY key AUTO_INCREMENT,
    id_player int,
    rating int not null,
   	pace int not null,
    shooting int NOT null,
    passing int not null,
    dribbling int not null ,
    defending int not null,
    physical int not null,
    FOREIGN key (id_player) REFERENCES players(id) ON DELETE CASCADE
);

INSERT INTO otherplayers (id, id_player, rating, pace, shooting, passing, dribbling, defending, physical) VALUES
(1, 1, 91, 82, 90, 80, 85, 60, 70),
(2, 2, 90, 80, 85, 75, 80, 50, 80),
(3, 3, 91, 70, 75, 95, 88, 65, 70),
(4, 4, 92, 96, 85, 80, 85, 65, 70),
(5, 5, 89, 60, 70, 60, 55, 90, 85),
(6, 6, 87, 55, 60, 55, 60, 85, 80),
(7, 7, 92, 91, 80, 90, 91, 55, 70),
(8, 8, 90, 80, 85, 85, 80, 60, 85),
(9, 9, 89, 80, 75, 90, 88, 60, 80),
(10, 11, 90, 70, 65, 90, 91, 65, 85),
(11, 12, 90, 92, 70, 80, 85, 60, 75),
(12, 13, 85, 85, 75, 70, 80, 55, 70),
(13, 14, 88, 75, 85, 70, 80, 60, 80),
(14, 15, 91, 95, 95, 70, 75, 45, 85),
(15, 16, 85, 70, 60, 85, 80, 85, 90),
(16, 17, 89, 90, 70, 85, 75, 70, 80),
(17, 19, 90, 70, 75, 90, 85, 60, 85),
(18, 20, 87, 85, 85, 80, 80, 60, 70),
(19, 21, 88, 80, 70, 85, 90, 75, 80),
(20, 22, 86, 85, 75, 80, 80, 60, 85),
(21, 23, 87, 75, 80, 75, 80, 60, 70),
(22, 24, 82, 70, 75, 70, 70, 70, 75),
(23, 25, 79, 75, 65, 70, 60, 75, 70);



CREATE TABLE goolkeeper(
	id int PRIMARY key AUTO_INCREMENT,
    id_player int,
    rating int not null,
   	diving int not null,
    handling int NOT null,
    kicking int not null,
    reflexes int not null ,
    speed int not null,
    positioning int not null,
    FOREIGN key (id_player) REFERENCES players(id) ON DELETE CASCADE
);

INSERT INTO goolkeeper (id, id_player, rating, diving, handling, kicking, reflexes, speed, positioning) VALUES
(1, 10, 91, 88, 90, 80, 92, 80, 89),
(2, 18, 88, 85, 89, 75, 87, 80, 84);

create table club(
	id int PRIMARY key AUTO_INCREMENT,
    name varchar(50),
    logo varchar(100),
    id_player int,
    FOREIGN key (id_player) REFERENCES players(id) ON DELETE CASCADE
);

INSERT INTO club (id, name, logo, id_player) VALUES
(1, Paris Saint-Germain, https://cdn.sofifa.net/teams/11/120.png, 1),
(2, Al Nassr, https://cdn.sofifa.net/teams/240/120.png, 2),
(3, Manchester City, https://cdn.sofifa.net/teams/10/120.png, 3),
(4, Paris Saint-Germain, https://cdn.sofifa.net/teams/11/120.png, 4),
(5, Liverpool, https://cdn.sofifa.net/teams/23/120.png, 5),
(6, Chelsea, https://cdn.sofifa.net/teams/19/120.png, 6),
(7, Al Hilal, https://cdn.sofifa.net/teams/17/120.png, 7),
(8, Liverpool, https://cdn.sofifa.net/teams/23/120.png, 8),
(9, Bayern Munich, https://cdn.sofifa.net/teams/21/120.png, 9),
(10, Atlético Madrid, https://cdn.sofifa.net/teams/30/120.png, 10),
(11, Real Madrid, https://cdn.sofifa.net/teams/17/120.png, 11),
(12, Real Madrid, https://cdn.sofifa.net/teams/17/120.png, 12),
(13, AC Milan, https://cdn.sofifa.net/teams/12/120.png, 13),
(14, Al Ittihad, https://cdn.sofifa.net/teams/28/120.png, 14),
(15, Manchester City, https://cdn.sofifa.net/teams/10/120.png, 15),
(16, Chelsea, https://cdn.sofifa.net/teams/19/120.png, 16),
(17, Bayern Munich, https://cdn.sofifa.net/teams/21/120.png, 17),
(18, Sevilla, https://cdn.sofifa.net/teams/13/120.png, 18),
(19, Manchester United, https://cdn.sofifa.net/teams/5/120.png, 19),
(20, Manchester United, https://cdn.sofifa.net/teams/5/120.png, 20),
(21, Liverpool, https://cdn.sofifa.net/teams/23/120.png, 21),
(22, Paris Saint-Germain, https://cdn.sofifa.net/teams/11/120.png, 22),
(23, Sevilla, https://cdn.sofifa.net/teams/13/120.png, 23),
(24, Bayern Munich, https://cdn.sofifa.net/teams/21/120.png, 24),
(25, Paris Saint-Germain, https://cdn.sofifa.net/teams/11/120.png, 25);



CREATE table nationality(
	id int PRIMARY key AUTO_INCREMENT,
    name varchar(50),
    flage varchar(100),
    id_player int,
    FOREIGN key (id_player) REFERENCES players(id) ON DELETE CASCADE
);

INSERT INTO nationality (id, name, flage, id_player) VALUES
(1, Argentina, https://cdn.sofifa.net/flags/ar.png, 1),
(2, Portugal, https://cdn.sofifa.net/flags/pt.png, 2),
(3, Belgium, https://cdn.sofifa.net/flags/be.png, 3),
(4, France, https://cdn.sofifa.net/flags/fr.png, 4),
(5, Netherlands, https://cdn.sofifa.net/flags/nl.png, 5),
(6, Germany, https://cdn.sofifa.net/flags/de.png, 6),
(7, Brazil, https://cdn.sofifa.net/flags/br.png, 7),
(8, Egypt, https://cdn.sofifa.net/flags/eg.png, 8),
(9, Germany, https://cdn.sofifa.net/flags/de.png, 9),
(10, Slovenia, https://cdn.sofifa.net/flags/si.png, 10),
(11, Croatia, https://cdn.sofifa.net/flags/hr.png, 11),
(12, Brazil, https://cdn.sofifa.net/flags/br.png, 12),
(13, Morocco, https://cdn.sofifa.net/flags/ma.png, 13),
(14, Saudi Arabia, https://cdn.sofifa.net/flags/sa.png, 14),
(15, Norway, https://cdn.sofifa.net/flags/no.png, 15),
(16, France, https://cdn.sofifa.net/flags/fr.png, 16),
(17, Canada, https://cdn.sofifa.net/flags/ca.png, 17),
(18, Portugal, https://cdn.sofifa.net/flags/pt.png, 18),
(19, England, https://cdn.sofifa.net/flags/gb.png, 19),
(20, England, https://cdn.sofifa.net/flags/gb.png, 20),
(21, England, https://cdn.sofifa.net/flags/gb.png, 21),
(22, Morocco, https://cdn.sofifa.net/flags/ma.png, 22),
(23, Morocco, https://cdn.sofifa.net/flags/ma.png, 23),
(24, Germany, https://cdn.sofifa.net/flags/de.png, 24),
(25, France, https://cdn.sofifa.net/flags/fr.png, 25);
