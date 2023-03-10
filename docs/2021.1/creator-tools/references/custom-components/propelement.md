:omit-from-search

# PropElement

Attach a PropElement component to any object to make it act like a prop that you can pick up.

PropElement has the following properties to control its behaviour:

* **Gravity** (On/Off) - Control whether the object has gravity applied to it or whether it should float in the air.

PropElement has the following Unity event triggers:

* **OnBeginInteraction** - The user picked up the object.
* **OnUseButtonDown** - The user pressed the trigger button while holding the object.
* **OnUseButtonUp** - The user released the trigger button while holding the object.
* **OnEndInteraction** - The user let go of the object.

![PropElement component](https://www.flipsidexr.com/files/docs/screenshots/prop-elements.png)

You'll also notice that when you add a **Prop Element** component, a **Nav Mesh Modifier** is also
added for you automatically with its **Ignore From Build** setting checked. This ensures that props
don't cause issues with your teleport area.

> Note: Props brought in as part of a set behave a little differently than props imported on their own.
> They don't appear in the Set Builder palette, but rather where you placed them in the set itself,
> however you _can_ move them around in the Set Builder within Flipside Studio and it will remember their
> new location, as well as in saved setups. But you can't remove them from the set, or add more instances
> of them like you can with imported props. This may change in a future update.

---

Next: [[Creator Tools / References / Custom components]]
