# Creating interactions with props and event triggers

The Creator Tools enable you to add interactions to your sets using a handful of simple components. Available components include:

* [PropElement](#propelement)
* [CameraElement](#cameraelement)
* [ColliderElement](#colliderelement)
* [ToggleElement](#toggleelement)
* [ScreenElement](#screenelement)
* [FollowElement](#followelement)
* [PhysicsEstimator](#physicsestimator)
* [TeleportObjectTo](#teleportobjectto)
* [TeleportObjectsOnContact](#teleportobjectsoncontact)
* [TriggerCounter](#triggercounter)
* [TriggerEvery](#triggerevery)
* [TriggerOnce](#triggeronce)
* [PooledAudioElement](#pooledaudioelement)
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

### CameraElement

Attaching a Camera Element to any Camera object in your scene lets you trigger Unity events on the following interactions:

* **OnCameraActivated** - Do something when the camera is activated in the Flipside camera switcher.
* **OnCameraDeactivated** - Do something when the camera is deactivated in the Flipside camera switcher.

![CameraElement component](https://www.flipsidexr.com/files/docs/screenshots/camera-events.png)

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

Tip: To change the object's position relative to the hand, assign FollowElement to a parent game object and adjust the position of the model on the child object.

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

### TriggerEvery

Triggers an event at the specified interval as long as the component is enabled. The interval, set via the **Trigger On** property, can be one of:

* Frame - Trigger every frame
* Seconds - Trigger at the specified **Seconds** interval
* SecondsRealtime - Trigger at the specified **Seconds** interval using unscaled time

To start or stop the execution, simply enable or disable the component. To listen for events, attach handlers to the **OnTrigger** event.

### TriggerOnce

Triggers an event only when the **Trigger Enabled** property is set to true. To listen for events, attach handlers to the **OnTriggered** event.

To re-enable the trigger, attach the **EnableTrigger()** method to any event in the scene. To disable the trigger, attach the **DisableTrigger()** method to any event in the scene. Note that it disables the trigger automatically when the **OnTriggered** event is fired.

### PooledAudioElement

Positions an audio playback location on set that, when triggered, uses Flipside's AudioSource pool so you can use a larger number of audio sources without hitting Unity's limits.

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

### CustomTag

Lets you specify a custom tag to limit ColliderElement interactions to specific types of objects only. Tag values can be anything you choose. To use, attach this component to an object and assign it a custom tag of your choosing in the Inspector window, then set the **Custom Tag** option in ColliderElement and ToggleElement components to match.

---

Next: [[:Building interactions with a scoring system]]
