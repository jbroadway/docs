# ObjectPoolElement

Provides an object pool you can use to improve performance when needing to instantiate many of the same object, such as a particle effect you reuse throughout a set.

To use it, add the ObjectPoolElement to a game object in your hierarchy, assign a prefab that should be instantiated, and then trigger it to instantiate a copy of your prefab by assigning `ObjectPoolElement.InstantiateAndEnableAt()` to any event in the scene. The method takes a Transform component to use as the position to place the instance of your prefab.

![ObjectPoolElement component](https://www.flipsidexr.com/files/docs/screenshots/object-pool-element.png)

---

Next: [[Creator Tools / References / Custom components]]
