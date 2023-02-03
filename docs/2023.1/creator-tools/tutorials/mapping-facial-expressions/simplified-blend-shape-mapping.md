# Simplified blend shape mapping

This method is almost the same as standard [[:blend shape mapping]], except it only uses one shape for lip syncing which represents the "open mouth" state.

The other features like eye movement, blinking, and facial expressions (happy, sad, surprised, angry) all work exactly the same as the standard blend shape mapping.

Since this method only uses the concept of mouth open/closed, it works great for animating Muppet-style characters.

### Steps

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

2\. Expand your character's root object by clicking the arrow next to it in the Hierarchy pane, if it's not already expanded.

![Avatar Model References](https://www.flipsidexr.com/files/docs/screenshots/avatar-model-references.png)

3\. Change the **Expression Type** to be set to **Simplified Blend Shapes**.

![Expression types](https://www.flipsidexr.com/files/docs/screenshots/expression-types.png)

4\. In the Inspector pane, click on the **Skinned Mesh Renderer** referenced in the **Mesh** setting of the **Avatar Model References** component to find the object within your character's hierarchy that has a **Skinned Mesh Renderer** component with a **BlendShapes** list.

If your character has more than one mesh with blend shapes, drag the additional meshes into the **Additional Meshes** list under the main **Mesh** setting.

> Note: Not all Skinned Mesh Renderers have blend shapes. If your character model doesn't have blend shapes defined then they will need to be created in a 3D modeling program such as [Blender](https://www.blender.org/). Here is a short [video tutorial for adding these in Blender](https://www.youtube.com/watch?v=gDZcmAWL2jA).

5\. For each expression found on the **Avatar Model References** component, click **Add Blend Shape** and select the corresponding blend shape from the dropdown list. You can click on the eye icon to preview that blend shape being applied, to verify you've selected the right shape.

![Blend shape selection](https://www.flipsidexr.com/files/docs/screenshots/blend-shape-selection.png)

Repeat step 5 for each expression to complete your face mapping.

### Blend shape mapping tips

* If your character model doesn't have a blend shape that matches one in the **Blend Shape Mappings** list, you can leave it empty.
* Some names in the **Blend Shape Mappings** may map to more than one shape. For example, you may only have a **Smile Left** and **Smile Right**, but no single **Smile/Happy** blend shape. In this case, click **Add Blend Shape** again to map the expression to additional blend shapes.

---

**Next:** [[:Texture mapping]]
