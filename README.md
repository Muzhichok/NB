# NB
Prerequisites

Git client (optionally you can download this repo directly from github)
php v5.6+ with CURL extension
Composer (global install) v1.3.x
Codeception v2.2.x
Java runtime (JRE)
Firefox Web Browser / Chrome Web Browser
Selenium standalone server
php xDebug for CodeCoverage
NodeJS for PhantomJS browser
Run on localhost

Clone the repo / Download the master branch
git clone https://github.com/ankurk91/codeception-travis-ci-example.git
cd codeception-travis-ci-example
Install dependencies
composer install
Run php inbuilt server, allow port 8000 in your firewall
php -S localhost:8000 -t app
In a new tab - Start selenium server and keep it running
java -jar selenium-server-standalone.jar
In a new tab - Execute tests on Firefox (default)
./vendor/bin/codecept run
Google Chrome

Above commands assume that you have pre-installed Firefox
But if you want to test it with Google Chrome, then follow next steps
Download the latest chromedriver_*.zip for your platform from here
Extract that zip to a folder and specify the path in next command
In a new tab - Start selenium server
 java -jar selenium-server-standalone.jar -Dwebdriver.chrome.driver=/full/path/to/chromedriver
In a new tab - Execute tests on chrome
./vendor/bin/codecept run --env chrome
PhantomJS

If you wants to speed up acceptance testing then consider moving to PhantomJS headless browser.
First install node js and then install PhantomJS
In a new tab, Start PhantomJS, make sure port 4444 is free
phantomjs --webdriver=4444
In a new tab, Execute your test
./vendor/bin/codecept run --env phantom
Quick Links