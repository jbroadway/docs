# Installation and setup

This page covers how to install, setup, and upgrade the [Flipside Creator Tools](/docs/1.0/creator-tools) in order to import your own characters and sets into Flipside Studio.

## Download

> **Note:** The Flipside Creator Tools require a specific version of Unity in order to work properly in Flipside Studio.

### Stable version

Use this version if you are using the stable version of Flipside Studio.

* **[Flipside Creator Tools v0.25](/files/downloads/FlipsideCreatorTools-v0.25.unitypackage)**

This version works with **Unity 2017.4.22f1** (downloads: [Windows](https://unity3d.com/get-unity/download?thank-you=update&download_nid=61174&os=Win), [Mac](https://unity3d.com/get-unity/download?thank-you=update&download_nid=61174&os=Mac)).

### Beta version

Use this version if you opted into the [Flipside Studio Beta](https://www.flipsidexr.com/beta-signup).

* **[Flipside Creator Tools v0.32](/files/downloads/FlipsideCreatorTools-v0.32.unitypackage)**

This version works with **Unity 2019.2.11f1** (downloads: [Windows](https://unity3d.com/get-unity/download?thank-you=update&download_nid=63169&os=Win), [Mac](https://unity3d.com/get-unity/download?thank-you=update&download_nid=63169&os=Mac)).

> **Note:** Please see [[> upgrading your characters and sets to Unity 2019]] for more detailed instructions on upgrading your assets.

## Installation

1. Download and install the correct version of Unity that matches the version of the Flipside Creator Tools above. _Note: If you're not on Windows, at the **Choose Components** selection of the installation make sure you choose **Windows Build Support**._
2. Download the latest version of the [Flipside Creator Tools](/docs/1.0/creator-tools).
3. Open Unity and create a new 3D project. The same project can be used to create all of your custom characters and sets.
4. Import the Flipside Creator Tools package from step 2 by choosing _Assets > Import
   Package > Custom Package_ in the Unity application menu.
5. After installing the Unity package, navigate to _Flipside Creator Tools > Open Creator Tools_ to open the Creator Tools wizard. You can dock this window anywhere you like in the editor.
6. Navigate to _Window > Package Manager_ and install either the **Oculus Desktop** or **OpenVR (Desktop)** package, depending on your VR headset. This will let you press Play and preview/test your characters and sets in VR.

![Flipside Creator Tools - Set Flipside Creator ID](https://www.flipsidexr.com/files/docs/screenshots/flipside-creator-tools-enter-id.png)

> **Note:** To obtain a Flipside Creator ID, install and launch Flipside Studio through Oculus Home or SteamVR and enter your email address to register for an account.

## Upgrading

First, always make sure you're still on the correct version of Unity. If not, it's always a good idea to make a backup of your project before upgrading Unity, in case you need to go back.

To upgrade to a new version of the [Flipside Creator Tools](/docs/1.0/creator-tools), download the latest version and import it into your Unity project via _Assets > Import Package > Custom Package_ in the Unity application menu.

> **Note:** Please see [[:upgrading your characters and sets to Unity 2019]] for more detailed instructions on upgrading your assets.

## Setting your Flipside Creator ID

1. Click the **Continue** button in the **Set Flipside Creator ID** wizard. This will open the **FlipsideSettings** object in Unity's **Inspector** pane.
2. Click the **Find My ID Online** button to be taken to
   your Flipside Creator profile, where you will see your **Flipside Creator ID** in
   your profile info. _Note: You may need to log in to see your profile info._
3. Click on your **Flipside Creator ID** on your profile page to copy it to your
   clipboard, then paste it into the **Flipside Creator ID** field in the **Inspector**
   pane.

You should now be ready to begin using the Flipside Creator Tools.

## Examples

You can find example scenes and documentation to help you get started under the `Assets/FlipsideCreatorTools/Examples` and `Assets/FlipsideCreatorTools/Documentation` folders in Unity once you've imported the package. Double click the example scenes to open them and see how things are set up.

---

Next: [[:Creating a custom character]]
