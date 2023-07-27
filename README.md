My boilerplate for Laravel micro-SaaS.

## Principles

- **Be as self-contained as possible**: With minimal extra commands, you should be able to clone this repo and get something running.
- **Use the simplest form of each tool**: SQLite seems to annoy a lot of people, but it's highly portable and clearly can scale (just look at any of Pieter Levels' projects). Caddy is simpler than nginx and easier to use. Octane speeds things up over fpm and runs simply. Deployer has decent defaults for Laravel apps so you don't need to get Envoyer or start from 0 with Envoy. Livewire+Alpine are a different paradigm but still closer to staying with PHP & simple tools rather than React/Vue/etc.
- **Customisable**: Don't like my tech choices? Shouldn't be too hard to sub the important ones out, e.g. SQLite -> MySQL.
- **Flexible, but sturdy**: Strict types. Automated linting.

## Installation/Usage

This assumes you're starting from scratch on an unmanaged (no Forge/Ploi/Envoyer) Ubuntu server.

```shell
// [TODO]
./setup.sh
```

### Local Development

In keeping with the spirit of this project, try using native solutions.
Windows users: follow Linux instructions on WSL2. Not sure all of it will work properly though, I don't use Windows.

#### macOS

- ([Valet](https://laravel.com/docs/10.x/valet) & [PHPMon](https://phpmon.app/)) OR [Laravel Herd](https://herd.laravel.com/)
- [DBngin](https://dbngin.com/)

#### Linux

- [Valet Linux](https://cpriego.github.io/valet-linux/) OR install PHP manually.
- Install your DB of choice locally

## Notes

- Not including a particular payment provider right now as everyone's use case can be different. For most scenarios however I'd recommend a Merchant of Record like LemonSqueezy or Paddle.
- Caddy usage here may be of limited use for you if you use Forge/Ploi/etc.
- Redis is a part of this stack, but filesystem cache & `php artisan queue:work` can probably do just fine for quite a while. However the Horizon integration for visibility is really nice.
- NativePHP might be a good fit here for those who want to do that?
- Should tests run as pre-commit hooks too? On larger test bases and for atomised commits probably a bad idea, so for now no.

## TODO

- Write more on the thinking of each tech choice
- Installation docs
- Get something working with this
- GH actions for Pest
- Livewire + Filament v3
- Filament: Get vite/tailwind config setup for colour customisation
- Consider Folio + Volt
