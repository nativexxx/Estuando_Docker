# Use uma imagem oficial do PHP como base
FROM php:8.2-fpm

# Instala dependências necessárias
RUN apt-get update && apt-get install -y libmariadb-dev unzip git && docker-php-ext-install pdo pdo_mysql

# Instala o Composer (gerenciador de dependências do PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia o código do projeto para o contêiner
WORKDIR /var/www/html
COPY . /var/www/html

# Instala as dependências do Laravel (via Composer)
RUN composer install --no-dev --optimize-autoloader

# Configura o diretório de trabalho do contêiner para o Laravel
WORKDIR /var/www/html

# Configura as permissões para as pastas de armazenamento e cache do Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponha a porta que o servidor Laravel usará
EXPOSE 9000

# Comando padrão para iniciar o servidor PHP-FPM
CMD ["php-fpm"]
