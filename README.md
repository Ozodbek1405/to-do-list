# ToDo List Dasturi

Bu ToDo List dasturi foydalanuvchilarga o'z vazifalarini boshqarish imkonini beradi. Laravel backend va Vue.js frontend frameworklari yordamida yaratilgan.

## Loyihaning Maqsadi

Dastur foydalanuvchilar uchun sodda va samarali vazifalar ro'yxatini yaratish, ko'rish, qo'shish, va o'chirish imkoniyatini taqdim etadi.

## Asosiy Funksiyalar

- **Vazifalarni ko'rish** – Mavjud vazifalarni ko'rsatadi.
- **Vazifalarni qo'shish** – Yangi vazifalarni yaratish.
- **Vazifalarni o'chirish** – Keraksiz vazifalarni ro'yxatdan olib tashlash.

## Texnologiyalar

- **Backend**: Laravel
- **Frontend**: Vue.js
- **Ma'lumotlar saqlash**: JSON fayl

## O'rnatish Qo'llanmasi

### Talablar

- PHP >= 7.4 yoki undan yuqori
- Composer
- Node.js va npm
- Vite (Laravel Vite uchun sozlangan)

### O'rnatish

1. Loyihani yuklab oling:

    ```bash
    git clone https://github.com/Ozodbek1405/to-do-list.git
    cd to-do-list
    ```

2. Dockerni ishga tushuring:

    ```bash
    docker-compose up -d
    ```

3. `.env` faylini sozlang:

    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. NPM paketlarini o'rnating va loyihani kompilyatsiya qiling:

    ```bash
    npm install
    npm install vue@latest
    npm install @vitejs/plugin-vue
    npm install --save-dev laravel-vite-plugin
    npm run dev
    ```

6. Dasturni `http://localhost:8081` orqali kiriting.

## Foydalanish

1. **ToDo List Ro'yxatini Ko'rish**: Asosiy sahifada barcha mavjud vazifalar ko'rsatiladi.
2. **Yangi Vazifa Qo'shish**: Asosiy sahifadagi matn maydonidan foydalanib, yangi vazifa qo'shing.
3. **Vazifani O'chirish**: Keraksiz vazifani ro'yxatdan o'chirish uchun o'chirish tugmasini bosing.

## Dastur Tuzilishi

- `routes/web.php`: Foydalanuvchi interfeysi uchun marshrutlar.
- `app/Http/Controllers/ToDoController.php`: ToDo ro'yxati uchun asosiy mantiq.
- `resources/views/`: Blade shablonlari.
- `resources/js/components/`: Vue.js komponentlari.
