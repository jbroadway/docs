# ColliderElement

Attaching a ColliderElement to any Collider (Box Collider, Sphere Collider, etc.) in your scene lets you trigger Unity events
on the following interactions:

* **OnEnter** - Do something when an object enters the collider's volume.
* **OnEnterLocalOnly** - Do something when an object enters the collider's volume, but don't sync over multiplayer. Useful for things like haptic feedback.
* **OnExit** - Do something when an object exits the collider's volume.
* **OnExitLocalOnly** - Do something when an object exits the collider's volume, but don't sync over multiplayer. Useful for things like haptic feedback.

You can also limit whether the events on a ColliderElement should trigger for **Everything**, only a user's **Hands**,
only a user's **Index Finger**, a specific **Object List**, or only objects with a **Custom Tag** (see [CustomTag](#customtag) below), to create larger or more fine-grained interactions.

![ColliderElement component](https://www.flipsidexr.com/files/docs/screenshots/collider-element.png)

---

**Next:** [[Creator Tools / References / Custom components]]
