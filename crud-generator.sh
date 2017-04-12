#!/bin/bash

# Dont want to run this at the moment

return false

if [[ -f "./app/Category.php" ]]; then
php artisan crud:generate Category\
    --fields="title#string; description#string;"\
    --view-path=admin\
    --controller-namespace=Admin\
    --validations="title#min:1|max:50|required; description#required;"\
    --pagination=12\
    --relationships="category#hasOne#App\Category"\
    --route-group=admin
fi


if [[ -f "./app/Posts.php" ]]; then
php artisan crud:generate Posts\
    --fields="title#string; content#text;"\
    --view-path=admin\
    --controller-namespace=Admin\
    --validations="title#min:5|max:50|required; content#required; "\
    --pagination=12\
    --relationships="category#hasOne#App\Category"
    --route-group=admin
fi
