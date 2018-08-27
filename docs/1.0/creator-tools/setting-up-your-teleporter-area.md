# Setting up your teleporter area

Flipside uses Unity's [NavMesh](https://docs.unity3d.com/Manual/nav-BuildingNavMesh.html) system to define the areas you can teleport within on Flipside sets.

The main component of this is **Nav Mesh Surface**, which is found on the **Contents** object in the scene hierarchy which acts as a container for all of the contents of a set.

### Previewing your changes

The teleporter area will be updated automatically whenever you rebuild your set bundle file, but you will likely want to see the changes you've made before rebuilding. To do this, select the **Contents** object, then click the **Bake** button in its **Nav Mesh Surface** component.

![Teleporter area](https://www.flipsidexr.com/files/docs/screenshots/teleporter-area.png)

The light blue area in the Scene window that appears whenever the **Contents** object is highlighted shows you where the teleporter area is currently defined.

### Ignoring props and other objects

When you mark an object as an interactive prop by adding the **PropElement** component, a **Nav Mesh Modifier** is automatically added too.

To ignore other objects that are not interactive, add the **Nav Mesh Modifier** component and check the **Ignore From Build** checkbox. Note that this means you will be able to teleport over these objects as if they're not there, potentially causing your characters to appear inside of these objects.

![NavMesh Modifier](https://www.flipsidexr.com/files/docs/screenshots/nav-mesh-modifier.png)

### Excluding objects from the teleport area

Unity's NavMesh system will by default assume that you wish to be able to teleport onto any sufficiently large surface area. This can cause the teleporter area to slope up to objects like coffee tables instead of excluding them altogether.

To exclude an object from the teleporter area, add the **Nav Mesh Obstacle** component and check the **Carve** checkbox. This will carve out the area of that object from the teleporter so you can't teleport into or onto it.

![NavMesh Obstacle](https://www.flipsidexr.com/files/docs/screenshots/nav-mesh-obstacle.png)

---

Next: [[ Tips and tricks ]]
