-- Vytvoření databáze
CREATE DATABASE myDB;

-- Vytvoření tabulky
CREATE TABLE zamestnanci
(
    ID    int,
    Jmeno varchar(255),
);

-- Vložení dat do tabulky
INSERT INTO zamestnanci
VALUES (1, "Jakub");

-- Výběr dat z tabulky
SELECT Jmeno
FROM zamestnanci;

-- Přidat sloupec do tabulky
ALTER TABLE zamestnanci
ADD Adresa varchar(255);

-- Odebrat sloupec z tabulky
ALTER TABLE zamestnanci
DROP COLUMN Adresa varchar(255);

-- Změnit datový typ sloupce
ALTER TABLE zamestnanci
MODIFY COLUMN ID varchar(255);
