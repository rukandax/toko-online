# Toko Online

## Dependencies

- PHP - Developed on v7.1
- [Composer](https://getcomposer.org/) for Dependencies Management
- [Phinx](https://phinx.org/) for Database Migration

## Configuration

- Copy `env.sample` to `.env`
- Adjust `.env` with your own configuration

## Installation

- Run `composer install`
- Run `vendor/bin/phinx migrate -c phinx.php`