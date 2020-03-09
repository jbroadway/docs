# Creating interactions with props and event triggers

The Creator Tools enable you to add interactions to your sets using a handful of simple components. Available components include:

* [PropElement](#propelement)
* [CameraElement](#cameraelement)
* [ColliderElement](#colliderelement)
* [ToggleElement](#toggleelement)
* [ScreenElement](#screenelement)
* [FollowElement](#followelement)
* [GroupChoiceElement](#groupchoiceelement)
* [PhysicsEstimator](#physicsestimator)
* [TeleportObjectTo](#teleportobjectto)
* [TeleportObjectsOnContact](#teleportobjectsoncontact)
* [TriggerCounter](#triggercounter)
* [TriggerEvery](#triggerevery)
* [TriggerOnce](#triggeronce)
* [TwitchActions](#twitchactions)
* [PooledAudioElement](#pooledaudioelement)
* [ObjectPoolElement](#objectpoolelement)
* [CustomTag](#customtag)
* [FlipsideActions](/docs/1.0/creator-tools/triggering-flipside-actions)

Note: See [[:building interactions with a scoring system]] for additional scoring-related components.

### PropElement

Attach a PropElement component to any object to make it act like a prop that you can pick up.

PropElement has the following properties to control its behaviour:

* **Gravity** (On/Off) - Control whether the object has gravity applied to it or whether it should float in the air.

PropElement has the following Unity event triggers:

* **OnBeginInteraction** - The user picked up the object.
* **OnUseButtonDown** - The user pressed the trigger button while holding the object.
* **OnUseButtonUp** - The user released the trigger button while holding the object.
* **OnEndInteraction** - The user let go of the object.

![PropElement component](https://www.flipsidexr.com/files/docs/screenshots/prop-elements.png)

You'll also notice that when you add a **Prop Element** component, a **Nav Mesh Modifier** is also
added for you automatically with its **Ignore From Build** setting checked. This ensures that props
don't cause issues with your teleport area.

> Note: Props brought in as part of a set behave a little differently than props imported on their own.
> They don't appear in the Set Builder palette, but rather where you placed them in the set itself,
> however you _can_ move them around in the Set Builder within Flipside Studio and it will remember their
> new location, as well as in saved setups. But you can't remove them from the set, or add more instances
> of them like you can with imported props. This may change in a future update.

### CameraElement

Unity cameras and Cinemachine virtual cameras will automatically be converted to camera positions in the
Flipside Studio camera switcher, making them a powerful way to setup custom shots or camera movements.

To preview your camera positions, press play in Unity then press the number keys (1, 2, 3, etc.) to switch
between camera positions. Press 0 to switch back to mirroring what you're seeing in VR.

Attaching a CameraElement to any Camera object in your scene lets you trigger Unity events on the following
interactions:

* **OnCameraActivated** - Do something when the camera is activated in the Flipside camera switcher.
* **OnCameraDeactivated** - Do something when the camera is deactivated in the Flipside camera switcher.

![CameraElement component](https://www.flipsidexr.com/files/docs/screenshots/camera-events.png)

These events let you do things like start a timed animation sequence as your show opening whenever you cut
to the associated camera position.

### ColliderElement

Attaching a ColliderElement to any Collider (Box Collider, Sphere Collider, etc.) in your scene lets you trigger Unity events
on the following interactions:

* **OnEnter** - Do something when an object enters the collider's volume.
* **OnExit** - Do something when an object exits the collider's volume.

You can also limit whether the events on a ColliderElement should trigger for **Everything**, only a user's **Hands**,
only a user's **Index Finger**, a specific **Object List**, or only objects with a **Custom Tag** (see [CustomTag](#customtag) below), to create larger or more fine-grained interactions.

![ColliderElement component](https://www.flipsidexr.com/files/docs/screenshots/collider-element.png)

### ToggleElement

Attaching a ToggleElement instead of a ColliderElement works the same way but keeps track of its on/off state so you can do things like turn a light on/off with repeated button presses.

ToggleElement has the following properties to control its behaviour:

* **InitiaState** (On/Off) - Control whether it should start in an Off (default) or On state.

In addition to the OnEnter/OnExit events that it inherits from ColliderElement, ToggleElement adds the following additional Unity event triggers:

* **OnActivated** - Do something when the element enters its On state.
* **OnDeactivated** - Do something when the element enters its Off state.

All other options are identical to ColliderElement.

### ScreenElement

Attaching a ScreenElement to any object will cause Flipside to replace that object's material with the material you select from the list. Available options include:

* **Slideshow** - Mirror the slideshow output.
* **Main output** - Mirror the main Flipside camera output.
* **Desktop** - Mirror the output of one of your desktop monitors.

![ScreenElement component](https://www.flipsidexr.com/files/docs/screenshots/screen-element.png)

### FollowElement

Causes an object to follow the movement of another object, such as the user's hands. Can follow the following types of objects:

* Left hand
* Right hand
* Head
* Custom object

Additional properties:

* **Scale With Target** - Should this object match the scale of the target object?
* **Smoothing** - Smoothing makes the follow element lerp over the specified number of steps.

![FollowElement component](https://www.flipsidexr.com/files/docs/screenshots/follow-element.png)

Tip: To change the object's position relative to the hand, assign FollowElement to a parent game object and adjust the position of the model on the child object.

### GroupChoiceElement

Group choices let you put something to a vote amongst the users present in the scene. This enables a choose-your-own-adventure style interaction where the group decides what happens next based on a predetermined set of choices.

The example scene `FlipsideCreatorTools/Examples/Example-GroupChoice` shows how a group choice can be set up. To add it to your sets, drag the `GroupChoiceElement` prefab from `FlipsideCreatorTools/Resources` and customize the options and associated events as needed.

![GroupChoiceElement component](https://www.flipsidexr.com/files/docs/screenshots/group-choice-element.png)

### PhysicsEstimator

Provides physics estimation when attached to an object, with the ability to trigger physics taking over for the object's movement and applying the correct velocity and angular velocity by calling the **ReleaseObject()** method.

Note: If the object's movement is controlled by an animation, disable the animator first before calling **ReleaseObject()**.

### TeleportObjectTo

Provides the ability to teleport an object to a specified position, set in the **Teleport Position** property. Teleports itself by default, but can optionally teleport a different object if one is specified in the **Object To Move** property.

Teleportation is triggered via the **Teleport()** method, which can be triggered by any event in the scene.

### TeleportObjectsOnContact

Calls **Teleport()** on any TeleportObjectTo object that comes into contact with it. Useful for things like resetting the position of fallen objects.

### TriggerCounter

Triggers an event after the **Count** counter value reaches its specified **Target Count** value. The counter is incremented whenever one of the **Increment()** or **Increment(by)** methods are called, which can be triggered by any event in the scene.

Additional methods **SetTargetCount(count)** and **ResetCounter()** enable the counter behaviour to be modified dynamically through set interactions. An example use case would be to connect **SetTargetCount(count)** to **ScoreboardElement**'s **OnInitializeP1-P5** events to change the count required based on how many users are present.

![TriggerCounter component](https://www.flipsidexr.com/files/docs/screenshots/trigger-counter.png)

### TriggerEvery

Triggers an event at the specified interval as long as the component is enabled. The interval, set via the **Trigger On** property, can be one of:

* Frame - Trigger every frame
* Seconds - Trigger at the specified **Seconds** interval
* SecondsRealtime - Trigger at the specified **Seconds** interval using unscaled time

To start or stop the execution, simply enable or disable the component. To listen for events, attach handlers to the **OnTrigger** event.

![TriggerEvery component](https://www.flipsidexr.com/files/docs/screenshots/trigger-every.png)

### TriggerOnce

Triggers an event only when the **Trigger Enabled** property is set to true. To listen for events, attach handlers to the **OnTriggered** event.

To re-enable the trigger, attach the **EnableTrigger()** method to any event in the scene. To disable the trigger, attach the **DisableTrigger()** method to any event in the scene. Note that it disables the trigger automatically when the **OnTriggered** event is fired.

![TriggerOnce component](https://www.flipsidexr.com/files/docs/screenshots/trigger-once.png)

### TwitchActions

TwitchActions is a component that lets you define custom commands that your viewers can type into the Twitch chat which are connected to events in your custom sets or on your custom characters (e.g., triggering a particle burst or sound effect). Commands always begin with an exclamation mark (e.g., `!command`).

The example scene `FlipsideCreatorTools/Examples/Example-TwitchActions` shows how they are set up. The `!vote` command ties into a **TriggerCounter** so that the command must be entered five times in order to trigger an event.

![TwitchActions component](https://www.flipsidexr.com/files/docs/screenshots/twitch-actions.png)

### PooledAudioElement

Positions an audio playback location on set that, when triggered, uses Flipside's AudioSource pool so you can use a larger number of audio sources without hitting Unity's limits.

![PooledAudioElement component](https://www.flipsidexr.com/files/docs/screenshots/pooled-audio-element.png)

Basic options:

* **Audio Clips** - A list of preset clips that can be played by calling **PlayOneShot(index)**.
* **Auto-Play Clip** - A clip from the list to auto-play. Default is -1, which means don't auto-play.
* **Loop** - Should playback loop? Default is false.
* **Volume** - The audio volume. Default is 1.
* **Override Audio Source** - An optional individual AudioSource to use instead of using a pooled source.

Spatialization options:

* **Spatialized** - Whether to spatialize the audio or not. Default is true.
* **Gain** - Gain to apply to the spatialized audio. Default is 0.
* **Near** - Near attenuation distance. Default is 0.25 meters.
* **Far** - Far attenuation distance. Default is 100 meters.
* **Volumetric Radius** - An optional volumetric radius. Default is 0.
* **Reverb Send Level** - An optional reverb send level. Default is 0.

PooledAudioElement supports most of the same methods as AudioSource, but adds a convenience methods for setting the volume so you can control it more easily via Unity's event system.

Available methods:

* **Play()** - Play the first audio clip in the list.
* **Play(index)** - Play the specified audio clip from the list.
* **Play(clip)** - Play a specific audio clip. Note: The clip does not have to be in the list.
* **PlayOneShot()** - Play the first audio clip in the list as a one-shot.
* **PlayOneShot(index)** - Play the specified audio clip from the list as a one-shot.
* **PlayOneShot(clip)** - Play a specified audio clip as a one-shot. Note: The clip does not have to be in the list.
* **Pause()** - Pause the audio source.
* **UnPause()** - Resume playing the audio source.
* **Stop()** - Stop the audio source.
* **SetVolume(volume)** - Set the volume of the audio source.
* **SubtractVolume(sub)** - Subtract the specified amount from the audio source volume.
* **AddVolume(add)** - Add the specified amount to the audio source volume.

### ObjectPoolElement

Provides an object pool you can use to improve performance when needing to instantiate many of the same object, such as a particle effect you reuse throughout a set.

To use it, add the ObjectPoolElement to a game object in your hierarchy, assign a prefab that should be instantiated, and then trigger it to instantiate a copy of your prefab by assigning `ObjectPoolElement.InstantiateAndEnableAt()` to any event in the scene. The method takes a Transform component to use as the position to place the instance of your prefab.

![ObjectPoolElement component](https://www.flipsidexr.com/files/docs/screenshots/object-pool-element.png)

### CustomTag

Lets you specify a custom tag to limit ColliderElement interactions to specific types of objects only. Tag values can be anything you choose. To use, attach this component to an object and assign it a custom tag of your choosing in the Inspector window, then set the **Custom Tag** option in ColliderElement and ToggleElement components to match.

---

Next: [[:Building interactions with a scoring system]]
