# Flipside Studio Changelog

## 2020.1.1-stable

### Bug fixes

* Fixed an issue causing hands not to work using Flipside Studio on Oculus Quest via Oculus Link
* Fixed an issue loading sets with different names but matching asset bundle labels
* Fixed an issue loading corrupted cached set downloads, also provides error notice with option to retry
* Fixed an issue causing errors in ScreenElement components on sets
* Fixed an issue causing the teleprompter to be visible to cameras
* Fixed an issue with the handheld camera going out of sync over multiplayer
* Fixed an issue with props without gravity drifting over multiplayer
* Fixed an issue with prop center of mass being affected by characters with body physics
* Fixed an issue with incorrect scaling of generated colliders on PropElement objects with no collider
* Vehicle component now finds all teleport targets that are children of it
* Fixed some parts not appearing sitting in chairs on playback
* Prevented ghost mode or build mode users from sticking to teleport targets such as chairs or actor marks
* Fixed pitch issue in the UI sound effects
