TMTE Video streaming websites

Group Member
62070501039 นายปีย์มนัส คูตระกูล
62070501061 นายศุภกร มหาวงศ์เมฆิน
62070501072 นายณัฐกิต เปลี่ยนขุนทด
62070501073 นายธนธรณ์ มหัทธนพล

เครื่องมือหลักที่ใช้ => Larvel 
วิธีการใช้งาน
1. composer install
2. cp .env.example .env or copy .env .example .env (แก้ .env ให้ตรงกับ database name ของตัวเอง)
3. php artisan key:generate
4. php artisan migrate:fresh --seed
5. import data.sql (ใส่ข้อมูลลงใน table ต่าง ๆ )
6. php artisan serve 