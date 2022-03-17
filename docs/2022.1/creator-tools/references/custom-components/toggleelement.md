# ToggleElement

Attaching a ToggleElement instead of a [[:ColliderElement]] works the same way but keeps track of its on/off state so you can do things like turn a light on/off with repeated button presses.

ToggleElement has the following properties to control its behaviour:

* **InitiaState** (On/Off) - Control whether it should start in an Off (default) or On state.

In addition to the OnEnter/OnExit events that it inherits from ColliderElement, ToggleElement adds the following additional Unity event triggers:

* **OnActivated** - Do something when the element enters its On state.
* **OnDeactivated** - Do something when the element enters its Off state.

You can also trigger the toggle to change state by a Unity event in the **Inspector** using the following methods:

* **ToggleState()** - Toggle the current state, triggering either **OnActivated** or **OnDeactivated**.
* **ToggleOn()** - Set the state to **on**, triggering **OnActivated** only if the state was off when this was called.
* **ToggleOff()** - Set the state to **off**, triggering **OnDeactivated** only if the state was on when this was called.

All other options are identical to [[:ColliderElement]].

---

Next: [[Creator Tools / References / Custom components]]
