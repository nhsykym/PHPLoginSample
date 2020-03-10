create database dotinstall_shs_php;

grant all on dotinstall_shs_php.* to dbuser@localhost identified by 'yokohisa';

use dotinstall_shs_php;

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;