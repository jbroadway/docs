# Creating eye targets

Eye targets are points of interest that characters would naturally focus on when interacting with them on a set. For example, Flipside Studio makes the faces of other characters into eye targets, because people tend to look at each other as part of how they interact with one another.

To add an eye target to an object in a set, select the object in the **Hierarchy** window, then click **Add Component** in the **Inspector** window to add the **EyeTarget** component to it.

![EyeTarget component](https://www.flipsidexr.com/files/docs/graphics/eyetarget-component.png)

The **EyeTarget** component has the following properties:

* **Register On Start** - Should this target auto-activate itself?
* **Angle Limit** - How many degrees from their forward gaze direction until the object will catch a character's gaze.
* **Angle Weight** - If there are multiple targets in close proximity and two are equally in view for a character, the target with the lowest weight will be chosen.

Additionally, targets can be turned on and off dynamically via events triggered in the set. **EyeTarget** provides
the following methods that can be triggered by events:

* **RegisterThis()** - Register this eye target to activate it.
* **RemoveThis()** - Remove this eye target from the list to deactivate it.
* **RegisterForTime(time)** - Register this eye target for the specified number of seconds.

The third option is useful for objects that a character might naturally look at briefly when interacting with it,
but that shouldn't continue to be an active eye target afterwards. An example would be a coffee cup that activates
an eye target for 1-2 seconds when it is grabbed by a character then stops being a focus for them afterwards.

---

Next: [[:Whitelist of allowed components]]
