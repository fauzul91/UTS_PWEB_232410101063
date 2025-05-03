# 🎫 Event Management System

Sistem manajemen event berbasis web dibangun menggunakan Laravel dan Tailwind CSS.  
Aplikasi ini memungkinkan pengguna untuk **melihat homepage**, **login melalui query parameter**, serta **mengakses dashboard dan profile pribadi** berdasarkan `username` yang dikirim melalui URL.

---

## ✨ Fitur Utama

- ✅ **Homepage**: Halaman utama publik dengan informasi dasar tentang sistem.
- 🔐 **Login via Query Parameter**: Simulasi login menggunakan URL `?username=namapengguna`.
- 📊 **Dashboard**: Menampilkan informasi sesuai pengguna yang login.
- 🙍‍♂️ **Profile Page**: Menampilkan data pengguna berdasarkan username.
- 📱 **Responsive Homepage**: Tampilan homepage yang responsive.

---

## 🧭 Alur Login & Navigasi

Sistem ini **tidak menggunakan autentikasi Laravel bawaan**, tetapi memakai **query parameter** (`username`) untuk menampilkan data secara personal.

### 🔗 Contoh URL Login:

http://127.0.0.1:8000/dashboard?username=Fauzulz

### 📋 Dashboard
- Sidebar dengan menu:
  - Dashboard
  - Event
  - Category
- Menampilkan data dan statistik sederhana

### 👤 Profile (`/profile?username=john`)
- Menampilkan profil user `Fauzulz`.

### Logout 
- Mengembalikan user ke dalam homepage

### Struktur Folder Penting
- routes/web.php
- resources/views/
- └── components/sidebar.blade.php
- └── components/navbar.blade.php
- └── components/footer.blade.php
- └── components/topbar.blade.php
- └── layouts/app.blade.php
- └── layouts/dashboard.blade.php
- ├── home.blade.php
- ├── dashboard.blade.php
- ├── category.blade.php
- ├── pengelolaan.blade.php
- ├── login.blade.php
- ├── profile.blade.php
- public/
- └── css, js

### Blade Layout Master 
- @extends
- @section, @endsection
- @yield
- @include
- x-component

di app.blade.php
```
<body class="font-poppins">
        @include('components.navbar')
        @yield('content')
        <x-footer/>
</body>
```

di pengelolaan.blade.php
```
@extends('layouts.dashboard')
@section('title', 'Dashboard Eventify')

@section('content')
    ...
@endsection
```

### Tampilan Dashboard
![image](https://github.com/user-attachments/assets/62942944-de29-4e67-a06c-ce214bb186c7)

### Tampilan Homepage
![image](https://github.com/user-attachments/assets/e6521760-0ab4-4d5e-a637-8f7cb068c949)
