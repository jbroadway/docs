# Flipside Studio Changelog

## 2020.1.4-stable

### Bug fixes

* Fixed next button on Recordings palette being broken after deleting a take
* Fixed shader warmup causing slow load times on SteamVR
* Fixed null reference exception in desktop mirror that was causing crashes for some users
* Fixed a bug causing the current state of the set not to be saved correctly
* Fixed a bug when playing back a recording with sitting affecting character loading

## 2020.1.3-stable

### Improvements

* Added support for [PooledAudioElement](https://www.flipsidexr.com/docs/2020.1/creator-tools/references/custom-components/pooledaudioelement) to reserve an audio source from the sound manager

### Bug fixes

* Fixed an issue with Oculus Quest via Oculus Link not selecting the correct microphone
* Fixed a case where bundles wouldn't always update correctly
* Fixed PooledAudioElement sounds not following moving targets
* Fixed disabling a ButtonElement on sets not disabling the Flipside button at runtime
* Fixed an issue with the slideshow starting when no slideshow is present

## 2020.1.2-stable

### Bug fixes

* Fixed `ToggleElement.ToggleState()` not being called indirectly via Unity events
* Date/time on recordings now shows in the correct time zone for all users
* Animators, playables, and audio sources resume when a recording is unloaded
* Fixed rotation to better match vehicle rotations by basing them on head position instead of play area
* Fixed loading cached version of your last-used set on launch if it was deleted
* Added alert for Windows N/KN users to install the Windows Media Feature Pack, which our microphone relies on
* Fixed positioning issues with teleporting into moving targets like vehicles
* `FlipsideActions.TeleportUser()` assigns actors to a TeleportTarget if one is found on the given transform
* Fixed being able to grab a PropElement that is also a chair while sitting in it
* Fixed being able to teleport into a chair that is also a PropElement while holding it
* Fixed being able to aim at and teleport into targets that are not directly on the NavMesh
* Fixed animators pausing incorrectly on first load of a recording
* Improved error handling for characters that fail to load

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
