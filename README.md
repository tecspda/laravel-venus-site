# Laravel corporate site
Code sample for job

## Demo
- Video with comment
- Live demo coming soon
- Here (on Github) you can see only warning files with custom code or template. 
This project is upgrade site [venus-turkey.com](https://venus-turkey.com) from pure html+css to Laravel engine. It done for code demonstration.

![Demo](https://raw.githubusercontent.com/tecspda/laravel-venus-site/d149a3210e23b89a7258dbedce41d50f6bfb7a39/images/demo1.jpg)

## Tools on start
	- Install Docker on Macos
	- Install Mysql (local)
	- Install Composer, npm
	- Install Laravel

## IDE
	- Nova, Coda 2 (macos native)
	- git

## Task
- Create new corporate site of turkish trade company from standard static template (old version on https://venus-turkey.com, html+js+bootstrap 3)
- Redesign of main page
- Redesign of product page
- Create new widget (our actual price), mysql storage    
- Create new widget (currency rate "usd-try-rub"), json storage, 
update twice in 24 hour, API https://www.cbr-xml-daily.ru/latest.js
- Create new widget (coal, world price), json storage, update twice in 24 hour
- Create new widget (wheat, world price),json storage, update twice in 24 hour
- Create mail subscribe (Laravel only)
- Create admin interface
- Create template of main page
- Create template of product page
- Create admin interface (for add news, products, price other)
- Function add actual price in mysql
- All widget must be wrapped in different class

## Done
- __General__: created and used database `MySQL` by Artisan 
- __Redesign general & product pages__: `main`, `product detail`, `news` ([folder view](https://github.com/tecspda/laravel-venus-site/tree/main/resources/views))
- __Widget__: `currences`, `demo widget 2` ([currency-rate.blade.php](https://github.com/tecspda/laravel-venus-site/blob/57177c0b8aecc5227b6de071bb0c7edb2175b540/resources/views/inc/widget/currency-rate.blade.php))
- __News__: block using date from `mysql` ([NewsController.php](https://github.com/tecspda/laravel-venus-site/blob/c276b96aa1c296850ec9adb26d06209b03f7235f/app/Http/Controllers/NewsController.php))
- __Custom__: widget currency wrapped in the class ([WidgetController.php](https://github.com/tecspda/laravel-venus-site/blob/c276b96aa1c296850ec9adb26d06209b03f7235f/app/Http/Controllers/WidgetController.php))

## Hosting
Now project has no hosting (only local). The transfer live demo to hosting is planned in the near future.
