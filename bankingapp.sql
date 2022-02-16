SET
    SQL_MODE ="NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone ="+00:00";

create table TRANSACTION_TYPE
(
    id int(11) not null,
    sender varchar(25) not null,
    receiver varchar(25) not null,
    bal float not null,
    date_time datetime not null default current_timestamp,
    primary key (id)
)
 ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
insert into
    TRANSACTION_TYPE
    (id, sender, receiver, bal, date_time)
values
    (
        1,
        'Adwaita',
        'Modak',
        1000,
        '2021-04-17 18:58:27'
    ),
    (
        2,
        'Rakesh',
        'Prasanna',
        800,
        '2021-04-17 18:58:27'
    ),
    (
        3,
        'Arjun',
        'Mohan',
        1500,
        '2021-04-17 18:58:27'
    ),
    (
        4,
        'Ravi',
        'Suman',
        350,
        '2021-04-17 18:58:27'
    ),
    (
        5,
        'Sneha',
        'Roy',
        650,
        '2021-04-17 18:58:27'
    ),
    (
        6,
        'Divij',
        'Bahl',
        500,
        '2021-04-17 18:58:27'
    ),
    (
        7,
        'Krina',
        'Deb',
        230,
        '2021-04-17 18:58:27'
    ),
    (
        8,
        'Ankit',
        'Sen',
        900,
        '2021-04-17 18:58:27'
    ),
    (
        9,
        'Riya',
        'Nath',
        100,
        '2021-04-17 18:58:27'
    ),
    (
        10,
        'Soham',
        'Sen',
        1400,
        '2021-04-17 18:58:27'
    );

create table user_info
(
    id int(11) not null,
    name varchar(25) not null,
    email varchar(25) not null,
    balance float not null,
    primary key (id)
)

ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
insert into
    user_info
    (id, name, email, balance)
values
    (
        1,
        'Adwaita',
        'ad@gmail.com',
        10000
    ),
    (
        2,
        'Rakesh',
        'rk@hotmail.com',
        46000
    )