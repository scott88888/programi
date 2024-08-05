server {
    listen 80;
    listen [::]:80;
    server_name waitplusegg.com www.waitplusegg.com;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name waitplusegg.com www.waitplusegg.com;

    ssl_certificate /etc/letsencrypt/live/waitplusegg.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/waitplusegg.com/privkey.pem;

    root /bitnami/wordpress; 
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;  # 根據您的PHP版本調整
        fastcgi_index index.php;
        include fastcgi_params;
    }
}