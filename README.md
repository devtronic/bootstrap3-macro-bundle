# Bootstrap 3 Macro Bundle

**Work in progress, pre-alpha!!**

## Installation
`composer require devtronic/bootstrap3-macro-bundle`

In `app/AppKernel.php`:
```php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        //...
        new Devtronic\Bootstrap3MacroBundle\Bootstrap3MacroBundle(),
    );
}
```

## Usage
```twig
{% import "Bootstrap3MacroBundle::macros.html.twig" as bootstrap %}
```

## Documentation
[here](./doc/index.md)