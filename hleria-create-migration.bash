#!/bin/bash

if [ $# -eq 0 ]
  then
    echo "Você precisa informar o nome da migration."
    exit 0
fi

firstLetter="$(echo $1 | head -c 1)"
if [[ ! $firstLetter =~ [A-Z] ]]
then
  echo "A primeira letra no nome da migration deve ser maiúscula"
    exit 0
fi

# Obtém data e hora atual.
migration_date=$(date +%Y%m%d%H%M%S|tr '\n' '_')

# Concatena o nome da migration.
result=${migration_date}$1.php

# Seta o conteúdo da migration
skel=`cat application/migrations/skel/skel.php`
content=$(echo "$skel"| sed --expression="s/REPLACE_ME/$1/g")

# Cria o arquivo.
echo "$content" > application/migrations/$result
