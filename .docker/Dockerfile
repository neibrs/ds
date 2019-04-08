FROM jianhe/php

# Install system packages
RUN apt-get install -y \
  git \
  unzip \
  wget

# Install Drupal
RUN rm -rf /var/www/html


# Finish
EXPOSE 80 3306 22 443
CMD exec supervisord -n
