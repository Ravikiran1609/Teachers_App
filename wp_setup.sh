#!/bin/bash
docker exec -it $(docker ps --filter name=wordpress --format "{{.Names}}") bash -c '
  wp plugin install ultimate-member --activate &&
  wp plugin install paid-memberships-pro --activate &&
  wp plugin install razorpay-subscription-for-woocommerce --activate || wp plugin install stripe-payments --activate &&
  wp theme install astra --activate
'
