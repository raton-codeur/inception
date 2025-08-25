CREATE TABLE personne (
    id INT PRIMARY KEY,
    nom VARCHAR(100),
    age INT
);

INSERT INTO personne (id, nom, age)
VALUES (1, 'Alice', 30);

SELECT * FROM personne;
