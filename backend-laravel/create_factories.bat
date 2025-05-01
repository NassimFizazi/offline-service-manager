@echo off
echo 🏭 Création des Factories...

docker exec -it plateforme_app php artisan make:factory UtilisateurFactory --model=Utilisateur
docker exec -it plateforme_app php artisan make:factory ServiceFactory --model=Service
docker exec -it plateforme_app php artisan make:factory ReservationFactory --model=Reservation
docker exec -it plateforme_app php artisan make:factory PaiementFactory --model=Paiement
docker exec -it plateforme_app php artisan make:factory AvisFactory --model=Avis
docker exec -it plateforme_app php artisan make:factory ReclamationFactory --model=Reclamation

echo ✅ Toutes les factories ont été générées avec succès !
pause
