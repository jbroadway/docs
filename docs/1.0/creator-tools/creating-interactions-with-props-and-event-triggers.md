# Creating interactions with props and event triggers

The Creator Tools enable you to add interactions to your sets using a handful of simple components, including:

### PropElement

Attach a PropElement component to any object to make it act like a prop that you can pick up.

PropElement has the following properties to control its behaviour:

* **Gravity** (On/Off) - Control whether the object has gravity applied to it or whether it should float in the air.

PropElement has the following Unity event triggers:

* **OnBeginInteraction** - The user picked up the object.
* **OnUseButtonDown** - The user pressed the trigger button while holding the object.
* **OnUseButtonUp** - The user released the trigger button while holding the object.
* **OnEndInteraction** - The user let go of the object.

### CameraElement

Attaching a Camera Element to any Camera object in your scene lets you trigger Unity events on the following interactions:

* **OnCameraActivated** - Do something when the camera is activated in the Flipside camera switcher.
* **OnCameraDeactivated** - Do something when the camera is deactivated in the Flipside camera switcher.

### ColliderElement

Attaching a ColliderElement to any Collider (Box Collider, Sphere Collider, etc.) in your scene lets you trigger Unity events
on the following interactions:

* **OnEnter** - Do something when an object enters the collider's volume.
* **OnExit** - Do something when an object exits the collider's volume.

You can also limit whether the events on a ColliderElement should trigger for **Everything**, only a user's **Hands**,
or only a user's **Index Finger** to create larger or more fine-grained interactions.

---

Next: [[ Tips and tricks ]]
