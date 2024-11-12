/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `kategori`, `img`, `produk`, `description`, `jumlah`, `harga`, `link`, `created_at`, `updated_at`) VALUES
(1, 'pakaian pria', 'https://down-id.img.susercontent.com/file/id-11134207-7rasi-m1rsjne44omp1c@resize_w900_nl.webp', 'Kemaja Pria Hitam Premium', 'Temukan kesan elegan dan timeless dengan kemeja lengan panjang pria warna hitam ini. Terbuat dari bahan berkualitas tinggi, kemeja ini tidak hanya nyaman dipakai, tetapi juga memberikan tampilan yang rapi dan profesional. Desain klasiknya membuatnya sempurna untuk berbagai acara, mulai dari pertemuan bisnis hingga acara santai bersama teman. Dengan detail jahitan yang rapi dan potongan yang pas, kemeja ini adalah pilihan ideal bagi pria yang ingin tampil stylish tanpa mengorbankan kenyamanan.', 40, 'Rp. 91.000', 'https://shopee.co.id/Kemaja-Pria-Hitam-Premium-i.1227591982.28115434030?sp_atk=fc310359-3763-4989-b2d5-8c03840209a5', NULL, NULL);
INSERT INTO `products` (`id`, `kategori`, `img`, `produk`, `description`, `jumlah`, `harga`, `link`, `created_at`, `updated_at`) VALUES
(2, 'pakaian pria', 'https://down-id.img.susercontent.com/file/id-11134207-7r98p-lylta3zwnjt44d@resize_w900_nl.webp', 'Kemeja Pria Inficlo INF 108', 'Produk asli 100% buatan Indonesia, berasal dari Bandung yang sudah dikenal sebagai pusat mode. Terbuat dari bahan yang berkualitas dan diolah pengrajin terbaik. Dirancang dengan desain yang update menjadikan penampilan lebih trendy. ', 25, 'Rp. 60.000 - Rp. 65.000', 'https://shopee.co.id/KEMEJA-PRIA-INFICLO-INF-108-i.1227591982.26807122116?sp_atk=922c6f7d-5888-4381-9e66-afef11b770ee', NULL, NULL);
INSERT INTO `products` (`id`, `kategori`, `img`, `produk`, `description`, `jumlah`, `harga`, `link`, `created_at`, `updated_at`) VALUES
(3, 'pakaian pria', 'https://down-id.img.susercontent.com/file/id-11134207-7rasl-m1h1uz0697f3e0@resize_w900_nl.webp', 'Kemeja Printing Pria Mallevic MLV 639', 'Kemeja Printing MLV 639\r\nPilih koleksi pakaian kamu dari brand ideathings karena dibuat dari bahan yang berkualitas dan design yang kekinian, sangat cocok menemani aktivitas keseharian kamu. Berbahan katun rayon, akan sangat nyaman dan tidak panas saat digunakan. Dengan detail kemeja yang unik, membuat kalian terlihat fresh dan fashionable.\r\nSize Chart :\r\nM : Panjang 71cm x Lebar 50cm x Lingkar Dada 100cm x Panjang Lengan 21cm\r\nL : Panjang 72cm x Lebar 52cm x Lingkar Dada 104cm x Panjang Lengan 22cm\r\nXL : Panjang 73cm x Lebar 54cm x Lingkar Dada 108cm x Panjang Lengan 23cm', 25, 'Rp. 92.812', 'https://shopee.co.id/Kemeja-Printing-Pria-Mallevic-MLV-639-i.1227591982.27564336550?sp_atk=213ae3c7-69d1-4219-b399-a8776ee8ab02', NULL, NULL);
INSERT INTO `products` (`id`, `kategori`, `img`, `produk`, `description`, `jumlah`, `harga`, `link`, `created_at`, `updated_at`) VALUES
(4, 'pakaian wanita', 'https://down-id.img.susercontent.com/file/id-11134207-7rasb-m1o5aoddg62h3d@resize_w900_nl.webp', 'Celana Blue Jeans Wanita Casual dan Elegan', 'Celana jeans wanita ini merupakan pilihan sempurna untuk meningkatkan gayamu harian dengan sentuhan elegan dan kasual. Terbuat dari bahan denim berkualitas tinggi, celana ini menawarkan ketegaran dan fleksibilitas yang memungkinkan Anda bergerak dengan leluasa. Desain klasik dengan potongan yang modern membuatnya cocok dipadukan dengan berbagai atasan, dari blus polos sampai sweater hangat. Dengan warna yang menarik, biru gelap.\r\nSiap untuk menambah koleksi pakaian Anda? Celana jeans ini tidak hanya nyaman tetapi juga tahan lama. Bahan yang digunakan dirancang untuk resistensi air dan gesekan minimal, sehingga Anda dapat menggunakannya dalam berbagai situasi, dari acara formal hingga santai di rumah. Beli sekarang dan nikmati kenyamanan serta gaya yang maksimal dengan celana jeans wanita!', 27, 'Rp. 216.000', 'https://shopee.co.id/Celana-Blue-Jeans-Wanita-Casual-dan-Elegan-i.1227591982.29614906577?sp_atk=0444d2d5-67f7-48dc-857b-ca9de4a1abf3', NULL, NULL),
(5, 'pakaian wanita', 'https://down-id.img.susercontent.com/file/id-11134207-7r990-lyvunyrk365762@resize_w900_nl.webp', 'knficlo Wanita Pakaian Atasan INF 637', 'Produk asli 100% buatan Indonesia, berasal dari Bandung yang sudah dikenal sebagai pusat mode. Terbuat dari bahan yang berkualitas dan diolah pengrajin terbaik. Dirancang dengan desain yang update menjadikan penampilan lebih trendy. \r\nNote : Foto model sesuai dengan aslinya tanpa rekayasa.', 5, 'Rp. 105.800', 'https://shopee.co.id/knficlo-Wanita-Pakaian-Atasan-INF-637-i.1227591982.24584709800?sp_atk=a9408d0c-430b-4119-bde3-151e11a0639f', NULL, NULL),
(6, 'pakaian wanita', 'https://down-id.img.susercontent.com/file/id-11134207-7r98y-lx0xybzynwa20d@resize_w900_nl.webp', 'Jacket Wanita KSD KZR 515', 'Produk asli 100% buatan Indonesia, berasal dari Bandung yang sudah dikenal sebagai pusat mode. Terbuat dari bahan yang berkualitas dan diolah pengrajin terbaik. Dirancang dengan desain yang update menjadikan penampilan lebih trendy.', 25, 'Rp. 170.000', 'https://shopee.co.id/Jacket-Wanita-KSD-KZR-515-i.1227591982.27153874408?sp_atk=316c7e59-00ef-47b0-9ab1-c7e098a70c1a', NULL, NULL),
(7, 'tas pria', 'https://down-id.img.susercontent.com/file/id-11134207-7r98s-lz8qvt3ymodkd3@resize_w900_nl.webp', 'Dompet Pria Berkualitas Asli Bahan Kulit Eksklusif DC 566', 'Kali ini kita memperkenalkan produk baru nih yang lagi hits dan kekinian dari iDeaThinga. Dompet pria DC 566. Dompet ini dibuat menggunakan bahan Sintetis. Bahan Sintetis ini tentunya memiliki tekstur dan warna yang konsisten dan tidak gampang pudar.. \r\n\r\nDompet ini sangat cocok digunakan untuk menemani aktivitas formal maupun non-formal kalian. Dalam proses produksi kami sangat memperhatikan kualitas dan bahan, sehingga untuk bahan Dompet pria iDeaThings sangat berkualitas, sangat kuat dan tidak mudah rusak. \r\n', 5, 'Rp. 35.000', 'https://shopee.co.id/Dompet-Pria-Berkualitas-Asli-Bahan-Kulit-Eksklusif-DC-566-i.1227591982.28708735873?sp_atk=b78a3461-a9df-4dac-87f7-395c4eeddd4a', NULL, NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;