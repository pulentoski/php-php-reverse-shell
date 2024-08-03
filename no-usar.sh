#!/bin/bash

# Función para decodificar Base64
decode() {
    echo "$1" | base64 --decode
}

# Credenciales codificadas en Base64
encoded_username="YWRtaW4="
encoded_password="cGFzc3dvcmQ="

# Decodificar las credenciales
username=$(decode $encoded_username)
password=$(decode $encoded_password)

# Solicita la IP del servidor
read -p "Ingrese la IP de la página web: " ip

# URL de login
login_url="http://$ip/php-php-reverse-shell/index.php"
admin_url="http://$ip/php-php-reverse-shell/admin.php"

# Realiza login y guarda cookies
response=$(curl -s -c cookies.txt -L -d "username=$username&password=$password&login=Login" "$login_url")

# Verifica el contenido de la página admin.php para ver si el login fue exitoso
response_after_redirect=$(curl -s -b cookies.txt "$admin_url")

# Verifica si el contenido contiene la palabra clave "Panel de Administración"
if echo "$response_after_redirect" | grep -q "Panel de Administración"; then
    echo "Login exitoso"
else
    echo "Login fallido o redirección no detectada"
fi

# Limpia cookies
rm -f cookies.txt
