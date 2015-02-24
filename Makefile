DB := cms_dev

test:
	@phpunit
migrate:
	@mysql -u root -e "drop database if exists ${DB}"
	@mysql -u root -e "create database ${DB}"
	@clips phinx migrate
c:
	@mysql -u root "${DB}"
