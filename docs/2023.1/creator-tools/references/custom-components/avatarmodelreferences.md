# AvatarModelReferences

**AvatarModelReferences** is the component that is used to define custom characters. It is the only required component on a character, and should be placed on the root object in the character's scene. It is usually added automatically for you when you choose **Flipside Creator Tools / Create Character From Selected Model**.

**AvatarModelReferences** has the following properties you can customize:

* **Center Eye** - This is where your eyes will line up with the character. Usually you want this to line up with the character's eyes, but sometimes that's not possible and you'll need to adjust where you want to see out of to best puppet characters with exaggerated proportions.
* **Eyes** - A list of objects in the character's hierarchy that should rotate as eyes.
* **Ignore Eye Targets** - Whether a character should recognize eye targets or not.
* **Mesh** - The main SkinnedMeshRenderer component of your character model. This is the mesh that has your blend shapes on it, for example, if you're using the Blend Shapes expression type.
* **Additional Meshes** - A list of additional meshes to mirror changes onto.
* **Animator** - The animator that controls the character's body, including hand positions.
* **Expression Type** - This sets how the face is animated. [See here for more info on the various expression types](/docs/2021.1/creator-tools/concepts/characters).
* **Wrist Settings**
  * **Left Wrist Twist Bones** - A list of twist bones to help avoid pinching on the left wrist.
  * **Right Wrist Twist Bones** - A list of twist bones to help avoid pinching on the right wrist.

Additional properties are available depending on the chosen expression type.

You'll also see a **Resource Usage** section at the bottom of the **AvatarModelReferences** component, which provides you with info about the resources that your character will use in Flipside Studio, as well as recommended limits for PC and mobile VR platforms.

---

**Next:** [[:bulletelement]]
