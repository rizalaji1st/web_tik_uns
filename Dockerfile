FROM dockerhub.uns.ac.id:5000/php73:latest as builder
WORKDIR /app
COPY composer.json /app/
COPY composer.lock /app/
RUN composer install --prefer-dist --no-dev --no-suggest --optimize-autoloader
COPY package.json /app/
#COPY package-lock.json /app/
# RUN npm install --production --prefer-offline --no-audit --no-optional
RUN npm install --prefer-offline --no-audit --no-optional

FROM dockerhub.uns.ac.id:5000/php73:latest
RUN a2enmod unique_id && \
    rm -rf /etc/apache2/sites-enabled/* /etc/apache2/sites-available/* /etc/apache2/conf-enabled/other-vhosts-access-log.conf

COPY deploy/docker/ /etc/apache2/sites-enabled/
COPY deploy/docker/custom-php.ini /usr/local/etc/php/conf.d/custom-php.ini
WORKDIR /app
COPY --from=builder /app/ /app/
COPY . /app/
RUN npm run production
RUN rm -Rf /app/.env && rm -Rf /app/.git && rm -Rf /app/deploy && chown -R www-data:www-data /app
