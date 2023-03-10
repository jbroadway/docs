:omit-from-search

# Building interactions with a scoring system

This tutorial is going to walk though building a very simple "mini game" with a simple scoring system. The game will involve throwing balls at a target for points.

We will be introducing several new Flipside Creator Tools components to do this:

* [[Creator Tools / References / Custom components / PropElement]] - Turns an object into a grabbable prop
* [[Creator Tools / References / Custom components / ThrowableElement]] - Connects PropElement components to the scoring system.
* [[Creator Tools / References / Custom components / TargetElement]] - Adds points when a user hits it with a ThrowableElement or BulletElement.
* [[Creator Tools / References / Custom components / ScoreboardElement]] - Keeps track of scores for each user in the scene, and optionally displays them.
* [[Creator Tools / References / Custom components / PooledAudioElement]] - Uses the Flipside Studio audio manager to manage audio playback performance.
* [[Creator Tools / References / Custom components / TeleportObjectTo]] - Teleports an object to a given position whenever it is triggered by an event.
* [[Creator Tools / References / Custom components / TeleportObjectsOnContact]] - Triggers **TeleportObjectTo** components to fire when they come into contact with it.

> To see a complete example of how these components can be used, open the **Example-ScoringSystem** scene in the `Assets/FlipsideCreatorTools/Examples` folder in your [Flipside Creator Tools installation](/docs/2020.1/creator-tools/getting-started).

## Creating a new set

For the first step, we're going to ceate a basic Flipside set where our game will live.

Go to **File > New Scene** or press **Ctrl+N** in Unity to create a new blank scene.

Next, go to **GameObject > 3D Object > Plane** to create a floor for your set. When you do, Unity may not place it at `(0,0,0)` so take a look at the **Transform** component in the **Inspector** window and make sure the position values are all set to `0`. Also set its scale values to `10` to make sure it's big enough that we can't throw a ball past it.

With your floor plane object still selected, choose **Add Component** at the bottom of the **Inspector** window and add the **TeleportObjectsOnContact** component. This will be used to make the balls reset to their original position so you can throw them again.

Now go to **File > Save** or press **Ctrl+S** to save your scene.

Lastly, go to **Flipside Creator Tools > Create Set From Current Scene**. You should now have a scene that looks like this and is all set up for bundling and uploading.

