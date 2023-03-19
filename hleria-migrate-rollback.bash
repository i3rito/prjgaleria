#!/bin/bash

# Vai para a versão definida em /application/config/migration.php.
# export XDEBUG_CONFIG=idekey=netbeans-xdebug
php index.php migrate rollback $1