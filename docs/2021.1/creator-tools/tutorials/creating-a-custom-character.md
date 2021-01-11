# Creating a custom character

Once you have the [Flipside Creator Tools](/docs/2021.1/creator-tools) installed and set up,
here are the steps to create a custom character for your Flipside shows.

## Creating your character model

Characters in Flipside are 3D models with humanoid rigs (skeletal structures). These can
be made in character creation tools like [Adobe Fuse](http://www.adobe.com/ca/products/fuse.html)
and [Mixamo](https://www.mixamo.com/#/), or in any 3D modelling program such as
[Blender](https://www.blender.org/) or [Maya](https://www.autodesk.ca/en/products/maya/overview).

Character models must be exported in the FBX file format.

## Importing your character into Flipside

1\. Import your character's 3D model by dragging the FBX file into your Unity project's **Project** pane.

![Flipside Creator Tools - Set Humanoid](https://www.flipsidexr.com/files/docs/screenshots/1-set-humanoid.png)

2\. Select the character model in Unity's **Project** pane, then click on the **Rig** tab in the **Inspector** pane.

3\. Set the **Animation Type** setting to **Humanoid** then click **Apply**.

![Flipside Creator Tools - Import Character](https://www.flipsidexr.com/files/docs/screenshots/2-import-character.png)

4\. Select the character model in Unity's **Project** pane, then click **Continue** in the **Import Your Character** wizard.

5\. Look for any instructions in the **Build Character** wizard and follow them to finish the setup of your character (e.g., lip syncing setup).

![Flipside Creator Tools - Build Character](https://www.flipsidexr.com/files/docs/screenshots/3-build-character.png)

6\. Click **Continue** in the **Build Character** wizard to generate the asset bundle for your character.

![Flipside Creator Tools - Continue to Website](https://www.flipsidexr.com/files/docs/screenshots/4-continue-to-website.png)

7\. Click **Continue to Website** in the **You're Done!** wizard to launch the Flipside Creator Dashboard. Log into your Flipside Creator Account to continue.

8\. Click the **Add Character** link to add a new character. You can find your generated character file at the path specified in the **All Done!** wizard pane, which is in the __AssetBundles__ subfolder of your Unity project with a name like __avatar-123-character-name__ with no file extension.

9\. Relaunch the Flipside app to see your new character in the **Characters** palette.

## Previewing your character before uploading

In Unity, you can press Play at any time to preview your character in VR. You'll see your character standing in front of you in a T-pose. You can also test its movement to look for any issues with your rig, weight painting, or scale. The controls are as follows:

* **Keyboard:** Press the **spacebar** to toggle animation
* **Oculus Touch:** Press **A** or **X** to toggle animation
* **HTC Vive:** Press the **Application Menu** button on either controller to toggle animation

This helps reduce the time it takes to test your characters and see how they will feel in VR.

## Need help?

[Contact us](/contact) to help you create and import your own custom characters.

---

Next: [[:Mapping facial expressions]]
