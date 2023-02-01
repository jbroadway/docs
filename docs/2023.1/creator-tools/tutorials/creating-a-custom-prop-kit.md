# Creating a custom prop kit

Once you have the [Flipside Creator Tools](/docs/2021.1/creator-tools) installed and set up, here are the steps to create a custom prop kit you can import into Flipside Studio.

## Overview

Prop kits start as scenes in the Unity game engine. A prop kit is a collection of related props that are bundled together via this Unity scene, but can be used individually in Flipside Studio.

## Structure of a prop kit

Each prop kit is its own Unity scene with a single game object in it that has a [[Creator Tools/References/Custom components/PropKit]] component on it. Each prop kit has a list of props, which are each their own Unity prefabs that live outside of the prop kit scene.

![PropKit scene and component](https://www.flipsidexr.com/files/docs/screenshots/propkit-hierarchy-and-component.png)

## Creating a new prop kit

1\. In Unity, go to **Flipside Creator Tools > Create Prop Kit**. This will open a new **Create Prop Kit** window.

2\. Enter a name for your new prop kit under the **Kit Name** field. When you've entered a valid name, a **Create Kit** button will appear.

![Create prop kit](https://www.flipsidexr.com/files/docs/screenshots/create-prop-kit.png)

3\. Click the **Create Kit** button. This creates and opens a new Unity scene that contains an empty prop kit and put it in a new folder, along with a **Prefabs** subfolder where the prop prefabs will live.

![Prop kit folder](https://www.flipsidexr.com/files/docs/screenshots/prop-kit-folder.png)

4\. Double-click the **Prefabs** folder to open it.

5\. In the main menu, choose **GameObject > 3D Object > Cube** to create a cube object. This will create a new cube in your prop kit scene.

6\. To turn it into a prefab, drag the cube into your **Prefabs** folder, then delete it from your prop kit scene. Save the scene then double-click on the newly-created Cube prefab to open it.

7\. Select the root Cube element in the **Hierarchy** window then in the **Inspector** window, click **Add Component** and type [[Creator Tools/References/Custom components/PropElement]]. Select it to add it to the object. This turns it into a prop prefab that can be included in a prop kit.

![Cube prop](https://www.flipsidexr.com/files/docs/screenshots/cube-prop.png)

9\. Navigate down a folder in the **Project** window and double-click your prop kit scene to reopen it. Select the root object in the **Hierarchy** to highlight it.

10\. On the **PropKit** component in the **Inspector**, increase the **Prop List** from 0 to 1, then find your cube prefab and drag it into the first slot and give it a name. It should look like this when you're done:

![Cube in prop kit](https://www.flipsidexr.com/files/docs/screenshots/cube-in-prop-kit.png)

You now have the most minimal prop kit with one prop included in it.

## Building and publishing your prop kit

When you're ready to build your prop kit and test it out in Flipside Studio, open the Flipside Creator Tools window by going to **Flipside Creator Tools > Open Creator Tools**.

Click the **Build & Publish Prop Kit** button on the Creator Tools wizard. Unity will begin the asset bundle build process, which can takes some time to complete, and may take longer the first time. When the build process has completed,  you'll see a progress bar appear under the **Build & Publish Prop Kit** button showing how far along you are in uploading and publishing your prop kit.

![Flipside Creator Tools - Build & Publish Prop Kit](https://www.flipsidexr.com/files/docs/2023.1/CT_prop-kit-window.png)

When that's finished, you can find your cube prop in Flipside Studio under the **Imported** category of the **Props** menu.

---

Back: [[Creator Tools / Tutorials]]
