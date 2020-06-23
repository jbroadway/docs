# Cameras

Flipside Studio features a sophisticated camera system that can be used to achieve just about any shot you might need.

## Cameras on set

Cameras can be added to a set through the **Set Builder / Show Tools** menu. Grab as many cameras as you need and position them anywhere you'd like. You can also adjust the field of view while holding a camera and zooming with that controller's joystick.

Camera settings are saved in their latest state, but it can be easy to accidentally make changes during production and to want to go back to a known state. For this reason, Flipside Studio has the ability to save setups of a dressed set, which includes all props and camera positions.

> Note: When a recording is loaded, loading a different saved setup will only replace the cameras and leave the props as they are in the recording. This can be used to save multiple camera setups for the same recorded scene.

## Camera switchers

Flipside Studio lets you switch cameras from either inside or outside of VR. The desktop camera switcher is also where you can access settings like the ones described below.

The VR camera switcher can be found through the **Set Builder / Show Tools** menu, and will follow you as you teleport or move around the set.

From either camera switcher, you can cut or move between camera positions. Move will do a smooth spherical interpolation between the two positions using the speed and easing settings defined in the settings window.

## Post processing and other effects

Flipside Studio supports an ever-expanding list of effects and settings to control the look of your output. These include:

* Camera movement speed
* Camera movement easing
* Enable/disable bloom filter
* Bloom filter intensity
* Enable/disable shadows
* Shadow type (hard/soft)
* Shadow resolution

## Integrating with Unity's built-in cameras and Cinemachine

Sometimes the built-in camera movements aren't enough to achieve a given effect. For this reason, Flipside Studio integrates with Unity's own camera system, including Cinemachine, for just about unlimited flexibility. Unity cameras are imported as part of your custom sets.

Unity cameras and Cinemachine virtual cameras appear alongside built-in cameras in both camera switchers, and cutting between them is as easy as pushing a button.

---

Next: [[: Multiplayer]]
