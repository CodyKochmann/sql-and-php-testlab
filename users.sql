create table users (
  id int primary key auto_increment,
  usrname varchar(250),
  email varchar(500),
  password varchar(64) /* size of sha256 hash */
);
