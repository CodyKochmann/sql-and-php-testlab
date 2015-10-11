CREATE TABLE posts (
  "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  "title" VARCHAR,
	"body" TEXT,
  "created_at" DATETIME,
	"modified_at" DATETIME
);
create table comments (
  id int primary key auto_increment,
  body varchar(256),
user
post
);