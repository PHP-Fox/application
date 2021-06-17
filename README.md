# PHP-Fox Application

A sample application using the phpfox framework

This repo is a composer project, aimed to get you started quickly using the phpfox framework.

## Installation

You can get set up really quickly using composer:

```bash
composer create-project phpfox/application [your-directory-name]
```
## Serving

Quickly serve your application using PHPs built in server:

```bash
composer run serve
```

## Using the CLI

By default, there is only one command availabl: `help` which will list out all commands that you create.

The CLI is built using [minicli](https://docs.minicli.dev/en/latest/), and all commands are stored in: `src/App/Console/Commands/`.

Please read the docs for minicli to understand how this works.

To run a command:

```bash
php fox [command-name]
```