# Creating interactions with props and event triggers

This tutorial is going to walk through setting up a flashlight prop that turns on/off when you grab it and press the trigger.

We will be using three components to do this:

* **Light** - Unity's built-in light component
* **PropElement** - The Flipside component that turns an object into a grabbable prop
* **ToggleElement** - The Flipside component that lets you toggle something between an on and off state

## Creating a new set

For the first step, we're going to create a basic Flipside set where our prop will live.

Go to **File > New Scene** or press **Ctrl+N** in Unity to create a new blank scene.

Next, go to **GameObject > 3D Object > Plane** to create a floor for your set. When you do, Unity may not place it at `(0,0,0)` so take a look at the **Transform** component in the **Inspector** window and make sure the position values are all set to `0`.

Now go to **File > Save** or press **Ctrl+S** to save your scene.

Lastly, go to **Flipside Creator Tools > Create Set From Current Scene**. You should now have a scene that looks like this and is all set up for bundling and uploading.

![The most basic set](https://www.flipsidexr.com/files/docs/tutorials/the-most-basic-set.png)

For fun, I also like to change the sky of the set. Click on the root object of the set and on the **SetInfo** component in the **Inspector** window, set the **Sky ID** to `3`. This will load a slightly cartoony night sky when you press play or load the set in Flipside Studio.

## Creating the flashlight

Go to **GameObject > 3D Object > Cylinder** to create the basic shape of our flashlight. Drag it under **Flashlight / Contents** in your scene hierarchy, which is where all of your set elements should be kept as a general rule.

Select the cylinder object in the hierarchy, and make the following settings changes in the **Inspector** window:

![Flashlight cylinder settings](https://www.flipsidexr.com/files/docs/tutorials/flashlight-cylinder-settings.png)

Next, right-click the flashlight in the **Hierarchy** window and choose **Light > Spotlight** to add a light source as a child of the flashlight object.

Select the light object in the hierarchy, and make the following settings changes in the **Inspector** window:

![Flashlight light settings](https://www.flipsidexr.com/files/docs/tutorials/flashlight-light-settings.png)

## Making the flashlight interactive

With your flashlight prop still selected, scroll to the bottom of the **Inspector** window and click **Add Component**.

Find the **PropElement** component and add it to the object. Uncheck the **Gravity** setting on the **PropElement** component so that the prop will float in the air, making it easier to grab for testing.

> You may notice when you added the **PropElement** component it also adds a **NavMeshModifier** component. This tells Unity to leave props out of the list of objects you can teleport onto.

If you press play in the editor, you should be able to hop into VR and grab your flashlight with a controller now.

Next, add a **ToggleElement** component to the flashlight prop as well. We're going to use this to turn the light on and off when the trigger is pressed.

> You could make a flashlight that works without the **ToggleElement**, but you would have to connect the on/off to grabbing or holding the trigger down while the light is on, which can be tiring. This also lets us show you an example of connecting components together to build more complex interactions.

Under the **PropElement**'s **OnUseButtonDown** event, click the **+** to create a slot for an event handler, then drag the **ToggleElement** component into the empty slot. Then choose **ToggleElement > ToggleState()**.

![Prop and toggle](https://www.flipsidexr.com/files/docs/tutorials/prop-and-toggle.png)

Now the prop is connected to the toggle, and we're ready to configure the **ToggleElement** and connect it to the light.

On the **ToggleElement** component, change the **Trigger For** setting to **Objects** which is a trick to stop the toggle from listening for collider events on the same object that it's on. **Objects** means to only trigger automatically if an object in the **Object List** setting enters it. So if we leave the list empty, it will never fire on its own.

Further down on the **ToggleElement**, click the **++** under both the **OnActivated** and **OnDeactivated** events, then drag the spotlight object from the **Hierarchy** into each of the newly-created empty slots.

For both events, click on the dropdown that says **No Function** and choose **GameObject > SetActive (bool)**.

![Toggle and spotlight](https://www.flipsidexr.com/files/docs/tutorials/toggle-and-spotlight.png)

Lastly, make sure the checkbox is checked under **OnActivated** and unchecked under **OnDeactivated**, and then select the spotlight object in the **Hierarchy** and uncheck the checkbox next to its name in the **Inspector** so that it starts in an off state and turns on when you grab it and press the trigger.

If everything is setup correctly, you should be able to press play in Unity and use your new flashlight. Grab it with a controller and press the trigger to toggle the flashlight on and off again.

![Flashlight prop](https://www.flipsidexr.com/files/docs/tutorials/flashlight-prop.png)

To build your set for use in Flipside Studio, go to **Flipside Creator Tools > Open Creator Tools** then click on the **Build Set Bundle** button. Your flashlight should work just the same in Flipside Studio as it does in the Unity editor.

---

Next: [[:Building interactions with a scoring system]]
