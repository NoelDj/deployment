-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 15. 12 2022 kl. 20:19:46
-- Serverversion: 10.4.25-MariaDB
-- PHP-version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_blog_database`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'pets', ''),
(2, 'cars', ''),
(3, 'work', ''),
(4, 'sports', ''),
(5, 'finance', '');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(5, 'Algeria'),
(6, 'Andorra'),
(7, 'Angola');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `favourite_posts`
--

CREATE TABLE `favourite_posts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `favourite_posts`
--

INSERT INTO `favourite_posts` (`user_id`, `post_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `posts`
--

INSERT INTO `posts` (`id`, `name`, `category`, `content`) VALUES
(1, 'Find A Quick Way To Work', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla elit nibh, eget rutrum erat rutrum scelerisque. Donec venenatis nulla lectus, vel ultrices diam bibendum commodo.'),
(2, '5 Best Cars In The World', 2, 'Vivamus rutrum enim enim, in bibendum nunc posuere sed. Nam id lobortis dolor. Nullam sed justo nec erat elementum dictum. Mauris euismod mattis mi at pellentesque.'),
(3, 'Best Sports As A Beginner', 4, 'Pellentesque elementum vitae sem in mollis. In hac habitasse platea dictumst. Duis aliquam nunc turpis, in interdum massa ultrices a. Quisque fermentum sit amet massa sit amet elementum.');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `fk_country` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `fk_country`) VALUES
(1, 'John', 'john@mail.com', 48, 1),
(2, 'Jane', 'jane@mail.com', 43, 2),
(6, 'Frans', 'frans@mail.com', 3, 2),
(7, 'Joao', 'joao@mail.com', 30, 3);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks for tabel `countries`
--
ALTER TABLE `countries`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks for tabel `favourite_posts`
--
ALTER TABLE `favourite_posts`
  ADD PRIMARY KEY (`user_id`,`post_id`);

--
-- Indeks for tabel `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `name` (`name`),
  ADD KEY `email_2` (`email`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tilføj AUTO_INCREMENT i tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tilføj AUTO_INCREMENT i tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `favourite_posts`
--
ALTER TABLE `favourite_posts`
  ADD CONSTRAINT `favourite_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
