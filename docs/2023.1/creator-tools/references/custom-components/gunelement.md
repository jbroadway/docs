# GunElement

The GunElement component enables an object to be fired. GunElement's can fire any object with a BulletElement component attached, which would typically be a prefab. The bullet is fired from the specified **Fire From** transform position along its forward direction with the specified **Velocity** value. Guns can have a bullet limit, can be reloaded by triggering the **Reload()** method from any event.

You can tie event handlers to the following list of events:

* **OnFire** - Called when a bullet has been fired.
* **OnEmptyFire** - Called when the trigger is pulled but the ammo has run out.

![GunElement component](https://www.flipsidexr.com/files/docs/screenshots/gun-element.png)

---

**Next:** [[:HandFollower]]
