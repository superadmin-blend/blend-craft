# Piwik IP2Location Plugin

### Description

This IP2Location plugin enables more accurate location lookup in your Piwik visitor log.

You need a IP2Location BIN database to make this plugin works. Database is available for free at

http://lite.ip2location.com or http://www.ip2location.com for a commercial database.



### Installation / Update

See http://piwik.org/faq/plugins/#faq_21



### Change Log

__3.0.0__

- Removed compatibilities with Piwik 2.x. Version [2.3.0](https://github.com/ip2location/ip2location-piwik/releases/tag/2.3.0) is the last version supporting Piwik 2.x.
- Prevented plugin from overwrite existing location provider.
- Appeared as a separated location provider under admin area.
- Supported visitor log and live view directly in admin area.
- Database file no longer stored within plugin folder to prevent deletion/modification during updates.
- Database file is stored in `/path/to/piwik/misc/` starting this version.

__2.3.2__

* Fixed error when BIN file is not readable. Added backward compatible.

__2.3.0__
* Updated to IP2Location PHP 8.0.2 library.

__2.2.0__
* Added custom report to view additional information such as Time Zone, ZIP code, usage type.

__2.1.0__
* Updated to IP2Location 7.0.0 library

__2.0.0__
* First release for Piwik 2.0



### License

GPL v3 / fair use



### Support

Please contact us at support@ip2location.com
