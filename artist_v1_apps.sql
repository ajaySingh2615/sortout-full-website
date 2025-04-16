-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 09:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist_v1_apps`
--

CREATE TABLE `artist_v1_apps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `form_url` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist_v1_apps`
--

INSERT INTO `artist_v1_apps` (`id`, `name`, `description`, `image_url`, `form_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Instagram', 'Create and share photos and videos with friends', 'https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aW5zdGFncmFtJTIwYXBwfGVufDB8fDB8fHww', 'https://forms.google.com/instagram', 1, '2025-04-02 07:05:08', NULL),
(2, 'TikTok', 'Create and discover short videos', 'https://images.unsplash.com/photo-1638913662380-9799def8ffb1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxzZWFyY2h8MXx8dGlrdG9rfGVufDB8fDB8fHww', 'https://forms.google.com/tiktok', 1, '2025-04-02 07:05:08', NULL),
(3, 'YouTube', 'Share and watch videos', 'https://images.unsplash.com/photo-1611162616475-46b635cb6868?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8eW91dHViZSUyMGFwcHxlbnwwfHwwfHx8MA%3D%3D', 'https://forms.google.com/youtube', 1, '2025-04-02 07:05:08', NULL),
(4, 'Netflix', 'Watch movies and TV shows', 'https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bmV0ZmxpeHxlbnwwfHwwfHx8MA%3D%3D', 'https://forms.google.com/netflix', 1, '2025-04-02 07:05:08', NULL),
(5, 'Trello', 'Organize your projects with boards and cards', 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHJlbGxvfGVufDB8fDB8fHww', 'https://forms.google.com/trello', 1, '2025-04-02 07:05:08', NULL),
(6, 'Chamet - Live Video Chat', 'test2', 'admin/artist-v1/assets/img/default-app.jpg', 'https://docs.google.com/forms/u/0/', 1, '2025-04-02 07:12:50', '2025-04-02 07:12:50'),
(7, 'test1', 'test1', 'admin/artist-v1/assets/img/default-app.jpg', 'https://docs.google.com/forms/u/0/', 1, '2025-04-02 07:18:20', '2025-04-02 07:18:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist_v1_apps`
--
ALTER TABLE `artist_v1_apps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist_v1_apps`
--
ALTER TABLE `artist_v1_apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
