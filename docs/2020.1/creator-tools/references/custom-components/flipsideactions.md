# FlipsideActions

The **FlipsideActions** component can be used to trigger a number of Flipside Studio's internal actions via Unity events. It can also be used to listen for internal Flipside Studio events and trigger actions in your set when they occur.

![FlipsideActions component](https://www.flipsidexr.com/files/docs/screenshots/flipsideactions-component.png)

Camera actions include:

* **CutToCamera(num)** - Transition to the specified camera using a cut transition, overriding the current transition setting.
* **CutToPOV(num)** - Cut to the specified user's POV (0 is host, others in order they joined).
* **MoveToCamera(num)** - Transition to the specified camera using a move transition, overriding the current transition setting.
* **SetCameraMode(mode)** - Set the camera transition mode to cut (0) or move (1) by default.
* **SetCameraSpeed(speed)** - Set the camera movement speed in meters per second.
* **TransitionToCamera(num)** - Transition to the specified camera using the current camera transition mode.

Slideshow actions include:

* **ShowNextSlide()** - Show next slide.
* **ShowPreviousSlide()** - Show previous slide.
* **ShowFirstSlide()** - Show the first slide.

Scene actions include:

* **ChangeSky(id)** - Change the skybox.
* **ChangeSet(id)** - Change the set.
* **MirrorDesktop(num)** - Set the desktop mirror to mirror the specified screen.
* **ResetProps()** - Reset the props on the set.

User actions include:

* **SetAvatar(id)** - Change the avatar of the local user.
* **TeleportUser(target)** - Teleport the local user to a new location in the set.
* **TriggerLeftHandHaptics(val)** - Trigger a haptic pulse on the left hand of the local user.
* **TriggerRightHandHaptics(val)** - Trigger a haptic pulse on the right hand of the local user.

Internal Flipside events you can listen for:

* **OnPreload** - Trigger events before the set has been show to users.
* **OnDisplay** - Trigger events timed to the set being shown to users.
* **OnHide** - Trigger events timed to the set being hidden from users.
* **OnStart** - Trigger events when a Flipside recording is started.
* **OnPause** - Trigger events when a Flipside recording is paused.
* **OnResume** - Trigger events when a Flipside recording is resumed.
* **OnStop** - Trigger events when a Flipside recording is stopped.
* **OnRewind** - Trigger events when a Flipside recording is rewound.

To use it, attach **FlipsideActions** to an object in your Unity scene, then drag that object into the Unity event in the Inspector window and select the action you want to trigger.

---

Next: [[Creator Tools / References / Custom components]]
