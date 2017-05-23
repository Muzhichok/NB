# NB

# Prerequisites

* Git client (optionally you can download this repo directly from github)
* php v5.6+ with CURL extension
* [Composer](https://getcomposer.org/download) (global install) v1.3.x
* [Codeception](http://codeception.com/quickstart) v2.2.x
* [Java](http://java.com/en/download/manual.jsp) runtime (JRE)
* Firefox Web Browser / Chrome Web Browser
* [Selenium standalone server](http://www.seleniumhq.org/download/)

# Run locally (for Firefox by default)

1. Clone the repo / Download the master branch
2. In a new tab - Start selenium server and keep it running, for example for this project from folder 'selenium' run

```java -jar selenium-server-standalone-2.52.0.jar```

3. In a new tab - Execute tests on Firefox (for example Firefox v.45)

```./vendor/bin/codecept run```

# Run by Chrome

If you want to test it with Google Chrome, then follow next steps:

1. Download the latest [chromedriver_*.zip](http://chromedriver.storage.googleapis.com/index.html) for your platform
2. Extract that zip to a folder and specify the path in next command
3. In a new tab - Start selenium server with chrome driver, for example:

```java -jar selenium-server-standalone-2.52.0.jar -Dwebdriver.chrome.driver=/full/path/to/chromedriver```

4. In a new tab - Execute tests on chrome with command

```./vendor/bin/codecept run --env chrome```


