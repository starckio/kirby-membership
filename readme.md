# Membership Plugin

*Version 0.1*

Permet l'enregistrement d'utilisateur pour votre site web

## Installation

Utilisez l'une des alternatives ci-dessous.

### 1. Clone ou téléchargement

1. [Clone](https://github.com/starckio/kirby-membership.git) ou [télécharger](https://github.com/starckio/kirby-membership/archive/master.zip) ce dépôt.
2. Décompressez les archives si nécessaire et renommez le dossier en `membership`.

**Assurez-vous que la structure du dossier du plugin ressemble à ceci:**

```
site/plugins/membership/
```

### 2. Git Submodule

Si vous connaissez votre chemin autour de Git, vous pouvez télécharger ce plugin comme sous-module:

```
$ cd path/to/kirby
$ git submodule add https://github.com/starckio/kirby-membership site/plugins/membership
```

## Installation

### 1. Pages

Rendez-vous dans le panel de Kirby puis créer les pages suivante:
- `Login` avec comme template: `Login`.
- `Account` avec comme template: `Account`.

Les sous-page (Delete, Password, Register et Reset) seront automatiquement ajouté. 

## Utilisation

Pour profiter des liens, ajouter simplement ce code dans votre menu:

```php
<?php if($user = $site->user()): ?>

    <?php if($user->hasPanelAccess()): ?>
    <li><a href="<?= url('panel') ?>">Panel</a></li>
    <?php endif ?>

    <li><a<?php e($pages->find('account')->isOpen(), ' class="active"') ?>  href="<?= url('account') ?>">Account</a></li>
    <li><a href="<?= url('logout') ?>">Logout</a></li>

<?php else: ?>

    <li><a<?php e($pages->find('login')->isOpen(), ' class="active"') ?>  href="<?= url('login') ?>">Login</a></li>
    <li><a<?php e($pages->find('account/register')->isOpen(), ' class="active"') ?>  href="<?= url('account/register') ?>">Register</a></li>

<?php endif ?>
```

## Config

Permet de définir la langue à utiliser.
```php
c::set('membership.language', 'en');
```

## Changelog

**0.1**

- Initial release

## Exigences

- [**Kirby**](https://getkirby.com/) 2.3+

## Avertissement

Ce plugin est fourni "tel quel" sans garantie. Utilisez-le à vos propres risques et testez-le toujours avant de l'utiliser dans un environnement de production. Si vous rencontrez des problèmes, veuillez [créer une nouvelle issue](https://github.com/starckio/kirby-membership/issues/new).

## Licence

[CC-BY-NC-SA — Creative Commons](https://fr.wikipedia.org/wiki/Licence_Creative_Commons)

## Credits

- [Mailgun](https://github.com/mailgun/transactional-email-templates) pour le template des emails.
- [Ce post sur le forum](https://forum.getkirby.com/t/lost-password-plugin/7574/5?u=starckio) qui à permis le développement rapid de ce plugin.

## Leave a donation to thank me (Bitcoin/Altcoin)
- <https://www.starck.io/donate>
