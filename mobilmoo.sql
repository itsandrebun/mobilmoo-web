-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 16.24
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilmoo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_location` varchar(50) DEFAULT NULL,
  `car_price` int(11) DEFAULT NULL,
  `car_name` varchar(100) DEFAULT NULL,
  `car_releasedyear` varchar(10) DEFAULT NULL,
  `car_createddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `car_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`car_id`, `car_location`, `car_price`, `car_name`, `car_releasedyear`, `car_createddate`, `car_type`) VALUES
(1, 'DKI Jakarta', 550000000, 'Mercedes Benz C250 Exclusive Turbo', '2015', '2020-12-13 04:41:49', 1),
(2, 'DKI Jakarta', 890000000, 'Mini Cooper S 2.0 Turbo F57 Convertible/Cabriolet', '2019', '2020-12-13 04:41:49', 0),
(3, 'DKI Jakarta', 262000000, 'Honda Jazz RS CVT', '2019', '2020-12-13 14:15:15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_code` text DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `car_type` int(11) DEFAULT NULL,
  `car_price` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `car_location` text DEFAULT NULL,
  `car_releasedyear` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_fullname` varchar(50) DEFAULT NULL,
  `user_phonenumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `created_date`, `user_fullname`, `user_phonenumber`) VALUES
(1, 'diko123@gmail.com', '$2y$10$dgqVDgTpU8yDAZCHDNgE2OQvcVcRJfQpq5/eCLt4zoJN0e2zOMofi', '2020-12-13 04:37:16', 'Diko Kintarenji', '081234567890'),
(2, 'mangoleh@gmail.com', '$2y$10$ciZsLdzNGLgbupKJwrUH1O3OvbksygwgE95ZGWe0rXF.uiYAbX.6.', '2020-12-16 14:41:02', 'Mang Oleh', '0812345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
