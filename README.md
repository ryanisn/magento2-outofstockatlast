# Magento 2.4.x module Sort Out Of Stock Product At last the product list

    composer require ghoster/module-outofstockatlast

[![Latest Stable Version](https://poser.pugx.org/ghoster/module-outofstockatlast/v)](https://packagist.org/packages/ghoster/module-outofstockatlast)
[![Total Downloads](https://poser.pugx.org/ghoster/module-outofstockatlast/downloads)](https://packagist.org/packages/ghoster/module-outofstockatlast) 
[![Latest Unstable Version](https://poser.pugx.org/ghoster/module-outofstockatlast/v/unstable)](https://packagist.org/packages/ghoster/module-outofstockatlast) 
[![License](https://poser.pugx.org/ghoster/module-outofstockatlast/license)](https://packagist.org/packages/ghoster/module-outofstockatlast) 
[![PHP Version Require](https://poser.pugx.org/ghoster/module-outofstockatlast/require/php)](https://packagist.org/packages/ghoster/module-outofstockatlast)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/thinghost)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/63baac1389b34c8d8b1005a087f8f2ab)](https://www.codacy.com/gh/tuyennn/magento2-outofstockatlast/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=tuyennn/magento2-outofstockatlast&amp;utm_campaign=Badge_Grade)
[![Build Status](https://github.com/tuyennn/magento2-outofstockatlast/actions/workflows/coding-standard.yml/badge.svg)](https://github.com/tuyennn/magento2-outofstockatlast/actions/workflows/coding-standard.yml)
---
- [Extension on GitHub](https://github.com/tuyennn/magento2-outofstockatlast)
- [Direct download link](https://github.com/tuyennn/magento2-outofstockatlast/tarball/master)

## Main Functionalities
- Sort Out Of Stock Product At last the product list
- Compatibility with `smile/elasticsuite^2.11`
- Firstly `Display Out of Stock Products` from `Stores > Configuration > Catalog > Inventory > Stock Options` must be set `Yes`
- Of course, we are talking about Elastic Search. We don't support **old search engine**
- From time to time we remind you **Reindexing after you enable the module**


## Compatibility

| Magento Version (Open Source/Commerce) | Elasticsearch | OpenSearch | ElasticSuite | Supported |
| -------------------------------------- | ------------- | ---------- | ------------ | --------- |
| **2.0.x**                              | 2.x           | -          | 2.1.x        | No ❌      |
| **2.1.x**                              | 2.x & 5.x     | -          | 2.3.x        | No ❌      |
| **2.2.x**                              | 5.x & 6.x     | -          | 2.6.x        | No ❌      |
| **<2.3.2**                             | 5.x & 6.x     | -          | 2.8.4        | No ❌      |
| **<2.3.5**                             | 5.x & 6.x     | -          | 2.8.x        | No ❌      |
| **>=2.3.5**                            | 6.x & 7.x     | -          | 2.9.x        | No ❌      |
| **2.4.0**                              | 6.x & 7.x     | -          | 2.10.1       | Yes ✔️     |
| **>=2.4.1 && < 2.4.6**                 | 6.x & 7.x     | -          | 2.10.x       | Yes ✔️     |
| **>=2.4.6**                            | 7.x & 8.x     | 1.x & 2.x  | >=2.11.x     | Yes ✔️     |




## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

- Unzip the zip file in `app/code/GhoSter`
- Enable the module by running `php bin/magento module:enable GhoSter_OutOfStockAtLast`
- Apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

- Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public GitHub repository as vcs
- Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
- Install the module composer by running `composer require ghoster/module-outofstockatlast`
- enable the module by running `php bin/magento module:enable GhoSter_OutOfStockAtLast`
- apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`


## Configuration

- Reindexing after you enable the module

## Donation

If this project help you reduce time to develop, you can give me a cup of beer :)

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/thinghost)
