# Flipside Creator Tools Changelog

## 2023.2.0-beta3

### Improvements

- Improved gizmos representing the audience component and audience member spawn positions

## 2023.1.8-stable

No changes. Version bump to maintain parity across apps.

## 2023.1.7-stable

### Improvements

- Added a warning if Windows or Android build targets are missing from their Unity installation
- Added a sitting setting to audience seat positions

## 2023.1.6-stable

No changes. Version bump to maintain parity across apps.

## 2023.1.5-stable

No changes. Version bump to maintain parity across apps.

## 2023.1.4-stable

No changes. Version bump to maintain parity across apps.

## 2023.1.3-stable

### Bug fixes

- Made prop list non-reorderable in prop kits to fix Unity rendering glitch

## 2023.1.2-stable

No changes. Version bump to maintain parity across apps.

## 2023.1.1-stable

No changes. Version bump to maintain parity across apps.

## 2023.1.0-stable

### Improvements

- Adds support for building Android-compatible bundles for custom assets.
- Prop kits add the ability to build kits of custom props with interactive elements in Unity.
- VideoElement enables embedding videos in sets, with fully automatable controls.
- ObsElement enables OBS scene switching from actions in sets.
- OscElement enables control of scene automation through external OSC-compatible controllers.
- Added support for Magica Cloth for better performance of cloth and hair physics.
- Many new methods on FlipsideActions for controlling muting and other things.
- More example scenes that demonstrate how to use various custom components.

## 2021.1.8-stable

### Improvements

- Added date and time to published message to more easily distinguish when publishing incremental changes

### Bug fixes

- Improved error handling to handle more cases where publishing assets may fail

## 2021.1.7-stable

No changes. Version bump to maintain parity across apps.

## 2021.1.6-stable

No changes. Version bump to maintain parity across apps.

## 2021.1.5-stable

No changes. Version bump to maintain parity across apps.

## 2021.1.4-stable

No changes. Version bump to maintain parity across apps.

## 2021.1.3-stable

### Bug fixes

* Removed timeout limit when publishing characters and sets

## 2021.1.2-stable

No changes. Version bump to maintain parity across apps.

## 2021.1.1-stable

### Improvements

* Added example set for the new TeleprompterElement
* Added lineHeight property to TeleprompterElement to fine-tune autoscrolling
* Added bent elbow settings to AvatarModelReferences
* Added option to build bundles without publishing for easier sharing

### Bug fixes

* Fixed issue preventing building if characters have lights attached

## 2021.1.0-stable

### Improvements

* Added one-click publishing of characters and sets directly in Unity
* Added ability to import and convert BVH files exported from Flipside Studio into Unity animations
* Added new [FaceMirror](https://www.flipsidexr.com/docs/2021.1/creator-tools/references/custom-components/facemirror) component for animating faces on non-characters
* Added new [AnimationParameters](https://www.flipsidexr.com/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/animationparameters) face mapping for finer control over animation behaviour
* Added checkboxes to disable applying SetInfo's lighting and skybox settings in editor so Creator Tools plays nice with custom settings for in-editor renders
* Added example scene for the [PooledAudioElement](https://www.flipsidexr.com/docs/2021.1/creator-tools/references/custom-components/pooledaudioelement) component
* Added alternate image setting to [ScreenElement](https://www.flipsidexr.com/docs/2021.1/creator-tools/references/custom-components/screenelement) component to use when there are no slides
* Added ability for Creator Tools to continue working as a lightweight VR framework in Unity builds (to enable, just add a `FLIPSIDE_CREATOR_TOOLS` build symbol)

### Bug fixes

* Fixed index trigger sensitivity for more accurate use in testing scenes
* Various other minor fixes

## 2020.1.4-stable

### Bug fixes

* Fixed regression that was affecting in-VR preview in the Unity editor

## 2020.1.3-stable

### Improvements

* Made the warning about using the wrong version of Unity much more visible
* Added a wrapper object when a [Chair](https://www.flipsidexr.com/docs/2021.1/creator-tools/references/custom-components/chair) component is added directly to a mesh, making rotation fixes easier
* Added a series of auto-fixes to common problems with scene hierarchies
* Added `reserve` property to [PooledAudioElement](https://www.flipsidexr.com/docs/2021.1/creator-tools/references/custom-components/pooledaudioelement) to prevent a source from being recycled while still in use

### Bug fixes

* Fixed PooledAudioElement sounds following moving targets
* Fixed camera settings being changed when pressing Play to preview in editor
* Fixed error in the body collider generator where a failure to calculate bounds creates infinitely large colliders (aka Flipside Creator Tools takes infinity on for size)

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
