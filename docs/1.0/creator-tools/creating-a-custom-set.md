# Creating a custom set

Once you have the [Flipside Creator Tools](/docs/1.0/creator-tools) installed and set up,
here are the steps to create a custom set for your Flipside shows.

## Overview

Sets in Flipside start as scenes in the Unity game engine. You are free to use just about
any Unity features in your sets, including custom 3D models, textures, materials, shaders,
even automatically triggered animations and sounds.

## Structure of a set

Sets have a specific scene hierarchy, which looks like this:

    Scene Name (SetInfo)
        Contents (NavMeshSurface)
		    Your Set Elements Go Here

This is all that's technically needed for a set to work, but we'll go over several features
that make it more useful for you.

## Creating a new set

1. Create a new scene in Unity by choosing _File > New Scene_.
2. Add your basic set elements to your new scene. You can also wait and do this after these steps too.
2. Save your scene file by choosing _File > Save Scenes_. The first time you save your scene you will be asked to choose a file name.
3. Convert your scene into a Flipside set by choosing _Flipside Creator Tools > Create Set From Current Scene_.
4. Save your scene again.

At this point, you should see the **Custom Set** wizard in Unity's Scene window. It contains
some basic instructions about building and previewing your set, as well as a **Build Set Bundle**
link.

![Custom Set wizard](https://www.flipsidexr.com/files/docs/screenshots/custom-set-wizard.png)

## Building your set

When you're ready to build your set and test it out in Flipside itself, click the **Build Set Bundle**
button and it will generate a bundle file that you can [upload here](/sets) in your Creator Dashboard.

After you've built your set bundle the first time, the **Custom Set** wizard options will change to
**Rebuild Set Bundle** and **Find Set Bundle File**. This second button will locate your set bundle
in Windows Explorer so you can more easily find it when uploading it to your Creator Dashboard.

![Custom Set wizard](https://www.flipsidexr.com/files/docs/screenshots/custom-set-wizard-rebuild.png)

## Customizing your set

There are several aspects of customizing a set, which are broken down into the following sections:

### Teleport area

Flipside defines where you can teleport within your set using Unity's NavMesh feature. If you look
at the **Contents** object in your scene hierarchy, you'll see it has a **Nav Mesh Surface** component
attached to it in the Inspector window.

When you want to make changes to your teleport area, and you want to preview your changes, click
on your **Contents** object and in the **Inspector** window, click the **Bake** button. When it's
done baking your NavMesh changes, you should see the teleport area highlighted in a light blue color.

To exclude an object from the teleport area, add a **Nav Mesh Modifier** component to that object
in the **Inspector** window and make sure the **Ignore From Build** checkbox is checked. Make sure
to re-bake the NavMesh changes in order to see the change applied.

![NavMesh modifier](https://www.flipsidexr.com/files/docs/screenshots/navmesh-modifier.png)

You can read all about Unity's [NavMesh feature here](https://docs.unity3d.com/Manual/NavMesh-BuildingComponents.html).

### Static elements

The Flipside Creator Tools let you specify certain non-moving, or static, elements of your set. This
helps Flipside's Set Builder understand how to work with your set, and are completely optional.

![StaticElement component](https://www.flipsidexr.com/files/docs/screenshots/static-elements.png)

To mark an object as a static element, add a **Static Element** component to it in the **Inspector**
window, then choose the type of element that it is. There are four static element types you can choose:

1. Floor
2. Wall
3. Ceiling
4. Seat

### Prop elements

### Lighting and sky

---

Next: [[ Tips and tricks ]]
