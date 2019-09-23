--Guias
INSERT INTO `guides` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES (NULL, 'Jelsyn Ceron', NULL, NULL, NULL), (NULL, 'Jairo Ceron', NULL, NULL, NULL), (NULL, 'Brayan Ceron', NULL, NULL, NULL);

--Categorias
INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES (NULL, 'Local', 'Viajes locales a nivel Nacional', 'img/imgTour/1.webp', NULL, NULL), (NULL, 'Extranjero', 'Viajes locales a nivel Internacional', 'img/imgTour/3.webp', NULL, NULL), (NULL, 'Otros', 'Viajes + Combos', 'img/imgTour/2.webp', NULL, NULL);

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Otros', 'Ab unde perspiciatis sit vero tempora cumque iure animi velit.', 'img/imgTour/1.webp', '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(2, 'Local', 'Quisquam culpa quas saepe ut voluptas possimus non aspernatur voluptas.', 'img/imgTour/2.webp', '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(3, 'Extrajeros', 'Ipsa sed reiciendis cum sequi accusantium ut cum repellendus et recusandae iste.', 'img/imgTour/3.webp', '2019-09-09 23:55:50', '2019-09-09 23:55:50');

-- Volcado de datos para la tabla `guides`
--

INSERT INTO `guides` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jelsyn Ceron', NULL, NULL, NULL),
(2, 'Maestro Rochi', NULL, NULL, NULL),
(3, 'Manuel Zelaya', NULL, NULL, NULL);


-- Volcado de datos para la tabla `tours`
--
INSERT INTO `tours` (`id`, `name`, `description`, `price`, `reservations`, `guide_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Nomada Travel', 'Dolorem alias sed provident dolorem sed accusamus reiciendis vel dolorem.', 342.20, 10.00, NULL, 3, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(2, 'Tu Destino', 'Non beatae eos eligendi molestiae eaque ducimus odit et aliquam delectus error laudantium et.', 848.89, 13.00, NULL, 3, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(3, 'Vuelta al Sol', 'Consequatur modi nam ut suscipit hic hic labore cum.', 254.43, 5.00, NULL, 1, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(4, 'Viaje Astral', 'Ex sit recusandae ea distinctio voluptas quo cupiditate molestiae beatae ducimus consectetur.', 889.32, 1.00, NULL, 3, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(5, 'Nuevos Recuerdos', 'Ipsa libero consequatur dolor earum ipsa qui excepturi hic quia omnis inventore.', 661.05, 1.00, NULL, 3, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(6, 'Bello horizonte', 'Iure rem libero neque cum quaerat quis ab possimus ea accusamus recusandae.', 370.24, 15.00, NULL, 3, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(7, 'Cometas Tours', 'Eos corporis dicta et et fuga consequatur dicta deleniti voluptatum.', 509.87, 10.00, NULL, 1, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(8, 'Sin Escalas', 'Nostrum velit nihil rerum voluptate neque rerum assumenda et molestias.', 576.86, 2.00, NULL, 3, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(9, 'Los Viajeros', 'Similique vitae quae est quibusdam est ut sed saepe perspiciatis.', 380.29, 7.00, NULL, 2, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(10, 'La mejoras Rutas', 'Et soluta quisquam dolores corporis consectetur neque veritatis libero iusto.', 409.26, 10.00, NULL, 3, '2019-09-09 23:55:51', '2019-09-09 23:55:51');

-- Volcado de datos para la tabla `tour_images`
--

INSERT INTO `tour_images` (`id`, `image`, `featured`, `tour_id`, `created_at`, `updated_at`) VALUES
(1, 'https://lorempixel.com/250/250/?12133', 0, 4, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(2, 'https://lorempixel.com/250/250/?60348', 0, 6, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(3, 'https://lorempixel.com/250/250/?10230', 0, 7, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(4, 'https://lorempixel.com/250/250/?33152', 0, 5, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(5, 'https://lorempixel.com/250/250/?23439', 0, 9, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(6, 'https://lorempixel.com/250/250/?40937', 0, 9, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(7, 'https://lorempixel.com/250/250/?81830', 0, 9, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(8, 'https://lorempixel.com/250/250/?32071', 0, 6, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(9, 'https://lorempixel.com/250/250/?91081', 0, 6, '2019-09-09 23:55:51', '2019-09-09 23:55:51'),
(10, 'https://lorempixel.com/250/250/?18376', 0, 7, '2019-09-09 23:55:51', '2019-09-09 23:55:51');

-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `lastName`, `email_verified_at`, `numberId`, `telephone`, `gender`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'juan@gmail.com', '$2y$10$ZQebMLO1g/Y2lEXbTpw29uzwc8cl.Z0j.U/JB4uHsMM4gTtMAcZU6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-09 23:55:50', '2019-09-09 23:55:50'),
(2, 'josue', 'josue@gmail.com', '$2y$10$fOqf39TbFObYp5hHlxHCouJKbCLMUAKw0pIWYnG.GnjLBoZoMXqBu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-10 10:17:15', '2019-09-10 10:17:15'),
(3, 'jelsyn', 'jelsync@gmail.com', '$2y$10$lFaiPeTaBvoFDdWyaVD/L.ImdLFhT53hjMcZ.ptAHhGxdeWoT9TM2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-10 10:18:15', '2019-09-10 10:18:15');

-- Categorias
INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Local', 'Viajes locales a nivel Nacional', 'img/imgTour/1.webp', NULL, NULL),
(2, 'Extranjero', 'Viajes locales a nivel Internacional', 'img/imgTour/3.webp', NULL, NULL),
(3, 'Otros', 'Viajes + Combos', 'img/imgTour/2.webp', NULL, NULL);

--GUIAS
INSERT INTO `guides` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jelsyn Ceron', NULL, NULL, NULL),
(2, 'Jairo Ceron', NULL, NULL, NULL),
(3, 'Brayan Ceron', NULL, NULL, NULL);

--TOUR
INSERT INTO `tours` (`id`, `name`, `description`, `price`, `reservations`, `guide_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Cataratas Del Niagara', 'Las cataratas del Niágara son un grupo de cascadas situadas en el río Niágara, en la zona noreste de América del Norte, en Canadá. Situadas a unos 236 metros sobre el nivel del mar, su caída es de aproximadamente 64 metros', 20000.00, 310.00, 3, 2, '2019-09-22 23:54:18', '2019-09-23 00:21:23'),
(2, 'Machu Picchu', 'Machu Picchu es el nombre contemporáneo que se da a una llaqta —antiguo poblado incaico andino— construida antes del siglo XV, ubicada en la Cordillera Oriental del sur de Perú.', 15000.00, 80.00, 1, 1, '2019-09-23 00:21:03', '2019-09-23 00:21:03');

-- USUARIO
INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `lastName`, `email_verified_at`, `numberId`, `telephone`, `gender`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jelsyn', 'jelsync@gmail.com', '$2y$10$VAbCHGAOv1qrEN9E27o0rOWam1EnRSqkci.r8Pjx5uiyNkfcLMZL.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 23:44:10', '2019-09-22 23:44:10');
