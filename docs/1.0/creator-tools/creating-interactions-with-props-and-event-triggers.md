# Creating interactions with props and event triggers

The Creator Tools enable you to add interactions to your sets using a handful of simple components. Available components include:

* [PropElement](#propelement)
* [CameraElement](#cameraelement)
* [ColliderElement](#colliderelement)
* [ToggleElement](#toggleelement)
* [ScreenElement](#screenelement)
* [FlipsideActions](#flipsideactions)
* [CustomTag](#customtag)

### PropElement

Attach a PropElement component to any object to make it act like a prop that you can pick up.

PropElement has the following properties to control its behaviour:

* **Gravity** (On/Off) - Control whether the object has gravity applied to it or whether it should float in the air.

PropElement has the following Unity event triggers:

* **OnBeginInteraction** - The user picked up the object.
* **OnUseButtonDown** - The user pressed the trigger button while holding the object.
* **OnUseButtonUp** - The user released the trigger button while holding the object.
* **OnEndInteraction** - The user let go of the object.

![PropElement component](https://www.flipsidexr.com/files/docs/screenshots/prop-elements.png)

### CameraElement

Attaching a Camera Element to any Camera object in your scene lets you trigger Unity events on the following interactions:

* **OnCameraActivated** - Do something when the camera is activated in the Flipside camera switcher.
* **OnCameraDeactivated** - Do something when the camera is deactivated in the Flipside camera switcher.

![CameraElement component](https://www.flipsidexr.com/files/docs/screenshots/camera-events.png)

### ColliderElement

Attaching a ColliderElement to any Collider (Box Collider, Sphere Collider, etc.) in your scene lets you trigger Unity events
on the following interactions:

* **OnEnter** - Do something when an object enters the collider's volume.
* **OnExit** - Do something when an object exits the collider's volume.

You can also limit whether the events on a ColliderElement should trigger for **Everything**, only a user's **Hands**,
only a user's **Index Finger**, a specific **Object List**, or only objects with a **Custom Tag** (see [CustomTag](#customtag) below), to create larger or more fine-grained interactions.

![ColliderElement component](https://www.flipsidexr.com/files/docs/screenshots/collider-element.png)

### ToggleElement

Attaching a ToggleElement instead of a ColliderElement works the same way but keeps track of its on/off state so you can do things like turn a light on/off with repeated button presses.

ToggleElement has the following properties to control its behaviour:

* **InitiaState** (On/Off) - Control whether it should start in an Off (default) or On state.

In addition to the OnEnter/OnExit events that it inherits from ColliderElement, ToggleElement adds the following additional Unity event triggers:

* **OnActivated** - Do something when the element enters its On state.
* **OnDeactivated** - Do something when the element enters its Off state.

All other options are identical to ColliderElement.

### ScreenElement

Attaching a ScreenElement to any object will cause Flipside to replace that object's material with the material you select from the list. Available options include:

* **Slideshow** - Mirror the slideshow output.
* **Main output** - Mirror the main Flipside camera output.
* **Desktop** - Mirror the output of one of your desktop monitors.

![ScreenElement component](https://www.flipsidexr.com/files/docs/screenshots/screen-element.png)

### FlipsideActions

The FlipsideActions component can be used to trigger a limited number of Flipside's internal actions via Unity events through interactions with ColliderElement and ToggleElement. Actions include:

Camera controls:

* **CutToCamera(num)** - Transition to the specified camera using a cut transition, overriding the current transition setting.
* **CutToPOV(num)** - Cut to the specified user's POV (0 is host, others in order they joined).
* **MoveToCamera(num)** - Transition to the specified camera using a move transition, overriding the current transition setting.
* **SetCameraMode(mode)** - Set the camera transition mode to cut (0) or move (1) by default.
* **SetCameraSpeed(speed)** - Set the camera movement speed in meters per second.
* **TransitionToCamera(num)** - Transition to the specified camera using the current camera transition mode.

Slideshow controls:

* **ShowNextSlide()**
* **ShowPreviousSlide()**
* **ShowFirstSlide()**

Scene controls:

* **ChangeSky(id)**
* **ChangeSet(id)**
* **MirrorDesktop(num)**
* **ResetProps()**

To use it, attach **FlipsideActions** to an object in your Unity scene, then drag that object into the Unity event in the Inspector window and select the action you want to trigger.

### CustomTag

Lets you specify a custom tag to limit ColliderElement interactions to specific types of objects only. Tag values can be anything you choose. To use, attach this component to an object and assign it a custom tag of your choosing in the Inspector window, then set the **Custom Tag** option in ColliderElement and ToggleElement components to match.

---

Next: [[:Creating chairs and teleport targets]]
