INSERT INTO user (email, name, username, password)
 VALUES ('test@gmail.com', 'ibnu', 'bennu', '123');

-- untuk menyimpan informasi user
 create table user(
    id int primary key auto_increment,
    email varchar(255),
    name varchar(255),
    username varchar(255),
    password varchar(255)
)

-- untuk galeri
create table produk(
    id int primary key auto_increment,
    name varchar(255),
    deskripsi varchar(255),
    price double,
    image varchar(255)
    terjual int,
)

INSERT INTO produk (name, deskripsi, price, image)
VALUES 
('erigo', 'Erigo edisi terbatas', 205000, 'test.png'),
('EIGER', 'EIGER edisi terbatas', 405000, 'gambar.jpg'),
('NIMCO', 'NIMCO edisi terbatas', 505000, 'gambar.jpg')
;