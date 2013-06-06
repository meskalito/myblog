    create database blog;
    use blog;
    create table user (
        username varchar(16) not null primary key,
        passwd char(40) not null,
        email varchar(100) not null
    );
    create table blog (
        username varchar(16) not null primary key,
        Date date not null,
        itle varchar(150) not null,
        content text
    );
    grant select, insert, update, delete
        on blog.*
        to blog_user@localhost identified by 'password';
