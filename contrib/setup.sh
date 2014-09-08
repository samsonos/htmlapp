#!/bin/sh

git init
cp contrib/pre-commit .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit
chown -R :www-data www/
chmod -R 0775 www/