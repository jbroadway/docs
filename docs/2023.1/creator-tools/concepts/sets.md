# Sets

Flipside Creator Tools can be used to import complete Unity scenes for use as virtual sets in Flipside Studio. Scenes can include any kind of 3D model, as well as dozens of verified components that can add functionality to or change the look and feel of your sets.

Scenes are then exported as [[:asset bundles]] for uploading to your account through the Flipside XR website.

>**Note**:  Note: For a full video walk through, visit [Bring Your Own Set into Flipside Studio](https://youtu.be/NRZVqk6wswc).

## Components

Components are Unity's way of adding custom functionality to an object in a scene. Objects will often have certain common components already configured for you, such as the **MeshRenderer** component which makes your objects visible to cameras in the scene and determines how to apply material properties to them.

Other components can be added by selecting the object in Unity's **Hierarchy** window, then adding the component in the **Inspector** window.

Components can enable everything from simple interactions like grabbing props or triggering events when two colliders meet, all the way to complex interactions like mini-games complete with multiplayer scorekeeping.

You can also test them in Unity before importing them into Flipside Studio by pressing Play and jumping into VR directly in the Unity editor. This is a special feature of Flipside Creator Tools that can drastically speed up the set creation process.

## Allowed components

Not all components are created equally, and we have to make sure the components that you will be importing into Flipside Studio won't negatively impact the experience for yourself or other collaborators in your productions.

For this reason, we maintain a [[creator tools / references / whitelist of allowed components]] you can reference when building your sets.

This also includes a number of our own [[creator tools / references / custom components]] which add specific types of interactivity tailored to animation and show creation.

---

Next: [[: Props]]
