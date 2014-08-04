-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 6.1.164.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 04.08.2014 12:31:15
-- Версия сервера: 5.0.67-community-nt
-- Версия клиента: 4.1

-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE admin_makels;

--
-- Описание для таблицы mk_translate
--
DROP TABLE IF EXISTS mk_translate;
CREATE TABLE mk_translate (
  id INT(11) NOT NULL AUTO_INCREMENT,
  `key` VARCHAR(255) NOT NULL,
  value_ru VARCHAR(255) NOT NULL,
  value_us VARCHAR(255) NOT NULL,
  value_ua VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id, `key`)
)
ENGINE = INNODB
AUTO_INCREMENT = 14
AVG_ROW_LENGTH = 1260
CHARACTER SET utf8
COLLATE utf8_general_ci
COMMENT = 'Надписи, комментарии, тексты и т.д.. что требует перевода';

-- 
-- Вывод данных для таблицы mk_translate
--
INSERT INTO mk_translate VALUES
(1, 'lang', 'Язык', 'Language', 'Мова'),
(2, 'mod_lang_us', 'Английский', 'English', 'Англійська'),
(3, 'mod_lang_ua', 'Украинский', 'Ukrainian', 'Українська'),
(4, 'mod_lang_ru', 'Русский', 'Russian', 'Російська'),
(5, 'mod_zmk_mnu_photo', 'Фото', 'Photo', 'Фото'),
(6, 'mod_zmk_mnu_face', 'Лицо', 'Face', 'Обличчя'),
(7, 'mod_zmk_mnu_eyes', 'Глаза', 'Eyes', 'Очі'),
(8, 'mod_zmk_mnu_lips', 'Губы', 'Lips', 'Губи'),
(9, 'mod_zmk_mnu_skin', 'Кожа', 'Skin-care', 'Шкіра'),
(10, 'mod_zmk_mnu_hair', 'Волосы', 'Hair', 'Волосся'),
(11, 'mod_zmk_mnu_nails', 'Ногти', 'Nails', 'Нігті'),
(12, 'main_title', 'MakeLS.com - Создай свой стиль !!! от fire-coding.com 2014', 'MakeLS.com - Make your lovely style !!! Powered by fire-coding.com 2014', 'MakeLS.com - Створи власний стиль !!! від fire-coding.com 2014'),
(13, 'mod_zmk_mnu_main', 'Модно в этом сезоне !', 'Fashionable this season !', 'Модно в цьому сезоні !');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;