INSERT INTO `category` (`id_category`, `name`, `eng_name`) VALUES     (1, 'Доски и лыжи', 'boards'), /*Запрос на добавление категорий*/
                                                                      (2, 'Крепления', 'attachment'),
                                                                      (3, 'Ботинки', 'boots'),
                                                                      (4, 'Одежда', 'clothing'),
                                                                      (5, 'Инструменты', 'tools'),
                                                                      (6, 'Разное', 'other');

INSERT INTO `users` (`id_user`, `registration_date`, `email`, `name`, `pass`, `avatar`, `contacts`) VALUES (NULL, '2022-05-16 09:17:14.000000', 'koksmc2000@yandex.ru', 'Дмитрий', 'Lilsnow1488', 'avatar.jpg', '89067861440'),
/*Запрос на добавление пользователей*/                                                                     (NULL, '2022-05-16 09:17:14.000000', 'koksmc2001@yandex.ru', 'Владислав', 'Alonadark228', 'avatar.jpg', '89175861746');

INSERT INTO `lot` (`id_lot`, `id_winner`, `id_user`, `id_category`, `creation_date`, `lot_name`, `description`, `image`, `initial_price`, `completion_date`, `bid_step`) VALUES (NULL, '1', '1', '1', '2022-05-16 09:30:20', '2014 Rossignol District Snowboard', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-1.jpg', '10999', '2022-05-16 09:30:20', '1'),
/*Запрос на добавление лотов*/                                                                                                                                              (NULL, '2', '2', '1', '2022-05-16 09:31:54.000000', 'DC Ply Mens 2016/2017 Snowboard', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-2.jpg', '159999', '2022-05-16 09:31:54.000000', '1'),
                                                                                                                                                                            (NULL, '1', '1', '2', '2022-05-16 09:31:54.000000', 'Крепления Union Contact Pro 2015 года размер L/XL', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-3.jpg', '8000', '2022-05-16 09:31:54.000000', '1'),
                                                                                                                                                                            (NULL, '2', '2', '3', '2022-05-16 09:31:54.000000', 'Ботинки для сноуборда DC Mutiny Charocal', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-4.jpg', '10999', '2022-05-16 09:31:54.000000', '1'),
                                                                                                                                                                            (NULL, '1', '1', '4', '2022-05-16 09:31:54.000000', 'Куртка для сноуборда DC Mutiny Charocal', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-5.jpg', '7500', '2022-05-16 09:31:54.000000', '1'),
                                                                                                                                                                            (NULL, '2', '2', '6', '2022-05-16 09:31:54.000000', 'Маска Oakley Canopy', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-6.jpg', '5400', '2022-05-16 09:31:54.000000', '1');
INSERT INTO `bet` (`id_bet`, `id_lot`, `id_user`, `date`, `sum`) VALUES      (1, NULL, 1, '2022-05-16 09:42:15', 11999),
/*Запрос на добавление ставок*/                                              (2, NULL, 2, '2022-05-16 09:42:15', 160000),
                                                                             (3, NULL, 1, '2022-05-16 09:42:15', 8000),
                                                                             (4, NULL, 2, '2022-05-16 09:42:15', 11999),
                                                                             (5, NULL, 1, '2022-05-16 09:42:15', 7600),
                                                                             (6, NULL, 2, '2022-05-16 09:42:15', 5500);

SELECT * FROM `category`;  /* получить все данные о категориях */

SELECT a.Name,
       initial_price,
       image,
       (sum(b.sum)+a.initial_price)Последняя_ставка,
       count(b.sum)Количество_ставок,
       c.name,
       id_winner
from lot as a
       left join bet b
                 on a.id_lot = b.id_lot
       inner join category c on a.id_category = c.id_category
group by a.name, initial_price, image,creation_date,completion_date, c.name, id_winner
having ISNULL(completion_date)
order by creation_date desc; /*получить самые новые, открытые лоты. Каждый лот должен включать
название, стартовую цену, ссылку на изображение, цену последней ставки,
количество ставок, название категории;*/

SELECT `id_lot`,`category`.`name` FROM lot INNER JOIN category ON `lot`.`id_category` = `category`.`id_category`; /* получить id лота и название категории по id */
UPDATE `lot` SET `name`= 'Какой-то текст!' WHERE `id_lot` = 1;   UPDATE `lot` SET `name`= '2014 Rossignol District Snowboard' WHERE `id_lot` = 1;   /* обновить название лота по его идентификатору*/
SELECT `id_bet`,`bet`.`id_user`,`date`,`sum` FROM `bet` INNER JOIN `users` ON `bet`.`id_user` = `users`.`id_user` WHERE DATE(`date`) = '2022-05-16';  /* получить список самых свежих ставок для лота по его идентификатору;  */
