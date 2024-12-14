FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libpq-dev\
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_pgsql


# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Check Composer version
RUN composer --version

# Set the working directory in the container
WORKDIR /app

# Install any PHP extensions (example)
RUN docker-php-ext-install pdo_pgsql

COPY . /app

# Expose the default port (optional)
EXPOSE 80