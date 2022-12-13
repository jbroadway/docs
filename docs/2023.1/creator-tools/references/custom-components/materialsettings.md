# MaterialSettings

Lets you set the material or shared material on a MeshRenderer via Unity events, so you can change materials based on actions that occur in the scene.

This component only has one property, the material index, in case your object has multiple materials on it. It offers three custom methods that can be triggered by events:

* **SetMaterial()** - Sets the material property to the specified material.
* **SetSharedMaterial()** - Sets the sharedMaterial property to the specified material.
* **SetMaterialIndex()** - Change the index of the material to be changed.

---

Next: [[Creator Tools / References / Custom components]]
