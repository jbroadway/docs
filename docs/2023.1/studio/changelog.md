# Flipside Studio Changelog

## 2023.1.7-stable

### Improvements

- Added ability to hide or mute individual parts in a recording
- Added ability to remove individual parts from a recording
- Upgraded Ready Player Me integration to version 2.0, which includes some performance improvements
- Upgraded Android SDK version to 32

### Bug fixes

- Fixed case where motion capture of two characters could get merged into one glitchy take
- Fixed audio not always playing back on more complex or longer recordings
- Fixed cameras getting added in playback for remote users
- Fixed a case where a user could get stuck in a chair and appear to be planking

## 2023.1.6-stable

### Improvements

- Added a new AI script generator to the Scripts menu that you can use to generate dialogue and monologue ideas

### Bug fixes

- Fixed a regression that caused overdubbed parts to be recorded incorrectly
- Fixed not broadcasting script changes to others over multiplayer

## 2023.1.5-stable

### Bug fixes

- Fixed the keyboard appearing over the user registration form, making it difficult to complete the registration process
- Fixed rotating in place affecting your subsequent orientation in the scene and in playback
- Fixed a bug where cameras added while recording would get re-added in playback

## 2023.1.4-stable

### Improvements

- Added a beta version of an AI set generator you can find under **Sets > All Sets > Imported** where you can describe a set and watch it appear around you. AI-generated sets are 360 panoramic images and are saved to your imported sets so you can use them again and again
- Added a voice input button to the left of the spacebar on our virtual keyboard so you can input data just by talking
- Added an @ symbol button to the right of the spacebar on our virtual keyboard so it's easier to enter email addresses
- Added the Flipside Broadcaster download link to the Flipside Studio popup when you click Start Casting
- Added a confirmation step to the email entry so users have a chance to verify what they entered before submitting
- Added beta support for Japanese characters (Hiragana, Katakana and Joyo Kanji) in the teleprompter
- Added red, yellow and blue tinted lights to the Show Tools category
- Poses now show as your invisible outline until you teleport away so you get visual feedback of the pose being created
- Added "Start Cast" button to the main menu
- Improved server capacity to handle sudden bursts of traffic from loading scenes with larger numbers of parts
- Slight improvements to lip sync responsiveness

### Bug fixes

