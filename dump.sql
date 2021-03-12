create table contacts
(
    id               int auto_increment,
    customer_id      int          null,
    contacts_type_id int          not null,
    contact          varchar(128) null,
    constraint contacts_id_uindex
        unique (id)
);

alter table contacts
    add primary key (id);

create table contacts_types
(
    id   int auto_increment
        primary key,
    type varchar(64) not null
);

create table customers
(
    id   int auto_increment
        primary key,
    name varchar(64) not null
);

create table recommendations
(
    id          int auto_increment
        primary key,
    customer_id int          null,
    title       varchar(128) null,
    text        text         null,
    img_src     varchar(255) null
);

