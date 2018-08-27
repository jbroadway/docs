# Creating a custom set

Once you have the [Flipside Creator Tools](/docs/1.0/creator-tools) installed and set up,
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

### Set name and attribution

Click on the root object of your set in the **Hierarchy** window and over in the **Inspector** window
you'll see the **Set Info** component. Here you can change the name of your set, as well as settings
like attribution and lighting. The set name and attribution fields are displayed on the set's card
in the Sets palette in Flipside Studio.

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

The Flipside Creator Tools also let you specify certain movable elements of your set. These act like
props that are built right into your set.

To mark an object as a prop element, add a **Prop Element** component to it in the **Inspector**
window. Here you can choose whether your prop is affected by gravity or not, and also assign custom
[Unity events](https://docs.unity3d.com/Manual/UnityEvents.html) to be triggered when the following
interactions happen:

![PropElement component](https://www.flipsidexr.com/files/docs/screenshots/prop-elements.png)

* **On Begin Interaction** - A user grabbed the prop.
* **On End Interaction** - A user let go of the prop.
* **On Use Button Down** - A user pressed the trigger while holding the prop.
* **On Use Button Up** - A user released the trigger while holding the prop.

You'll also notice that when you add a **Prop Element** component, a **Nav Mesh Modifier** is also
added for you automatically with its **Ignore From Build** setting checked. This ensures that props
won't accidentally be included in your teleport area.

> Note: Props brought in as part of a set behave a little differently than props imported on their own.
> They don't appear in the Set Builder palette, but rather where you placed them in the set itself,
> however you _can_ move them around in the Set Builder within Flipside Studio and it will remember their
> new location. But you can't remove them from the set, or add more instances of them like you can with
> imported props. This may change in a future update.

### Cameras

Cameras that you add to a custom set will be imported as camera positions in Flipside's camera switcher.
What makes this really cool is that if a camera has an animation attached, that animation will still
control that camera in Flipside too. This means you can create pretty much any camera move imaginable
and import it into Flipside as part of your custom sets.

You can also attach a **Camera Element** component to your Unity cmaeras, which add two [Unity events](https://docs.unity3d.com/Manual/UnityEvents.html)
that will get triggered when a camera position is activated or deactivated:

![CameraElement component](https://www.flipsidexr.com/files/docs/screenshots/camera-events.png)

* **On Camera Activated** - Fired just before transitioning to a camera position.
* **On Camera Deactivated** - Fired just before transitioning away from a camera position.

These events let you do things like play an animated sequence as your show opening whenever you cut to the
associated camera position.

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

---

Next: [[ Tips and tricks ]]
