# Creating chairs and teleport targets

Teleport targets are a way to let Flipside Studio users snap themselves into consistent, preset positions on your sets using their teleporter. This helps actors to be on their marks, and helps directors frame their shots.

There are two types of teleport targets:

* TeleportTarget - Standing targets
* Chair - Sitting targets

### TeleportTarget

To create a teleport target, right-click the **Contents** object in your scene's **Hierarchy** window and choose **Create Empty** to create an empty game object. You can rename it at the top of the **Inspector** window to something more descriptive like _Target A_.

Next, with your new game object highlighted in the hierarchy, click on the **Add Component** button in the **Inspector** and choose **TeleportTarget**. You'll see an X appear in the **Scene** window where your game object is positioned, as shown in the following screenshot:

![TeleportTarget component](https://www.flipsidexr.com/files/docs/graphics/teleport-target.png)

Move and rotate your game object to the position you want users to appear at. The blue arrow shows the direction they will be facing.

### Chair

To create a sitting target, select the object you want to place the target on in your scene's **Hierarchy** window. In the **Inspector** window, click on the **Add Component** button and choose **Chair**. You'll see three new objects added under it in the scene hierarchy named:

* Seat
* Left Foot
* Right Foot

Adjust the position of each of these three components to adjust where the character should sit and where their feet should go. You'll see the reference lines change in the **Scene** window as you move them. Here's how they would look after being positioned on a standard Unity cube object:

![Chair component](https://www.flipsidexr.com/files/docs/graphics/chair-target.png)

---

Next: [[:Creating eye targets]]
