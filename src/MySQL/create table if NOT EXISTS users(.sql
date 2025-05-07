create table if NOT EXISTS users(
    id int AUTO_INCRIMENT PRIMARY KEY,
    username varchar(30) NOT NULL,
    email varchar(30) NOT NULL
);
