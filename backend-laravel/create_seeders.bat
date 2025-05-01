@echo off
echo 📦 Création des Seeders...

php artisan make:seeder UtilisateurSeeder
php artisan make:seeder ServiceSeeder
php artisan make:seeder ReservationSeeder
php artisan make:seeder PaiementSeeder
php artisan make:seeder AvisSeeder
php artisan make:seeder ReclamationSeeder

echo ✅ Tous les seeders ont été créés.
echo 👉 N'oublie pas de remplir les méthodes 'run()' dans chaque seeder.
pause
