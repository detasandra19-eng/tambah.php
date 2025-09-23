-- Membuat database
CREATE DATABASE crud_php;
USE crud_php;

-- Membuat tabel buku
CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
       judul VARCHAR(255)NOT NULL,
       nama_pengarang VARCHAR(255) NOT NULL,
       penerbit VARCHAR(255) NOT NULL,
       tahun_terbit YEAR NOT NULL
    );

    -- Insert minimal 5 data buku
    
INSERT INTO buku (judul, nama_pengarang, penerbit, tahun_terbit) VALUES
       ('Belajar PHP', 'Andi Setiawan', 'Gramedia', 2020),
       ('Laravel untuk pemula', 'Budi Santoso', 'Informatika', 2021),
       ('Dasar-dasar Mysql', 'Citra Dewi', 'Erlangga', 2019),
       ('Web Programming', 'Deni Pratama', 'MediaKita', 2022),
       ('Algoritma Pemrograman', 'Eka Lestari', 'Deepublish', 2018);