- Fixed a crashing issue in Flipside Broadcaster that was affecting some users (if anyone still has crashes, please [let us know!](https://www.flipsidexr.com/docs/2023.1/getting-help))
- Fixed not being able to rotate while sitting
- Fixed characters appearing discoloured when you stop puppeteering
- Fixed rotating your character being able to disconnect your position from your character
- Fixed scrolling on the scripts menu so you can access more than 7 scripts again
- Fixed button state inconsistencies on the "Start Cast" buttons
- Fixed an issue with Ready Player Me deleting avatars that were still in use

## 2023.1.3-stable

### Improvements

- Added the ability to lock individual props so you can't accidentally grab them while performing (to unlock, hover over the prop and press the menu button to open its settings menu)
- Added the ability to lock all props as a global setting so ghost mode users can't accidentally grab them while a performance is underway
- Added a position number to the slideshow so you always know which slide you're on
- Added a new tutorial to the help menu about getting your content out of Flipside Studio

### Bug fixes

- Fixed an issue with the video capture device plugin working with OBS (note: requires reinstalling the plugin through Flipside Broadcaster settings or Flipside Studio for Rift desktop settings menu)
- Fixed a case where the record button wasn't disabled when playback was in progress
- Fixed puppet mode from working correctly in playback
- Fixed characters freezing in a T-pose if they were puppeteering while another user joins them in multiplayer
- Fixed a leftover actor mark in the blank set after the onboarding tutorial is skipped
- Disabled the ability to resize actor marks, poses and chairs
- Fixed camera shake and movement speed settings being inconsistent over multiplayer and in Flipside Broadcaster
- Fixed loading a take with characters sitting initially having them standing

## 2023.1.2-stable

### Improvements

- Implemented a new feature that allows users to delete Ready Player Me avatars from their Flipside Studio account.
- Made minor UI/UX enhancements to improve overall user experience.

### Bug Fixes

- Resolved audio looping issues when spatial audio is enabled.
- Audio looping no longer happens when a headset wakes up from sleep mode.
- Stand-ins now consistently display the correct pose.
- Removed unnecessary button on the sets menu.
- Resolved the date and time issue affecting international users.

**2023.1.1-stable**

Release-day hotfix update.

## 2023.1.0-stable

### Improvements

- Now available on Meta Quest!
- Supports Ready Player Me as another option in the Characters menu
- Supports Meta Quest hand tracking
- Cast to the new Flipside Broadcaster desktop app that integrates seamlessly with the Flipside camera system
- Completely redesigned user interface
  - Consistent point-and-click interface across all menus including cameras and other show tools
  - New onboarding tutorial teaches all the core features of the app
  - New dashboard for quick actions on launch
  - Tooltips to remind you of the controller inputs
  - Ergonomic hand menu for quick access to all core features
- Projects let you share and collaborate with remote teams
- Collaborate with up to 10 people at a time over multiplayer
- And much more!

## 2021.1.8-stable

### Improvements

- Added a panel version of the desktop mirror in Show Tools which is hidden from cameras

### Bug fixes

- Fixed broken teleporter on Oculus via SteamVR via Virtual Desktop
- Fixed characters failing to load if there was an empty element in their Additional Meshes list

## 2021.1.7-stable

### Bug fixes

* Fixed an input issue preventing selection of characters and sets when using Oculus via SteamVR

## 2021.1.6-stable

### Bug fixes

* Fixed compatibility issues with Windows Mixed Reality headsets through SteamVR
* Changed the menu show/hide for Oculus users on SteamVR to a joystick press since SteamVR overrides the menu button

## 2021.1.5-stable

### Bug fixes

* Fixed a regression causing second screen output to be 720 instead of 1080

## 2021.1.4-stable

### Improvements

* Upgraded server-based multiplayer to the faster Normcore 2
* Minor performance improvements

## 2021.1.3-stable

### Bug fixes

* Fixed an issue with exporting finger movements
* Fixed an issue with calibrating with Vive trackers then calibrating again without

## 2021.1.2-stable

### Bug fixes

* Fixed puppet mode causing character to disappear on camera

## 2021.1.1-stable

### Bug fixes

* Fixed issue with characters without fingers becoming unable to grab
* Fixed issue with seats not calculating distance from torso to head correctly
* Fixed issue with seats not positioning correctly in playback
* Fixed issue preventing "no" option from being selected in Delete Setup confirmation
* Reduced collider size on controllers for more accurate menu interactions
* Fixed floor mark under actor marks and poses from appearing on camera in set builder mode

## 2021.1.0-stable

### Improvements

* Full body motion capture data export as BVH, which can be converted into Unity animations via the Creator Tools plugin, or Blender animations via an all-new Blender plugin
* Video renderer which supports MP4, PNG or EXR image sequences, depth maps, and more, including a background render queue
* Export separate audio tracks for each actor's part as WAV files
* All-new retargeting system substantially improves character movement
* Stand-ins let you freeze actors in poses that become actor marks you can also teleport into to get into character and position
* Full hand tracking is now supported when using the Valve Index controllers
* Ambient Occlusion can be enabled under Settings > Output
* Microphone settings have been moved to their own tab, with added settings to control lip sync gain, noise gate, and compression
* Teleprompter now supports Latin, Greek, Cyrillic, Thai, and Tamil character sets (more will be added in future updates).

### Bug fixes

* Fixed null references in PooledAudioElement that can happen during shutdown
* Fixed a case where a JSON parsing error could break the background sync and stop recordings from appearing on the palette

## 2020.1.4-stable

### Bug fixes

* Fixed next button on Recordings palette being broken after deleting a take
* Fixed shader warmup causing slow load times on SteamVR
* Fixed null reference exception in desktop mirror that was causing crashes for some users
* Fixed a bug causing the current state of the set not to be saved correctly
* Fixed a bug when playing back a recording with sitting affecting character loading

## 2020.1.3-stable

### Improvements

* Added support for [PooledAudioElement](https://www.flipsidexr.com/docs/2021.1/creator-tools/references/custom-components/pooledaudioelement) to reserve an audio source from the sound manager

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
