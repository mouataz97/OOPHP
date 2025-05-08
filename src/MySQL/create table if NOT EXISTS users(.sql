create table if NOT EXISTS users(
    id int AUTO_INCRIMENT PRIMARY KEY,
    username varchar(30) NOT NULL,
    email varchar(30) NOT NULL
);

INSERT INTO users (username, email) values ('mouataz', 'mouataz@gmail.com'), ('amine', 'amine@gmail.com'), ('hamza', 'hamza@gmail.com');