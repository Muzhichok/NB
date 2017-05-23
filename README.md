# NB
Prerequisites

Git client (optionally you can download this repo directly from github)
php v5.6+ with CURL extension
Composer (global install) v1.3.x
Codeception v2.2.x
Java runtime (JRE)
Firefox Web Browser / Chrome Web Browser
Selenium standalone server

Clone the repo / Download the master branch

In a new tab - Start selenium server and keep it running
java -jar selenium-server-standalone.jar
In a new tab - Execute tests on Firefox (default)
./vendor/bin/codecept run

Above commands assume that you have pre-installed Firefox
But if you want to test it with Google Chrome, then follow next steps
Download the latest chromedriver_*.zip for your platform from here
Extract that zip to a folder and specify the path in next command
In a new tab - Start selenium server
 java -jar selenium-server-standalone.jar -Dwebdriver.chrome.driver=/full/path/to/chromedriver
In a new tab - Execute tests on chrome
./vendor/bin/codecept run --env chrome
