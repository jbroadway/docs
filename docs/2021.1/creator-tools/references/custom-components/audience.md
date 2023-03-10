:omit-from-search

# Audience

Audience is a component that controls how an immersive audience should experience a Flipside show in VR. This is a hint at things to come in a future update of the Flipside suite of products. The concept is that the audience moves together as a group through the experience, enabling immersive experiences to be more like an amusement park ride than a static couch for you and your friends.

Properties you can control through the Audience component include:

* **Positions** - An optional list of positions that the audience may appear at in the scene and move between.
* **Seats** - An optional list of overridden seat positions within the audience area. If left empty, a default set of positions will be generated automatically.
* **Align Seats By** - Whether to align the users to the seat positions by their current head position or by their VR play area. Play area is useful in cases where the experience is designed for standing instead of sitting.

Additionally, you can trigger the following methods on the Audience component from Unity events:

* **MoveTo(positionNumber)** - Move the audience from the current position to the specified position number, which start counting from zero.
* **FadeTo(positionNumber)** - Fade the audience out and make them appear at the specified position number when they fade back in, which start counting from zero.
* **SetMovementSpeed(speed)** - Sets the speed the audience should move at from one position to the next. Speed is a constant value to ensure a comfortable experience for users (acceleration/deceleration can cause simulator sickness), and must be above zero and less than 4 meters per second.
* **SetFadeSpeed(speed)** - Sets the time it should take for the audience to fade out and back into a new position. Speed must be above zero and under 1 second.

---

Next: [[Creator Tools / References / Custom components]]
