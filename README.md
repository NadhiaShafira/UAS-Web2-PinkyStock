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
![1_skema_database](1_skema_database.png)

### 🔒 2. Server-Side Security (Uji Coba API Gagal Error 401)
Bukti penerapan CodeIgniter Filters untuk memproteksi endpoint manipulasi data. Request ditolak dengan kode `401 Unauthorized` karena tidak melampirkan *Authorization Bearer Token* pada HTTP Header:
![2_uji_api_gagal_401](2_uji_api_gagal_401.png)

### 🔑 3. Modul Otentikasi & Sesi Login
- **Notifikasi Login Berhasil & Token Tersimpan di LocalStorage:**
  ![3_Notifikasi_Login_Berhasil](3_Notifikasi_Login_Berhasil.png)
- **Tampilan Awal Dashboard Admin (Akses Terproteksi Navigation Guards):**
  ![4_Tampilan_Awal_Dashboard_Admin](4_Tampilan_Awal_Dashboard_Admin.png)

### 🛍️ 4. Manajemen Data Master (Operasi CRUD)
- **Proses Berhasil Input Barang Baru via Axios POST:**
  ![5_Proses_Berhasil_Input](5_Proses_Berhasil_Input.png)
- **Visualisasi Banyak Data Pada Tabel Berbasis TailwindCSS (Read):**
  ![6_Data_Masuk_Tabel_Dashboard](6_Data_Masuk_Tabel_Dashboard.png)
- **Fitur Update/Edit Data Barang via Axios PUT:**
  ![7_Fitur_Update](7_Fitur_Update.png)
- **Tampilan Tabel Penuh Setelah Update Berhasil:**
  ![8_Tampilan_Tabel_Setelah_Update](8_Tampilan_Tabel_Setelah_Update.png)
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
