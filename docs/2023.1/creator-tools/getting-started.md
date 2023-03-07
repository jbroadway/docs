# Getting started

This page covers how to install, setup, and upgrade the Flipside Creator Tools in order to import your own characters and sets into Flipside Studio.

## Download and Install Unity 3D

**Step 1.** Download Unity Hub and register for a Unity 3D account. Personal licences are free.
* [Unity Hub for Windows](https://public-cdn.cloud.unity3d.com/hub/prod/UnityHubSetup.exe?_ga=2.166748798.1307484007.1678024982-1364010468.1666787266&_gac=1.183541588.1677269485.Cj0KCQiA3eGfBhCeARIsACpJNU_JVAEqrpS1TNp1HuWngfehHZw-2hbj07A-_xUg7q5EyLUOD6QvjoMaAvxxEALw_wcB)
* [Unity Hub for Mac](https://public-cdn.cloud.unity3d.com/hub/prod/UnityHubSetup.dmg?_ga=2.166748798.1307484007.1678024982-1364010468.1666787266&_gac=1.183541588.1677269485.Cj0KCQiA3eGfBhCeARIsACpJNU_JVAEqrpS1TNp1HuWngfehHZw-2hbj07A-_xUg7q5EyLUOD6QvjoMaAvxxEALw_wcB)

**Step 2.** Download Unity via Unity Hub

* [Download Unity 2020.3.36](unityhub://2020.3.36f1/71f96b79b9f0). This requires Unity Hub, so make sure you've completed the previous step.

> **Important**: Flipside Creator Tools require a specific version of Unity in order to work properly in Flipside Studio.

When asked if you want the install to occur in Unity Hub, answer **Yes**. 

> **Note:** At the Choose Components selection of the installation, make sure you choose Android Build Support and Windows Build Support in order to build assets for both Quest and PCVR.

## Download and Import Flipside Creator Tools into your Unity Project

**Step 1.** Download the latest version of the Flipside Creator Tools.

To download Flipside Creator Tools, log into the [Creator Portal](https://www.flipsidexr.com/user) on the Flipside XR website and go to the **Downloads** tab.

**Step 2.** Open Unity and create a new 3D project. The same project can be used to create multiple characters and sets or you can split them up into multiple projects which makes building and publishing individual character and set changes a little faster.

**Step 3.**  Import the Flipside Creator Tools package from step 2 by choosing **Assets > Import Package > Custom Package** in the Unity application menu.

> **Note:** If you're upgrading an existing Flipside Creator Tools project from an older version of Unity, always be sure to **back up your project before upgrading**.

**Step 4.**  Navigate to **Window > Package Manager** in Unity and install either the **Oculus Desktop** or **OpenVR (Desktop)** package, depending on your VR headset. This will let you press Play and preview/test your characters and sets in VR.

**Step 5.**  After installing the Unity package, navigate to **Flipside Creator Tools > Open Flipside Creator Tools** to open the Creator Tools wizard. You can dock this window anywhere you like in the editor.


## Sign into your Flipside account

**Step 1**. Click the **Sign Into Flipside Account** button in the Creator Tools wizard, or navigate to **Flipside Creator Tools > Sign Into Flipside Account** in the top-level menu.

**Step 2**. Enter the email address and password associated with your Flipside account in the sign in popup window and click **Sign In**.

You should now be ready to begin using the Flipside Creator Tools to publish custom characters and sets into your Flipside account.


## Flipside Creator Tools User interface

The Flipside Creator Tools user interface is primarily made up of 3 elements:

### 1\. The Flipside Creator Tools menu

![Flipside Creator Tools menu](https://www.flipsidexr.com/files/docs/2023.1/CT_tab.png)

### 2\. The Flipside Creator Tools wizard

The Flipside Creator Tools wizard can be opened via **Flipside Creator Tools > Open Creator Tools** in the above menu. Here is where you can build and publish your custom characters and sets.

![Flipside Creator Tools wizard](https://www.flipsidexr.com/files/docs/2023.1/CT_window.png)

### 3\. Various custom components

Flipside Creator Tools includes dozens of custom components that can be used to build interactivity into your custom characters and sets. These are modified by selecting them in the **Hierarchy** window and editing their settings in the **Inspector** window.

These include components like [AvatarModelReferences](/docs/2021.1/creator-tools/references/custom-components/avatarmodelreferences) for configuring custom characters, [SetInfo](/docs/2021.1/creator-tools/references/custom-components/setinfo) for configuring custom sets, and [many more](/docs/2021.1/creator-tools/references/custom-components).


## Flipside Creator Tools Examples

You can find example scenes and documentation to help you get started under the **Assets/FlipsideCreatorTools/Examples** and **Assets/FlipsideCreatorTools/Documentation** folders in Unity once you've imported the package. Double click the example scenes to open them and see how things are set up.


## Upgrading to a new version of Flipside Creator Tools

First, always make sure you're still on the correct version of Unity. If not, it's always a good idea to make a backup of your project before upgrading Unity, in case you need to go back.

To upgrade to a new version of the Flipside Creator Tools, download the latest version and import it into your Unity project via **Assets > Import Package > Custom Package** in the Unity application menu.

---

**Next:** [[: Tutorials]]
