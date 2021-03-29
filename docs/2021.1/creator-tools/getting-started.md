# Getting started

This page covers how to install, setup, and upgrade the Flipside Creator Tools in order to import your own characters and sets into Flipside Studio.

## [Download Flipside Creator Tools 2021.1.0-stable](https://www.flipsidexr.com/files/downloads/FlipsideCreatorTools-2021.1.0-stable.unitypackage)

**Note:** The Flipside Creator Tools require a specific version of Unity in order to work properly in Flipside Studio.
Please install **Unity 2019.2.11f1** from one of these download links:

- [Unity 2019.2.11f1 for Windows](https://unity3d.com/get-unity/download?thank-you=update&download_nid=63169&os=Win)
- [Unity 2019.2.11f1 for Mac](https://unity3d.com/get-unity/download?thank-you=update&download_nid=63169&os=Mac)

Please see [[Creator Tools / Tutorials / upgrading your characters and sets to Unity 2019]] for instructions on upgrading assets made in Unity 2017.

<!--
### Beta version

Use this version if you opted into the [Flipside Studio Beta](https://www.flipsidexr.com/beta-signup).

* **[Flipside Creator Tools 2020.2.0-beta1](https://www.flipsidexr.com/files/downloads/FlipsideCreatorTools-2020.2.0-beta1.unitypackage)**

This version requires **Unity 2019.2.11f1** (downloads: [Windows](https://unity3d.com/get-unity/download?thank-you=update&download_nid=63169&os=Win), [Mac](https://unity3d.com/get-unity/download?thank-you=update&download_nid=63169&os=Mac)).
-->

## Installation

1. Download and install the correct version of Unity that matches the version of the Flipside Creator Tools above.<br>
   _Note: If you're not on Windows, at the **Choose Components** selection of the installation make sure you choose **Windows Build Support**._
2. Download the latest version of the Flipside Creator Tools.
3. Open Unity and create a new 3D project. The same project can be used to create all of your custom characters and sets.
4. Import the Flipside Creator Tools package from step 2 by choosing _Assets > Import
   Package > Custom Package_ in the Unity application menu.
5. Navigate to **Window > Package Manager** and install either the **Oculus Desktop** or **OpenVR (Desktop)** package, depending on your VR headset. This will let you press Play and preview/test your characters and sets in VR.
6. After installing the Unity package, navigate to **Flipside Creator Tools > Open Creator Tools** to open the Creator Tools wizard. You can dock this window anywhere you like in the editor.

## Signing into your Flipside account

> **Note:** To create a Flipside account, install and launch [Flipside Studio](https://www.flipsidexr.com/get-flipside) through Oculus Home or SteamVR and enter your email address to register for an account.

![Flipside Creator Tools - Sign Into Flipside Account](https://www.flipsidexr.com/files/docs/screenshots/Flipside-Creator-Tools-Sign-Into-Flipside-Account-from-Creator-Tools-window.png)

1. Click the **Sign Into Flipside Account** button in the Creator Tools wizard, or navigate to **Flipside Creator Tools > Sign Into Flipside Account** in the top-level menu.
2. Enter the email address and password associated with your Flipside account in the sign in popup window and click **Sign In**.

You should now be ready to begin using the Flipside Creator Tools to publish custom characters and sets into your Flipside account.

## User interface

The Flipside Creator Tools user interface is primarily made up of 3 elements:

### 1. The Flipside Creator Tools menu

![Flipside Creator Tools menu](https://www.flipsidexr.com/files/docs/screenshots/Flipside-Creator-Tools-Sign-Into-Flipside-Account-from-menu.png)

### 2\. The Flipside Creator Tools wizard

The Flipside Creator Tools wizard can be opened via **Flipside Creator Tools > Open Creator Tools** in the above menu. Here is where you can build and publish your custom characters and sets.

![Flipside Creator Tools wizard](https://www.flipsidexr.com/files/docs/screenshots/Flipside-Creator-Tools-set-menu.png)

### 3\. Various custom components

Flipside Creator Tools includes dozens of custom components that can be used to build interactivity into your custom characters and sets. These are modified by selecting them in the **Hierarchy** window and editing their settings in the **Inspector** window.

These include components like [AvatarModelReferences](/docs/2021.1/creator-tools/references/custom-components/avatarmodelreferences) for configuring custom characters, [SetInfo](/docs/2021.1/creator-tools/references/custom-components/setinfo) for configuring custom sets, and [many more](/docs/2021.1/creator-tools/references/custom-components).

## Examples

You can find example scenes and documentation to help you get started under the **Assets/FlipsideCreatorTools/Examples** and **Assets/FlipsideCreatorTools/Documentation** folders in Unity once you've imported the package. Double click the example scenes to open them and see how things are set up.

## Upgrading

First, always make sure you're still on the correct version of Unity. If not, it's always a good idea to make a backup of your project before upgrading Unity, in case you need to go back.

To upgrade to a new version of the Flipside Creator Tools, download the latest version and import it into your Unity project via **Assets > Import Package > Custom Package** in the Unity application menu.

---

Next: [[: Concepts]]
