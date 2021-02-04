# Animation parameters mapping

This method is similar to the [[:animation mapping]], but instead of mapping to layers in the animation controller it maps to [animation parameters](https://docs.unity3d.com/Manual/AnimationParameters.html) variables defined within the animator controller, letting you affect the flow of the animation state machine. This gives you finer control over how animations are applied to faces.

> Note: Animation parameters are an advanced feature of the Unity animation system. The following assumes familiarity with the Unity animation system and setting up animation parameters and [blend trees](https://github.com/campfireunion/flipside-creator-tools/pull/250).

### Steps

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

![Avatar Model References](https://www.flipsidexr.com/files/docs/screenshots/avatar-model-references.png)

2\. In the Inspector pane, change the **Expression Type** setting to **Animation Parameters**.

![Expression types](https://www.flipsidexr.com/files/docs/screenshots/expression-types.png)

3\. Scroll down in the Inspector pane and click **Add Component** then add a **Facial Expression Reference** component. Animation parameters mapping will be added to this component instead of via the main **Avatar Model References** component.

4\. On the **Facial Expression Reference** component, drag the skinned mesh renderer from the **Mesh** setting on **Avatar Model References** into the **Skinned Mesh Renderers** list, then change the **Expression Type** to **Animation Parameters**.

5\. Double-click the **Controller** property of the **Animator** component also found on your character's root object. This will open the animator for editing.

![Animation parameters](https://www.flipsidexr.com/files/docs/screenshots/animation-parameters.png)

6\. Click on the parameters tab then click the **+** icon and select **Float** to create new animation parameters.

> Note: Only animation parameters of the type **Float** are supported because the facial expression data is a series of floating point numbers.

7\. Select the root object of your character and scroll down in the Inspector pane to find your **Facial Expression Reference** component. Enter the name of the corresponding animation parameter for each of the expression input fields.

8\. Create your blend trees in the animation controller and set up your animation parameters as usual.

---

Next: [[Creator Tools / Tutorials / Changing the scale of a character]]
