-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2019 a las 11:43:21
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guiaturistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Otros', 'Ab unde perspiciatis sit vero tempora cumque iure animi velit.', 'img/imgTour/1.webp', '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(2, 'Local', 'Quisquam culpa quas saepe ut voluptas possimus non aspernatur voluptas.', 'img/imgTour/2.webp', '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(3, 'Extrajeros', 'Ipsa sed reiciendis cum sequi accusantium ut cum repellendus et recusandae iste.', 'img/imgTour/3.webp', '2019-09-10 05:55:50', '2019-09-10 05:55:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guides`
--

CREATE TABLE `guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `guides`
--

INSERT INTO `guides` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jelsyn Ceron', NULL, NULL, NULL),
(2, 'Maestro Rochi', NULL, NULL, NULL),
(3, 'Señor Piccolo Daimaku', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(278, '2014_10_12_000000_create_users_table', 1),
(279, '2014_10_12_100000_create_password_resets_table', 1),
(280, '2019_08_19_000000_create_failed_jobs_table', 1),
(281, '2019_09_09_052944_create_guides_table', 1),
(282, '2019_09_09_053127_create_tourists_table', 1),
(283, '2019_09_09_053643_create_categories_table', 1),
(284, '2019_09_09_054325_create_tours_table', 1),
(285, '2019_09_09_054437_create_tour_tourists_table', 1),
(286, '2019_09_09_054624_create_administrators_table', 1),
(287, '2019_09_09_165344_create_tour_images_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tourists`
--

CREATE TABLE `tourists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `reservations` double(8,2) NOT NULL,
  `guide_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `name`, `description`, `price`, `reservations`, `guide_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Nomada Travel', 'Dolorem alias sed provident dolorem sed accusamus reiciendis vel dolorem.', 342.20, 10.00, 1, 3, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(2, 'Tu Destino', 'Non beatae eos eligendi molestiae eaque ducimus odit et aliquam delectus error laudantium et.', 848.89, 13.00, 1, 3, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(3, 'Vuelta al Sol', 'Consequatur modi nam ut suscipit hic hic labore cum.', 254.43, 5.00, 2, 1, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(4, 'Viaje Astral', 'Ex sit recusandae ea distinctio voluptas quo cupiditate molestiae beatae ducimus consectetur.', 889.32, 1.00, 3, 3, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(5, 'Nuevos Recuerdos', 'Ipsa libero consequatur dolor earum ipsa qui excepturi hic quia omnis inventore.', 661.05, 1.00, 2, 3, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(6, 'Bello horizonte', 'Iure rem libero neque cum quaerat quis ab possimus ea accusamus recusandae.', 370.24, 15.00, 1, 3, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(7, 'Cometas Tours', 'Eos corporis dicta et et fuga consequatur dicta deleniti voluptatum.', 509.87, 10.00, 2, 1, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(8, 'Sin Escalas', 'Nostrum velit nihil rerum voluptate neque rerum assumenda et molestias.', 576.86, 2.00, 3, 3, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(9, 'Los Viajeros', 'Similique vitae quae est quibusdam est ut sed saepe perspiciatis.', 380.29, 7.00, 2, 2, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(10, 'La mejoras Rutas', 'Et soluta quisquam dolores corporis consectetur neque veritatis libero iusto.', 409.26, 10.00, 1, 3, '2019-09-10 05:55:51', '2019-09-10 05:55:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_images`
--

CREATE TABLE `tour_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `tour_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_images`
--

INSERT INTO `tour_images` (`id`, `image`, `featured`, `tour_id`, `created_at`, `updated_at`) VALUES
(1, 'https://lorempixel.com/250/250/?12133', 0, 4, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(2, 'https://lorempixel.com/250/250/?60348', 0, 6, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(3, 'https://lorempixel.com/250/250/?10230', 0, 7, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(4, 'https://lorempixel.com/250/250/?33152', 0, 5, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(5, 'https://lorempixel.com/250/250/?23439', 0, 9, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(6, 'https://lorempixel.com/250/250/?40937', 0, 9, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(7, 'https://lorempixel.com/250/250/?81830', 0, 9, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(8, 'https://lorempixel.com/250/250/?32071', 0, 6, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(9, 'https://lorempixel.com/250/250/?91081', 0, 6, '2019-09-10 05:55:51', '2019-09-10 05:55:51'),
(10, 'https://lorempixel.com/250/250/?18376', 0, 7, '2019-09-10 05:55:51', '2019-09-10 05:55:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_tourists`
--

CREATE TABLE `tour_tourists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `tourist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `numberId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `lastName`, `email_verified_at`, `numberId`, `telephone`, `gender`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'juan@gmail.com', '$2y$10$ZQebMLO1g/Y2lEXbTpw29uzwc8cl.Z0j.U/JB4uHsMM4gTtMAcZU6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-10 05:55:50', '2019-09-10 05:55:50'),
(2, 'josue', 'josue@gmail.com', '$2y$10$fOqf39TbFObYp5hHlxHCouJKbCLMUAKw0pIWYnG.GnjLBoZoMXqBu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-10 16:17:15', '2019-09-10 16:17:15'),
(3, 'jelsyn', 'jelsync@gmail.com', '$2y$10$lFaiPeTaBvoFDdWyaVD/L.ImdLFhT53hjMcZ.ptAHhGxdeWoT9TM2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-10 16:18:15', '2019-09-10 16:18:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `administrators_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guides_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourists_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tours_guide_id_foreign` (`guide_id`),
  ADD KEY `tours_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `tour_images`
--
ALTER TABLE `tour_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_images_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `tour_tourists`
--
ALTER TABLE `tour_tourists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_tourists_tour_id_foreign` (`tour_id`),
  ADD KEY `tour_tourists_tourist_id_foreign` (`tourist_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `guides`
--
ALTER TABLE `guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT de la tabla `tourists`
--
ALTER TABLE `tourists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tour_images`
--
ALTER TABLE `tour_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tour_tourists`
--
ALTER TABLE `tour_tourists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrators`
--
ALTER TABLE `administrators`
  ADD CONSTRAINT `administrators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `guides`
--
ALTER TABLE `guides`
  ADD CONSTRAINT `guides_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tourists`
--
ALTER TABLE `tourists`
  ADD CONSTRAINT `tourists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `tours_guide_id_foreign` FOREIGN KEY (`guide_id`) REFERENCES `guides` (`id`);

--
-- Filtros para la tabla `tour_images`
--
ALTER TABLE `tour_images`
  ADD CONSTRAINT `tour_images_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Filtros para la tabla `tour_tourists`
--
ALTER TABLE `tour_tourists`
  ADD CONSTRAINT `tour_tourists_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`),
  ADD CONSTRAINT `tour_tourists_tourist_id_foreign` FOREIGN KEY (`tourist_id`) REFERENCES `tourists` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
