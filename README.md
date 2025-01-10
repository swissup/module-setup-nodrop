# Setup Nodrop

SetupNodrop &mdash; is a Magento module that disables drop operations during
`setup:upgrade` command.

This module is useful when working with numerous third-party modules, allowing
you to disable some periodically, install new ones, and so on with ease.

## Installation

```bash
composer require swissup/module-setup-nodrop
bin/magento module:enable Swissup_SetupNodrop
```

That's all. Magento will no longer execute drop operations.
