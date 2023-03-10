:omit-from-search

# Chair

The Chair component enables you to define places in a set where actors can sit. A chair acts as a teleport target so that the Flipside Studio teleporter will lock onto it and when an actor teleports into it, their character will appear in a sitting position.

When you add a Chair component to an object in the scene, it will define three transforms that you can use to customize and fine-tune the sitting position:

* **Seat Position** - This is the position just above the seat where their lower spine bone should be pinned in order to appear sitting.
* **Left Foot Position** - This is the position where the left foot should aim to be relative to the seat.
* **Right Foot Position** - This is the position where the right foot should aim to be relative to the seat.

In practice, sitting isn't a one-size-fits-all solution since characters can vary widely in their proportions. We've designed the Chair component to do its best to accommodate characters with any proportions, for example:

* If a character's thigh bones are too short, they will be shifted forward so their legs don't intersect with the chair.
* If a character's shin bones are too short, their legs will appear to dangle over the edge of the seat instead of stretching unnaturally to reach the foot positions.
* If a character's thigh and shin bones are too long, they will be shifted backwards in the seat within a certain limit and they may appear to be squatting in their seat because the chair is too small for them.

This creates a more realistic sitting position for most characters, but there can still be edge cases where a character won't sit properly without modifications, or sitting positions which are not yet supported, such as sitting cross-legged.

---

Next: [[Creator Tools / References / Custom components]]
