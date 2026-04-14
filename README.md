# Laravel Task Management API

Laravel 12 ile geliştirilmiş görev yönetimi REST API'si.

---

## 🚀 Kullanılan Teknolojiler

- **PHP** 8.2
- **Laravel** 12
- **MySQL** (XAMPP)

---

## ✨ Özellikler

- Tüm görevleri listele
- Yeni görev oluştur
- Tek görevi getir
- Görevi güncelle
- Görevi sil
- Request validasyonu
- JSON response

---

## ⚙️ Kurulum

### 1. Repoyu klonla

git clone https://github.com/burakberksama/laravel-task-api.git
cd laravel-task-api

2. Bağımlılıkları yükle

composer install

3. Ortam dosyasını yapılandır

cp .env.example .env
php artisan key:generate

4. .env dosyasını güncelle

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_api
DB_USERNAME=root
DB_PASSWORD=
5. Migration'ları çalıştır

php artisan migrate
6. Sunucuyu başlat

php artisan serve

---

📌 API Endpoint'leri
Base URL: http://localhost:8000/api

Method	Endpoint	Açıklama
GET	    /tasks	    Tüm görevleri listele
POST	/tasks	    Yeni görev oluştur
GET	    /tasks/{id}	Tek görevi getir
PUT  	/tasks/{id}	Görevi güncelle
DELETE	/tasks/{id}	Görevi sil

---

📋 Görev Alanları

Alan	     Tip	  Zorunlu	Açıklama
title	     string	    ✅	  Görev başlığı
description	 text	    ❌	  Görev açıklaması
status	     enum	    ❌	  pending, in_progress, completed
priority	 enum	    ❌	  low, medium, high
due_date	 date	    ❌	  Son tarih (YYYY-MM-DD)

---

📨 Örnek İstekler

---

Görev Oluştur

POST /api/tasks
Content-Type: application/json

{
    "title": "Laravel API'yi bitir",
    "description": "Task Management projesini tamamla",
    "status": "in_progress",
    "priority": "high",
    "due_date": "2025-12-31"
}
Cevap

{
    "success": true,
    "message": "Görev oluşturuldu.",
    "data": {
        "id": 1,
        "title": "Laravel API'yi bitir",
        "description": "Task Management projesini tamamla",
        "status": "in_progress",
        "priority": "high",
        "due_date": "2025-12-31",
        "created_at": "2025-04-14T21:19:23.000000Z",
        "updated_at": "2025-04-14T21:19:23.000000Z"
    }
}

---

Tüm Görevleri Listele

GET /api/tasks

Cevap

{
    "success": true,
    "data": [
        {
            "id": 1,
            "title": "Laravel API'yi bitir",
            "description": "Task Management projesini tamamla",
            "status": "in_progress",
            "priority": "high",
            "due_date": "2025-12-31",
            "created_at": "2025-04-14T21:19:23.000000Z",
            "updated_at": "2025-04-14T21:19:23.000000Z"
        }
    ]
}

---

Görevi Güncelle

PUT /api/tasks/1
Content-Type: application/json

{
    "title": "Laravel API'yi bitir",
    "status": "completed",
    "priority": "high"
}

Cevap

{
    "success": true,
    "message": "Görev güncellendi.",
    "data": {
        "id": 1,
        "title": "Laravel API'yi bitir",
        "status": "completed",
        "priority": "high",
        "due_date": "2025-12-31",
        "created_at": "2025-04-14T21:19:23.000000Z",
        "updated_at": "2025-04-14T21:25:00.000000Z"
    }
}

---

Görevi Sil

DELETE /api/tasks/1

Cevap

{
    "success": true,
    "message": "Görev silindi."
}

---

📁 Proje Yapısı

app/
├── Http/
│   ├── Controllers/
│   │   └── TaskController.php
│   └── Requests/
│       └── TaskRequest.php
└── Models/
    └── Task.php

database/
└── migrations/
    └── xxxx_create_tasks_table.php

routes/
└── api.php

---

👤 Geliştirici
Burak Berk Şama
Bilgisayar Mühendisi

---

📫 İletişim
📧 burakberksama@gmail.com
🔗 LinkedIn: https://linkedin.com/in/burakberksama