# Mapping facial expressions

Flipside's facial expression engine can animate your characters' faces in a variety of ways, including eyes (movement and blinking), facial expressions (happy, sad, surprised, angry), and lip syncing as you speak.

In the [Flipside Creator Tools](/docs/1.0/creator-tools) this is mapped to your character in its **Avatar Model References** component, found in the Unity inspector window when you open your character's scene and click on the root of your character in the scene hierarchy.

There are several methods of mapping facial expressions:

1. [Blend shape mapping](#blend-shape-mapping) - Maps facial expressions to various preset shapes on your character model's face that represent each facial expression, eye blink state, and lip sync [viseme](https://en.wikipedia.org/wiki/Viseme).
2. [Simplified blend shape mapping](#simplified-blend-shape-mapping) - Blend shape mapping with only one shape for lip syncing representing an open mouth state. Great for Muppet-style animation!
3. [Texture mapping](#texture-mapping) - Maps lip syncing to a series of textures that represent your character's face in that position. Ideal for that classic cartoon feel!
4. [Animation mapping](#animation-mapping) - Maps lip syncing to layers in a Unity animation controller. This allows you to animate any serializable fields in your character. This allows much more complex animation systems such as face bones, enabled/disabled objects, and particle systems.

Keep in mind, these systems are in active development, and may change in the future as we improve and expand them!

## Blend shape mapping

Here's a quick overview of how to map blend shapes in the [Flipside Creator Tools](/docs/1.0/creator-tools).

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

## Simplified blend shape mapping

This method is almost the same as standard [blend shape mapping](#blend-shape-mapping), except it only uses one shape for lip syncing which represents the "open mouth" state.

![Simplified blend shape mapping](https://www.flipsidexr.com/files/docs/screenshots/simplified-blend-shapes.png)

The other features like eye movement, blinking, and facial expressions (happy, sad, surprised, angry) all work exactly the same as the standard blend shape mapping.

Since this method only uses the concept of mouth open/closed, it works great for animating Muppet-style characters.

## Texture mapping

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

2\. In the Inspector pane, change the **Expression Type** setting to **Textures**.

3\. Scroll down in the Inspector pane to find the list of textures for each facial expression.

4\. Drag each of your textures into the Project pane, then select them all.

5\. In the Inspector pane, change the following settings then click **Apply**:

* Click **Alpha is Transparency**
* For **Wrap Mode** choose **Clamp**

6\. Drag each of your facial expression textures into the appropriate setting found in step 3.

### Texture mapping tips

* Texture sizes that are square and sized in multiples of 2 (e.g., 128, 256, 512, 1024, 2048) work more optimally in the VR engine.

## Animation mapping

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

2\. In the Inspector pane, change the **Expression Type** setting to **Animation**.

3\. Scroll down a bit and click **Setup Animator**. This will create an animator on the character's head that can be used to create facial animations.

4\. Click on the **Expression Animator** reference, which will highlight the head's GameObject in the scene. Select the head to begin creating animations.

![Animation expressions 3-4](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-3-4.png)

5\. Go to _Window > Animation_ and then with the character's head selected, click **Create** in the Animation window.

6\. Make animations for each viseme you want to use. You can re-use viseme animations if you don't want to make all of the variations.

![Animation expressions 6](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-6.png)

7\. You will need to create a base animation that is a combination of all of the properties used in all of your animations. Make it look how you want your character to look when it is idle. This will stop Unity's animations from adding onto themselves which can cause unwanted artifacts.

![Animation expressions 7](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-7.png)

8\. Select the **Controller** in the head animator. Go to the Animator window (not the _Animation_ window) found at _Window > Animator_. From here, add each animation as the only animation in each animation layer. Be sure to add your base animation to the base layer to keep the animations grounded.

If you only have one talking animation, add it as the animation for each viseme layer in the Animator window.

![Animation expressions 8](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-8.png)

## Need help?

[Contact us](/contact) to help you create and import your own custom characters.

---

Next: [[:Changing the scale of a character]]
