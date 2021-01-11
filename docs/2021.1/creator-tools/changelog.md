# Flipside Creator Tools Changelog

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
