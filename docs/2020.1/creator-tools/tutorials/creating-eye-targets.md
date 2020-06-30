# Creating eye targets

Eye targets are points of interest that characters would naturally focus on when interacting with them on a set.

To make an object into an eye target is easy, so let's go one step deeper and create a target that is only active for a second or so whenever the object is grabbed, to simulate taking a short interest in the object while interacting with it, then losing interest once a character has it in their hand.

> Note: This tutorial assumes you have an existing set open in the Unity editor with a prop already setup. If you need a set to work with to follow along, open the scene file **Assets/FlipsideCreatorTools/Examples/Example-Set**.

The first step is to click on your prop in the **Hierarchy** window. A prop is any object which has a [[Creator Tools / References / Custom Components / PropElement]] component attached to it.

> If you're using the Example-Set, you can find a prop in the hierarchy at **Example-Set/Contents/Prop station/Props/Prop-default**.

With the prop selected, scroll to the bottom of the **Inspector** window and click the **Add Component** button.

Start typing **EyeTarget** into the search box until you see the **EyeTarget** component, then select it to add it to your prop.

At this point, you have just created a prop that is also an eye target.

Next, to make it only a target of interest when it's first grabbed, uncheck the **Register On Start** checkbox so it doesn't become active automatically when the set loads, then on the **PropElement** component, click the **+** icon under the **OnBeginInteraction** event handler list.

Drag the **EyeTarget** component into the empty component slot that was created under **OnBeginInteraction**.

Lastly, click on the dropdown that says **No Function** and choose **EyeTarget.RegisterForTime (float)**. Set the value from **0** to **1** to tell it to become an active eye target for one second every time the prop is grabbed.

![Prop with temporary eye target](https://www.flipsidexr.com/files/docs/graphics/prop-temp-eye-target.png)

You're now ready to save your scene and rebuild your set bundle for use in Flipside Studio.

See the [[Creator Tools / References / Custom Components / EyeElement]] references for information about each of the **EyeTarget** component's settings and capabilities.

---

Next: [[Creator Tools / Tutorials / Using Flipside Creator Tools with the Unity Recorder]]
