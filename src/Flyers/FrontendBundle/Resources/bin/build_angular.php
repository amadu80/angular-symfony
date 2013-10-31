#!/usr/bin/env php
<?php
exec('sudo npm install -g grunt-cli');
exec('sudo npm install -g bower');
exec('cd /var/www/sa/vendor/angular-lib && npm install');
exec('cd /var/www/sa/vendor/angular-lib && grunt package');
