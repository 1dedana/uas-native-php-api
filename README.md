# REST API Mahasiswa - Native PHP

## 📌 Fitur
- Login & token autentikasi
- CRUD data mahasiswa
- Superadmin otomatis di database

## 🚀 Cara Menjalankan
1. Import database: `sql/import.sql`
2. Jalankan server lokal:
   ```
   php -S localhost:8000
   ```

## 🔑 Superadmin
- Email: danaimade41@gmail.com
- Password: 1MDanaari*

## 🧪 Tes API (Gunakan Postman)
- POST `/auth/login`
- GET `/auth/me` (header Authorization: token)
- GET `/students/index.php`
- POST `/students/store.php`
- PUT `/students/update.php?id=1`
- DELETE `/students/delete.php?id=1`
