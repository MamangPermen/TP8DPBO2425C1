# TP8DPBO2425C1

## 🤝 Janji
Saya Nadhif Arva Anargya dengan NIM 2404336 mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain Pemrograman Berbasis Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

---

## 📌 Deskripsi Program
Program ini merupakan aplikasi **manajemen data fakultas** berbasis **PHP** dengan pola arsitektur **MVC (Model–View–Controller)**.

Aplikasi menyediakan fitur CRUD untuk tiga jenis data:

1. **Lecturers** — data dosen  
2. **Subjects** — data mata kuliah  
3. **Classes** — jadwal kelas yang berisi hubungan dosen dan mata kuliah  

Program dibangun dengan prinsip pemisahan komponen:

- **Model** mengelola data / database.
- **Controller** menangani logika dan interaksi pengguna.
- **View** menampilkan data.

---

## 🛢️ Desain Database

### **1. lecturers**

| Field | Type | Keterangan |
|-------|--------|------------|
| id | INT PK AI | ID dosen |
| nidn | VARCHAR | Nomor dosen |
| name | VARCHAR | Nama dosen |
| email | VARCHAR | Email |
| mobile | VARCHAR | Nomor HP |
| join_date | DATE | Tanggal bergabung |

---

### **2. subjects**

| Field | Type | Keterangan |
|-------|--------|------------|
| id | INT PK AI | ID Subject
| subject_name | VARCHAR | Nama Matkul
| sks | INT | Jumlah SKS

---

### **3. classes**

| Field | Tipe | Keterangan |
|-------|--------|------------|
| id | INT PK AI | ID Class
| lecturer_id | INT FK → lecturers.id | Foreign key lecturer
| subject_id | INT FK → subjects.id | Foreign key subject
| date | DATETIME | Waktu & tanggal kelas

---

## 🧩 Desain Program

### 🔹 Model
Model bertanggung jawab untuk:

- mengambil data
- menyimpan data
- memperbarui data
- menghapus data

Setiap tabel memiliki file model masing-masing:

- `Lecturer.php`
- `Subject.php`
- `ClassM.php`

Semua interaksi database **berada di Model**.

---

### 🔹 Controller
Controller menjadi penghubung antara pengguna, model, dan tampilan.

Tugas Controller:

- menerima aksi dari pengguna (klik menu, tambah data, edit data, hapus data)
- meminta data dari Model
- menentukan View mana yang harus ditampilkan
- meneruskan data ke View

Masing-masing data memiliki controllernya:

- `LecturerCon.php`
- `SubjectCon.php`
- `ClassCon.php`

---

### 🔹 View
View hanya fokus **menampilkan data**.

---

## 🔄 Alur Program

### **1. Halaman Lecturer**
- Pengguna membuka menu Lecturer → Controller memanggil model untuk mengambil semua data → data dikirim ke view → tampil dalam tabel.
- Tombol Add → menampilkan form input → pengguna submit → Controller memanggil Model untuk menyimpan data.
- Tombol Edit → Controller mengambil data berdasarkan ID → mengirim ke form edit.
- Tombol Delete → muncul konfirmasi → Controller menghapus data melalui Model.

### **2. Halaman Subject**
Alurnya sama seperti Lecturer, dengan operasi CRUD penuh.

### **3. Halaman Class (Jadwal)**
- List jadwal menampilkan gabungan dosen & mata kuliah.
- Form create menggunakan dropdown:
  - daftar lecturers
  - daftar subjects
- Data dikirim ke model untuk disimpan.
- Edit dan delete.

---

## 📸 Dokumentasi


https://github.com/user-attachments/assets/3b1bd0a4-86d5-4509-850d-32a91b78fae0


