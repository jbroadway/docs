# Interactivity

Interactivity in Flipside Creator Tools can take many forms. Some components introduce different interaction types, such as **PropElement** making an object grabbable, or **GunElement** making a prop able to shoot things. Others let you combine components and events to build up more complex interactivity yourself without writing custom code.

## Unity events

[Unity events](https://docs.unity3d.com/Manual/UnityEvents.html) are a way of attaching new behaviours through the Unity editor that get triggered when something happens inside of a component. They provide the ability to extend the behaviour of a component without writing custom code.

Most of the Flipside Creator Tools [[creator tools / references / custom components]] include Unity events that can be used to trigger additional behaviours in your scene when something happens in those component.

To trigger something connected to an event, drag that component into the event in Unity's **Inspector** window, then select the method to call on that component when the event occurs.

## Interacting with Flipside Studio

We also include the ability to interact with some of the internal Flipside Studio features through the **FlipsideActions** component. This lets you trigger camera moves, change sets or skies, control the slideshow and more, through any Unity event in your custom sets.

---

Next: [[: Asset bundles]]
