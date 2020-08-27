# Flipside Creator Tools Changelog

## 2020.1.2-stable

### Improvements

* Improved body physics collider generator, including minimal, default, and full options
* Added **RecordInitialPosition** component to record correct initial positions for non-prop objects on set
* Added new floor dimension and position snapping options to **TeleportTarget**, along with gizmos to help visualize your customizations

## 2020.1.1-stable

### Bug fixes

* Fixed velocity not resetting for some objects after TeleportObjectTo is fired
* Fixed collision detection mode when PropElement creates its own Rigidbody
* Automatically fixes sets if objects aren't placed inside the root object
