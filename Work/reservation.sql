
--
-- Base de données :  `reservation`
--

-- --------------------------------------------------------
CREATE DATABASE reservation;
use reservation;

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) ,
  `login` varchar(30),
  `password` varchar(30),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

insert into admin (id,login,password) values (1,'admin','admin');
-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `numero` varchar(50) NOT NULL,
  `numerobat` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB ;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numero`, `numerobat`, `type`) VALUES
('001', 1, 'individuel'),
('002', 2, 'deux'),
('003', 3, 'individuel');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` varchar(200) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_de_naissance` date NOT NULL
) ENGINE=InnoDB;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `email`, `telephone`, `date_de_naissance`) VALUES
('2018 et nt 0001', 'etudiant', 'etudiant', 'etudiant@gmail.com', 845678484, '2000-06-16');
INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `email`, `telephone`, `date_de_naissance`) VALUES
('2018nt0002', 'etudiant1', 'etudiant1', 'etudiant1@gmail.com', 849678484, '2000-06-17');

