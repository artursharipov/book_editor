-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 02 2021 г., 14:50
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('ADMIN', '7', 1616652550),
('USER', '10', 1616653724),
('USER', '11', 1616653747),
('USER', '12', 1616653915),
('USER', '9', 1616653689);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/change-column', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/cars/cars/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/elfinder/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/elfinder/connect', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/elfinder/manager', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/default/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/default/action', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/default/diff', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/default/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/default/preview', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/gii/default/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/img/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/img/image/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/img/image/remove', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/img/image/sort', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/create-url', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/nodeMove', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/menu/menu/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/change-column', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/page/page/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/default/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/default/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/service/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/service/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/service/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/service/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/service/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/service/service/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/change-column', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/settings/settings/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/site/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/site/error', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/site/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/site/login', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/site/logout', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/assignment/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/assignment/assign', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/assignment/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/assignment/revoke', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/assignment/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/default/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/default/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/menu/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/menu/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/menu/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/menu/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/menu/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/menu/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/assign', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/get-users', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/remove', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/permission/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/assign', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/get-users', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/remove', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/role/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/route/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/route/assign', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/route/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/route/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/route/refresh', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/route/remove', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/rule/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/rule/create', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/rule/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/rule/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/rule/update', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/rule/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/*', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/activate', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/change-password', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/delete', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/index', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/login', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/logout', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/request-password-reset', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/reset-password', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/signup', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('/user/user/view', 2, NULL, NULL, NULL, 1616653153, 1616653153),
('ADMIN', 1, NULL, NULL, NULL, 1616652357, 1616652357),
('OPERATOR', 1, NULL, NULL, NULL, 1616653183, 1616653183),
('USER', 1, NULL, NULL, NULL, 1616653194, 1616653194);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('ADMIN', '/*'),
('OPERATOR', '/menu/*'),
('OPERATOR', '/page/*'),
('ADMIN', 'OPERATOR'),
('OPERATOR', 'USER');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text,
  `text` text,
  `anchor` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `block`
--

INSERT INTO `block` (`id`, `title`, `subtitle`, `description`, `text`, `anchor`, `sort`, `status`) VALUES
(1, 'Заголовок', '', '', '', 'main1', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `isMain` smallint(6) DEFAULT NULL,
  `sort` smallint(6) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `hash`, `src`, `isMain`, `sort`, `title`) VALUES
(4, '58392ac28962fc030b22177796007440', '/img/class-auto/604cfbe1cba695868fc1ed0bb44853a3458.png', 1, NULL, NULL),
(6, '6dcfa82a44940547c79f28d2efc40f73', '/img/class-auto/999cbe7527b399b0e5333166480e8ba3565.png', 1, NULL, NULL),
(17, '7a05ff42f1a4bb8765401c9855e5c943', '/img/service/baca5c1200589a7ba43614ef762549b9700.jpg', 1, NULL, NULL),
(21, 'b60236a65364d02f8ff1c9b30d08d856', '/img/service/e0d9b4cbaa4860943d7b917953b3e6ad206.jpg', 1, NULL, NULL),
(22, '0ab4c6d9da64a93016e6d7451f0ba71f', '/img/privilege/e3d1436eb15bde8aff232f9a982958ab620.png', 1, NULL, NULL),
(23, 'd462b1cea3fdd6cf48409a21a9bc1df1', '/img/privilege/7de1950cf59ac02f980cbab411527592110.png', 1, NULL, NULL),
(24, '63af89549405ee6c2572deaa33f08548', '/img/privilege/408e9aae90753445346a560efb469ee7368.png', 1, NULL, NULL),
(25, '5c9f2463315e86c1706c3213b724162c', '/img/privilege/2b99e98345255681dcbda95ad0896f5e78.png', 1, NULL, NULL),
(26, 'a258417ac2c989edb0132df4670240f2', '/img/privilege/95feed72285c05e40da218fa7b1ea826114.png', 1, NULL, NULL),
(27, '83ea621bf851839c943bc33dcfc0306e', '/img/privilege/16ba2eedc2f5a3ad8a296cb2482b0c95469.png', 1, NULL, NULL),
(28, '23a69fb51f5036c3908e3f5d0d63346e', '/img/benefit/0ecf9814fb3aaf6b3313fa3337452eae181.jpg', 1, NULL, NULL),
(29, 'a7e191d832a629ff500cc0150bb7981a', '/img/benefit/791b876bd22a61588fe9a305fc2fff2b30.jpg', 1, NULL, NULL),
(34, '611a5631bf2388b4775dddbddea50533', '/img/partners/5e3b0e38ce776c562dac968412cb91da126.png', 1, NULL, NULL),
(35, 'ab753d086486bfae956df8d46c9dc345', '/img/partners/2b71aaa6ba93ee580bad0a767dd4227a88.png', 1, NULL, NULL),
(36, 'ecfdec2181f7eeccc9ce2c5a30cc5fb1', '/img/partners/d577cd3f877566d2451872960a515756461.png', 1, NULL, NULL),
(37, 'f5569f68bf371848302a4e8020ae2757', '/img/partners/e81516e6f79470ab956e3d4ffd4414ea685.png', 1, NULL, NULL),
(38, '1939595aa55af7311c5cde69cc7e7f67', '/img/partners/bd249c1790fd2e3fb4460c13c1b6498e877.png', 1, NULL, NULL),
(39, '3b8d45d1df100a36a86229ff4f737f0b', '/img/partners/7fc8d4800c0efc392bcbf04f9e41a2d5599.png', 1, NULL, NULL),
(40, '5fc29f46e184fb4418365a40f27247f6', '/img/partners/f53138b1ef9c7c435ba27188bf0fc989855.png', 1, NULL, NULL),
(41, '7573110523085c7bb3e2d57f5a1cd2c0', '/img/partners/469b46dff4381470e7f2639117e9fdb5110.png', 1, NULL, NULL),
(42, 'cbc84c76958a01eecec8cc6f8903b56a', '/img/partners/4c0f76a7fc3c999cb115898963ba07e7285.png', 1, NULL, NULL),
(43, '744d34cd55e6be93f393cd14e87da300', '/img/partners/9745e23e56fb2e9594f566eafc8e4d8d931.png', 1, NULL, NULL),
(44, '30a48e9673a18a9016cc731794adf70c', '/img/privilege/8621df152ddd09b49d08fec744399a1184.png', 1, NULL, NULL),
(45, '6812d577f7dab49553d909a08d05de86', '/img/privilege/5b76ab351f5f9972aef7a797e74cbb92542.png', 1, NULL, NULL),
(50, '577c5ad4204a5f35d4b9c45ab285069d', '/img/service/3bc41a179435c1f1e0cdb3aa2e67ed9d638.jpg', 1, NULL, NULL),
(52, 'dad595e726023528477e4f9510b0d980', '/img/service/ea498f1c777924037938cd1639465944726.jpg', 1, NULL, NULL),
(53, '511b6ef75893afa5f79dbbe04200ff72', '/img/service/046460cf841325148139a4e16063afa3994.jpg', 1, NULL, NULL),
(54, '6958f4e93f0657d9b74640ec7d6ea1be', '/img/service/248f062b3572bced929c875248e8498f148.jpg', 1, NULL, NULL),
(56, 'a58e2addff22ce68c7a2c4daed523b2c', '/img/stocks/a9292ad99a4d80e918ea6fe03861f5b3554.jpg', 1, NULL, NULL),
(65, 'c1f45425654f86f9fd5b47c2e416ef6f', '/img/twenty/9c5159d194539e8979238bff7e238d1e689.jpg', NULL, 1, NULL),
(66, 'c1f45425654f86f9fd5b47c2e416ef6f', '/img/twenty/98ee3672bac1d0fdbc034030687a7758878.jpg', NULL, 0, NULL),
(67, '5c0bfbe5fbebae665766dc554b858051', '/img/benefit/eb13f416c4fb2ae79ec985935be898d5904.jpg', 1, NULL, NULL),
(68, 'e47e415266ca8df4f5e42bc2afd0c4dd', '/img/benefit/c853e5f4669d775230b59f93161f7168756.jpg', 1, NULL, NULL),
(69, '21553c839de4ddbfa32602ef0282ab87', '/img/benefit/cbe7f268a4e3a34c4e7564c66709dd1e700.jpg', 1, NULL, NULL),
(71, 'f690a48cb5a6653005e387a28ee2faae', '/img/service/97baf6f978f4245b8b3688e3f44bb59b941.jpg', 1, NULL, NULL),
(74, '79bb6516ccd466bcb106aa89b13ad905', '/img/service/1f3a666d96bec3b4c87001cb8569eedb314.jpg', 1, NULL, NULL),
(78, '2bd549d19ec00888cca0dcd9b1950ba3', '/img/stocks/1e468f18389779060d9475b1d0192718997.jpg', 1, NULL, NULL),
(79, 'c62cec0b5add12f9104244e8f94b6b5c', '/img/stocks/5bd3238d70d31aa0df8443777e015c80249.jpg', 1, NULL, NULL),
(80, 'afa75d9d42475e707e2d26b0202edc8a', '/img/stocks/a30342cce9d79a986b464ed9bf0e92d2664.jpg', 1, NULL, NULL),
(81, '426a0bd2a25b21afe094295c0a8ca294', '/img/stocks/909227d2bef35b8220a405273838b62e882.jpg', 1, NULL, NULL),
(82, '5c4a7338dc2244ebad9e0eb6907f55a2', '/img/stocks/faecd612782353b2c0ea04de3b24a7c0835.jpg', 1, NULL, NULL),
(83, '38b52d0facd7386a16afc91786b9ffdf', '/img/stocks/5dfd1ddbd418ea58e071843af5e19db64.jpg', 1, NULL, NULL),
(84, '6d953470c1ba59f16ace46ca67c24a1e', '/img/stocks/6db65d3351d26b23795915ab871b4488740.jpg', 1, NULL, NULL),
(85, '201e18ea8858d6c93d64cbeb0d56d0a7', '/img/class-auto/cf7ad0dc36b73c8afb7bb847324d2bfa819.png', 1, NULL, NULL),
(86, '0c85fbcbdbfab9ffe39958eededbb798', '/img/stocks/ca420136cb025ce44dabcff3393954af526.jpg', 1, NULL, NULL),
(87, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/2c652bf92ae42e8eb759d61f50fdfe9f201.jpg', NULL, 1, NULL),
(88, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/d8ea368ed7fdf1a78663ac1adc54435c548.jpg', NULL, 2, NULL),
(89, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/f98b6288fec1e7c048a84598d780d74f329.jpg', NULL, 3, NULL),
(90, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/6f42b131ef7856e748c3957b4bc300da965.jpg', NULL, 4, NULL),
(91, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/5da12f2400c8bcedb5da568ded2a3b5f812.jpg', NULL, 5, NULL),
(93, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/32602685c905d53dbd1e264b2a6da09b888.jpg', NULL, 0, NULL),
(94, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/743fdfb0f1c3c1d4cc708bf599a17c80653.jpg', NULL, 7, NULL),
(95, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/39a8bb139f3797ecbae524c6f8059893403.jpg', NULL, 8, NULL),
(96, '39e3e1a694f7c4ebf5b5fec9204fa475', '/img/cars/3bef0bb1512bbfcccb6516a41a5784ec309.jpg', NULL, 9, NULL),
(97, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/1ef8cd341a9347ee45827b288a478f03191.jpg', NULL, NULL, NULL),
(98, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/531914394d3f22a02ab30022f36cc5df833.jpg', NULL, NULL, NULL),
(99, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/26fcd58bf7181d25f70686451f9673fa873.jpg', NULL, NULL, NULL),
(100, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/2fe8246b2f914c0d7308c9f59eebfa3d786.jpg', NULL, NULL, NULL),
(101, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/7f675e1acad438b07ce93bf5542ea45d910.jpg', NULL, NULL, NULL),
(102, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/fc7f72110a2c6306652be74945590552112.jpg', NULL, NULL, NULL),
(103, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/3b46eb3f1c6a03b4d292fb4a44bee11075.jpg', NULL, NULL, NULL),
(104, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/a3338da7484b5439c060293a048d28e5299.jpg', NULL, NULL, NULL),
(105, '477e017facc1a889c3e64448cfcae3d3', '/img/cars/d6f4f06296bb4bf6a014a006a94ca046266.jpg', NULL, NULL, NULL),
(106, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/f24e01e48355e65aec56ce8e552d363a510.jpg', NULL, NULL, NULL),
(107, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/2895aa6683c7bb75f05a3269a3ca37bf989.jpg', NULL, NULL, NULL),
(108, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/aba0d0424b5100bd680bb9fe9e9ffb2372.jpg', NULL, NULL, NULL),
(109, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/f1c43ab15337606055ffd2c5310f2035480.jpg', NULL, NULL, NULL),
(110, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/cb361c5bfb13464a987e7a5b27f8db7f939.jpg', NULL, NULL, NULL),
(111, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/d96ecfda14bdca26d21ea6fc3dc7e02a937.jpg', NULL, NULL, NULL),
(112, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/db6888ba46e2b8a4d02b28261480cc0f627.jpg', NULL, NULL, NULL),
(113, 'b99a3deb7bf2e1c909ece7c8f4d0b306', '/img/cars/fa4a9821f1a2538d7e730eeae635a4f7634.jpg', NULL, NULL, NULL),
(114, 'b20e20117d6b5d50ed1e5090254f61d5', '/img/cars/c0911d2af36015bdb7948f679922326066.jpg', NULL, NULL, NULL),
(115, 'b20e20117d6b5d50ed1e5090254f61d5', '/img/cars/8e69c0a907bae4795f7a07441c55925f77.jpg', NULL, NULL, NULL),
(116, 'b20e20117d6b5d50ed1e5090254f61d5', '/img/cars/d674f1a768e97a567437f2cc8a23ffda927.jpg', NULL, NULL, NULL),
(117, 'b20e20117d6b5d50ed1e5090254f61d5', '/img/cars/129fb746912263139fc3d3b81e0e8347838.jpg', NULL, NULL, NULL),
(118, 'b20e20117d6b5d50ed1e5090254f61d5', '/img/cars/049e10967b5417b879932d1ec35b1e74547.jpg', NULL, NULL, NULL),
(119, 'b20e20117d6b5d50ed1e5090254f61d5', '/img/cars/1a0b4fa106681b0fe84cb53023fd59c4715.jpg', NULL, NULL, NULL),
(130, 'fde59d4213a8317254ebd3f25cef278f', '/img/service/658ffd4a8b0773705a227986c139463f301.jpg', 1, NULL, NULL),
(131, '9ab2045f2cba39a3eb0b14929c01a358', '/img/block/65d4e1f9b064cb3dced8c32ee9b51af7700.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `lft`, `rgt`, `depth`, `name`, `url`) VALUES
(1, 1, 6, 0, 'root', '/'),
(2, 2, 3, 1, 'Главная', '/'),
(3, 4, 5, 1, 'Контакты', '/');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1612337655),
('m130524_201442_init', 1612337658),
('m140506_102106_rbac_init', 1616650636),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1616650636),
('m180523_151638_rbac_updates_indexes_without_prefix', 1616650636),
('m181227_062700_create_menu_table', 1612346911),
('m190124_110200_add_verification_token_column_to_user_table', 1612337658),
('m190724_114635_create_table_settings', 1613016070),
('m190812_074727_create_table_page', 1612411639),
('m200409_110543_rbac_update_mssql_trigger', 1616650636),
('m200715_090638_img', 1612413637);

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `text` text,
  `status` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `title`, `alias`, `description`, `text`, `status`) VALUES
(1, 'Главная', 'main', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `status`) VALUES
(1, 'email', 'test@mail.ru', 1),
(2, 'phone', '+7 (383) 32 800 31', 1),
(5, 'adres', 'ул. Большевистская, 276/1', 1),
(6, 'full_adres', 'г. Новосибирск, ул. Большевистская, 276/1', 1),
(14, 'eamil_service', 'artursh0099@mail.ru', 1),
(15, 'meta_keywords', '', 1),
(16, 'meta_description', '', 1),
(17, 'coord_x', '55.55', 1),
(18, 'coord_y', '61.61', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(7, 'admin', 'ZKqXe-fXhDSvHASQTC2vc405eq9CcdpV', '$2y$13$lRS6.DLX0/rm2ze8LKrKdu06BwT3gn1ZpJPFJqJA/Md9IHWa0wGA6', NULL, 'admin@mail.loc', 1, 1612345812, 1612345812, 'QXWBaDQB0QExCTrCTptHjuLoGXd6IJLY_1612345812');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
