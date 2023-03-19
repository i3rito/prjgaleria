#!/bin/bash

# $1 define quantas posições voltar a partir da mais recente.
# Se não receber parâmetro, vai para a última migration.
# export XDEBUG_CONFIG=idekey=netbeans-xdebug
php index.php migrate forward $1