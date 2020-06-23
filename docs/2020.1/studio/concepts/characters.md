# Characters

Characters in Flipside Studio are animated via a combination of motion capture, automatic lip sync detection, and puppeteering. By rendering characters in real-time directly in the virtual set (coupled with our camera controls), Flipside Studio makes it possible not just to record, but to live stream complete animated shows. This means that, for the first time, animated characters can engage with their audiences.

## Embodying a character

After selecting a character, an actor will begin to embody that character on the virtual set. As they move, the character will match their movement, however, the movements are not completely 1:1 because the proportions of the character are rarely the same as the proportions of the actor. Adjusting for this is called retargeting.

Flipside Studio is also able to animate the full body with far less data points than a traditional motion capture system. In fact, we're able to animate the full body of a character with just the head and hand positions taken from the VR headset and controllers. We do this using real-time inverse kinematics (IK).

Even a highly-tuned IK system like Flipside Studio has its limitations, because the human body can bend and twist in many ways that you can't tell from 3 data points, or even twice that amount. To work around this, actors need a virtual reference to themselves.

In Flipside Studio, actors see a ghost-like outline of their body that aims to avoid getting in their way while still giving them a reference to their virtual body. The outline helps prevent more varied characters from obstructing the actor's view of the virtual set, for example, the trunk of an elephant character can easily cover most of an actor's field of view.

## Faces

Faces are animated using three different systems in Flipside Studio:

* Real-time lip syncing
* Realistic eye movement
* Facial expression controls

Our real-time lip syncing analyzes the actor's voice as they speak and determines which lip sync position (called visemes) it should use to represent the current syllable being spoken. This then animates the mouth of the character for them automatically, and can be used to animate just about anything on a character, not just mouth movement.

Our realistic eye movement system emulates the behaviours of a human eye, including locking onto points of interest (called eye targets) while in their field of view, looking around at randomized points of interest while idle, and blinking at a natural rate. This system can work for characters with any number of eyes.

Our facial expression controls are tied to the left-hand controller joystick and let actors blend between their default neutral expression and four additional facial expressions.

We usually recommend mapping these as follows, however, they can also be mapped to anything to achieve different effects.

* Up is happy
* Down is sad
* Left/back is surprised
* Right/forward is angry

Each of these elements can be combined in any combination to control a wide variety of character types, from cartoon animals to futuristic scifi robots and anything in between.

---

Next: [[: Props and sets]]