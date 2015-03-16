-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 16 Mars 2015 à 15:28
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE IF NOT EXISTS `competences` (
`id_c` int(11) NOT NULL,
  `nom_c` varchar(32) NOT NULL,
  `liste_c` varchar(512) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id_c`, `nom_c`, `liste_c`) VALUES
(5, 'Langages', 'C, C++, Shell, HTML, CSS, PHP, Javascript, SQL'),
(6, 'BDD', 'MySQL'),
(7, 'SystÃ¨mes', 'Windows, GNU / Linux, Android, Mac OS'),
(8, 'RÃ©seaux', 'IP, DHCP, DNS, tc, NAT, VLAN'),
(9, 'SÃ©curitÃ©', 'iptables, nftables'),
(10, 'Virtualisation', 'VMware, VirtualBox'),
(11, 'Utilitaires', 'GPO, WSUS, RADIUS, Clonezilla, Samba, Apache, Nginx, UpdatEngine, Squid'),
(12, 'Langues', 'Anglais courant');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
`id_e` int(11) NOT NULL,
  `duree_e` varchar(256) NOT NULL,
  `entreprise_e` varchar(256) NOT NULL,
  `travaux_e` varchar(256) NOT NULL,
  `poste_e` varchar(256) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `experiences`
--

INSERT INTO `experiences` (`id_e`, `duree_e`, `entreprise_e`, `travaux_e`, `poste_e`) VALUES
(2, '12 mois', 'OIIO Formation', 'Ã‰laboration et configuration d''un LAN', 'Administrateur systÃ¨mes et rÃ©seaux'),
(3, '3 mois', 'OIIO Formation', 'Installation et configuration du parc', 'Administrateur systÃ¨mes et rÃ©seaux');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
`id_f` int(11) NOT NULL,
  `annee_f` varchar(256) NOT NULL,
  `description_f` varchar(256) NOT NULL,
  `ecole_f` varchar(256) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_f`, `annee_f`, `description_f`, `ecole_f`) VALUES
(3, '2004', 'BaccalaurÃ©at scientifique', 'LycÃ©e Maurice Ravel (Paris)'),
(4, '2004 - 2005', '1Ã¨re annÃ©e MIAS', 'UniversitÃ© Pierre et Marie Curie (Paris VI)'),
(5, '2005 - 2006', 'IUT informatique', 'IUT SÃ©nartÂ­Fontainebleau (77)'),
(6, '2006 - 2008', '1Ã¨re annÃ©e MIME', 'UniversitÃ© Pierre et Marie Curie (Paris VI)'),
(7, '2013 - 2015', 'BTS IRIS en alternance', 'OIIO Formation');

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE IF NOT EXISTS `interets` (
`id_i` int(11) NOT NULL,
  `description_i` varchar(256) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `interets`
--

INSERT INTO `interets` (`id_i`, `description_i`) VALUES
(2, '1er Kyu de Karate Wado Kan, champion de France de karate Jutsu en 2003'),
(3, 'Jeu de Go, RTS, MOBA'),
(4, 'ActualitÃ© autour du dÃ©veloppement du noyau linux');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
`id_p` int(11) NOT NULL,
  `date_p` varchar(256) NOT NULL,
  `description_p` varchar(256) NOT NULL,
  `lien_p` varchar(256) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id_p`, `date_p`, `description_p`, `lien_p`) VALUES
(2, '2014', 'Forum', 'forum'),
(3, '2014', 'AgrÃ©gateur de flux RSS', 'rss'),
(4, '2015', 'Site CV', './');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
 ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
 ADD PRIMARY KEY (`id_e`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
 ADD PRIMARY KEY (`id_f`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
 ADD PRIMARY KEY (`id_i`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
 ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
