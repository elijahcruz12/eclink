# ECLink
ECLink is a enterprise grade url shortener software built with Laravel. Built to be completely customizable, ECLink is also built with TailwindCSS and AlpineJS.

## Requirements
The following requirement are required at the minimum to run ECLink. These specs should allow you to use ECLink without any issues.

### Software Requirements
- PHP 8.0 (Needed as we use new features in 8.0)
- NodeJS v14.15+
- Apache2 or nginx  
- MySQL 8.0 (That is what it is test on, so if you use something different, your mileage will vary)

You will also need the following PHP extensions:
- BCMath
- Ctype
- Fileinfo
- JSON
- Mbstring
- OpenSSL 
- PDO 
- Tokenizer
- XML

### Hardware Requirements
- 2GB RAM (4-8 GB Recommended for more than 50 links and more than 200 requests per minute.)
- 5GB Storage (Helps for updating. Recommended at least 10GB+ if you're using a single server for everything.)

## Technologies Used
ECLink uses multiple technologies that we're proud to support.
- Laravel 8.x
- TailwindCSS 2.0.X
- AlpineJS
- Laravel Livewire
- Laravel Breeze
- Laravel Sail (What we use to develop)

ECLink is built off the TALL stack, which makes for an easy development process as well as a very customizable project.

## Installation

Installing ECLink is very simple, as it's just like installing a normal Laravel Project.

````
git clone https://github.com/elijahcruz12/eclink.git
cd eclink
composer install
cp .env.example .env
````
From here you WILL need to edit your `.env` file. This file allows you to customize your sites configuration with ease. When updating ECLink, this file won't change. All the values in this file are explained in another section below.

After editing the `.env` file, you can continue with the installation.

````
php artisan key:generate
php artisan migrate
npm install
````
If you're running ECLink in production:

`npm run production`

If developing or just testing the site:

`npm run development`

These will both compile ECLink's JS and CSS, however in production everything is minified, and the CSS is purged to lower the file size of the CSS. This helps to speed up the dashboard of the actual site. It has no difference to when you're redirecting users using your short links as no CSS or JS is used during this process.

After running all of these commands, just set up either your Apache Configuration fo ECLink or your nxinx configuration. Sample config files are coming soon.

## .env file meanings.

````
APP_NAME=ECLink # This is the name that is shown on all pages as the title.
APP_ENV=local # Set this to production if not testing or developing
APP_KEY= # DO NOT SET THIS YOURSELF. INSTEAD RUN `php artisan key:generate`. DO NOT RUN TWICE AS CAN MESS UP AUTHENTICATION.
APP_DEBUG=true # Set to false in produciton
APP_URL=http://localhost # Make sure to set this to your actual url. NO TRAILING SLASH

LOG_CHANNEL=stack # Can Leave as is
LOG_LEVEL=debug # Can leave as is

DB_CONNECTION=mysql # Change this if your not using mysql
DB_HOST=mysql # Set to your mysql host (eg 127.0.0.1)
DB_PORT=3306 # Your MySQL port
DB_DATABASE=eclink # Name of your database. Must create beforehand
DB_USERNAME=root # Username you use for MySQL
DB_PASSWORD= # Your MySQL password

BROADCAST_DRIVER=log # Leave as is
CACHE_DRIVER=file # Leave as is
QUEUE_CONNECTION=sync # Leave as is
SESSION_DRIVER=file # Leave as is
SESSION_LIFETIME=120 # Time the session can stay active.

MEMCACHED_HOST=memcached # Leave as is

REDIS_HOST=redis # Change to your redis host if your using REDIS For your sessions.
REDIS_PASSWORD=null # Redis password
REDIS_PORT=6379 # Redis port

MAIL_MAILER=smtp # Options 
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

LIMIT_DOMAINS=true # If set to true, will limit which domains can register. If true, DOMAINS_ALLOWED MUST be set.
DOMAINS_ALLOWED="domainone.com,domaintwo.net" # You can add more domains by seperating them each by a comma. No spaces.

````
