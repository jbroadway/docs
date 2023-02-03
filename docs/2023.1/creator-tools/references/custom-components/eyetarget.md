# EyeTarget

Eye targets define points of interest in the scene that a character's eyes should lock onto when within view.

![EyeTarget component](https://www.flipsidexr.com/files/docs/graphics/eyetarget-component.png)

Eye targets support the following customizable behaviours:

* **Register On Start** - Whether the eye target should be enabled automatically when it's first loaded.
* **Angle Limit** - The limit in degrees from the center of their vision that this object should catch a character's gaze.
* **Angle Weight** - A weight to apply to the angle for each eye target. Since the closest angle is used (lowest in number of degrees), then lower weight values can be used to give eye targets priority over others with higher weights.

You can also link EyeTarget behaviour to Unity events using the following methods:

* **RegisterThis()** - Registers the eye target, enabling it in the system.
* **RemoveThis()** - Removes the eye target from the registry, disabling it in the system.
* **RegisterForTime(time)** - Registers the eye target in the system for the specified number of seconds before automatically removing it. This can be used to create more realistic interactions where a character takes interest in an object when they first hold it, but don't need to target it after the interaction is over.

---

**Next:** [[:FaceMirror]]
