# Marketing website for OfficeLife

This repository is the official marketing website of [OfficeLife](https://github.com/officelifehq/officelife), a software that manages the entire employee lifecycle.

This site is powered by [Jigsaw](https://jigsaw.tighten.co/docs), a PHP static site generator.

## Local installation

```bash
composer install
npm install
```

## Serve the site locally

### Case A: if you need to run it once

To serve the site locally, you have to run

```bash
./vendor/bin/jigsaw serve --port=8888
```

The site will be available at http://localhost:8888.

### Case B: if you need to refresh it on every code change

```bash
npm run watch
```

## Adding content

New content should be added to the `navigation.php` file.