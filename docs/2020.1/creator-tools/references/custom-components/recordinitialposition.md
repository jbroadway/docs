:omit-from-search

# RecordInitialPosition

The RecordInitialPosition component tells Flipside Studio to record the initial position of any object it's placed on, and then reset that position on playback.
This can be used to ensure objects that may move around but are not props moved by the actors themselves will replay consistently.

Properties:

* **autoChangePosition** - Whether to automatically update the stored position based on the object moving more than the **positionThreshold**. If set to false, you must call **ChangedPosition()** whenever the object is moved.
* **positionThreshold** - Threshold at which a change in position is saved, measured in metres.
* **rotationThreshold** - Threshold at which a change in rotation is saved, measured in degrees.

Methods:

* **ChangedPosition()** - If not auto-changing position, call this whenever you change the position of the object.

---

Next: [[Creator Tools / References / Custom components]]
