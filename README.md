# RabIT project

It is a simple website to show list of users and advertisements stored in the database.

## Installing

1. Open a terminal

2. Clone this repository

```
git clone https://github.com/nfcrazyhun/rabitproject.git
```

3. Create a new Database

- name: rabitproject_db
- collation: utf8mb4_unicode_ci

3.1 (optional) You can update the database name as well as the database user's name and password. You can find it under the config.


Config location:
```
project_root_folder/core/Connection.php --> $config (array)
```

4. Insert database tabels with demo data by run the following mysql commands:

```mysql
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `ads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_user_id_foreign` (`user_id`),
  CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Jockey Ewing'),
(2, 'Bobby Ewing'),
(3, 'Lucy Ewing'),
(4, 'Ellie Ewing');

INSERT INTO `ads` (`id`, `user_id`, `title`) VALUES
(1, 1, 'ad1'),
(2, 1, 'ad2'),
(3, 1, 'ad3'),
(4, 2, 'ad4'),
(5, 2, 'ad5'),
(6, 3, 'ad6');

```

## Note
The project was made with the following software versions:
- PHP 7.4.15
- MySQL 8.0.21
