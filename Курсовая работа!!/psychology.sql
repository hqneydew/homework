

-- Добавим новый столбец `user_id` в таблицу `users`
ALTER TABLE `users`
  ADD COLUMN `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;

-- Добавим новый столбец `role_id` в таблицу `users` в качестве внешнего ключа
ALTER TABLE `users`
  ADD COLUMN `role_id` int NOT NULL,
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

-- Удалим индекс на столбце `role_id`, так как теперь у нас есть PRIMARY KEY `user_id`
ALTER TABLE `users`
  DROP INDEX `role_id`;
