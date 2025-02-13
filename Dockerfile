FROM richarvey/nginx-php-fpm:1.7.2

# Create the necessary directory structure
RUN mkdir -p /noel-positions

# Copy the application files to the correct directory
COPY . /noel-positions

# Set the working directory
WORKDIR /noel-positions

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /noel-positions
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
