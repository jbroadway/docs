# Creating a custom character

Once you have the [Flipside Creator Tools](/docs/2021.1/creator-tools) installed and set up,
here are the steps to create a custom character for your Flipside shows.

## Creating your character model

Characters in Flipside are 3D models with humanoid rigs (skeletal structures). These can
be made in character creation tools like [Adobe Fuse](http://www.adobe.com/ca/products/fuse.html), [Mixamo](https://www.mixamo.com/#/), [Daz3D](https://www.daz3d.com/), or [VRoid Studio](https://vroid.com/en/studio), or in any 3D modelling program such as
≈ or [Maya](https://www.autodesk.ca/en/products/maya/overview).

Character models must be exported in the FBX file format.

## Importing your character

> Note: For a full video walk through, visit [Bring Your Own Character into Flipside Studio](https://youtu.be/LwEqmwfnu9U).

1\. Import your character's 3D model by dragging the FBX file into your Unity project's **Project** pane.

2\. Select the character model in Unity's **Project** pane, then click on the **Rig** tab in the **Inspector** pane.

3\. Set the **Animation Type** setting to **Humanoid** then click **Apply**.

:gif https://www.flipsidexr.com/files/docs/2023.1/help_2-7_1.mp4

4\. Select the character model in Unity's **Project** pane again, then choose **Flipside Creator Tools > Create Character From Selected Model**. Unity will take some time creating and setting up a scene file that will contain your custom character setup.

5\. When the **Import Options** popup appears you can configure your body physics collider options then click **Generate Colliders & Import**. Don't worry too much about what you choose for now, you can re-run this later if you change your mind or want to try the other options.

:gif https://www.flipsidexr.com/files/docs/2023.1/help_2-7_2.mp4

6\. Select the root object in Unity's **Hierarchy** pane, then look at the **Inspector** pane and find the **AvatarModelReferences** component. This is where you can configure most aspects of your character, from its name and thumbnail shown in Flipside Studio to its facial expressions and more.

:gif https://www.flipsidexr.com/files/docs/2023.1/help_2-7_3.mp4

> Note: There are many configuration options, which you can find in other [[creator tools / tutorials]] on things like [[: mapping facial expressions]], [[: changing the scale of a character]], or [[: adding movement to hair, cloth, and tails]].

At this point, you should have a basic working character that can be published to Flipside Studio or previewed in the Unity editor. To test it out, try pressing play and looking at your character in VR. See the section below on [testing your character before publishing](#testing-your-character-before-publishing) for info on inputs options for testing your character.

# Building and publishing your character

When you're ready to build your character and test it out in Flipside Studio, click the **Build & Publish Character** button on the Creator Tools wizard. Unity will begin the asset bundle build process, which can takes some time to complete, and may take longer the first time. When the build process has completed,  you'll see a progress bar appear under the **Build & Publish Character** button showing how far along you are in uploading and publishing your character.

![Flipside Creator Tools - Build & Publish Character](https://www.flipsidexr.com/files/docs/screenshots/Flipside-Creator-Tools-Build-and-Publish-Chataracter-progress.png)

When that's finished, you will find your character in Flipside Studio under the **Imported Characters** button on the far right of the **Characters** menu categories.

## Testing your character before publishing

In Unity, you can press Play at any time to preview your character in VR. You'll see your character standing in front of you in a T-pose. You can also test its movement to look for any issues with your rig, weight painting, or scale. This helps reduce the time it takes to test your characters and see how they will feel in VR.

The controls are as follows:

### Toggle dance animation

* **Keyboard:** Press the **spacebar** to toggle animation
* **Oculus Touch:** Press **A** or **X** to toggle animation
* **HTC Vive:** Press the **Application Menu** button on either controller to toggle animation

### Test facial expressions

Use the left hand joystick or thumbpad to test facial expressions. The directions map to the following expressions:

* **Up** = **Happy**
* **Down** = **Sad**
* **Back** = **Surprised**
* **Forward** = **Angry**

### Teleporting around your character

Use the right hand joystick or thumbpad to aim then press the index finger trigger to teleport around your character so you can see them from any angle.

## Need help?

[Contact us](/contact) to help you create and import your own custom characters.

---

Next: [[:Mapping facial expressions]]
