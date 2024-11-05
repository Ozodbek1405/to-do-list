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
    git clone https://github.com/username/your-todo-repo.git
    cd your-todo-repo
    ```

2. Composer kutubxonalarini o'rnating:

    ```bash
    composer install
    ```

3. `.env` faylini sozlang:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. NPM paketlarini o'rnating va loyihani kompilyatsiya qiling:

    ```bash
    npm install
    npm run dev
    ```

5. Serverni ishga tushiring:

    ```bash
    php artisan serve
    ```

6. Dasturni `http://localhost:8000` orqali kiriting.

## Foydalanish

1. **ToDo List Ro'yxatini Ko'rish**: Asosiy sahifada barcha mavjud vazifalar ko'rsatiladi.
2. **Yangi Vazifa Qo'shish**: Asosiy sahifadagi matn maydonidan foydalanib, yangi vazifa qo'shing.
3. **Vazifani O'chirish**: Keraksiz vazifani ro'yxatdan o'chirish uchun o'chirish tugmasini bosing.

## Dastur Tuzilishi

- `routes/web.php`: Foydalanuvchi interfeysi uchun marshrutlar.
- `app/Http/Controllers/ToDoController.php`: ToDo ro'yxati uchun asosiy mantiq.
- `resources/views/`: Blade shablonlari.
- `resources/js/components/`: Vue.js komponentlari.

## Kelgusidagi Yaxshilanishlar

- Ma'lumotlarni saqlash uchun ma'lumotlar bazasini qo'llab-quvvatlash.
- Foydalanuvchilarni autentifikatsiya qilish.
- Vazifalarni holatiga qarab saralash va filtrlashtirish.

## Aloqa

Agar biror savol yoki takliflaringiz bo'lsa, quyidagi manzil orqali bog'lanishingiz mumkin:

- Email: support@example.com
- Telegram: [@yourusername](https://t.me/yourusername)

## Litsenziya

Ushbu loyiha MIT litsenziyasi ostida tarqatilgan.
