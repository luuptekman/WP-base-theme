# Digia WP-Base

## Installation/Usage

1. Clone the repo to WP `themes`-dir, rename the cloned dir, `cd` into and remove `.git`
2. Run `yarn` to install front-end-depencies
3. Run `yarn run config` to setup project
4. Change `package.json` config-section to suit your needs:
* `proxyUrl`: The default development URL where webpack will be proxied to
* `entries`: Scripts & styles which will be compiled to `/dist`-folder. Each entry will be compiled with the name specified with the objects `key`.

```json
"config": {
  "proxyUrl": "http://digiawpbase.dev",
  "entries": {
    "main": [
      "./scripts/main.js",
      "./styles/main.scss"
    ],
    "customizer": [
      "./scripts/customizer.js"
    ],
    "admin": [
      "./admin/backend.js",
      "./admin/backend.scss"
    ]
  }
}
```

4. Run `yarn start` to start `Webpack` to watch & rebuild on asset changes (You have to configure the configs `proxyUrl` to correctly proxy to your dev environment or use `--proxyUrl` flag, e.g. `yarn start --proxyUrl http://site.digiawpbase.dev`)
5. To build for production, run `yarn run prod` which compresses the scripts & styles, disables sourcemaps, copies images from `assets/images` to `dist/images` and creates most common favicons automatically to `icons`-subfolder.


#### Available npm-scripts:
* `yarn start`: Start `webpack`
* `yarn start --proxyUrl http://digiawpbase.dev`: Start webpack with proxy to `http://site.digiawpbase.dev`
* `yarn run prod`: Build assets for production
* `yarn test`: Test scripts
* `yarn run config`: Run project-config (On a fresh clone of this repo)


## Folder Structure

```
├── 1. assets
│   ├── admin
│   │   ├── backend.js
│   │   └── backend.scss
│   ├── dist
│   ├── fonts
│   ├── images
│   ├── scripts
│   │   ├── main
│   │   └── vendor
│   ├── styles
│   │   ├── common
│   │   ├── components
│   │   ├── layouts
│   │   ├── vendor
│   │   └── main.scss
│   ├── webpack
│   │   └── development.js
│   │   └── plugins.js
│   │   └── production.js
│   │   └── webpack.base.js
|
├── 2. custom-templates
│   ├── template.tpl.php
|
├── 3. library
│   ├── classes
│   │   ├── Breadcrumbs.php
│   │   ├── CPT-base.php
│   │   ├── Initalization.php
│   │   ├── Settings.php
│   │   ├── Utils.php
│   │   └── WP-navwalker.php
│   ├── custom-posts
│   ├── functions
│   ├── hooks
│   ├── lang
│   ├── metaboxes
│   └── widgets
|
├── 4. partials
│   ├── components
│   ├── content-excerpt.php
│   ├── content-page.php
│   ├── content-search.php
│   ├── content-single.php
│   ├── content.php
│   ├── no-results-404.php
│   ├── no-results-search.php
│   └── no-results.php
|
├── 5. templates
├── .editorconfig
├── .eslintrc
├── .gitignore
├── .nvmrc
├── functions.php
├── index.php
├── package.json
├── README.md
├── screenshot
└── style.css
└── yarn.lock
```

**1. assets**
Place your images, styles & javascripts here (they get smushed and build to `assets/dist`-folder on WebPack `prod`). Javascripts will be compiled to `admin.min.js` (WP-admin-scripts), `customizer.min.js` (WP Customizer js) and `main.js.min` (the main js-file).

`styles`-dir is divided into smaller sections, each with it's responsibilities:
* `common`: Global functions, settings, mixins & fonts
* `components`: Single components, e.g. buttons, breadcrumbs, paginations etc.
* `layouts`: General layouts for header, different pages, sidebar(s), footer etc.
* `vendor`: 3rd. party components etc. which are not installed through npm.

**2. custom-templates**
* Place your WordPress [custom-templates](https://developer.wordpress.org/themes/template-files-section/page-template-files/) here.

**3. library**
* `classes`: Holds the helper & utility-classes and is autorequired in `functions.php`
* `custom-posts`: Place your custom posts here. See example usage in `books.php.tpl`
* `functions`: The place for misc. helper functions
* `hooks`: The place for WP's `hooks`, `pre_get_posts` etc.
* `lang`: i18n for the theme
* `metaboxes`: Metabox-logic (CMB2 etc.) which is not tied to post-types can be added here
* `widgets`: WP-nav menus & widgets

**4. partials**
Partial files used by wrappers. Place additional partial components to `components`-folder

**5. templates**
WordPress required template-files

## Support

If you run into any trouble, ask [ville.ristimaki@digia.com](mailto:ville.ristimaki@digia.com). He should know the correct answers. If not, you can always ask Niklas. He knows everything.

![niklas](./.github/niklas.gif "Niklas knows everything")
