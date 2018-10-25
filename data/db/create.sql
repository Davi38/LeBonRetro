CREATE TABLE article (
  identifiant INTEGER PRIMARY KEY,
  nom TEXT,
  description TEXT,
  nomVendeur TEXT,
  prix REAL,
  image TEXT,
  categorie TEXT,
  DatePublication TEXT,
  localisation TEXT,
  FOREIGN KEY(categorie) REFERENCES categorie(nom),
  FOREIGN KEY(nomVendeur) REFERENCES vendeur(nom)
);

CREATE TABLE categorie (
  id INTEGER PRIMARY KEY,
  nom TEXT
  );



CREATE TABLE vendeur (
  identifiant TEXT PRIMARY KEY,
  nom TEXT,
  telephone TEXT,
  mail TEXT,
  motDePasse TEXT
);
