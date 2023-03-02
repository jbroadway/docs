# Triggering Flipside actions

The [[Creator Tools / References / Custom components / FlipsideActions]] component can be used to trigger a number of Flipside Studio's internal actions via Unity events. It can also be used to listen for internal Flipside Studio events and trigger actions in your set when they occur.

You can add a **FlipsideActions** component to any object in the scene, and only one is required in the scene which can be shared between all components that you want listening for or triggering events in Flipside Studio, however, there's no harm in having multiple instances too.

## Triggering actions in Flipside Studio

Here are the steps to trigger a camera move:

1. Add a **ColliderElement** to an object on your set. When this is touched, it will trigger a camera change in Flipside Studio.
2. Add a **FlipsideActions** component to your scene.
3. On the **ColliderElement**, click the **+** under the **OnEnter** event, then drag the **FlipsideActions** component into the newly-created empty slot.
4. In the dropdown that says **No Function**, choose **FlipsideActions.MoveToCamera**.
5. Set the camera number to be whatever camera you want in to move to, starting with **0** for the first camera.

Here's how it should look once it's all setup:

![FlipsideActions component](https://www.flipsidexr.com/files/docs/screenshots/flipsideactions-component.png)

## Triggering actions in your set from internal Flipside Studio events

Here are the steps to trigger an event in your scene when an internal action occurs in Flipside Studio:

1. Add an **AudioSource** component to your scene.
2. Next, add a **FlipsideActions** component to your scene.
3. Click the **+** under the **OnDisplay** event on the newly-added **FlipsideActions** component.
4. Drag the **AudioSource** into the newly-created empty slot.
5. In the dropdown that says **No Function**, choose **AudioSource.PlayOneShot**.
6. Assign an audio clip to be played when the event occurs.

In Flipside Studio, you should hear your audio clip play whenever the set is finished loading and fades into view.

You can trigger actions in your sets on a number of internal Flipside Studio events. For a full list, see the [[Creator Tools / References / Custom components / FlipsideActions]] component reference.

---

Next: [[:Creating chairs and teleport targets]]
