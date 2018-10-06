Quick Links `[UNMAINTAINED]`
============================

## `Latest code can be found in develop branch.`

<h2 id="syn">Synopsis</h2>

TODO

<h2 id="over">Overview</h2>

TODO

<h2 id="install">Installation</h2>

Below, you can find two ways to install the quick links module.

### 1. Install via Composer (Recommended)
First, make sure that Composer is installed: https://getcomposer.org/doc/00-intro.md

Make sure that Packagist repository is not disabled.

Run Composer require to install the module:

    php <your Composer install dir>/composer.phar require shopgo/core:*

### 2. Clone the quick-links repository
Clone the <a href="https://bitbucket.org/shopgo-magento2/quick-links.git" target="_blank">quick-links</a> repository using either the HTTPS or SSH protocols.

### 2.1. Copy the code
Create a directory for the quick links module and copy the cloned repository contents to it:

    mkdir -p <your Magento install dir>/app/code/ShopGo/QuickLinks
    cp -R <quick-links clone dir>/* <your Magento install dir>/app/code/ShopGo/QuickLinks

### Update the Magento database and schema
If you added the module to an existing Magento installation, run the following command:

    php <your Magento install dir>/bin/magento setup:upgrade

### Verify the module is installed and enabled
Enter the following command:

    php <your Magento install dir>/bin/magento module:status

The following confirms you installed the module correctly, and that it's enabled:

    example
        List of enabled modules:
        ...
        ShopGo_QuickLinks
        ...

<h2 id="tests">Tests</h2>

TODO

<h2 id="contrib">Contributors</h2>

Ammar (<ammar@shopgo.me>)

<h2 id="lic">License</h2>

[Open Source License](LICENSE.txt)
