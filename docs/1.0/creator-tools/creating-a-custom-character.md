# Creating a custom character

Once you have the [Flipside Creator Tools](/docs/1.0/creator-tools) installed and set up,
here are the steps to create a custom character for your Flipside shows.

## Creating your character model

Characters in Flipside are 3D models with humanoid rigs (skeletal structures). These can
be made in character creation tools like [Adobe Fuse](http://www.adobe.com/ca/products/fuse.html)
and [Mixamo](https://www.mixamo.com/#/), or in any 3D modelling program such as
[Blender](https://www.blender.org/) or [Maya](https://www.autodesk.ca/en/products/maya/overview).

Character models must be exported in the FBX file format.

## Importing your character into Flipside

1. Import your character's 3D model by dragging the FBX file into your Unity project's
   **Project** pane.
2. Select the character model in Unity's **Project** pane, then click on the **Rig** tab
   in the **Inspector** pane.
3. Set the **Animation Type** setting to **Humanoid** then click **Apply**.
4. Select the character model in Unity's **Project** pane, then go to _Flipside Creator
   Tools > Create Character With Selected Model_ in the application menu.
5. Select your newly-generated character in Unity's **Hierarchy** pane then look at
   the **Inspector** pane for the _Avatar Model References_ component. If it lists
   any **TO DO List** items, follow the instructions for each one and click
   **Fix References** after each to-do has been done.
6. Go to _Window > AssetBundle Browser_ and select the **Build** tab. Click **Build**
   to generate the asset bundle for your character.
7. Log into your Flipside Creator Account at [www.flipsidexr.com/user](https://www.flipsidexr.com/user)
   and click on the **Characters** link.
8. Find and upload the generated asset bundle file for your character. It should be
   in your project under the folder _AssetBundles/StandaloneWindows_ and named
   something like _avatar-123-character-name_.
9. Relaunch the Flipside app to see your new character in the **Characters** palette.

## Need help?

[Contact us](/contact) to help you create and import your own custom characters.

---

Next: [[:Creating a custom set]]
