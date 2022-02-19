SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

create table TRANSACTION_TYPE_1 (
    id int(11) not null,
    sender varchar(25) not null,
    receiver varchar(25) not null,
    bal float not null,
    date_time datetime not null default current_timestamp,
    primary key (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

insert into
    TRANSACTION_TYPE_1 (id, sender, receiver, bal, date_time)
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

create table user_info_1 (
    id int(11) not null,
    name varchar(25) not null,
    email varchar(25) not null,
    balance float not null,
    primary key (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

insert into
    user_info_1 (id, name, email, balance)
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
    ),
    (
        3,
        'Arjun',
        'aj@gamil.com',
        58000
    ),
    (
        4,
        'Ravi',
        'rr@yahoo.co.in',
        35000
    ),
    (
        5,
        'Sneha',
        'sn@hotmail.com',
        87000
    ),
    (
        6,
        'Divij',
        'dj@gmail.com',
        23000
    ),
    (
        7,
        'Krina',
        'kr@gmail.com',
        45000
    ),
    (
        8,
        'Ankit',
        'ank@yahoo.co.in',
        69000
    ),
    (
        9,
        'Riya',
        'ri@gmail.com',
        25000
    ),
    (
        10,
        'Soham',
        'sh@gmail.com',
        88000
    );

commit;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;