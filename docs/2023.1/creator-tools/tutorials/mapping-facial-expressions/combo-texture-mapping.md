# Combo-texture mapping

This method is similar to the [[:texture mapping]], except it supports a different set of texture options. Where [[:texture mapping]] supports each viseme shape being applied to the mouth of the character, combo-textures support the following options:

* Mouth open and closed (no visemes)
* Eyes open and closed (blinking!)
* Four facial expressions (happy, sad, surprised, and angry)

Note that the two can be combined together to achieve more complex texture-based animations. For example, you could apply the regular [[:texture mapping]] to the mouth to achieve more detailed viseme-based mouth movement, and use combo-textures to add blinking eyes and facial expressions.

### Steps

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

![Avatar Model References](https://www.flipsidexr.com/files/docs/screenshots/avatar-model-references.png)

2\. In the Inspector pane, change the **Expression Type** setting to **Combo Textures**.

![Expression types](https://www.flipsidexr.com/files/docs/screenshots/expression-types.png)

3\. Scroll down in the Inspector pane and click **Add Component** then add a **Facial Expression Reference** component. Combo textures will be added to this component instead of via the main **Avatar Model References** component.

4\. On the **Facial Expression Reference** component, change the **Expression Type** to **Combo Textures**.

You'll see a list of available texture options on the **Facial Expression Reference** component. If you want to include blinking texture variants, click the **Use blinking textures** checkbox which will unhide those texture settings as well.

![Applying combo textures](https://www.flipsidexr.com/files/docs/screenshots/applying-combo-textures.png)

5\. Drag each of your textures into the Project pane, then select them all.

6\. In the Inspector pane, change the following settings then click **Apply**:

* Click **Alpha is Transparency**
* For **Wrap Mode** choose **Clamp**

7\. Drag each of your facial expression textures into the appropriate setting found in step 4.

### Texture mapping tips

* Texture sizes that are square and sized in multiples of 2 (e.g., 128, 256, 512, 1024, 2048) work more optimally in the VR engine.

---

**Next:** [[:Animation mapping]]
