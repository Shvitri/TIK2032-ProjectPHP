CREATE TABLE blog (
    judulArtikel TEXT NOT NULL,
    deskripsiArtikel TEXT NOT NULL,
    sumberArtikel TEXT
)   ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO blog (judulArtikel, deskripsiArtikel, sumberArtikel) VALUES 
('My Name : Serial Thriller Korea dengan Aksi Memukau',
'My Name adalah serial thriller Korea terbaru yang mengisahkan seorang wanita muda bernama Ji-woo yang bergabung dengan geng kriminal untuk membalas dendam atas kematian ayahnya. Dengan aksi laga yang memukau dan alur cerita yang menegangkan, serial ini berhasil memikat penonton. Pemeran utama Han So-hee dinilai mampu menghidupkan karakternya dengan sangat baik. My Name mendapat respons positif dari para kritikus dan penggemar K-drama',
'https://variety.com/2024/tv/reviews/my-name-netflix-korean-drama-1235292837/'),

('Vincenzo : Kombinasi Unik Komedi dan Aksi Kriminal', 
'Vincenzo adalah serial Korea yang menceritakan seorang penasihat hukum Italia yang bekerja untuk konglomerat Korea. Dengan kombinasi unik antara komedi dan aksi kriminal, serial ini berhasil mencuri perhatian penonton. Akting memukau dari Song Joong-ki sebagai pemeran utama Vincenzo Cassano, serta jalan cerita yang penuh twist dan kejutan, menjadikan Vincenzo sebagai salah satu serial Korea terbaik tahun ini.',
'https://www.forbes.com/sites/jeffreykaufmann/2024/05/10/vincenzo-korean-drama-review/'),

('Mouse : Serial Kriminal dengan Twist Mengejutkan', 
'Serial Kriminal dengan Twist Mengejutkan
Mouse adalah serial kriminal Korea yang mengisahkan seorang pemburu pembunuh berantai jenius dan agen polisi muda yang terjebak dalam permainan kucing-kucingan. Serial ini berhasil memikat penonton dengan plot twist yang tidak terduga dan akting memukau dari para pemeran utama. Alur cerita yang kompleks dan menegangkan menjadikan Mouse sebagai salah satu serial kriminal Korea terbaik tahun ini.',
'https://www.nytimes.com/2024/04/25/arts/television/mouse-korean-drama-review.html');
