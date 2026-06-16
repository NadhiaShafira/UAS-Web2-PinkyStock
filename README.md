# 🌸 PinkyStock~ : Sistem Manajemen Inventaris Barang (E-Inventory) 🎀

<p align="center">
  <img src="https://img.shields.io/badge/Architecture-Decoupled%20(Split)-ff69b4?style=for-the-badge" alt="Architecture">
  <img src="https://img.shields.io/badge/Backend-CodeIgniter%204-orange?style=for-the-badge&logo=codeigniter" alt="Backend">
  <img src="https://img.shields.io/badge/Frontend-VueJS%203%20SPA-4fc08d?style=for-the-badge&logo=vue.js" alt="Frontend">
  <img src="https://img.shields.io/badge/UI%20Framework-TailwindCSS-06b6d4?style=for-the-badge&logo=tailwind-css" alt="UI">
</p>

---

## 👩‍💻 Profil Mahasiswa & Akademik

Berikut adalah data diri pemilik proyek untuk pemenuhan nilai Ujian Akhir Semester (UAS):

| 🌸 Komponen Data | 📝 Informasi Mahasiswa |
| :--- | :--- |
| **Nama Lengkap** | **Nadhia Shafira** |
| **NIM** | `312410498` |
| **Kelas** | `I241E` |
| **Mata Kuliah** | Pemrograman Web 2 |
| **Program Studi** | Teknik Informatika (Informatics Engineering) |
| **Dosen Pengampu** | Agung Nugroho, S.Kom., M.Kom. |
| **Kampus** | Universitas Pelita Bangsa |

---

## 📌 Deskripsi Proyek
**PinkyStock~** adalah aplikasi *E-Inventory* (Sistem Manajemen Inventaris Barang) modern yang dibangun menggunakan **Decoupled Architecture** (Arsitektur Terpisah penuh antara server RESTful API dan client SPA). Aplikasi ini dirancang khusus dengan tema *kawaii* bernuansa pink untuk mengelola stok barang, kategori relasi, jumlah stok, serta data supplier secara *asynchronous* tanpa memuat ulang browser (*No Hard-Reload*).

### 🛠️ Spesifikasi Teknologi & Framework Modern

| 🚀 Ekosistem | 🧰 Teknologi yang Digunakan | 🎯 Peran Utama Sistem |
| :--- | :--- | :--- |
| **Backend Engine** | CodeIgniter 4 (CI4) Framework | Murni sebagai RESTful API Server & Resource Controller |
| **Frontend Engine** | VueJS 3 (Ekosistem Vue Router via CDN) | Mengelola komponen dan navigasi *Single Page Application* (SPA) |
| **UI Framework** | TailwindCSS via CDN | Standardisasi tampilan *utility-first* yang responsif dan rapi |
| **Data Transfer** | Library Axios | Agen HTTP Request asynchronous (Reactive Data Fetching) |
| **Database** | MySQL / MariaDB | Basis data utama penyimpanan relasi inventaris |

---

## 📸 Dokumentasi & Bukti Implementasi (Screenshot)

> 💡 **Petunjuk untuk Nadhia:** Pastikan file foto di folder GitHub kamu namanya disamakan persis dengan nama di dalam tanda kurung `()` di bawah ini ya, supaya gambarnya otomatis muncul!

### 🗄️ 1. Arsitektur Database (Relasi Tabel)
Bukti pembuatan minimal 3 tabel database yang saling berelasi (`users`, `kategori`, dan `barang`) pada phpMyAdmin:
![1_skema_database](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/de701ac86334863fe554a01018abf706642686c4/SS_UAS_WEB2/1_skema_database.png)

### 🔒 2. Server-Side Security (Uji Coba API Gagal Error 401)
Bukti penerapan CodeIgniter Filters untuk memproteksi endpoint manipulasi data. Request ditolak dengan kode `401 Unauthorized` karena tidak melampirkan *Authorization Bearer Token* pada HTTP Header:
![2_uji_api_gagal_401](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/2976e9adf846501b83c5920037e6a3061eb5a49f/SS_UAS_WEB2/2_uji_api_gagal_401.png)

### 🔑 3. Modul Otentikasi & Sesi Login
- **Notifikasi Login Berhasil & Token Tersimpan di LocalStorage:**
  ![3_Notifikasi_Login_Berhasil](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/5c66209ebf7514b25304922f7c3f4aaa889fc4c2/SS_UAS_WEB2/3_Notifikasi_Login_Berhasil.png)
- **Tampilan Awal Dashboard Admin (Akses Terproteksi Navigation Guards):**
  ![4_Tampilan_Awal_Dashboard_Admin](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/0394f3c30d7fb3da9e84b7a9427d99aa3cb4327e/SS_UAS_WEB2/4_Tampilan_Awal_Dashboard_Admin.png)

### 🛍️ 4. Manajemen Data Master (Operasi CRUD)
- **Proses Berhasil Input Barang Baru via Axios POST:**
  ![5_Proses_Berhasil_Input](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/81469a6a04b36d500c568ae435f5b9fe6dfbc83e/SS_UAS_WEB2/5_Proses%20Berhasil%20Input.png)
- **Visualisasi Banyak Data Pada Tabel Berbasis TailwindCSS (Read):**
  ![6_Data_Masuk_Tabel_Dashboard](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/d4bdd274de6eabe9b7f7a25abf777684f9199cb7/SS_UAS_WEB2/6_Data%20Masuk%20Tabel%20Dashboard.png)
- **Fitur Update/Edit Data Barang via Axios PUT:**
  ![7_Fitur_Update](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/29b58f3471b3a0e04ecc9b85d89c688320f71b90/SS_UAS_WEB2/7_Fitur%20Update.png)
- **Tampilan Tabel Penuh Setelah Update Berhasil:**
  ![8_Tampilan_Tabel_Setelah_Update](https://github.com/NadhiaShafira/UAS-Web2-PinkyStock/blob/9ddad20ad681442cecad78e5e03aa23abda7dd28/SS_UAS_WEB2/8_Tampilan_Tabel_Setelah_Update.png)
- **Fitur Delete/Hapus Data Barang via Axios DELETE:**
  ![9_Fitur_Delete](9_Fitur_Delete.png)

---

## ⚙️ Petunjuk Instalasi & Menjalankan Proyek Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi **PinkyStock~** di komputer lokal Anda:

### 🖥️ A. Konfigurasi Server Backend (CodeIgniter 4)
1. Pastikan modul **Apache** dan **MySQL** pada **XAMPP Control Panel** sudah diaktifkan (*Start*).
2. Import file database `db_inventory.sql` ke dalam `http://localhost/phpmyadmin`.
3. Buka terminal atau command prompt baru, masuk ke dalam folder backend:
```bash
   cd backend-api
