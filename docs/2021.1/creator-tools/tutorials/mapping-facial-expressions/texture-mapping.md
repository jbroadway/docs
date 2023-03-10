:omit-from-search

# Texture mapping

Texture mapping maps lip syncing to a series of textures that represent your character's visemes. Great for that classic cartoon feel!

Note that you can also power eye blinking and facial expressions (happy, sad, etc.) via the [[:combo-textures mapping]], which can also be used in combination with regular texture mapping.

### Steps

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

![Avatar Model References](https://www.flipsidexr.com/files/docs/screenshots/avatar-model-references.png)

2\. In the Inspector pane, change the **Expression Type** setting to **Textures**.

![Expression types](https://www.flipsidexr.com/files/docs/screenshots/expression-types.png)

3\. Scroll down in the Inspector pane to find the list of textures for each facial expression.

![Applying textures](https://www.flipsidexr.com/files/docs/screenshots/applying-textures.png)

4\. Drag each of your textures into the Project pane, then select them all.

5\. In the Inspector pane, change the following settings then click **Apply**:

* Click **Alpha is Transparency**
* For **Wrap Mode** choose **Clamp**

6\. Drag each of your facial expression textures into the appropriate setting found in step 3.

### Texture mapping tips

* Texture sizes that are square and sized in multiples of 2 (e.g., 128, 256, 512, 1024, 2048) work more optimally in the VR engine.

---

Next: [[:Combo-texture mapping]]