![The most basic set](https://www.flipsidexr.com/files/docs/tutorials/the-most-basic-set-throwing-game.png)

For fun, I also like to change the sky of the set. Click on the root object of the set and on the **SetInfo** component in the **Inspector** window, set the **Sky ID** to `3`. This will load a slightly cartoony night sky when you press play or load the set in Flipside Studio.

## Setting up the scoring system

Next up, we're going to right-click the **Contents** object in the scene **Hierarchy** and choose **Create Empty** to add an empty child object that we'll use to contain our scoring system.

Edit your newly-created object and rename it to something like **Scorekeeper**, so it's easier to keep track of where your key components are found.

With your **Scorekeeper** component still selected, click on **Add Component** in the **Inspector** window and add the **ScoreboardElement** component.

Scroll down in the **Inspector** window and click **Add Component** again then add a **PooledAudioElement** component here as well. We'll use this for triggering audio effects when the balls hit the targets and when a user wins, which we'll connect right away.

On the **ScoreboardElement**, click on the **+** icon under the **OnWin** event, then drag the **PooledAudioElement** into the newly-created empty slot. Select **PooledAudioElement > PlayOneShot (AudioClip)** from the dropdown labelled **No Function**.

Lastly, click on the icon next to the box labelled **None (Audio Clip)** and choose the audio clip named **Jingle_Win_01**, which is a free sound effect from the [Sci-Fi Sfx](https://assetstore.unity.com/packages/audio/sound-fx/sci-fi-sfx-32830) package. Here's how it should look when it's set up correctly:

![Scoreboard win audio](https://www.flipsidexr.com/files/docs/tutorials/scoreboard-win-audio.png)

## Setting up a target

Next, we're going to set up a target. This target won't move or do anything fancy, but you could use the Unity animation system to make it move around for bonus points and to make the game more challenging for players.

Right-click **Contents** again in the scene **Hierarchy** and choose **3D Object > Cube** then adjust its settings like so:

![TargetElement settings](https://www.flipsidexr.com/files/docs/tutorials/target-element-settings.png)

Now click on the **Add Component** button in the **Inspector** and add a **TargetElement** component.

Under the **OnHit** event, click the **+** icon to add an empty slot, then drag your **Scorekeeper** component into the newly-created slot.

Choose **PooledAudioElement > PlayOneShot (AudioClip)** from the **No Function** dropdown.

Lastly, click on the icon next to the box labelled **None (Audio Clip)** and choose the clip named **JustGore_AddOn_Splatter_070**, which is a free sound effect from the [SoundBits Free Sound FX](https://assetstore.unity.com/packages/audio/sound-fx/free-sound-fx-31837) package.

## Creating a throwable prop

Right-click **Contents** in the scene **Hierarchy** and choose **3D Object > Sphere**. Set the sphere's settings like so:

![Ball settings](https://www.flipsidexr.com/files/docs/tutorials/ball-settings.png)

Next, add **PropElement**, **ThrowableElement**, and **TeleportObjectTo** components to your ball object through the **Inspector** window.

To set up the **ThrowableElement**, for now just uncheck the checkbox labelled **Destroy On Contact**.

To set up the **TeleportObjectTo**, right-click **Contents** in the **Hierarchy** and choose **Create Empty**, then rename it **Ball 1 Teleport Position** and copy the **Transform** settings from the ball to the newly-created empty object.

> Tip: You can copy settings from one component to another of the same type by clicking on the gear icon in the **Inspector** for that component and choosing **Copy Component**. Then on the component to be overwritten, do the same thing and choose **Paste Component Values**.

As a last step for setting up the **TeleportObjectTo** component, drag the **Ball 1 Teleport Position** object into its **Teleport Position** setting.

If you press play in the Unity editor, you should now see your ball fall from its initial position and keep getting teleported back, only to fall again and again. If you catch the ball and throw it at the target, the target should play a sound when it's hit.

## Gameplay improvements

Let's fix things up so the ball isn't so hard to catch, and also make it feel a little more like a game.

Right-click **Contents** again and add another cube to the scene. This will be a stand for the ball to sit on when it spawns. Set its **Transform** settings to the following:

![Ball stand](https://www.flipsidexr.com/files/docs/tutorials/ball-stand.png)

To make our game usable for multiple players, select the ball, its teleport position, and its stand in the **Hierarchy** window, right-click and choose **Duplicate**.

From there, just change the **X** position from **-0.5** to **0.5** so it appears one meter away from the original, like so:

![Cloned ball setup](https://www.flipsidexr.com/files/docs/tutorials/cloned-ball-setup.png)

Lastly, lets make the scores visible to users as they're playing.

Right-click **Contents** again and choose **3D Object > Text - TextMeshPro**. Select your scorekeeper object, then drag your new text object into the **Display Scores On** setting. There are ways of building custom score displays using the various event triggers on **ScoreboardElement**, but this gives an easy way to quickly get a visible scoreboard on set.

As a last step, select the newly-created text object, change its **Font Size** setting to **8**, and adjust its **Transform** settings like so:

![Scoreboard text settings](https://www.flipsidexr.com/files/docs/tutorials/scoreboard-text-settings.png)

> Note: If you don't have TextMeshPro installed, you can find it under **Window > Package Manager**.

You should now have a working game when you press play in the Unity editor, and which is ready to bundle and load up in Flipside Studio.

## Next steps

As you can see, the scoring system is fairly straightforward to setup and makes a lot of the connections automatic, including multiplayer and detecting which player made a throw for scorekeeping. And this just scratches the surface of what's possible to build, including cooperative games such as escape rooms, shooting games, and more.

For a more complete example look at the **Example-ScoringSystem** scene in the `Assets/FlipsideCreatorTools/Examples` folder.

Other ideas for making a more interesting mini game:

* Add a way to call **ScoreboardElement.ResetScores()** to play again without reloading the set
* Adding an animation to the target so players have to hit a moving target
* Adding more targets with shapes, positions, and point values
* Customizing the look and feel of the scene by adding custom materials and lighting
* Adjusting the physics properties of the balls to make them easier or harder to throw
* Using a [[Creator Tools / References / Custom components / TriggerEvery]] component to increase the difficulty over time
* Using a [[Creator Tools / References / Custom components / TriggerOnce]] component to add a time limit to games
* Changing the targets over time using a [timeline](https://learn.unity.com/tutorial/timeline#5c7f8528edbc2a002053b4e6)

These are just a few suggestions, but we hope that gives you a better understanding of how to start building your own mini games using the Flipside Creator Tools, and we look forward to seeing what you come up with from here!

---

Next: [[:Triggering Flipside actions]]
