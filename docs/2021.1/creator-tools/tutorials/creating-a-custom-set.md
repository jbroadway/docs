# Creating a custom set

Once you have the [Flipside Creator Tools](/docs/2021.1/creator-tools) installed and set up,
here are the steps to create a custom set for your Flipside shows.

## Overview

Sets in Flipside start as scenes in the Unity game engine. You are free to use just about
any Unity features in your sets, including custom 3D models, textures, materials, shaders,
even automatically triggered animations and sounds.

## Structure of a set

Sets have a specific scene hierarchy, which looks like this:

![Set hierarchy](https://www.flipsidexr.com/files/docs/screenshots/set-hierarchy.png)

This is all that's technically needed for a set to work, but we'll go over several features
that make it more useful for you.

## Creating a new set

1. Create a new scene in Unity by choosing **File > New Scene**.
2. Add your basic set elements to your new scene. You can also wait and do this after the remaining steps too.
3. Save your scene file by choosing **File > Save Scenes**. The first time you save your scene you will be asked to choose a file name.
4. Convert your scene into a Flipside set by choosing **Flipside Creator Tools > Create Set From Current Scene**.
5. Save your scene again.

At this point, you should have a basic working set that can be published to Flipside Studio or previewed in the Unity editor. To test it out, try pressing play and looking at your set in VR. You can teleport around using your right hand joystick or thumbpad to aim and pressing the index finger trigger to teleport.

You can also grab and interact with any objects on your set that have a **PropElement** component on them. Just teleport to within reach and grab them using the grab or grip trigger button on your controller.

## Building and publishing your set

When you're ready to build your set and test it out in Flipside Studio, click the **Build & Publish Set**
button on the Creator Tools wizard. Unity will begin the asset bundle build process, which can takes some time to complete, and may take longer the first time. When the build process has completed,  you'll see a progress bar appear under the **Build & Publish Set** button showing how far along you are in uploading and publishing your set.

![Flipside Creator Tools - Build & Publish Set](https://www.flipsidexr.com/files/docs/screenshots/Flipside-Creator-Tools-Build-and-Publish-Set-progress.png)

When that's finished, you can find your set in Flipside Studio under the **Imported Sets** button on the far right of the **Sets** menu categories.

## Customizing your set

There are several aspects of customizing a set, which are broken down into the following sections:

### Set name, attribution, and thumbnail

Click on the root object of your set in the **Hierarchy** window and over in the **Inspector** window you'll see the **Set Info** component. Here you can change the name of your set, as well as settings like attribution and lighting.

The set name, attribution, and thumbnail image fields are displayed on the set's card in the Sets palette in Flipside Studio.

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

For more info, see [[: setting up your teleporter area ]].

### Interactive elements

The Flipside Creator Tools also let you add many kinds of interactive elements to your sets. Take a look at the following pages for info on adding interactivity to your sets:

* [[: Creating interactions with props and event triggers]]
* [[: Building interactions with a scoring system]]
* [[: Triggering Flipside actions]]
* [[: Creating chairs and teleport targets]]
* [[: Creating eye targets]]

### Audience

Sets in Flipside include an **Audience** object that marks where your in-VR audience will appear when
that feature of Flipside Studio is added. You can adjust its position to appear anywhere on set, but
you can only rotate it so it remains upright in order to maintain audience comfort. You can also adjust
its scale so the audience can be larger or smaller than the set, creating an interesting effect for
your viewers.

### Lighting and sky

Lighting is a complex topic that's too big to cover here, but we will go over the available lighting
options in the Flipside Creator Tools. You are free to use Unity's baked lighting to control how
your sets look to a great degree, but not every lighting setting will import into Flipside just yet.

Here are the lighting settings, found on the **Set Info** component on the root set object in your
scene hierarchy:

![SetInfo component](https://www.flipsidexr.com/files/docs/screenshots/setinfo-component.png)

#### Sky ID

Skies in Flipside are separated from sets so that you can do things like change from day to night
on the same physical set. The **Sky ID** field sets the default sky to use when first loading the
set.

You can find the ID for each of your custom skies, as well as Flipside's built-in skies, on the
[skies page](https://www.flipsidexr.com/skies) of your Creator Dashboard.

#### Lighting mode

There are three supported options for **Lighting Mode**, which determine the scene's ambient lighting source:

1. Flat - A single flat color affects the ambient lighting.
2. Trilight - Three colors that make up the sky, equator, and ground affect the ambient lighting.
3. Skybox - The current sky affects the ambient lighting.

The next section, **Flat Ambient Light Color**, lets you set the flat color value, which will only affect
your set if **Lighting Mode** is set to **Flat**.

The **Triling Ambient Colors** section lets you specify your sky, equator, and ground colors, and will
also only affect your set if **Lighting Mode** is set to **Trilight**.

Lastly, there is an **Ambient Intensity** setting, which can contain any value from 0 to 1. This
affects how intense the ambient lighting should appear.

> **Note:** Unity has its own lighting settings in the **Lighting** window, but the settings above will
> automatically override the settings found in the **Lighting** window on import into Flipside Studio,
> and when you press **Play** to preview your set.

### Showing objects to actors but hiding them from cameras

If you want to use an object as an invisible reference for actors that stays invisible to cameras, you
can [change its layer](https://docs.unity3d.com/Manual/Layers.html) to be on the **UI** layer.

Note that if you show the Flipside UI in your camera output, your invisible objects will be shown too.

---

Next: [[:Setting up your teleporter area]]
