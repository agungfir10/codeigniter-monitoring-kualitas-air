## Create Table Users

```sql
CREATE TABLE users (
  id INTEGER NOT NULL AUTO_INCREMENT,
  name VARCHAR(32) NOT NULL,
  email VARCHAR(64) NOT NULL,
  username VARCHAR(64) NOT NULL,
  password VARCHAR(255) NOT NULL,
  avatar VARCHAR(32) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  last_login TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
);
```

## Insert User Admin

```sql
INSERT INTO users (name, email, username, password, avatar, created_at, last_login) VALUES
('Administrator', 'admin@mail.com', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', NULL, '2021-08-15 06:22:33', '2021-08-19 15:55:42');
```

## Create Table Data

```sql
CREATE TABLE iot_sensorph (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  sensorph FLOAT NOT NULL,
  tanggal TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    PRIMARY KEY(ID)
);
```
