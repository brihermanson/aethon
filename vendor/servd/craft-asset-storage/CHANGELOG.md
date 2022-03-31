# Release Notes for Servd Assets and Helpers

## 2.5.1 - 2022-02-25

### Changed

- The option to skip the cache for logged in users now differentiates between users who have cp access and not - so front-end-only users don't have to have all static caching disabled when they log in.
- Background tasks for static cache purges now have a priority of 1025 in order to try to get them to run after more important things as they sometimes can take quite a while.

## 2.5.0 - 2022-01-28

### Added

- Added an optional integration with the feed-me plugin to allow feed logs to be pushed to standard log output. This allows Servd to collect and display them using its normal log aggregation services

### Updated

- Rearranged the plugin settings page so that it's a little more organised
- Removed README content and added a link to the relevant Servd docs page

## 2.4.20 - 2022-01-27

### Updated

- Significantly improve the performance of tag-based static cache clearing for sites with a very large number of unique URLs

## 2.4.19 - 2022-01-25

### Updated

- Fire an event in JS when CSRF tokens have been loaded into the DOM if using static caching

## 2.4.18 - 2022-01-24

### Updated

- Ensure objects passed into {% dynamicInclude %} contexts, that do not have an id set, are removed (because they can't be rehydrated later)

## 2.4.17 - 2022-01-18

### Fixed

- 2.4.16 caused another bug when multiple blocks were loaded onto the same page. Now fixed.

## 2.4.16 - 2022-01-18

### Fixed

- Fixed a bug which caused only a subset of `dynamicInclude` blocks to be included in the `dynamicLoaded` JS event.

## 2.4.15 - 2022-01-07

### Fixed

- Fixed a bug (recently introduced by changes to users and permissions in Servd's nginx processes) which prevented static cache purges from working as expected in some circumstances.

## 2.4.14 - 2022-01-06

### Updated

- Changed the download timeout when syncing assets to/from local volumes to 300 seconds instead of the previous 30 seconds.

## 2.4.13 - 2022-01-03

### Fixed

- Image transforms alignments using the (e.g.) 'top-left' syntax were being ignored in Servd asset transform URLs. Now they are not.

## 2.4.12 - 2021-12-28

### Fixed

- Twig extensions were only being registered for 'site' requests which caused problems when rendering templates from a CLI command. This is now fixed.

## 2.4.11 - 2021-12-15

### Updated

- The event which fires when the plugin has loaded in any `{% dynamicInclude %}` content now includes a list of all the blocks which have been added to the DOM, allowing you to target them in JS and do things with them (like init alpine JS objects etc).

## 2.4.10 - 2021-11-25

### Updated

- Allowed Servd powered ImagerX transforms to work when passed an existing ImagerX model instead of an Asset. Not sure why you'd do it, but folk do, and now they can.

## 2.4.9 - 2021-11-18

### Updated

- Added a timeout to the redis connection which clears Servd's static cache. There are now some legitimate situations in which these components might not exist all of the time, but PHP doesn't necesserily know about it. 

## 2.4.8 - 2021-10-20

### Updated

- Disabled SEOMatic's automatic meta inclusion in templates generated by dynamicInclude - they aren't needed and slow things down

## 2.4.7 - 2021-10-20

### Fixed

- Fixed an issue with dynamicInclude blocks which are placed within a loop

## 2.4.6 - 2021-09-17

### Fixed

- Bug fix for projects which don't have commerce installed

## 2.4.5 - 2021-09-15

### Fixed

- A variable check error introduced in 2.4.4 #28

## 2.4.4 - 2021-09-15

### Updated

- Added the Servd Static Cache clear button to commerce product pages

## 2.4.3 - 2021-09-10

### Added

- Added a `--skipDelete` flag for preventing deletion of assets when cloning up or down from the local filesystem.

## 2.4.2 - 2021-09-03

### Updated

- Added a link to the Servd SMTP docs when the sendmail CP alert is shown. This provides information on why sendmail is disabled and also actionable alternative.

## 2.4.1 - 2021-08-27

### Added

- You can now disable image asset transforms and optimisations with a plugin setting. This can be useful if you're using another plugin or service to perform the necessary transforms and you only require the original image's URL.

## 2.4.0 - 2021-07-12

### Added

- You can now specify 'placeholder' on the 'dynamicInclude' tag, and combine with the 'endDynamicInclude' tag, in order to display placeholder content which is visible during dynamic content loading.

## 2.3.3 - 2021-07-09

### Fixed

- Fixed a bug with dynamicIncludes which prevented the plugin from automatically detecting the availability of ESI

## 2.3.2 - 2021-06-14

### Fixed

- Fixed a bug with dynamicIncludes which would strip certain values from context arrays if their keys matched values from Craft's global context

## 2.3.1 - 2021-06-11

### Fixed

- When the static cache is cleared, also clear all associated metadata. This ensures any cached 301/302 redirects are purged.
- dynamicInclude blocks whose responses contain multiple top level nodes no longer break things.

## 2.3.0 - 2021-05-06

### Added

- Support for super simple dynamic content in combination with static caching. Also supports zero-config ESI dynamic content if avaialble on Servd

## 2.2.6 - 2021-04-26

### Updated

- Updated the static cache clear button to purge all URLs associated with an entry, rather than just the one for the default site

## 2.2.5 - 2021-04-12

### Updated

- Altered the method used to detect whether users are logged in when deciding whether or not to skip the static cache for those users

## 2.2.4 - 2021-03-31

### Fixed

- Fixed the 2.2.3 fix which didn't fix the thing it was supposed to fix

## 2.2.3 - 2021-03-30

### Fixed

- Fixed a bug when using a mysql 8 client to locally to pull database dumps from Servd

## 2.2.2 - 2021-03-25

### Fixed

- Tweaked a couple of control panel routes which were throwing access denied errors for non-admin users.

## 2.2.1 - 2021-03-23

### Updated

- Remove composer.json version constraint which was added to prevent an AWS SDK bug from being downloaded (which is now fixed)

## 2.2.0 - 2021-03-22

### Added

- Added local development tooling

### Fixed

- Constrained AWS SDK version to prevent the bugged 3.175 update from being used

## 2.1.16 - 2021-03-08

### Updated

- If another plugin sets the URL for an image or thumbnail stored on the Servd asset platform, don't replace it with a CDN link. (Fixes an issue when using the plugin alongside https://github.com/spicywebau/craft-embedded-assets)

## 2.1.15 - 2021-03-05

### Updated

- Improved warnings and error messages for problems with Servd's asset platform

## 2.1.14 - 2021-03-02

### Added

- Allow Servd's warning banners in the Craft control panel to be suppressed

## 2.1.13 - 2021-02-10

### Updated

- Purge URLs in batches of 50 to ensure the Craft queue doesn't get clogged up when large purge requests are triggered
- Only track static cache tags on URLs which are actually going to be cached

## 2.1.12 - 2021-02-09

### Updated

- Include the triggers for cache purges in the background task for informational purposes

## 2.1.11 - 2021-02-05

### Fixed

- Do not track static cache tags against pages which return a non-200 response code, they won't get cached anyway

## 2.1.10 - 2021-02-04

### Added

- Compatibility with optional GET param inclusion in static cache keys

### Updated

- Improved cache tag garbage collection

## 2.1.9 - 2021-02-03

### Updated

- Further improvements to static cache tagging performance

## 2.1.8 - 2021-02-03

### Fixed

- Fixed a bug which was causing more tags to be associated with statically cached URLs than necessary.

## 2.1.7 - 2021-02-03

### Updated

- Batched redis commands during url <-> tag associations
- Deduplicated static cache tags

## 2.1.6 - 2021-02-03

### Fixed

- Pinned the AWS PHP SDK version allowed to those that do not contain a critical bug: https://github.com/aws/aws-sdk-php/issues/2189

## 2.1.5 - 2021-02-03

### Fixed

- Prevented the S3 URL structure from being mangled by any other competing configurations

## 2.1.4 - 2021-02-01

### Fixed

- Removed use of a deprecated redis call

## 2.1.3 - 2021-01-28

### Added

- Manual control panel button for clearing individual Entries from the static cache
- Protected against a potential error when an asset is deleted while another CP user is doing things

## 2.1.2 - 2021-01-21

### Fixed

- Fixed a bug when using full purge static caching and saving a Craft Section

## 2.1.1 - 2021-01-21

### Fixed

- Fixed an upgrade path error from V1 to V2.1

## 2.1.0 - 2021-01-21

### Added

- Automatic, tag based static cache invalidation

### Deprecated

- CLI command `clear-caches/servd-asset-storage` use `clear-caches/servd-static-cache` instead

### Removed

- Handling of filesystem based static cache which is no longer used

## 2.0.7 - 2021-01-20

### Fixed

- Fixed a bug which prevented the `settings` property from being accessed on a Servd Assets Volume

## 2.0.6 - 2021-01-10

### Fixed

- Fixed a bug which prevented the CDN cache being invalidated for non-image assets when the volume used a subfolder.

## 2.0.5 - 2021-01-05

> {note} This update contains a migration which attempts to maintain any existing custom domains which you have used in previous versions of the plugin. Please double check your volume settings after updating to make sure that this migration has had the intended effect.

### Added
- You can now define fully custom URL structures for source files and optimised images which make use of custom domains. You'll need to provide your own logic (in a Cloudflare worker or Lambda@edge) to proxy this request and convert the URL structure back to Servd's expected format.

### Updated
- Servd asset volumes are now forced to use the correct Base URL to avoid incorrect settings for this value

## 2.0.4 - 2020-12-14

### Added
- The data for the Yii2 Debug Bar will be stored in Redis instead of the filesystem, allowing it to work on ephemeral or load balanced environments.

## 2.0.3 - 2020-12-14

### Added
- You can now clear the CDN cache for the Servd Assets Platform by clicking a button in the Craft CP. This will cause any image transforms to be re-applied and any caches for original files will be destroyed.

## 2.0.2 - 2020-11-30

### Fixed 
- CORS tokens were being injected into pages even when they were disabled. These overexicted tokens are now firmly back under control.

## 2.0.1 - 2020-11-13

### Fixed 
- Graceful handling of a situation in which the $SERVD_ASSETS_ENVIRONMENT is explicitly set in the plugin settings, but the env var doesn't actually exist
- Fixed display of a control panel alert which prompts user to add appropriate plugin settings

## 2.0.0 - 2020-11-08

### Added
- ImageOptimize support for Servd assets platform
- ImagerX support for Servd assets platform (requires ImagerX Pro)
- Control panel warnings for Servd related misconfigurations

### Updated
- Large code refactor to plan for upcoming new features
- Moved Servd Project Slug and Security Key config param to plugin settings instead of volume settings

### Fixed 
- Some things that previously broke, but nobody noticed 🤫
- No default env var fallback for $SERVD_ASSETS_ENVIRONMENT (#11)

### Removed
- Support for Servd's legacy asset platform

## 1.3.12 - 2020-10-17

### Fixed

- Fixed a bug introduced with Craft 3.5 which prevents assets being downloaded from the control panel

## 1.3.11 - 2020-09-11

### Updated
- Only asynchronously load CSRF tokens if there's an element on the page which will actually use it. Reduces precious PHP executions for statically cached sites.

## 1.3.10 - 2020-09-10

### Fixed
- Optimised assets with special characters in their filename were generating an incorrect security token because of some url encoding things. That is now longer the case and everyone can now safely include spaces, copyright symbols or aubergine emojis in their filenames.

## 1.3.9 - 2020-09-03

### Added
- Ability to override the automatically detected environment for assets. This allows, for E.G., developers to use the assets stored in their production environment whilst working locally.

## 1.3.8 - 2020-09-03

### Fixed
- Fixed a typo in the plugin settings

## 1.3.7 - 2020-08-25

### Added
- Ability to disable automatic static cache clearing or restrict it to only occur when entries are saved as part of a control panel request.

## 1.3.6 - 2020-08-07

### Added
- Ability to replace the domain used for optimised images. This allows the use of custom domains for assets stored within the Servd Assets Platform. [Read how].

[Read how]: https://servd.host/docs/can-i-use-my-own-domain-for-assets

## 1.1.0 - 2019-08-09

Added static cache busting on element updates (beta)

## 1.0.0 - 2019-06-30

Initial release.