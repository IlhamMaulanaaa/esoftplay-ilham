FROM esoftplay/master:latest

RUN mkdir -p /home/sites
WORKDIR /home/sites

COPY . /home/sites
COPY modules/docker/sites.conf  /etc/nginx/conf.d/sites.conf
RUN chmod -R 777 images
RUN rm -rf images/cache
