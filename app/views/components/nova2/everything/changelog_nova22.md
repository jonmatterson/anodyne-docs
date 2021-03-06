## 2.2.3 <small>7 April 2013</small>

### Bug Fixes

* Some users have reported errors being thrown during the update process that prevent them from moving up to newer versions of Nova. We've attempted to create a fix for this, but since we haven't been able to recreate the issue, this may or may not work.

## 2.2.2 <small>27 March 2013</small>

### Bug Fixes

* Fixed error thrown when managing NPCs. (Thanks to evshell18 for the fix and pull request.)
* Fixed issue where users without `wiki/categories` permissions couldn't create or edit wiki pages. ([#239](https://github.com/anodyne/nova/issues/239))

## 2.2.1 <small>09 March 2013</small>

### Bug Fixes

* The update notification box always shows up.

## 2.2.0 <small>15 February 2013</small>

* Added reply to header to most of the emails that are sent from Nova. ([#217](https://github.com/anodyne/nova/issues/217))
* Update author listings to provide links to each character's bio page. Thanks to Jordan Jay for his MOD to do this. We've expanded on his idea to provide this functionality for mission posts, personal logs, news items, wiki pages and comments. ([#223](https://github.com/anodyne/nova/issues/223))
* Removed the SMS Archive feature since it's no longer needed.

### Nova Core

* Updated the characters model to allow retrieving specific field information by ID or field_name. ([#216](https://github.com/anodyne/nova/issues/216))
* Updated the docking model to allow retrieving specific field information by ID or field_name. ([#216](https://github.com/anodyne/nova/issues/216))
* Updated the specs model to allow retrieving specific field information by ID or field_name. ([#216](https://github.com/anodyne/nova/issues/216))
* Updated the tour model to allow retrieving specific field information by ID or field_name. ([#216](https://github.com/anodyne/nova/issues/216))
* Updated copyright dates in source code. ([#224](https://github.com/anodyne/nova/issues/224))

### Bug Fixes

* When viewing a mission post that doesn't exist, Nova throws a fatal error. ([#233](https://github.com/anodyne/nova/issues/233))
* When using the tour form, Nova throws an error.
* Sub-department names and descriptions weren't displayed properly when managing positions. ([#232](https://github.com/anodyne/nova/issues/232))
* A missing closing tag on the character bio management page caused display problems.
* When upgrading from SMS, system administrators didn't have the proper flags set.
* When using the personal logs RSS feed, the link to the entry went to the view post page, not the view log page. ([#234](https://github.com/anodyne/nova/issues/234))