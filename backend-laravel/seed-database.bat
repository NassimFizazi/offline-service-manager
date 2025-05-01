@echo off
echo [🔄] Suppression et reseeding de la base de donnees...

REM Nom du conteneur Docker Laravel
SET CONTAINER=plateforme_app

docker exec -it %CONTAINER% php artisan migrate:fresh --seed

echo [✅] Migration et seed terminés !
pause
