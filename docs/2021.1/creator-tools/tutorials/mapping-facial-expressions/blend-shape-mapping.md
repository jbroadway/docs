# Blend shape mapping

Here's a quick overview of how to map blend shapes in the [Flipside Creator Tools](/docs/2021.1/creator-tools).

1\. Open your character's Unity scene and select the character in the Hierarchy pane. Make note of where the **Blend Shape Mappings** will be entered in the Inspector pane on the right.

2\. Expand your character's root object by clicking the arrow next to it in the Hierarchy pane, if it's not already expanded.

![Blend shape mapping - step 1](https://www.flipsidexr.com/files/docs/temp/blend-shape-mapping-step-1.png)

3\. In the Inspector pane, click on the **Skinned Mesh Renderer** referenced in the **Mesh** setting of the **Avatar Model References** component to find the object within your character's hierarchy that has a **Skinned Mesh Renderer** component with a **BlendShapes** list.

> Note: Not all Skinned Mesh Renderers have blend shapes. If your character model doesn't have blend shapes defined then they will need to be created in a 3D modeling program such as [Blender](https://www.blender.org/). Here is a short [video tutorial for adding these in Blender](https://www.youtube.com/watch?v=gDZcmAWL2jA).

4\. Expand the **BlendShapes** list if necessary, then take note of the order of their names. Number them starting from zero. You'll use these numbers in the **Blend Shape Mappings** you saw earlier.</p>

![Blend shape mapping - step 2](https://www.flipsidexr.com/files/docs/temp/blend-shape-mapping-step-2.png)

5\. Click on the root object of your character in the Hierarchy pane to get back to the **Blend Shape Mappings** under **Avatar Model References** in the Inspector pane. Enter the number of the blend shape that best matches each name in the **Blend Shape Mappings** list.</p>

![Blend shape mapping - step 3](https://www.flipsidexr.com/files/docs/temp/blend-shape-mapping-step-3.png)

### Blend shape mapping tips

* If your character model doesn't have a blend shape that matches one in the **Blend Shape Mappings** list, you can enter `"-1"` or leave it empty.</li><li>Some names in the **Blend Shape Mappings** may map to more than one shape. For example, you may only have a **Smile Left** and **Smile Right**, but no single **Smile/Happy** blend shape. In this case, enter the matching numbers for left and right, but enter the two numbers separated by a comma in the **Happy Shape** input (e.g., `"12,13"`).

---

Next: [[:Simplified blend shape mapping]]
