:omit-from-search

# Recording

Flipside Studio is built around the concept of recording and playback of a number of elements simultaneously. Together, these can be used to tell stories, craft shows, and capture content.

## What Flipside Studio records

Recording in Flipside Studio can refer to either motion capture or video.

For video capture, Flipside Studio integrates with several third party tools including [OBS](https://obsproject.com), [NDI](https://ndi.tv/), and [DirectShow](https://docs.microsoft.com/en-us/windows/win32/directshow/introduction-to-directshow).

For motion capture, Flipside Studio combines motion capture data with several other elements into its own custom file format. The data recorded in a Flipside Studio recording includes:

* Motion capture data for up to 5 actors at the same time
* Microphone audio for up to 5 actors
* Lip sync and facial expression data for up to 5 actors
* Interactions with props in the set
* Playback of interactive set elements, such as slideshows, drawings, guns firing, and other effects
* Unity audio, animations, and timelines built into the set

## Upscaling motion capture data

Flipside Studio will record motion capture data for the points that it has available, and will animate the missing data points for a character using real-time inverse kinematics.

Flipside Studio can animate a wide variety of characters with widely varying proportions using as few as 3 data points (head + hands) captured via the VR hardware's positional tracking, or up to 6 data points using HTC Vive Trackers.

The configuration options include:

* Headset plus controllers controls the head and hands
* Headset plus controllers plus 1 Vive Tracker controls the head, hands, and waist
* Headset plus controllers plus 2 Vive Tracker controls the head, hands, and feet
* Headset plus controllers plus 3 Vive Tracker controls the head, hands, waist, and feet

Additionally, Flipside Studio records lip sync data that it derives from analyzing the microphone input for each actor, as well as basic facial expressions. This adds a new level of detail on top of what is traditionally recorded in a motion capture session.

## Recording multiple users

Flipside Studio can record scenes with up to 5 users simultaneously, and extra parts can be added after the fact as well by overdubbing roles over existing motion capture recordings.

The real benefit of Flipside Studio comes as a result of recording motion capture while the actors are immersed in the virtual sets. This lets actors see themselves and each other at the correct scale of their characters.

This benefit means better alignment between the actor's movement and the character's movement, which requires substantially less cleanup. For example, an actor playing a much shorter character will automatically take more steps to walk between two points, and they will naturally look up to meet the gaze of taller characters who may not be any taller than them in real life.

In order to benefit from this, the actors do need to be immersed in the virtual scene, since simply adding face tracking on its own still doesn't solve the problem of character scale differences, because actors need to know where to look, and for the steps they take to match the steps their character would take.

Flipside Studio does all of this and more for you automatically.

### Keeping users in sync

Flipside Studio sends periodic ping messages between users in a multiplayer session, which enables it to keep track of the average network latency between them. It then uses that information to keep recorded parts in sync and to minimize the perceived latency between them.

### Data exports

Flipside Studio offers several data export options, including:

* [[Studio / References / Desktop interface / Exports / Motion capture]]
* [[Studio / References / Desktop interface / Exports / Video renderer]]
* [[Studio / References / Desktop interface / Exports / Audio data]]

---

Next: [[: Cameras]]
