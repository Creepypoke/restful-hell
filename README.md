# Some description

## Contrib Modules

- [RestUI][Module_RestUI]
- [Devel][Module_Devel]
- [Admin Toolbar][Module_Admin_toolbar]
- [Image raw output][Module_Image_raw_output] <http://enzolutions.com/articles/2014/12/09/how-to-create-a-field-formatter-in-drupal-8/>

## Active modules

### Prod env

- Block
- Breakpoint
- Database Loggin
- Field
- Filter
- Internal Dynamic Page Cache
- Internam Page Cache
- Node
- System
- Taxonomy
- Update Manager
- User
- Views
- File
- Image
- Link
- Text
- Hal
- HTTP Basic Authentication
- RESTful Web Services
- Serialization

```sh
$ drush en block, breakpoint, dblog, field, filter, dynamic_page_cache, page_cache, node, system, taxonomy, toolbar, update, user, views, file, image, link, text, hal, basic_auth, rest, serialization -y
```

### Dev env

- Field UI
- Help (for Adminimal Theme)
- Views UI
- Admin Toolbar
- Admin Toolbar Tools
- Devel
- Devel generate
- Devel Kint
- Web Profiler
- Rest UI

```sh
$ drush en field_ui, help, views_ui, admin_toolbar, admin_toolbar_tools, devel, devel_generate, kint, webprofiler, restui -y
```


[Module_RestUI]: <https://www.drupal.org/project/restui>
[Module_Devel]: <https://www.drupal.org/project/devel>
[Module_Admin_toolbar]: <https://www.drupal.org/project/admin_toolbar>
[Module_Image_raw_formatter]: <https://www.drupal.org/project/image_raw_formatter>
