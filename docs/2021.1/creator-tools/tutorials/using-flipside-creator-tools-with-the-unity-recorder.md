:omit-from-search

# Using Flipside Creator Tools with the Unity Recorder

The Flipside Creator Tools can be combined with the [Unity Recorder](https://docs.unity3d.com/Packages/com.unity.recorder@2.2/manual/index.html)
to record video or animations directly in the Unity editor.

This gives you the full power of Unity's rendering coupled with all of the interactive
components in the Flipside Creator Tools that can be used to augment Unity's own capabilities.

> This tutorial assumes you have Unity and the Flipside Creator Tools installed already.

## Installing the Unity Recorder package

The first step is to install the Unity Recorder, which can be found under **Window / Package Manager**.

Find the Unity Recorder package, click on it in the list of packages, and click **Install**
in the bottom right corner of the window.

Once this is installed, you can close the Package Manager window.

## Disabling VR mode

For this tutorial, we're going to use the basic example set that comes with the
Flipside Creator Tools. Navigate to **Assets / FlipsideCreatorTools / Examples** in the
**Project** window and double-click the **Example-UnityRecorder** scene to open it.

Next, click on the root object in the **Hierarchy** window to select it and look for
the **SetInfo** component in the **Inspector** window. The first setting on **SetInfo**
should be the following checkbox:

* Disable VR Mode For Testing

If that value is unchecked when you press Play, the Flipside Creator Tools will initialize
your VR setup so you can jump into your scene in VR and test the interactive elements of
your set.

In this case, we want to disable VR mode so that it lets the scene run as it normally
would in Unity, so make sure the checkbox is checked.

## Setting up cameras



## Using the Unity Recorder



---

Next: [[Creator Tools / References]]
