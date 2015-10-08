DB := cms_dev

clean:
	sudo rm -rf application/cache/css
	sudo rm -rf application/cache/smarty
	sudo rm -rf application/cache/img
	sudo rm -rf application/cache/widget*.json

test:
	@phpunit
migrate:
	@mysql -u root -e "drop database if exists ${DB}"
	@mysql -u root -e "create database ${DB}"
	@./vendor/bin/clips phinx migrate
c:
	@mysql -u root "${DB}"

.PHONY: clean migrate test 
