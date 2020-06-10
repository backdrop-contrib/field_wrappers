# Field Wrappers

Using the Field Wrappers module, site administrator will be able to choose HTML 
wrappers for Fields. Normally the Field API uses DIV elements to wrap fields, 
labels and its data.

After the Field Wrappers module has been enabled, you can choose from the 
following default set of markup types as wrapper for your field elements:

 - None (removes the markup)
 - DIV
 - SPAN
 - H1
 - H2
 - H3
 - H4
 - H5
 - H6
 - P
 - STRONG
 - EM
 
If an outer field wrapper is selected, you also have the ability to add a CSS
class to the outer wrapper.

Other modules (or themes) can alter this list using 
`hook_field_wrapper_elements_alter()`.

### Note for Theme Developers:

This module uses a template overwrite for Backdrop's core field.tpl.php. If your
module or theme uses a customized template file for fields, you should take a 
look at this one to make sure the wrappers are printed out correctly.

## Installation

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules

## Issues

Bugs and Feature requests should be reported in the 
[Issue Queue](https://github.com/backdrop-contrib/field_wrappers/issues)

## Current Maintainers

- [Laryn Kragt Bakker](https://github.com/laryn) - [CEDC.org](https://cedc.org)

## Credits

- Ported to Backdrop CMS by [Laryn Kragt Bakker](https://github.com/laryn) - [CEDC.org](https://cedc.org).
- Maintained for Drupal by [skilip](https://www.drupal.org/u/skilip).
- Originally developed for the [Dutch House of Representatives](http://www.houseofrepresentatives.nl/).
- The ability to add a class to the outer wrapper was merged in from the 
  Drupal [Field Formatter Class](https://www.drupal.org/project/field_formatter_class) module.
  Thank you to the maintainers of that module: [andrewmacpherson](https://www.drupal.org/u/andrewmacpherson),
  [pifagor](https://www.drupal.org/u/pifagor), and [mfer](https://www.drupal.org/u/mfer).

## License

This project is GPL v2 software. See the [LICENSE.txt](https://github.com/backdrop-contrib/field_wrappers/blob/1.x-1.x/LICENSE.txt) file in this directory for
complete text.
