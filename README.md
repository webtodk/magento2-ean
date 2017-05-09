# Magento 2 EAN Payment
> `magento2-ean` - a Magento 2 module

This module adds a new offline payment option for EAN payments.

Installation
======================
The module can be installed the following ways:

1. Manually copy files to /app/code/Webto/EAN/ or use git clone

2. Add the git to composer repository and install with composer

Composer Setup
=======================

Add the repository to composer.json repositores

```
"magento2-ean": {
    "type": "vcs",
    "url": "git@github.com:webtodk/magento2-ean.git"
}
```

```
composer require webto/magento2-ean
```

Magento Setup
=========================
After installation, enable the module in Magento and clear cache.

```
php bin/magento module:enable Webto_EAN
```

```
php bin/magento setup:upgrade
```

Clear caches