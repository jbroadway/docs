# Characters

Flipside Creator Tools can be used to import custom characters into Flipside Studio. These are most often imported into Unity as [FBX files](https://www.autodesk.com/products/fbx/overview) from other 3D software such as [Blender](https://www.blender.org), [Maya](https://www.autodesk.ca/en/products/maya/overview), [Daz3D](https://www.daz3d.com), and others.

Character models are converted to Unity scenes, which you can then test and configure to your liking, before being exported as [[:asset bundles]] for uploading to your account through the Flipside XR website.

> **Note**: For a full video walk through, visit [Bring Your Own Characters into Flipside Studio](https://youtu.be/LwEqmwfnu9U).

## Rigged models

In order to work in Flipside Studio, characters must be properly rigged using a humanoid skeletal setup which maps to Unity's [humanoid animation system](https://docs.unity3d.com/Manual/UsingHumanoidChars.html). If you have a character that is not rigged, or is in an alternate file format such as OBJ, you can try using Adobe [Mixamo](https://www.mixamo.com/#/) to convert it to a rigged model for you.

Rigging is a deep topic in 3D modelling. [Click here to learn more about rigging in Blender.](https://docs.blender.org/manual/en/2.79/rigging/index.html)

## Animating faces

Flipside Creator Tools supports several methods of animating faces. In Flipside Studio, these are animated automatically as you talk by analyzing your voice's audio.

![Flipside Creator Tools - Expression types](https://www.flipsidexr.com/files/docs/2023.1/CT_expression-types.png) 

Methods of setting up a face to be animated include:

* **[Blend shapes](/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/blend-shape-mapping)** - Blend shapes, also called morph targets in some 3D software, are a series of preset poses embedded into a 3D mesh that software like Unity can blend between to create facial expressions and other effects. Flipside Creator Tools can use blend shapes to animate eyes blinking, expressions (happy, sad, etc.), and lip sync positions (called visemes).
* **[Simplified blend shapes](/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/simplified-blend-shape-mapping)** - This mode is similar to blend shapes except instead of having a shape for each lip sync position (aka viseme), there are only shapes for open and closed mouth. Think of it like Muppets with their mouths only opening and closing.
* **[Textures](/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/texture-mapping)** - Given a series of images (in 3D programs, these are called textures), Flipside Studio can choose between them to best represent the current state of a character's face. This creates a more traditional animation style where the face isn't 3D but rather it appears drawn onto the character. Textures supports visemes for lip syncing, but not things like blinking or expressions.
* **[Combo textures](/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/combo-texture-mapping)** - This is a more advanced version of the textures mode, which adds blinking and facial expressions, but only supports open and closed mouth positions instead of the complete set of lip sync visemes.
* **[Animation](/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/animation-mapping)** - This mode maps the Flipside Studio animated faces to Unity's [animation system](https://docs.unity3d.com/Manual/AnimationOverview.html), blending between a series of animations. This can be used for more fine-grained control over things like blend shapes, or to create additional effects that aren't possible using the other methods.
* **[Animation parameters](/docs/2021.1/creator-tools/tutorials/mapping-facial-expressions/animation-parameters-mapping)** - This mode maps Flipside Studio animated faces to Unity [animation parameters](https://docs.unity3d.com/Manual/AnimationParameters.html) for more flexible control over how animations are applied.

Using multiple **FacialExpressionReference** components on a character enables you to combine any of the above methods to achieve the look you're going for.

## Facial expressions

Flipside Creator Tools lets you configure four different facial expressions:

* Happy
* Sad
* Surprised
* Angry

These map to the left hand joystick in Flipside Studio, where up is happy, down is sad, left is surprised, and right is angry.

As VR headsets evolve to include face tracking, we will expand on the expressiveness to include more accurate facial expressions.

---

Next: [[: Sets]]
