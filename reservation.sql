
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
